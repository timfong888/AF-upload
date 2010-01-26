<?php
require('protected.inc.php');
require('MessageRequest.class.php');

MessageRequestForm::Run('MessageRequestForm', __TEMPLATES__ . '/message_request2.tpl.php');

?>