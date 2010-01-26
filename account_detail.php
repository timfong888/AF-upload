<?php
   require('protected.inc.php');
   require('OfferCP.class.php');
   require('account_detail.class.php');

   AccountDetailForm::Run('AccountDetailForm', __TEMPLATES__ . '/account_detail.tpl.php');
?>
