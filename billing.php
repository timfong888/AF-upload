<?php
require('protected.inc.php');
require('billing.class.php');

BillingForm::Run('BillingForm', __TEMPLATES__ . '/billing.tpl.php');

?>