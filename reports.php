<?php
require('protected.inc.php');
require('reports.class.php');

ReportsForm::Run('ReportsForm', __TEMPLATES__ . '/reports.tpl.php');

?>