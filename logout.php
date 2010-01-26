<?php
require('prepend.inc.php');

class LogoutForm extends QForm {

 	protected function Form_Create() {
	
     	// Destroy Session	
	    session_destroy();
	
	    // Destroy Cookies
	    if (isset($_COOKIE[COOKIE_LOGIN_ID]) && !empty($_COOKIE[COOKIE_LOGIN_ID])) {
		    setcookie(COOKIE_LOGIN_ID, "", time() - 86400 );
		}
	    if (isset($_COOKIE[COOKIE_LOGIN_PW]) && !empty($_COOKIE[COOKIE_LOGIN_PW])) {
		    setcookie(COOKIE_LOGIN_PW, "", time() - 86400 );
		}
		
		// Redirect to main page
	    QApplication::Redirect(__SUBDIRECTORY__ . '/');
	}
}

LogoutForm::Run('LogoutForm', __TEMPLATES__ . '/logout.tpl.php');

?>
