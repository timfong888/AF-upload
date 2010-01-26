<?php

// Class to manage user information in My Profile Webpage

// Template: profile.tpl.php

class SignupForm extends QForm {

	protected $txtFirstName;	
	protected $txtLastName;
	protected $txtEmail;
	protected $txtPassword;
	protected $txtRetypePassword;
	protected $chkAgree;
	protected $intReferral;
	protected $objReferrral;
	protected $btnCreate;

	protected function Form_Create() {

		$this->intReferral = QApplication::QueryString('referral');
		$strFirstName = QApplication::QueryString('fname');
		$strEmail = QApplication::QueryString('email');

		$this->txtFirstName = new QTextBox($this);
		$this->txtFirstName->CssClass = "Signup_input";
		$this->txtFirstName->Required = true;
		$this->txtFirstName->Text = $strFirstName;
				
		$this->txtLastName = new QTextBox($this);
		$this->txtLastName->CssClass = "Signup_input";
		$this->txtLastName->Required = true;

		$this->txtEmail = new EmailTextBox($this);
		$this->txtEmail->CssClass = "Signup_input_1";
		$this->txtEmail->Text = $strEmail;

		$this->txtPassword = new QTextBox($this);
		$this->txtPassword->TextMode = QTextMode::Password;
		$this->txtPassword->CssClass = "Signup_input";
		$this->txtPassword->Required = true;

		$this->txtRetypePassword = new QTextBox($this);
		$this->txtRetypePassword->TextMode = QTextMode::Password;
		$this->txtRetypePassword->CssClass = "Signup_input";
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
		
		/* creating Target List */
		/*$this->dtgTargets = new QDataGrid($this);
		$this->dtgTargets->CellPadding = 5;
		$this->dtgTargets->CellSpacing = 5;
		$this->dtgTargets->UseAjax = true;
		$this->dtgTargets->AddColumn(new QDataGridColumn('Account Name','<center><a href="/account/<?= str_replace(" ","_",$_ITEM->Account->Name); ?>"><?= $_ITEM->Account->Name ?></a></center>','HtmlEntities=false',array('OrderByClause' => 				QQ::OrderBy(QQN::Target()->Account->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Target()->Account->Name,false))));
		$this->dtgTargets->GetColumn(0)->Width = '100px';
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
		/* end creating Target list */

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
	
	public function dtgTargets_Bind(){
			$this->dtgTargets->DataSource = Target::LoadArrayByUserId($this->objUser->Id,QQ::Clause($this->dtgTargets->OrderByClause));				
	}

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
		
		/* Make relationship between users*/

		$newUser->AssociateUserAsAllies($this->objReferrral);

		$this->objReferrral->AssociateUserAsAllies($newUser);


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
		QApplication::Redirect(__SUBDIRECTORY__ . '/signup2.php');

		return true;

	}
}

?>