<?php
require('includes/prepend.inc.php');
require_once('AddAllyPopup.class.php');
require_once('AddAllySubmitPopup.class.php');
require_once('CompleteProfilePopup.class.php');
require_once('AccountRequestPopup.class.php');

class ProfileActivityForm extends QForm {
	
	protected $aid;
	//protected $lblAccountName;
	protected $dtgOffers;
	protected $dtgTargets;
	protected $objAllyUser;
	protected $objAllyAccount;
	protected $objAllyOffers;
	protected $objAllyTargets;
	protected $objAllyAllies;
	protected $objUserOffers;
	protected $objUserTargets;
	protected $arrAllyOffers;
	protected $arrAllyTargets;
	protected $objAllySend;
	protected $objAllyReceive;
	protected $addAllyPopup;
	protected $addAllyPopupSubmit;
	protected $btnAddAllyPopup;
	protected $completeProfilePopup;
	protected $btnCompleteProfilePopup;
	//protected $accountRequestPopup;
	//protected $btnAccountRequestPopup;

	
	
	protected function Form_PreRender() {
	    $this->aid = $_REQUEST["aid"];
	    $this->objAllyUser = User::LoadById($this->aid);
	    $this->objAllyAccount = Account::LoadById($this->objAllyUser->AccountId);	
	    $this->objAllyTargets =  Target::LoadArrayByUserId($this->aid);		
	    $this->objAllyOffers = Offer::LoadArrayByUserOwnerId($this->aid);	
	    $this->objAllyAllies = User::LoadArrayByUserAsAllies($this->aid);
	    $objUserUser = unserialize($_SESSION['User']);
	    $this->objUserOffers = Offer::LoadArrayByUserOwnerId($objUserUser->Id);
	    $this->objUserTargets = Target::LoadArrayByUserId($objUserUser->Id);
	    $this->objAllySend = Thread::LoadArrayBySenderUserId($this->aid);
	    $this->objAllyReceive = Thread::LoadArrayByReceiverUserId($this->aid);
	    
	    //var_dump ($this->objAllies[0]->FullName);	
	    //var_dump (Account::LoadById($this->objAllies[0]->AccountId)->Name);
	    //var_dump ($this->objAllies[0]->UserDetails->Account);
	}
	
	
	protected function Form_Create() {
		// Define the addAllyPopup
		$this->addAllyPopup = new AddAllyPopup('AddAllyPopup', $this);
		$this->addAllyPopup->Visible = false;
        $this->addAllyPopup->BackColor = 'white';
            
		$this->btnAddAllyPopup = new QButton($this);
		$this->btnAddAllyPopup->Text = 'Show AddAlly Popup';
		$this->btnAddAllyPopup->AddAction(new QClickEvent(), new QAjaxAction('btn_AddAllyPopup_Click'));
		
		// Define the completeProfilePopup
		$this->completeProfilePopup = new CompleteProfilePopup('AddAllyPopup', $this);
		$this->completeProfilePopup->Visible = false;
        $this->completeProfilePopup->BackColor = '#ffff';
        
		$this->btnCompleteProfilePopup = new QButton($this);
		$this->btnCompleteProfilePopup->Text = 'Show CompleteProfile Popup';
		$this->btnCompleteProfilePopup->AddAction(new QClickEvent(), new QAjaxAction('btn_CompleteProfilePopup_Click'));
		
		/*
		// Define the accountRequestPopup
		//var_dump($this->objControlArray);
		$this->accountRequestPopup = new AccountRequestPopup('AccountRequestPopup', $this);
		$this->accountRequestPopup->Visible = false;
        $this->accountRequestPopup->BackColor = '#ffff';
        
		$this->btnAccountRequestPopup = new QButton($this);
		$this->btnAccountRequestPopup->Text = 'Show Account Request Popup';
		$this->btnAccountRequestPopup->AddAction(new QClickEvent(), new QAjaxAction('btn_AccountRequestPopup_Click'));
		*/
		
		/*// Define the addAllyPopupSubmit
        $this->addAllyPopupSubmit = new AddAllySubmitPopup('AddAllyPopupSubmit', $this);
		$this->addAllyPopupSubmit->Visible = false;
        $this->addAllyPopupSubmit->BackColor = 'white';*/
            
            
	
	}
	
		protected function btn_AddAllyPopup_Click($strFormId, $strControlId, $strParameter) {
		
			$this->addAllyPopup->ShowDialogBox();
			
		}
		
		protected function btn_CompleteProfilePopup_Click($strFormId, $strControlId, $strParameter) {
		
			$this->completeProfilePopup->ShowDialogBox();
			
		}

		/*protected function btn_AccountRequestPopup_Click($strFormId, $strControlId, $strParameter) {
		
			$this->accountRequestPopup->ShowDialogBox();
			
		}*/
		
		
    protected function GetAllyOfferAccountIdForUserTargetAccountId($userTargetAccountId) {
        $allyOffersCount = count($this->objAllyOffers);
        $offerAccountId = null;
        $i = 0;
        while($i < $allyOffersCount && $offerAccountId == null) {
            if($this->objAllyOffers[$i]->AccountId == $userTargetAccountId) {
               $offerAccountId = $this->objAllyOffers[$i]->AccountId;
            }
            ++$i;
        }
        return $offerAccountId;
    }
	
