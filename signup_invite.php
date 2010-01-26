<?php
require('prepend.inc.php');
require('SignupInvite.class.php');

$reseller= QApplication::QueryString('reseller');
$manager= QApplication::QueryString('manager');
switch($reseller) {
	
	case "Y":
		SignupInviteForm::Run('SignupInviteForm', __TEMPLATES__ . '/signup_invite3.tpl.php');
		break;
		
	default:
		/*  this is used as the domain link when a sales rep invites another sales rep when using
			the invite function from allies.php */
			
		SignupInviteForm::Run('SignupInviteForm', __TEMPLATES__ . '/signup_invite2.tpl.php');
		break;
}




?>



