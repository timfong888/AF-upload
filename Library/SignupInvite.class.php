<?php
class SignupInviteForm extends QForm{
	
	protected $objUser;
	protected $lblUserName;
	protected $dtgOffers;
	protected $dtgTargets;

	protected $txtCompany;
	protected $btnRequest;
	protected $wrtMessage;
	
	/*from Signup.class.php */
	protected $txtFirstName;	
	protected $txtLastName;
	protected $txtEmail;
	protected $txtPassword;
	protected $txtRetypePassword;
	protected $chkAgree;
	protected $intReferral;
	protected $objReferrral;
	protected $btnCreate;
	protected $manager;
	
	protected function Form_Create() {
		
		#checks for the value for manager
		$userName= QApplication::QueryString('username');
		$manager= QApplication::QueryString('manager');
		$userName= str_replace('_',' ',$userName);
		$this->objUser = User::QuerySingle(QQ::Equal(QQN::User()->UserDetail->CodeName,$userName));
		
		$name = $userName;
		
		$this->lblUserName = new QLabel($this);
		$this->lblUserName->Text = $name;
		
		$this->txtCompany = new QTextBox($this);
		$this->wrtMessage = new QWriteBox($this);
		$this->wrtMessage->Rows = 4;
		
		$this->btnRequest = new QButton($this);
		$this->btnRequest->Text = 'Request Contacts';
		$this->btnRequest->AddAction(new QClickEvent(),new QAjaxAction('btnClick'));
				
		$this->dtgOffers = new QDataGrid($this);
		$this->dtgOffers->UseAjax = true;
		$this->dtgOffers->CellPadding = 5;
		$this->dtgOffers->CellSpacing = 5;
		$this->dtgOffers->AddColumn(new QDataGridColumn('Account Name','<center><a href="/account/<?= str_replace(" ","_",$_ITEM->Account->Name); ?>"><?= $_ITEM->Account->Name ?></a></center>',  'HtmlEntities=false',array('OrderByClause' => 				QQ::OrderBy(QQN::Offer()->Account->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Offer()->Account->Name,false))));
		$this->dtgOffers->GetColumn(0)->Width = '200px';
		
		$this->dtgOffers->SortColumnIndex = 0;
			
		$objStyle = $this->dtgOffers->RowStyle;
		$objStyle->FontSize = 14;
		$objStyle->BackColor = 'a7e0fd';
		$objStyle = $this->dtgOffers->AlternateRowStyle;
		$objStyle->BackColor = '#eaeaea';
		$objStyle = $this->dtgOffers->HeaderRowStyle;
		$objStyle->ForeColor = 'white';
		$objStyle->BackColor = '#990066';		
		$objStyle = $this->dtgOffers->HeaderLinkStyle;
		$objStyle->ForeColor = 'white';

		$this->dtgOffers->SetDataBinder('dtgOffers_Bind', $this); 
		
		$this->dtgTargets = new QDataGrid($this);
		$this->dtgTargets->CellPadding = 5;
		$this->dtgTargets->CellSpacing = 5;
		$this->dtgTargets->UseAjax = true;
		$this->dtgTargets->AddColumn(new QDataGridColumn('Account Name','<center><a href="/account/<?= str_replace(" ","_",$_ITEM->Account->Name); ?>"><?= $_ITEM->Account->Name ?></a></center>','HtmlEntities=false',array('OrderByClause' => 				QQ::OrderBy(QQN::Target()->Account->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Target()->Account->Name,false))));
		$this->dtgTargets->GetColumn(0)->Width = '200px';
		$this->dtgTargets->SortColumnIndex = 0;
			
		$objStyle = $this->dtgTargets->RowStyle;
		$objStyle->FontSize = 14;
		$objStyle->BackColor = 'a7e0fd';
		$objStyle = $this->dtgTargets->AlternateRowStyle;
		$objStyle->BackColor = '#eaeaea';
		$objStyle = $this->dtgTargets->HeaderRowStyle;
		$objStyle->ForeColor = 'white';
		$objStyle->BackColor = '#990066';		
		$objStyle = $this->dtgTargets->HeaderLinkStyle;
		$objStyle->ForeColor = 'white';

		$this->dtgTargets->SetDataBinder('dtgTargets_Bind', $this); 
		
		/* from Signup.class.php */
		$this->intReferral = QApplication::QueryString('referral');
		$strFirstName = QApplication::QueryString('fname');
		$strEmail = QApplication::QueryString('email');
		
		$this->txtFirstName = new QTextBox($this);
		$this->txtFirstName->CssClass = "signup_input";
		$this->txtFirstName->Required = true;
		$this->txtFirstName->Text = $strFirstName;
				
		$this->txtLastName = new QTextBox($this);
		$this->txtLastName->CssClass = "signup_input";
		$this->txtLastName->Required = true;

		$this->txtEmail = new EmailTextBox($this);
		$this->txtEmail->CssClass = "signup_input";
		$this->txtEmail->Text = $strEmail;

		$this->txtPassword = new QTextBox($this);
		$this->txtPassword->TextMode = QTextMode::Password;
		$this->txtPassword->CssClass = "signup_input";
		$this->txtPassword->Required = true;

		$this->txtRetypePassword = new QTextBox($this);
		$this->txtRetypePassword->TextMode = QTextMode::Password;
		$this->txtRetypePassword->CssClass = "signup_input";
		$this->txtRetypePassword->Required = true;

		$this->chkAgree = new QCheckBox($this);
		$this->chkAgree->HtmlAfter = "<strong>" . QApplication::Translate('I understand and agree') . "</strong>";
		$this->chkAgree->CssClass = "Signup_check";
		$this->chkAgree->Required = true;

		$this->btnCreate = new QButton($this);
		$this->btnCreate->Text = QApplication::Translate('Create my account');
		$this->btnCreate->AddAction(new QClickEvent(), new QAjaxAction('btnCreate_Click'));
		$this->btnCreate->PrimaryButton = true;
		$this->btnCreate->CssClass = "Signup_submit";

		if(!$this->intReferral){

			QApplication::DisplayAlert(QApplication::Translate("Invalid access, you need get an invite from user at allyforce"));
			$this->btnCreate->Enabled = false;

		}

		$this->objReferrral = User::Load($this->intReferral);

		if(!$this->objReferrral){
			QApplication::DisplayAlert(QApplication::Translate("Invalid referral user"));
			$this->btnCreate->Enabled = false;

		}
			
	}
	
