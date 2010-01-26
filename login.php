<?php
require('prepend.inc.php');
require('Login.class.php');
 
LoginForm::Run('LoginForm', __TEMPLATES__ . '/login.tpl.php');
 
?>