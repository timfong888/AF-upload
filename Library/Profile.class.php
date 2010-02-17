<?php
// Class to manage user information in My Profile Webpage
// Template: profile.tpl.php

class ProfileForm extends QForm {
	protected $txtFullName;
	protected $txtCompany;
	protected $txtEmail;
	protected $txtTitle;
	protected $txtBackupEmail;
	protected $txtCodeName;
	protected $txtCompanyURL;
	protected $txtZipCode;
	protected $txtCompanyLogo;
	protected $txtSolutions;
	protected $txtTerritory;
	protected $txtNewPassword;
	protected $txtRetypePassword;
	protected $flaPicture;
	protected $lblMessage;

	protected $objUser;

	protected $btnSave;

	protected function Form_Create() {

		if(isset($_SESSION['User']))
		$this->objUser = unserialize($_SESSION['User']);
			
		$this->txtFullName = new QTextBox($this);
		$this->txtFullName->Text = $this->objUser->FullName;

		$this->txtCompany = new QTextBox($this);
		$this->txtCompany->Text = $this->objUser->AccountIdObject->Name;

		$this->txtTitle = new QTextBox($this);
		$this->txtTitle->Text = $this->objUser->UserDetail->Title;
		
		$this->txtEmail = new EmailTextBox($this);
		$this->txtEmail->Text = $this->objUser->Username;

		$this->txtBackupEmail = new EmailTextBox($this);
		$this->txtBackupEmail->Text = $this->objUser->UserDetail->BackupEmail;

		$this->txtCodeName = new QTextBox($this);
		$this->txtCodeName->Text = $this->objUser->UserDetail->CodeName;

		$this->txtCompanyURL = new QTextBox($this);
		$this->txtCompanyURL->Text = $this->objUser->AccountIdObject->Url;

		$this->txtZipCode = new QTextBox($this);
		$this->txtZipCode->Text = $this->objUser->UserDetail->ZipCode;

		$this->txtCompanyLogo = new QTextBox($this);
		$this->txtCompanyLogo->Text = $this->objUser->AccountIdObject->Logo;

		$this->txtSolutions = new QTextBox($this);
		$this->txtSolutions->Rows = 3;
		$this->txtSolutions->Columns = 30;
		$this->txtSolutions->TextMode = "MultiLine";
		$this->txtSolutions->Text = $this->objUser->UserDetail->Solutions;

		$this->txtTerritory = new QTextBox($this);
		$this->txtTerritory->Rows = 3;
		$this->txtTerritory->Columns = 30;
		$this->txtTerritory->TextMode = "MultiLine";
		$this->txtTerritory->Text = $this->objUser->UserDetail->Territory;

		$this->txtNewPassword = new QTextBox($this);
		$this->txtNewPassword->TextMode = QTextMode::Password;
		$this->txtRetypePassword = new QTextBox($this);
		$this->txtRetypePassword->TextMode = QTextMode::Password;

/*
		$this->flaPicture = new QFileAsset($this);
		$this->flaPicture->TemporaryUploadPath = __DOCROOT__ . __SUBDIRECTORY__. '/Pictures/Temporary';
		$this->flaPicture->FileAssetType = QFileAssetType::Image;
		$this->flaPicture->CssClass = 'file_asset';
		$this->flaPicture->imgFileIcon->CssClass = 'file_asset_icon';
		$this->flaPicture->ClickToView = true;
		if($this->objUser->UserDetail->Picture)
		$this->flaPicture->File = __DOCROOT__ . __SUBDIRECTORY__. '/Pictures/' . $this->objUser->UserDetail->Picture;
*/

		$this->btnSave = new QButton($this);

		$this->btnSave->Text = QApplication::Translate('Save Changes');
		$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
		$this->btnSave->PrimaryButton = true;

/* added this */		
		$this->lblMessage = new QLabel($this);
		$this->lblMessage->Display = false;
		$this->lblMessage->CssClass = "ProfileMessage";

	}
	protected function btnSave_Click($strFormId, $strControlId, $strParameter) {

		$this->lblMessage->Display = False;
		
		if(!$this->txtEmail->Validate())
		{
			$this->txtEmail->Text = "";
			return;
		}

		if(!$this->txtBackupEmail->Validate())
		{
			$this->txtBackupEmail->Text = "";
			return;
		}

		if($this->txtNewPassword->Text != ''  and $this->txtNewPassword->Text != $this->txtRetypePassword->Text){
			$this->txtNewPassword->Warning = "New passwod and retype password are different";
			return true;
		}
		elseif ($this->txtNewPassword->Text != '') {
			$this->objUser->Password = sha1($this->txtNewPassword->Text);
		}

		if($this->objUser->AccountIdObject->Name != $this->txtCompany->Text){
			$objAccount = Account::LoadByName($this->txtCompany->Text);
			if($objAccount)
			$this->objUser->AccountId = $objAccount->Id;
			else {
				$objAccount = new Account();
				$objAccount->Name = $this->txtCompany->Text;
				$objAccount->Logo = $this->txtCompanyLogo->Text;
				$objAccount->Url = $this->txtCompanyURL->Text;
				$AccountId = $objAccount->Save();
				$this->objUser->AccountId = $AccountId;
			}
		}

		$this->objUser->FullName = $this->txtFullName->Text;

		if($this->objUser->Username != $this->txtEmail->Text){
			$objUserCheck = User::LoadByUsername($this->txtEmail->Text);
			if($objUserCheck)
			$this->txtEmail->Warning = QApplication::Translate("This email is not available, plese choose another email");
			else
			$this->objUser->Username = $this->txtEmail->Text;
		}

		$this->objUser->UserDetail->BackupEmail = $this->txtBackupEmail->Text;
		$this->objUser->UserDetail->CodeName = $this->txtCodeName->Text;
		$this->objUser->UserDetail->Territory = $this->txtTerritory->Text;
		$this->objUser->UserDetail->Solutions = $this->txtSolutions->Text;

/*
		if($this->flaPicture->FileName)
		{
			if($this->flaPicture->FileName != $this->objUser->UserDetail->Picture and $this->objUser->UserDetail->Picture != "")
			unlink( __DOCROOT__ . __SUBDIRECTORY__. '/Pictures/' . $this->objUser->UserDetail->Picture);

			if($this->flaPicture->FileName != $this->objUser->UserDetail->Picture)
			{
				$this->objUser->UserDetail->Picture = $this->objUser->UserDetail->Id . "-" . $this->flaPicture->FileName;
				copy($this->flaPicture->File, __DOCROOT__ . __SUBDIRECTORY__. '/Pictures/' . $this->objUser->UserDetail->Id . "-" . $this->flaPicture->FileName);
				unlink($this->flaPicture->File);
			}
		}
		else if($this->flaPicture->FileName == "" and $this->flaPicture->FileName != $this->objUser->UserDetail->Picture)
		{
			unlink( __DOCROOT__ . __SUBDIRECTORY__. '/Pictures/' . $this->objUser->UserDetail->Picture);
			$this->objUser->UserDetail->Picture = "";
		}
*/

		$this->objUser->UserDetail->Save();
		$this->objUser->Save();
		$_SESSION['User'] = serialize($this->objUser);

		//QApplication::DisplayAlert("Your profile was updated sucessfully");
		$this->lblMessage->Text ="Profile Saved Dude!";
		$this->lblMessage->Display = True;

	}
}
?>