	public function dtgOffers_Bind(){
			$this->dtgOffers->DataSource = Offer::LoadArrayByUserOwnerId($this->objUser->Id,QQ::Clause($this->dtgOffers->OrderByClause));
						
	}
	
	public function dtgTargets_Bind(){
			$this->dtgTargets->DataSource = Target::LoadArrayByUserId($this->objUser->Id,QQ::Clause($this->dtgTargets->OrderByClause));				
	}
	
	public function radioRender(Offer $offer) {
		$ControlId = 'radio'.$offer->Id;
		$radio = $this->GetControl($ControlId);
		if(!$radio) {	
			$radio = new QRadioButton($this->dtgOffers,$ControlId);
			$radio->SetCustomAttribute('value',$offer->Account->Name); 
			$radio->ActionParameter =  $offer->Id;
			$actionArray = array (new QAjaxAction('checkClick'), new QJavaScriptAction("radioSelect('$ControlId');"));	
			$radio->AddActionArray(new QClickEvent(),$actionArray);	
		}
		return $radio->Render(false);
	}
	
	public function checkRender(Target $target) {
		$ControlId = 'check'.$target->AccountId;
		$check = $this->GetControl($ControlId);
		if(!$check) {	
			$check = new QCheckBox($this->dtgTargets,$ControlId);
			$check->SetCustomAttribute('value',$target->Account->Name); 
			$check->ActionParameter =  $target->AccountId;
			$actionArray = array (new QAjaxAction('radioClick'), new QJavaScriptAction("checkSelect('$ControlId');"));	
			$check->AddActionArray(new QClickEvent(),$actionArray);	
		}
		return $check->Render(false);
	}
	
	protected function checkClick($strFormId, $strControlId, $strParameter) {	
	}
	
	
	protected function radioClick($strFormId, $strControlId, $strParameter) {	
	}
	
	protected function btnClick($strFormId, $strControlId, $strParameter) {	
		
		if(!$this->txtEMail->Validate()) {
			$this->txtEMail->Text = "";
			$this->txtEMail->Warning = "Invalid email address";
		}
		else {	
			$FirstName = $this->txtFirstName->Text;
			$LastName = $this->txtLastName->Text;
			$Mail = $this->txtEMail->Text;
			$Mssg = $this->wrtMessage->Text;
			
			$arrCheckable =explode(' ',$_POST['Qform__FormCheckableControls']);
			$arrKeys = array_keys($_POST);
			$accounts = '';
			$checkedControls  = array_intersect($arrKeys,$arrCheckable);
			foreach ($checkedControls as $control) {
				$cntrl = $this->GetControl($control);
				if (stripos($cntrl->ControlId,'radio') === 0) $action = ' Get ';
				else $action = ' Offer ';
				$accName = $cntrl->GetCustomAttribute('value');
				$accounts .= $accName.',';				
			}
			
			$message = 'User '.$LastName.' '.$FirstName.'    Email: '.$Mail.'  Message: '.$Mssg.' want to '.$action.' Contacts: '.$accounts;
			
			echo $message;exit();
			$to = $this->objUser->Username;
			//mail($to,'Subject',$message);
		}	
	}
	
