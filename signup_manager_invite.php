<?php
require('prepend.inc.php');
require('SignupInvite.class.php');

SignupInviteForm::Run('SignupInviteForm', __TEMPLATES__ . '/signup_manager_invite.tpl.php');


?>