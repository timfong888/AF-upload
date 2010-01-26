<?php

// Class to manage user information in My Profile Webpage

// Template: profile.tpl.php

class GiveReferralsForm extends QForm {

	protected $AllyOfferArray;
	protected $AllyTargetArray;
	protected $objAlly;
	protected $AllyAlliesArray;	
	protected $dtrAllyAllies;
	protected $objUser;
	protected $txtAccount;
	protected $btnGive;
	protected $GivenContactNumber;	
	protected $ReceivedContactNumber;
	protected function Form_Create() {
		
		if(isset($_SESSION['User']))

		$this->objUser = unserialize($_SESSION['User']);//get userId from user object registred in session

		$this->objAlly = User::Load(QApplication::QueryString('aid'));//get allyId from user oject which present Ally
		
		/*
		 * get message objects array from message table 
		 * where contact_id is not null and from_user = userId and to_user = allyId
		 */
		$givenArray = Message::QueryArray(
			QQ::AndCondition(
				QQ::IsNotNull(QQN::Message()->ContactId),
				QQ::Equal(QQN::Message()->FromUserId, $this->objUser->Id),
				QQ::Equal(QQN::Message()->ToUserId,$this->objAlly->Id)
			)
		);
		$tmpArray = array();//create temp array  and except the duplicated records	
		foreach ($givenArray as $msg) {	
			if(!in_array($msg->ContactId,$tmpArray)) $tmpArray[]=$msg->ContactId;
		}		
		$this->GivenContactNumber = count($tmpArray);//count records in array

		/*
		 * get message objects array from message table 
		 * where contact_id is not null and from_user = allyId and to_user = userId
		 */
		$receivedArray = Message::QueryArray(
		 	QQ::AndCondition(
				QQ::IsNotNull(QQN::Message()->ContactId),
				QQ::Equal(QQN::Message()->FromUserId, $this->objAlly->Id),
				QQ::Equal(QQN::Message()->ToUserId,$this->objUser->Id)
			)			
		);
		$tmpArray = array();//create temp array  and except the duplicated records			
		foreach ($receivedArray as $msg) {	
			if(!in_array($msg->ContactId,$tmpArray)) $tmpArray[]=$msg->ContactId;
		}		
		$this->ReceivedContactNumber = count($tmpArray);//count records in array
				
		$this->AllyOfferArray = Offer::LoadArrayByUserOwnerId($this->objAlly->Id,QQ::Clause(QQ::OrderBy(QQN::Offer()->Account->Name)));

		$this->AllyTargetArray = Target::LoadArrayByUserId($this->objAlly->Id,QQ::Clause(QQ::OrderBy(QQN::Target()->Account->Name)));

		/* Define control as autocomplete control */

		$this->txtAccount = new QAutoCompleteTextBox($this);

		// QAutoCompleteTextBoxEvent Action is needed for Ajax respond

		$this->txtAccount->UseAjax = true; 

		$this->txtAccount->AddAction(new QAutoCompleteTextBoxEvent(), new QAjaxAction('txtAccount_Change'));

		$objAccountArray = Account::LoadAll();

		if ($objAccountArray) {

			foreach ($objAccountArray as $objAccount) {

				$objListItem = new QListItem($objAccount->__toString(), $objAccount->Id);

				$this->txtAccount->AddItem($objListItem);
			}
		}
		
		$this->dtrAllyAllies = new QDataRepeater($this);
		$this->dtrAllyAllies->UseAjax = true;
        $this->dtrAllyAllies->Template =  __TEMPLATES__ .'/tbl_ally.tpl.php';
	
		$this->dtrAllyAllies->DataSource = $this->objAlly->GetUserAsAlliesArray();
		//$this->dtgAllyAllies->TotalItemCount = User::CountByUserAsAllies($this->objUser->Id);
		

		$this->btnGive = new QButton($this);
		$this->btnGive->Text = QApplication::Translate('Give');
		$this->btnGive->AddAction(new QClickEvent(), new QAjaxAction('btnGive_Click'));
		$this->btnGive->PrimaryButton = true;
		$this->btnGive->CssClass = 'give';		

	}

	protected function btnGive_Click($strFormId, $strControlId, $strParameter) {

		if ($this->txtAccount->Text) {

			/* Load account using it�s name */

			$objAccount = Account::LoadByName($this->txtAccount->Text);

		} else {

			$this->txtAccount->Warning = "You must provide an account name";
			return false;
		}

		/* add subdirectory to path below TF 6-22-08*/
		/*QApplication::Redirect('/message_send.php?aid=' . $this->objAlly->Id . '&type=2'&aname=' . $this->txtAccount->Text); */

		$url = __SUBDIRECTORY__ . '/insiderforce/insider_referralthread.php?aid=' . $this->objAlly->Id . '&type=2';

		$url .= $objAccount ? '&acid=' . $objAccount->Id : '&aname=' . $this->txtAccount->Text;

		QApplication::Redirect($url);

	}

	/* Implement server side metod to handle autocomplete */

	public function txtAccount_Change($strFormId, $strControlId, $strParameter){

		$objAccountArray = Account::QueryArray( QQ::Like(QQN::Account()->Name,$strParameter.'%'), QQ::Clause(QQ::OrderBy(QQN::Account()->Name)));

		foreach($objAccountArray as $objAccount){

			echo $objAccount->Name . "\n";

		}

		exit;
	}
}

?>