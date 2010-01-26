<?php
require('prepend.inc.php');
require('Signup.class.php');

SignupForm::Run('SignupForm', __TEMPLATES__ . '/signup_new.tpl.php');

?>