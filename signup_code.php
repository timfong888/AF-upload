<?php
require('prepend.inc.php');
require('SignupCode.class.php');

SignupCodeForm::Run('SignupCodeForm', __TEMPLATES__ . '/signup_code.tpl.php');

?>