	/* from Signup.class.php*/
		protected function btnCreate_Click($strFormId, $strControlId, $strParameter) {

		$newUser = new User();

		if($this->txtEmail->Text == ''){
			$this->txtEmail->Text = "";
			$this->txtEmail->Warning = "You must provide an email";
			return false;

		} elseif(!$this->txtEmail->Validate())

		{
			$this->txtEmail->Text = "";
			return false;

		} else {

			$checkUser = User::LoadByUsername($this->txtEmail->Text);
			if($checkUser){
				$this->txtEmail->Warning = "This email isn't availiable";

				return false;
			}
		}

		if($this->txtPassword->Text != ''  and $this->txtPassword->Text != $this->txtRetypePassword->Text){
			$this->txtPassword->Warning = "Password and retype password are different";
			return false;

		}

		elseif ($this->txtPassword->Text != '') {
			$newUser->Password = sha1($this->txtPassword->Text);

		} else {

			$this->txtPassword->Warning = "You must provide a password";
			return false;

		}

		if(!($this->chkAgree->Checked)) {
			$this->chkAgree->Warning = "You neeed accept terms and contions";
			return false;

		}

		if($this->txtFirstName->Text == ''){
			$this->txtFirstName->Warning = "You must provide your full name";
			return false;

		}

		$objAccountAcme = Account::LoadByName('ACME');
		if($objAccountAcme)
			$newUser->AccountId = $objAccountAcme->Id;

		else {

			$objAccountAcme = new Account();
			$objAccountAcme->Name = 'ACME';
			$AccountId = $objAccountAcme->Save();
			$newUser->AccountId = $AccountId;

		}

		$newUser->FullName = $this->txtFirstName->Text.' '.$this->txtLastName->Text;

		$objUserCheck = User::LoadByUsername($this->txtEmail->Text);
		$newUser->Username = $this->txtEmail->Text;

		$UserDetail = new UserDetails();
		$UserDetailId = $UserDetail->Save();
		
		$newUser->UserDetailId = $UserDetailId;

		$newUser->Username = $this->txtEmail->Text;
		$newUser->Active = true;
		$newUser->Save();
		
		if($manager='y'){
			$newUser->ManagerId = $this->intReferral; //TF 3-24-09
			echo "manager = y";
		} else {
			//ManagerId will be assigned NULL value
			echo "manager = nothing";
			/* Make relationship between users*/
			/* but only if @manager != 'y' */
					
		};
		$newUser->AssociateUserAsAllies($this->objReferrral);
		$this->objReferrral->AssociateUserAsAllies($newUser);
		
		$newUser->Save();
		
		/* Asociate a fake offer and target */
		$objTarget = new Target();
		$objTarget->UserId = $newUser->Id;
		$objTarget->AccountId = $objAccountAcme->Id;
		$objTarget->Save();
 
		$objOffer = new Offer();
		$objOffer->UserOwnerId = $newUser->Id;
		$objAccountIgFarben = Account::LoadByName('IG Farben');
		if($objAccountIgFarben)
			$objOffer->AccountId = $objAccountIgFarben->Id;
		else {
			$objAccountIgFarben = new Account();
			$objAccountIgFarben->Name = 'IG Farben';
			$objOffer->AccountId = $objAccountIgFarben->Save();
		}
 
		$objOfferId = $objOffer->Save();
 
		/* add contact to fake offer*/
		$objContact = new Contact();
		//$objContact->UserOwnerId = $newUser->Id;
		$objContact->OfferId = $objOfferId;
		$objContact->Name = 'Thomas Pynchon';
		$objContact->Title = 'Director of IT';
		$objContact->Email = 'tom@igfarben.com';
		$objContact->Phone = '415-555-1212';
		$objContact->Save();
		/* End create fake offer and target*/
						
		$_SESSION['User'] = serialize($newUser);

		QApplication::DisplayAlert("Your Signup was completed sucessfully");
		
		# based on whether invite came from manager determine the next sequence
		# simplify this for now
		/*
		if($manager=='y') {
			QApplication::Redirect(__SUBDIRECTORY__ . '/signup2.php?');
		} else {
			QApplication::Redirect(__SUBDIRECTORY__ . '/allies.php');
		}*/
		QApplication::Redirect(__SUBDIRECTORY__ . '/allies.php');
		return true;

	}
	
	
}
?>