	protected function GetAllyTargetAccountIdForUserOffertAccountId($userOfferAccountId) {
	    $allyTargetsCount = count($this->objAllyTargets);
        $targetAccountId = null;
        $i = 0;
        while($i < $allyTargetsCount && $targetAccountId == null) {
            if($this->objAllyTargets[$i]->AccountId == $userOfferAccountId) {
               $targetAccountId = $this->objAllyTargets[$i]->AccountId;
            }
            ++$i;
        }
        return $targetAccountId;
	
	}
	
	protected function Offers_Array($objUserTargets) {
	    $this->arrAllyOffers = array();
	    $userTargetsCount = count($this->objUserTargets);
	    $i = 0;
	    while($i < $userTargetsCount){
	        $allyOfferAccountId = $this->GetAllyOfferAccountIdForUserTargetAccountId($objUserTargets[$i]->AccountId);
	        if($allyOfferAccountId != null){
	            $this->arrAllyOffers[] = Account::LoadById($allyOfferAccountId);
	        }
	        ++$i;
		}
		return $this->arrAllyOffers;
	}
	
	protected function Targets_Array($objUserOffers) {
	    $this->arrAllyTargets = array();
	    $userOffersCount = count($this->objUserOffers);
	    $i = 0;
	    while($i < $userOffersCount){
	        $allyTargetAccountId = $this->GetAllyTargetAccountIdForUserOffertAccountId($objUserOffers[$i]->AccountId);
	        if( $allyTargetAccountId != null){
	            $this->arrAllyTargets[] = Account::LoadById($allyTargetAccountId);
	        }
	        ++$i;
		}
		return $this->arrAllyTargets;
	}
	
	//Create array of objects for activity feed, thet was added last 7 days
	protected function ArrayTargetsForActivityFeed($objTargetsArray) {
	    $arrayTargetForActivityFeed = array();
	    $intDays = -7;
        $nowTime = QDateTime::Now();
        $intDaysAgo = $nowTime->AddDays($intDays);
	    foreach($objTargetsArray as $target) {

	        if(new QDateTime($target->Datetimestamp) > $intDaysAgo) {
	            $arrayTargetForActivityFeed[] = $target;
	        }
	    }
	    return $arrayTargetForActivityFeed;
	}
	
	protected function ArrayOffersForActivityFeed($objOffersArray) {
	    $arrayOfferForActivityFeed = array();
	    $intDays = -7;
        $nowTime = QDateTime::Now();
        $intDaysAgo = $nowTime->AddDays($intDays);
	    foreach($objOffersArray as $offer) {
	        if(new QDateTime($offer->Timestamp) > $intDaysAgo) {
	            $arrayOfferForActivityFeed[] = $offer;
	        }
	    }
	    return $arrayOfferForActivityFeed;
	    
	}
		
	protected function ArrayThreadForActivityFeed($objSenderOrReceiver) {
	    $arraySenderOrReceiverForActivityFeed = array();
	    $intDays = -7;
        $nowTime = QDateTime::Now();
        $intDaysAgo = $nowTime->AddDays($intDays);
	    foreach($objSenderOrReceiver as $senderOrReceiver) {
	        if($senderOrReceiver->DateTime > $intDaysAgo) {
	            $arraySenderOrReceiverForActivityFeed[] = $senderOrReceiver;
	        }
	    }
	    return $arraySenderOrReceiverForActivityFeed;
	}
	
	//Get users name(who send or who resive contact) for activity feed
	protected function NameOfSenderForActivityFeedThread($objarraySenderForActivityFeed){

	        $userName = User::LoadById($objarraySenderForActivityFeed->ReceiverUserId);
	   
	    return $userName;
	}
	
	protected function NameOfResiverForActivityFeedThread($objarrayReceiverForActivityFeed){

	        $userName = User::LoadById($objarrayReceiverForActivityFeed->SenderUserId );

	    return $userName;
	}
	
	//Get accounts Name for activity feed
	protected function AccountNameForActivityFeed($objTargetOrOfferOrSenderOrReceiverArray){

	        $accountName = Account::LoadById($objTargetOrOfferOrSenderOrReceiverArray->AccountId);

	    return $accountName;
	}
	
    // AddAllayPopup buttonInvite. Redirect to method btnInvite_Click in AddAllayPopup.class.php
	public function addAllyPopup_btnInvite_Click($strFormId, $strControlId, $strParameter) {
	    $this->addAllyPopup->btnInvite_Click($strFormId, $strControlId, $strParameter);
	    
	}
    // AddAllayPopup button Close. Redirect to method btnClose_Click() in AddAllayPopup.class.php
	public function addAllyPopup_btnClose_Click() {
	    $this->addAllyPopup->btnClose_Click();
	   //$this->addAllyPopupSubmit->ShowDialogBox();‭
	}
	
	/*public function addAllySubmitPopup_btnInvite_Click($strFormId, $strControlId, $strParameter) {
	    $this->addAllyPopupSubmit->btnInvite_Click($strFormId, $strControlId, $strParameter);
	    
	}*/
	
	public function CompleteProfilePopup_btnCreate_Click($strFormId, $strControlId, $strParameter) {
	    $this->completeProfilePopup->btnCreate_Click($strFormId, $strControlId, $strParameter);
	    
	}
	
	/*public function AccountRequestPopup_btnClick_RemoveFromTargets($strFormId, $strControlId, $strParameter) {
	    $this->accountRequestPopup->btnClick_RemoveFromTargets($strFormId, $strControlId, $strParameter);
	    
	}
	
	public function AcccountRequestPopup_btnClick_Request($strFormId, $strControlId, $strParameter) {
	    $this->accountRequestPopup->btnClick_Request($strFormId, $strControlId, $strParameter);
	    
	}*/
	

 
}
?>
