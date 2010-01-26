<?
///////////////////////////////////////////////////////////// 
// 
//  Billing Circle Class 
//  file: billingcircle.class.php 
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

/* 
// EXAMPLE USAGE 
include("billingcircle.class.php"); 

$bc = new BillingCircleClass("https://www.billingcircle.com/url_provided_by_billingcircle.php"); 
//$bc->setParameter("testmode", "1"); 
$bc->setParameter("companyid", "myaccount"); 
$bc->setParameter("username", "admin"); 
$bc->setParameter("password", "123456789"); 
$bc->setParameter("method", "createschedule");
$bc->setParameter("c_clientid", "213"); 
$bc->setParameter("s_startdate", "2004-02-04"); 
$bc->setParameter("s_recurringtype", "subscription"); 
$bc->setParameter("s_title", "Maxim Magazine"); 
$bc->setParameter("s_interval", "monthly"); 
$bc->setParameter("s_numofinterval", "48"); 
$bc->setParameter("s_amount", "9.99"); 
// etc
$result_code = $bc->process();    // 1 = accepted, 2 = failure
$result_data = $bc->getResultData();    // on success, return data
$result_subcode = $bc->getSubCode();    // on error, return reason subcode
$result_text = $bc->getErrorText();    // on error, return reason text
*/ 

class BillingCircleClass { 
    var $postURL;    // URL to post to 
	
	var $code;
	var $subCode;
	var $errorText;
	var $returnData;
     
    // Set default values.  Changes these with $ac->setParameter(string key, mixed value) 
    var $params = Array(); 
    var $results = Array(); 
     
    // Constructor: Defaults to authorizenet.  Also accepts planetpayment and quickcommerce 
    function BillingCircleClass($url) { 
        $this->postURL = $url;
    } 
     
    // setParemeter(string key, string value):  Used to set each name/value pair to be sent 
    function setParameter($key, $value) { 
        $this->params[$key] = $value; 
    } 
     
    // process(): Submit to Billing Circle 
    function process() { 
         
        $qString = ""; 
        while(list($key, $val) = each($this->params)) 
			$p[] = "$key=".urlencode($val)."";
        $qString = join("&", $p);

		/*
		$ch = curl_init(); 
        curl_setopt ($ch, CURLOPT_URL, $this->postURL); 
        curl_setopt ($ch, CURLOPT_HEADER, 0); 
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt ($ch, CURLOPT_POST, 1); 
        curl_setopt ($ch, CURLOPT_POSTFIELDS, $qString); 
        $result = curl_exec ($ch); 
        curl_close ($ch); 
		*/
		
		// If curl is not compiled into PHP this code below could be used in place of the above curl functions
		$resultArray = Array();
		$execString = "/usr/bin/curl -d \"$qString\" $this->postURL";
		exec( $execString, $returnArray ); //run curl with the data 

        $result = ""; 
		for ($i=0; $i < count($returnArray); $i++)
			$result .= $returnArray[$i];
		
        if (!$result) 
            return 0; 
        return $this->_processResult($result); 
    }
	
	// getCode(): Returns the code returned by Billing Circle Connect.  This value is also returned for the process() call
	function getCode() {
		return $this->code;
	}
	
	// getSubCode(): Returns the error subcode returned by Billing Circle Connect
	function getSubCode() {
		return $this->subCode;
	}
	
	// getErrorText(): Returns the error text returned by Billing Circle Connect
	function getErrorText() { 
        return $this->errorText; 
    } 
	
	// getResultData(): Returns the key returned by Billing Circle Connect 
    function getResultData() { 
        return $this->returnData; 
    } 
     
    // reset(): Call before beginning a new transaction 
    function reset() { 
        $this->results = Array(); 
        $this->params = Array(); 
		$this->code = "";
		$this->subCode = "";
		$this->errorText = "";
		$this->returnData = ""; 
    } 
     
     
    /////////////////////////////////////////////////////// 
    // Internal Functions 
    // 

    // _processResults(string $results): Internal Function.  Creates the results array 
    function _processResult($result) { 
         
        list($this->code, $this->subCode, $this->errorText, $this->returnData) = explode(",", $result); 
        return $this->code; 
    } 
} 
?>