<?php
require('prepend.inc.php');
require('Signup.class.php');

$switch = $_GET['switch']; 

switch ($switch) {
	case 'channel':
		$signup_file = 'custom/signup_channel.tpl.php';
		break;
		
	case 'vp':	
		$signup_file = 'signup_vp.tpl.php';
		break;
		
	case 'recruiter':
		$signup_file = 'custom/signup_recruiter.tpl.php';
		break;
		
	case 'sales2':
		$signup_file = 'custom/sales2.tpl.php';
		break;
		
	case 'salesvp':
		$signup_file = 'custom/salesvp.tpl.php';
		break;
		
	case 'blog':
		$signup_file = 'custom/signup_blog.tpl.php';
		break;
		
}

SignupForm::Run('SignupForm', __TEMPLATES__ . '/' . $signup_file);

?>