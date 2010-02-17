<?
// Class to manage invite information in My Offers Webpage
// Template: allies.tpl.php

require_once('MailMessage.class.php');

class AccountRequestPopup extends QDialogBox {

	public $btnRequestContact;
	public $btnRemoveOffer;
	public $btnRemoveTarget;
	public $btnAddToTargets;
	public $btnClose;
	
	protected $objUser;
	public $objAccount;
	protected $objTarget;
	protected $objMessageArray;
	protected $objMessage;
	
	public $allyId;
	public $accountId;
	public $accountName;
	public $userId;
	private $message;
	protected $strCloseCallback;
    protected $strTemplate = 'Templates/account_request_popup.tpl.php';
	
	

	
	public function __construct($strCloseCallback, $objParentObject, $strControlId = null) {
        parent::__construct($objParentObject, $strControlId);
		$this->strCloseCallback = $strCloseCallback;
			
		$this->btnRequestContact = new QButton($this);
		$this->btnRequestContact->Text = QApplication::Translate('REQUEST a CONTACT');
		$this->btnRequestContact->AddAction(
		    new QClickEvent(), 
		    new QAjaxAction('AcccountRequestPopup_btnClick_Request')
		);
		$this->btnRequestContact->PrimaryButton = true;
		$this->btnRequestContact->CssClass = 'positive';
		$this->btnRequestContact->AddCssClass('request');
		
		$this->btnRemoveOffer = new QButton($this);
		$this->btnRemoveOffer->Text = QApplication::Translate('REMOVE from OFFERS');
		$this->btnRemoveOffer->AddAction(
		    new QClickEvent(), 
		    new QAjaxAction('AcccountRequestPopup_btnClick_RemoveFromOffers')
		);
		$this->btnRemoveOffer->PrimaryButton = true;
		$this->btnRemoveOffer->CssClass = 'negative';
	
		
		$this->btnRemoveTarget = new QButton($this);
		$this->btnRemoveTarget->Text = QApplication::Translate('REMOVE from TARGETS');
		$this->btnRemoveTarget->AddAction(
		    new QClickEvent(), 
		    new QAjaxAction('AccountRequestPopup_btnClick_RemoveFromTargets')
		);
		$this->btnRemoveTarget->PrimaryButton = true;
		$this->btnRemoveTarget->CssClass = 'negative';
		$this->btnRemoveTarget->AddCssClass('remove_target');
		$this->btnRemoveTarget->Visible = 'true';
		
		$this->btnAddToTargets = new QButton($this);
		$this->btnAddToTargets->Text = QApplication::Translate('ADD to TARGETS');
		$this->btnAddToTargets->AddAction(
		    new QClickEvent(), 
		    new QAjaxAction('AccountRequestPopup_btnClick_AddToTargets')
		);
		$this->btnAddToTargets->PrimaryButton = true;
		$this->btnAddToTargets->CssClass = 'positive';
		$this->btnAddToTargets->AddCssClass('add_target');
		$this->btnAddToTargets->Visible = 'false';
		
		$this->btnClose = new QButton($this);
		$this->btnClose->Text = QApplication::Translate('Close (x)');
		$this->btnClose->AddAction(new QClickEvent(), new QAjaxAction('accountRequestPopup_btnClose_Click'));
		$this->btnClose->CssClass = 'close_popup';
		/**/

	}

	public function btnClick_Request($strFormId, $strControlId, $strParameter) {
	$this->message = Message::LoadArrayByOfferIdFromUserIdToUserId($this->accountId, $this->userId, $this->allyId);
        if(!$this->message) {
		    $this->objMessage = new Message();
		    $this->objMessage->FromUserId = $this->userId;
		    $this->objMessage->ToUserId = $this->allyId;
		    $this->objMessage->MessageTypeId = 1;
		    $this->objMessage->OfferId =  $this->accountId;
		    $this->objMessage->Body = "Hey I'd like this contact.";
		    $this->objMessage->Subject = "Request";
		    $this->objMessage->DateTime = QDateTime::Now(); 
	        $this->objMessage->Save();
        } 
  	}
	
	
	protected function btnInvite_Click_RemoveFromOffers($strFormId, $strControlId, $strParameter) {
        
		//QApplication::DisplayAlert("You invite OK");
		//QApplication::Redirect(__SUBDIRECTORY__ . '/addally_submit_popup.php');
	}
	
	public function btnInvite_Click_RemoveFromTargets($strFormId, $strControlId, $strParameter) {
	
	    //$this->objUser = User::LoadById($this->userId);
		//$this->objAccount = Account::LoadById($this->accountId);
		$this->objTarget = Target::Load($this->userId, $this->accountId);
        
        if($this->objTarget) {
           $this->objTarget->Delete();
        }
        $this->btnRemoveTarget->Visible = 'false';
        $this->btnAddToTargets->Visible = 'true';
	}
	
	public function btnInvite_Click_AddToTargets($strFormId, $strControlId, $strParameter) {
        $this->objTarget = Target::Load($this->userId, $this->accountId);
        if(!$this->objTarget) {
            $this->objTarget = new Target();           
            $this->objTarget->UserId = $this->userId;
            $this->objTarget->AccountId = $this->accountId;
            $this->objTarget->Save();
        }
        $this->btnAddToTargets->Visible = 'false';
        $this->btnRemoveTarget->Visible = 'true'; 
        
	}

    public function btnClose_Click() {
			$this->HideDialogBox();
		}
	


	

}
?>
