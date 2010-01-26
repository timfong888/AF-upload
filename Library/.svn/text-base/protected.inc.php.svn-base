<?php
require('prepend.inc.php');
 $objLogin = null;
 /* If user not have credentials, then */
 if (!isset($_SESSION['User'])) {
 	/* Save original URL */
 	$_SESSION['return'] = QApplication::$RequestUri;
 	/* Redirect to the login form */
 	QApplication::Redirect( __SUBDIRECTORY__  . '/login.php');
 }
 $objLogin = unserialize($_SESSION['User']);
 // make sure no errors occured in translation and the session's User variable is a user object
 if (!($objLogin instanceof User)) {
 	/* Save original URL */
 	$_SESSION['return'] = QApplication::$RequestUri;
 	/* Redirect to the login form */
 	QApplication::Redirect(__SUBDIRECTORY__ . '/login.php');
 } 
?>