<?php
/**
 * Class for processing pop up window 
 * 'Cut and Paste large strings of Target Names' functionality
 */
require('prepend.inc.php');

class CompleteProfilePopup extends QDialogBox {
	public $txtLastName;	
	public $txtTitle;
	public $txtCity;
	public $txtTarget;
	public $txtOffer;
	public $btnCreate;
	public $btnClose;
	public $objUser;
	public $objUserDetails;
	public $objTarget;
	public $objOffer;
    public $objAccountOffer;
    public $objAccountTarget;
    public $strCloseCallback;
    public $strTemplate = 'Templates/complete_profile_popup.tpl.php';
		
	public function __construct($strCloseCallback, $objParentObject, $strControlId = null) {
	
	
	$this->objUser = unserialize($_SESSION['User']);
		parent::__construct($objParentObject, $strControlId);
		$this->strCloseCallback = $strCloseCallback;
		$this->objUserDetails = UserDetails::LoadById($this->objUser->UserDetailId);
	    $this->objTarget =  Target::LoadArrayByUserId($this->objUser->Id);		
	    $this->objOffer = Offer::LoadArrayByUserOwnerId($this->objUser->Id);
	
		
		$strLastName = QApplication::QueryString('iname');
		$strTitle = QApplication::QueryString('title');
		$strCity = QApplication::QueryString('city');
		$strTarget = QApplication::QueryString('target');
		$strOffer = QApplication::QueryString('offer');
		
		$this->txtLastName = new QTextBox($this);
		$this->txtLastName->CssClass = "textbox";
		$this->txtLastName->Required = true;
		$this->txtLastName->Text = $strLastName;
		$this->txtLastName->Text = $this->objUserDetails->LName;
		
		$this->txtTitle = new QTextBox($this);
		$this->txtTitle->CssClass = "textbox";
		$this->txtTitle->Required = true;
		$this->txtTitle->Text = $strTitle;
		$this->txtTitle->Text = $this->objUserDetails->Title;
		
		$this->txtCity = new QTextBox($this);
		$this->txtCity->CssClass = "textbox";
		$this->txtCity->Required = true;
		$this->txtCity->Text = $strCity;
		$this->txtCity->Text = $this->objUserDetails->City;
		
		$this->txtTarget = new QAutoCompleteTextBox($this);
		$this->txtTarget->CssClass = "textbox";
		$this->txtTarget->Required = true;
		$this->txtTarget->UseAjax= true;
		$this->txtTarget->Text = $strTarget;
		$this->txtTarget->AddAction(new QAutoCompleteTextBoxEvent(), new QAjaxAction('txtAccount_Change'));


		$this->txtOffer = new QAutoCompleteTextBox($this);
		$this->txtOffer->CssClass = "textbox";
		$this->txtOffer->Required = true;
		$this->txtOffer->UseAjax = true;
		$this->txtOffer->Text = $strOffer;
		$this->txtOffer->AddAction(new QAutoCompleteTextBoxEvent(), new QAjaxAction('txtAccount_Change'));		

		$this->btnCreate = new QButton($this);
		$this->btnCreate->Text = QApplication::Translate('Update Profile');
		$this->btnCreate->AddAction(new QClickEvent(), new QAjaxAction('CompleteProfilePopup_btnCreate_Click'));
		$this->btnCreate->PrimaryButton = true;
		$this->btnCreate->CssClass = "submit_btn";
		
		$this->btnClose = new QButton($this);
		$this->btnClose->Text = QApplication::Translate('Close');
		$this->btnClose->AddAction(new QClickEvent(), new QAjaxAction('completeProfilePopup_btnClose_Click'));
		$this->btnClose->CssClass = 'close_popup';
	}
	
    // Handles autocomplete
    public function txtAccount_Change($strFormId, $strControlId, $strParameter){
		$objAccountArray = Account::QueryArray( QQ::Like(QQN::Account()->Name,$strParameter.'%'), QQ::Clause(QQ::OrderBy(QQN::Account()->Name)));
		$result = array();
		foreach($objAccountArray as $objAccount){
			$result[] = $objAccount->Name;
		}
		return $result;

	}

	public function btnCreate_Click($strFormId, $strControlId, $strParameter) {

	    $this->objAccountOffer = Account::LoadByName($this->txtOffer->Text);	
	    $this->objAccountTarget = Account::LoadByName($this->txtTarget->Text);
	   
	    // Checked if all fields are entered
	    if($this->txtLastName->Text == '') {
	        $this->txtLastName->Warning = "You must provide your last name";
            return false;
	    }
	    
	     if($this->txtTitle->Text == '') {
	        $this->txtTitle->Warning = "You must provide your title";
            return false;
	    }
	    
	    if($this->txtCity->Text == '') {
	        $this->txtCity->Warning = "You must provide your city";
            return false;
	    }
	     
	    if($this->txtOffer->Text == '') {
	        $this->txtOffer->Warning = "You must provide your offer";
            return false;
	    }
	        
	    if($this->txtTarget->Text == '') {
	        $this->txtTarget->Warning = "You must provide your target";
            return false;
	    }
	   
        //Saving LName Title and City to DB
	    $this->objUserDetails->LName = $this->txtLastName->Text;	
	    $this->objUserDetails->Title = $this->txtTitle->Text;	
	    $this->objUserDetails->City = $this->txtCity->Text;      
		$this->objUserDetails->Save();
		
        //check to have such Account in UsetTarget and in DB
        $isTargetAccountExist = false;
		$isTargetExist = true;
		if($this->objAccountTarget){
		    $isTargetAccountExist = true;
		    foreach($this->objTarget as $targetsExist){
		        if($targetsExist->AccountId == $this->objAccountTarget->Id){
		            $isTargetExist = true;
		        }
		        $isTargetExist = false;
		    }
		}
				
        //check to have such Account in UsetOffer and in DB
        $isOfferAccountExist = false;
		$isOfferExist = true;
		if($this->objAccountOffer){
		    $isOfferAccountExist = true;
		    foreach($this->objOffer as $offersExist){
		        if($offersExist->AccountId == $this->objAccountTarget->Id){
		            $isOfferExist = true;
		        }
		        $isOfferExist = false;
		    }
		}
		
		if(!$isTargetAccountExist){
		    $newAcoount = new Account();
		    $newAcoount->Name = $this->txtTarget->Text;
		    $accountId = $newAcoount->Save();
            $this->SaveTargetToDB($accountId);
		}
		
		if(!$isOfferAccountExist){
		    $newAcoount = new Account();
		    $newAcoount->Name = $this->txtOffer->Text;
		    $accountId = $newAcoount->Save();
            $this->SaveOfferToDB($accountId);
		}
		
		//Save Offer to DB
		if(!$isOfferExist){
	        $this->SaveOfferToDB($this->objAccountOffer->Id);
		}
		//Save Target to DB
		if(!$isTargetExist){
		    $this->SaveTargetToDB($this->objAccountTarget->Id);
		}

		QApplication::DisplayAlert("Your Profile was completed sucessfully");

		return true;
	}
	
	public function btnClose_Click() {
	    $this->HideDialogBox();
	}
	
	private function SaveOfferToDB($accountId) {
        $newOffer = new Offer;
        $newOffer->UserOwnerId = $this->objUser->Id;
        $newOffer->AccountId = $accountId;
        $newOffer->Save();
	}
	
	private function SaveTargetToDB($accountId) {
        $newTarget = new Target;	
        $newTarget->UserId = $this->objUser->Id; 
        $newTarget->AccountId = $accountId;
        $newTarget->Save();
	}
}

