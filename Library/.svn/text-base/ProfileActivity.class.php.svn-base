<?
require('includes/prepend.inc.php');
require_once('AddAllyPopup.class.php');
require_once('AddAllySubmitPopup.class.php');
require_once('CompleteProfilePopup.class.php');
require_once('AccountRequestPopup.class.php');

class ProfileActivityForm extends QForm {
	
	protected $aid;
	protected $dtgOffers;
	protected $dtgTargets;
	protected $objUserUser;
	protected $objAllyUser;
	protected $objUserDetails;
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
	protected $addAllySubmitPopup;
	protected $btnAddAllyPopup;
	protected $completeProfilePopup;
	protected $btnCompleteProfilePopup;
	protected $accountRequestPopup;
	protected $btnAccountRequestPopup;
	protected $btnInviteAsAlly;
	protected $arrAllyOffersButtons;
	
	protected function Form_PreRender() {
	    $this->aid = $_REQUEST["aid"];
	    $this->objAllyUser = User::LoadById($this->aid);
	    $this->objAllyAccount = Account::LoadById($this->objAllyUser->AccountId);	
	    $this->objAllyTargets = Target::LoadArrayByUserId($this->aid);		
	    $this->objAllyOffers = Offer::LoadArrayByUserOwnerId($this->aid);	
	    $this->objAllyAllies = User::LoadArrayByUserAsAllies($this->aid);
	    $this->objUserUser = unserialize($_SESSION['User']);
	    $this->objUserDetails = UserDetails::LoadById($this->objUserUser->UserDetailId);
	    $this->objUserOffers = Offer::LoadArrayByUserOwnerId($this->objUserUser->Id);
	    $this->objUserTargets = Target::LoadArrayByUserId($this->objUserUser->Id);
	    $this->objAllySend = Thread::LoadArrayBySenderUserId($this->aid);
	    $this->objAllyReceive = Thread::LoadArrayByReceiverUserId($this->aid);
	    
	     /*hand data for popup*/
		    $this->accountRequestPopup->allyId = $this->objAllyUser->Id;
		    $this->accountRequestPopup->userId = $this->objUserUser->Id;
	    
	    /*Create arry of Offers Linkbutton*/
	    $this->arrAllyOffersButtons = array(); 
	    $offersCount = count($this->Offers_Array($this->objUserTargets));
		for($i = 0; $i < ($offersCount<5?$offersCount:5); $i++) {
		    $offers = $this->Offers_Array($this->objUserTargets);
		    /*hand data for popup*/
		    $this->accountRequestPopup->accountId = $offers[$i]->Id;
		    $this->accountRequestPopup->accountName = $offers[$i]->Name;
		    
		    $this->arrAllyOffersButtons[$i] = new QLinkButton($this);
		    $this->arrAllyOffersButtons[$i]->Text = $offers[$i]->Name;
		    $this->arrAllyOffersButtons[$i]->AddAction(new QClickEvent(), 
		                                             new QAjaxAction('btn_AccountRequestPopup_Click'));
            
		}
			
		
	}
	
	protected function Form_Create() {
					
		/*
		*Define Popups
		*/
		
		$this->addAllyPopup = new AddAllyPopup('AddAllyPopup', $this);
		$this->addAllyPopup->Visible = false;
        $this->addAllyPopup->CssClass = 'profileActivity_addAllyPopup';
        
        $this->completeProfilePopup = new CompleteProfilePopup('AddAllyPopup', $this);
		$this->completeProfilePopup->Visible = false;
        $this->completeProfilePopup->CssClass = 'profileActivity_completeProfilePopup';

		$this->addAllySubmitPopup = new AddAllySubmitPopup('AddAllyPopupSubmit', $this);
		$this->addAllySubmitPopup->Visible = false;
        $this->addAllySubmitPopup->CssClass = 'profileActivity_completeProfilePopup';
        
        $this->accountRequestPopup = new AccountRequestPopup('AccountRequestPopup', $this);
		$this->accountRequestPopup->Visible = false;
        $this->accountRequestPopup->CssClass = 'profileActivity_accountRequestPopup';
		
		/*
		*Define Popup buttons
		*/
		
		$this->btnAddAllyPopup = new QLinkButton($this);
		$this->btnAddAllyPopup->Text = 'Invite as Ally';
		$this->btnAddAllyPopup->AddAction(new QClickEvent(), new QAjaxAction('btn_AddAllyPopup_Click'));
		  
		$this->btnCompleteProfilePopup = new QLinkButton($this);
		$this->btnCompleteProfilePopup->Text = 'Invite as Ally';
		$this->btnCompleteProfilePopup->AddAction(new QClickEvent(), new QAjaxAction('btn_CompleteProfilePopup_Click'));
		
		$this->btnInviteAsAlly = new QLinkButton($this);
		$this->btnInviteAsAlly->Text = 'Invite as Ally';
	    $this->btnInviteAsAlly->AddAction(new QClickEvent(), new QAjaxAction('btn_InviteAsAlly_Click'));
	}
	
