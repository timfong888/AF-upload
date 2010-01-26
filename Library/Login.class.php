<?php
// Class to login in allyforce website
// Template: login.tpl.php
class LoginForm extends QForm {
	protected $txtUsername;
	protected $txtPassword;
	protected $btnLogin;
	protected $chkRememberMe;
	protected function Form_Create() {
		$this->CheckLogin();
		$this->txtUsername = new QTextBox($this);
		$this->txtUsername->Name = QApplication::Translate('Username');
		$this->txtPassword = new QTextBox($this);
		$this->txtPassword->Name = QApplication::Translate('Password');
		$this->txtPassword->TextMode = QTextMode::Password;
		$this->chkRememberMe = new QCheckBox($this);
		$this->chkRememberMe->HtmlAfter = QApplication::Translate('Keep me signed in on this computer');
		$this->btnLogin = new QButton($this);
		$this->btnLogin->Text = QApplication::Translate('Login');
		$this->btnLogin->AddAction(new QClickEvent(), new QAjaxAction('btnLogin_Click'));
		$this->btnLogin->PrimaryButton = true;
	}
	/**
	 * Function to check for existing cookies and redirect the user directly to the dashboard
	 *
	 * @return boolean false in case of a non existing user or cookie
	 */
	protected function CheckLogin() {
		if (isset($_COOKIE[COOKIE_LOGIN_ID]) && isset($_COOKIE[COOKIE_LOGIN_PW]) && 
		    !empty($_COOKIE[COOKIE_LOGIN_ID]) && !empty($_COOKIE[COOKIE_LOGIN_PW])) {
			$objLogin = User::Load($_COOKIE[COOKIE_LOGIN_ID]);
			if ($objLogin) {
				if ($objLogin->Password != $_COOKIE[COOKIE_LOGIN_PW]) {
					return false;
				} else {
					$_SESSION['User'] = serialize($objLogin);
					QApplication::Redirect(__SUBDIRECTORY__ . '/home.php');
				}
			} else {
				return false;
			}
		}
	}
	protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {
		$objLogin = User::LoadByUsername($this->txtUsername->Text);
		if ($objLogin == null) {
			$this->txtPassword->Text = "";
			$this->txtPassword->Warning = QApplication::Translate("Unknown user or password");
			return;
		}
		if ($objLogin->Password != sha1($this->txtPassword->Text)) {			$this->txtPassword->Text = "";			$this->txtPassword->Warning = QApplication::Translate("Unknown user or password");
			return;
		}
		$_SESSION['User'] = serialize($objLogin);
	 if($this->chkRememberMe->Checked) {
	 	setcookie(COOKIE_LOGIN_ID,$objLogin->Id,time() + (60*60*24*30));
	 	setcookie(COOKIE_LOGIN_PW,$objLogin->Password,time() + (60*60*24*30));
	 }
	 
	 /* After login redirect to the original URL saved in session */
	 if (isset($_SESSION['return'])) {
	 	$return = $_SESSION['return'];
	 	/* Destroy original URL saved in session */
	 	unset($_SESSION['return']);
	 } else {
	 	$return = __SUBDIRECTORY__ . '/home.php';
	 }
	 QApplication::Redirect($return);
	}
}
?>