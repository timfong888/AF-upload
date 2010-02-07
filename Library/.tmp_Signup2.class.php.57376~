<?php


class SignupContinue extends QForm {
	
	protected $lblFullName;
	protected $lblEmail;
	protected $txtCompany;
	protected $areaTerritory;	
	protected $areaPitch;
	protected $objUser;	
	protected $btnNext;	
	protected $pnlWaitIcon;	
	protected $UserDetails;
	
	protected function Form_Create() {
		
		$this->objUser = unserialize($_SESSION['User']);
		
		  $api = new IcApi("http://api.icontact.com/icp");
		  $api->setVersion("1.0");
		  $api->setKey("xKmv8x9A72RvAFI1tEcFkbDqMEBjQSne");
		  $api->setSecret("tzzsXySUrAgR6PIpjLUuMoLpTcyzVMDe");
		  $api->setLogin("timfong888");
		  $api->setPassword("4417348");
		  $api->setDebug(false);
		
		  $tmp=explode(' ',$this->objUser->FullName); 
		  $fname=$tmp[0];
		  $lname=$tmp[1];
		  
		  // Create a new contact and verify the contact
		 $new_contact = new IcResource_Contact();
		 $new_contact->newContact($this->objUser->Username,$fname,$lname);
		 $response = $api->put($new_contact);
		 $new_contact->setXml($response->getXml());  // Populate $new_contact with the response from the API
		 // $api->follow($new_contact,'contact',1);     // Follow the link to the new contact to verify it
		  
		  // Subscribes the new contact to a list
		 $new_contact->newSubscription(29379,'subscribed');
		 $new_contact->putSubscription();
		 $response = $api->put($new_contact);  
						
		$this->lblFullName = new QLabel($this);		
		$this->lblFullName->Text=$this->objUser->FullName;
		
		$this->lblEmail = new QLabel($this);		
		$this->lblEmail->Text=$this->objUser->Username;
		
		
		$this->txtCompany = new QAutoCompleteTextBox($this);	
		$this->txtCompany->UseAjax=true;	
		$this->pnlWaitIcon = new QWaitIcon($this, 'loader');
		$this->txtCompany->AddAction(new QAutoCompleteTextBoxEvent(), new QAjaxAction('txtCompany_Change', $this->pnlWaitIcon));
		$this->txtCompany->Width="245";
		$this->txtCompany->CssClass = "Signup_input";		 
		$this->txtCompany->Required = true; 

		 
		$this->areaTerritory = new QTextBox($this,'areaTerr');	
		$this->areaTerritory->CssClass = "reg_input";		 
		$this->areaTerritory->TextMode="MultiLine";		
		$this->areaTerritory->Rows=2;		
		$this->areaTerritory->MaxLength=5;		 
		$this->areaTerritory->Height="60";		 
		$this->areaTerritory->Width="350";	
		$this->areaTerritory->Required = true;		 
		$this->areaTerritory->Text = 'Fortune 500 in Northern California';		 
		$this->areaTerritory->AddAction(new QFocusEvent(), new QJavaScriptAction("if(qcodo.getControl('areaTerr').value == 'Fortune 500 in Northern California' ) qcodo.getControl('areaTerr').value = '';"));
		$this->areaTerritory->AddAction(new QBlurEvent(), new QJavaScriptAction("if(qcodo.getControl('areaTerr').value == '' ) qcodo.getControl('areaTerr').value = 'Fortune 500 in Northern California';"));

		
		$this->areaPitch = new QTextBox($this,'areaPitch');	
		$this->areaPitch->CssClass = "reg_input";		 
		$this->areaPitch->TextMode="MultiLine";		
		$this->areaPitch->Rows=2;		
		$this->areaPitch->MaxLength=5;		 
		$this->areaPitch->Height="70";		 
		$this->areaPitch->Width="350";	
		$this->areaPitch->Required = true;		 
		$this->areaPitch->Text = 'We enable every salesperson to build an automated, personal referral network which helps them find more contacts and more deals faster and easier.';	 
		$this->areaPitch->AddAction(new QFocusEvent(), new QJavaScriptAction("if(qcodo.getControl('areaPitch').value == 'We enable every salesperson to build an automated, personal referral network which helps them find more contacts and more deals faster and easier.' ) qcodo.getControl('areaPitch').value = '';"));
		$this->areaPitch->AddAction(new QBlurEvent(), new QJavaScriptAction("if(qcodo.getControl('areaPitch').value == '' ) qcodo.getControl('areaPitch').value = 'We enable every salesperson to build an automated, personal referral network which helps them find more contacts and more deals faster and easier.';"));
		
		
		$this->btnNext = new QButton($this);
		$this->btnNext->Text = QApplication::Translate('Create my account');
		$this->btnNext->AddAction(new QClickEvent(), new QAjaxAction('btnNext_Click'));
		$this->btnNext->PrimaryButton = true;
		$this->btnNext->CssClass = "Signup_submit";

	}
	
	protected function btnNext_Click($strFormId, $strControlId, $strParameter) {
		
		$this->UserDetails = UserDetails::Load($this->objUser->UserDetailId);
		$this->UserDetails->Solutions = $this->areaPitch->Text;
		$this->UserDetails->Territory = $this->areaTerritory->Text;
		$this->UserDetails->Save(false,true);
		
		$objAccountCompany = Account::LoadByName($this->txtCompany->Text);
		if($objAccountCompany)
			$this->objUser->AccountId = $objAccountCompany->Id;
		else 
		{
			$objAccountCompany = new Account();
			$objAccountCompany->Name = $this->txtCompany->Text;
			$AccountId = $objAccountCompany->Save();
			$this->objUser->AccountId = $AccountId;
		}
		$this->objUser->Save(false,true);
		
		$_SESSION['User'] = serialize($this->objUser);
		
		/*QApplication::Redirect(__SUBDIRECTORY__ . '/signup3.php');*/
		QApplication::Redirect(__SUBDIRECTORY__ . '/signup3-addtargets.php');
		
		return true;
	}
	
	public function txtCompany_Change($strFormId, $strControlId, $strParameter){
		$objAccountArray = Account::QueryArray( QQ::Like(QQN::Account()->Name,$strParameter.'%'), QQ::Clause(QQ::OrderBy(QQN::Account()->Name)));
		foreach($objAccountArray as $objAccount){
			echo htmlentities($objAccount->Name) . "\n";
		}
		exit();
	}
	
}

?>