	/*
	*Functions to render main page
	*/
	
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
	    while($i < $userOffersCount) {
	        $allyTargetAccountId = $this->GetAllyTargetAccountIdForUserOffertAccountId($objUserOffers[$i]->AccountId);
	        if( $allyTargetAccountId != null){
	            $this->arrAllyTargets[] = Account::LoadById($allyTargetAccountId);
	        }
	        ++$i;
		}
		return $this->arrAllyTargets;
	}
	
	/*Create array of objects for activity feed, thet was added last 7 days*/
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
	
	/*Get users name(who send or who resive contact) for activity feed*/
	protected function NameOfSenderForActivityFeedThread($objarraySenderForActivityFeed){
	    $userName = User::LoadById($objarraySenderForActivityFeed->ReceiverUserId);
	    return $userName;
	}
	
	protected function NameOfResiverForActivityFeedThread($objarrayReceiverForActivityFeed){
	    $userName = User::LoadById($objarrayReceiverForActivityFeed->SenderUserId );
	    return $userName;
	}
	
	/*Get accounts Name for activity feed*/
	protected function AccountNameForActivityFeed($objTargetOrOfferOrSenderOrReceiverArray){
	    $accountName = Account::LoadById($objTargetOrOfferOrSenderOrReceiverArray->AccountId);
	    return $accountName;
	}
	
	/*
	 * AddAllyPopup event handlers.
	 */
	 
	protected function btn_AddAllyPopup_Click($strFormId, $strControlId, $strParameter) {
		$this->addAllyPopup->ShowDialogBox();
	}
	
	public function addAllyPopup_btnInvite_Click($strFormId, $strControlId, $strParameter) {
	    $this->addAllyPopup->btnInvite_Click($strFormId, $strControlId, $strParameter);
	    $this->addAllyPopup->btnClose_Click();
	    $this->addAllySubmitPopup->ShowDialogBox();
	}
   
	public function addAllyPopup_btnClose_Click() {
	    $this->addAllyPopup->btnClose_Click();	    
    }
    
    /*
	 * RenderedPopup event handlers.
	 */
	 
	protected function btn_InviteAsAlly_Click($strFormId, $strControlId, $strParameter) {
	    $popup = $this->DefineInviteAsAllyPopup();
	    if($popup != null) {
		    $popup->ShowDialogBox();
		}
	}
	
	/*
	* AddAllySubmitPopup event handlers.
	*/
	
	public function addAllySubmitPopup_btnClose_Click() {
	    $this->addAllySubmitPopup->btnClose_Click();
	}
	 
	public function addAllySubmitPopup_btnInvite_Click($strFormId, $strControlId, $strParameter) {
	    $this->addAllyPopupSubmit->btnInvite_Click($strFormId, $strControlId, $strParameter);   
	}
	 
	/*
	* CompleteProfilePopup event handlers.
	*/
	 
	protected function btn_CompleteProfilePopup_Click($strFormId, $strControlId, $strParameter) {
		$this->completeProfilePopup->ShowDialogBox();
	}
	
	public function completeProfilePopup_btnClose_Click() {
	    $this->completeProfilePopup->btnClose_Click();
	}
	
	public function CompleteProfilePopup_btnCreate_Click($strFormId, $strControlId, $strParameter) {
	    $this->completeProfilePopup->btnCreate_Click($strFormId, $strControlId, $strParameter);
	}
	
	/*
	* AccountRequestPopup event handlers.
	*/
	 
	protected function btn_AccountRequestPopup_Click($strFormId, $strControlId, $strParameter) {
		$this->accountRequestPopup->ShowDialogBox();		
	}
	
	public function accountRequestPopup_btnClose_Click() {
	    $this->accountRequestPopup->btnClose_Click();  
	}
	 
	public function AccountRequestPopup_btnClick_RemoveFromTargets($strFormId, $strControlId, $strParameter) {
	    $this->accountRequestPopup->btnInvite_Click_RemoveFromTargets($strFormId, $strControlId, $strParameter);  
	}
	
	public function AccountRequestPopup_btnClick_AddToTargets($strFormId, $strControlId, $strParameter) {
	    $this->accountRequestPopup->btnInvite_Click_AddToTargets($strFormId, $strControlId, $strParameter);  
	}
	
	public function AcccountRequestPopup_btnClick_Request($strFormId, $strControlId, $strParameter) {
	    $this->accountRequestPopup->btnClick_Request($strFormId, $strControlId, $strParameter);   
	}

    /*
    *Check if profile complete
    */
    public function IsProfileComplete() {
        if($this->objUserDetails->City) {
            return true;
        }
        return false;
    }
    
    /*
    *Check if this uther is my ally
    */
    
    public function IsMyAlly() {
        $count = User::CountByUserAsAllies($this->objUserUser->Id);
        if($count) {
            return true;
        }
        return false;
    }
    
    private function DefineInviteAsAllyPopup() {
        if(!$this->IsProfileComplete()) {
		    return $this->completeProfilePopup;
		} else {
            if(!$this->IsMyAlly()) {
                return $this->addAllyPopup;
            }  
        }
        return null;
    }
}
?>
