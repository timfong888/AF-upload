<?
/////////////////////////////////////////////////////////////
//
//  Billing Circle Connect Functions
//  file: bc_library.php
//  last modified: 6/11/07
//  prerequisites: PHP 4.0.2+, CURL, SSL
//  version: 1.0
//    author: Jack Winston, FTW Innovations, Inc
//    url: http://www.billingcircle.com/
//  license: GPL
//	description: Class for backend integration with the Billing Circle recurring
//				 billing application.  Billing Circle is a web based application allowing
//				 easy management of customers and associated recurring billing types.
//				 As well as their front end application, Billing Circle allows for backend
//				 integration with their recurring billing engine allowing for reduced
//				 interaction with the front end.
//
//	Visit http://www.billingcircle.com/ for more information. Billing Circle is owned and operated
//	by FTW Innovations. http://www.ftwinnovations.com/
//  API Documentation: http://www.billingcircle.com/connect/docs/
//
/////////////////////////////////////////////////////////////

$showConfirm = false;
if ($_POST) {
    include("billingcircle.class.php");

	$bc = new BillingCircleClass("INSERT BILLING CIRCLE API URL HERE");
	//$bc->setParameter("testmode", "1");

	$clientID = createClient($bc);
	if ($clientID) {
		confirmClient($bc, $clientID);
		$scheduleID = createSchedule($bc, $clientID);
		if ($scheduleID) {
			confirmSchedule($bc, $clientID, $scheduleID);
		} else {
			deleteClient($bc, $clientID);
		}
	}

	if (!$_POST[errorMsg]) {
		$showConfirm = true;
		foreach($_POST AS $key => $val) {
			if ($key == "ccnumber") continue;
			$body .= "$key: $val\n";
		}
	}
}

function resetClass($bc) {
	$bc->reset();
	$bc->setParameter("companyid", "COMPANYID");
	$bc->setParameter("username", "USERNAME");
	$bc->setParameter("password", "PASSWORD");
}

function createClient($bc) {
	resetClass(&$bc);
    $bc->setParameter("method", "createclient");
	$bc->setParameter("c_merchantid", uniqid("BC"));
	$bc->setParameter("c_company", "$_POST[company]");
	$bc->setParameter("c_firstname", "$_POST[firstname]");
	$bc->setParameter("c_lastname", "$_POST[lastname]");
	$bc->setParameter("c_address", "$_POST[address1]");
	$bc->setParameter("c_address2", "$_POST[address2]");
	$bc->setParameter("c_city", "$_POST[city]");
    $bc->setParameter("c_state", "$_POST[state]");
	$bc->setParameter("c_zip", "$_POST[postalcode]");
	$bc->setParameter("c_country", "$_POST[country]");
	$bc->setParameter("c_phone", "$_POST[phone]");
	$bc->setParameter("c_fax", "$_POST[fax]");
	$bc->setParameter("c_email", "$_POST[email]");
	$bc->setParameter("c_password", "$_POST[password]");
	$bc->setParameter("c_sendemails", 1);
	$bc->setParameter("c_custom1", "$_POST[custom1]");
	$bc->setParameter("c_custom2", "$_POST[custom2]");
	$bc->setParameter("c_custom3", "$_POST[custom3]");
	$bc->setParameter("c_custom4", "$_POST[custom4]");
	$bc->setParameter("c_chargemethod", "cc");
	$bc->setParameter("c_ccname", "$_POST[ccname]");
	$bc->setParameter("c_ccnumber", "$_POST[ccnumber]");
	$bc->setParameter("c_ccexp", "$_POST[ccmonth]/$_POST[ccyear]");
	$bc->setParameter("c_ccv2", "$_POST[ccv2]");

    $result_code = $bc->process();    // 1 = accepted, 2 = failure
	$result_data = $bc->getResultData();    // on success, return data
	$result_subcode = $bc->getSubCode();    // on error, return reason subcode
	$result_text = $bc->getErrorText();    // on error, return reason text

	if ($result_code == 1) {
		return $result_data;
	} else {
		$_POST[errorMsg] .= "Error Creating Client: $result_text<br />";
	}
}

function confirmClient($bc, $clientID) {
	resetClass(&$bc);
    $bc->setParameter("method", "confirmclient");
	$bc->setParameter("c_clientid", "$clientID");
    $result_code = $bc->process();    // 1 = accepted, 2 = failure
	$result_data = $bc->getResultData();    // on success, return data
	$result_subcode = $bc->getSubCode();    // on error, return reason subcode
	$result_text = $bc->getErrorText();    // on error, return reason text

	if ($result_code == 1) {
		return $result_data;
	} else {
		$_POST[errorMsg] .= "Error Confirming Client: $result_text<br />";
	}
}

function deleteClient($bc, $clientID) {
	resetClass($bc);
    $bc->setParameter("method", "deleteclient");
	$bc->setParameter("c_clientid", "$clientID");
    $result_code = $bc->process();    // 1 = accepted, 2 = failure
	$result_data = $bc->getResultData();    // on success, return data
	$result_subcode = $bc->getSubCode();    // on error, return reason subcode
	$result_text = $bc->getErrorText();    // on error, return reason text

	if ($result_code == 1) {
		return $result_data;
	} else {
		$_POST[errorMsg] .= "Error Deleting Client: $result_text<br />";
	}
}


function createSchedule($bc, $clientID) {
	resetClass(&$bc);
	if (date("d") >= "29") {
		$startDate = date("Y-m-01", strtotime("next week"));	// 1st of next month
	} else {
		$startDate = date("Y-m-d");
	}
	$startDate = date("Y-m-d");
	$bc->setParameter("method", "createschedule");
	$bc->setParameter("c_clientID", $clientID);
	$bc->setParameter("s_startdate", $startDate);
	$bc->setParameter("s_recurringtype", "subscription");
	$bc->setParameter("s_title", substr("$_POST[scheduletitle]", 0, 100));
	$bc->setParameter("s_interval", "monthly");
	$bc->setParameter("s_amount", "$_POST[scheduleamount]");
	if ($_POST[authimmediately]) $bc->setParameter("s_authimmediately", 1);
	$result_code = $bc->process();    // 1 = accepted, 2 = failure
	$result_data = $bc->getResultData();    // on success, return data
	$result_subcode = $bc->getSubCode();    // on error, return reason subcode
	$result_text = $bc->getErrorText();    // on error, return reason text

	if ($result_code == 1) {
		return $result_data;
	} else {
		$_POST[errorMsg] .= "Error Creating Schedule: $result_text<br />";
	}
}

function confirmSchedule($bc, $clientID, $scheduleID) {
	resetClass(&$bc);
    $bc->setParameter("method", "confirmschedule");
	$bc->setParameter("c_clientid", $clientID);
	$bc->setParameter("s_scheduleid", $scheduleID);
    $result_code = $bc->process();    // 1 = accepted, 2 = failure
	$result_data = $bc->getResultData();    // on success, return data
	$result_subcode = $bc->getSubCode();    // on error, return reason subcode
	$result_text = $bc->getErrorText();    // on error, return reason text

	if ($result_code == 1) {
		return $result_data;
	} else {
		$_POST[errorMsg] .= "Error Confirming Schedule: $result_text<br />";
	}
}
?>
