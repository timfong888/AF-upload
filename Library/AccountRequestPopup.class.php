<?
// Class to manage invite information in My Offers Webpage
// Template: allies.tpl.php

require_once('MailMessage.class.php');

class AccountRequestPopup extends QForm {

	public $btnRequestContact;
	public $btnRemoveOffer;
	public $btnRemoveTarget;
	
	protected $objUser;
	protected $objAccount;
	protected $objTargets;
	protected $objMessageArray;
	protected $objMessage;
	
	protected $allyId;
	protected $strCloseCallback;
    protected $strTemplate = 'Templates/account_request_popup.tpl.php';
	
	
	public function __construct($strCloseCallback, $objParentObject, $strControlId = null) {
        parent::__construct($objParentObject, $strControlId);
		$this->strCloseCallback = $strCloseCallback;
		
        $this->objUser = unserialize($_SESSION['User']);
		$this->objAccount = Account::LoadById('16');
		$this->objTargets = Target::Load($this->objUser->Id, $this->objAccount->Id);
		$this->allyId  = '121';     
		
		/*$this->btnRequestContact = new QButton($this);
		$this->btnRequestContact->Text = QApplication::Translate('REQUEST a CONTACT');
		$this->btnRequestContact->AddAction(
		    new QClickEvent(), 
		    new QAjaxAction('AcccountRequestPopup_btnClick_Request')
		);
		$this->btnRequestContact->PrimaryButton = true;
		$this->btnRequestContact->CssClass = 'positive';*/
		
		
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
/**/

	}

	public function btnClick_Request($strFormId, $strControlId, $strParameter) {

		$this->objMessage = new Message();
		$this->objMessage->FromUserId = $this->objUser->Id;
		$this->objMessage->ToUserId = $this->allyId;
		$this->objMessage->MessageTypeId = 1;
		$this->objMessage->OfferId =  $this->objAccount->Id;
		$this->objMessage->Body = "Hey I'd like this contact.";
		$this->objMessage->Subject = "Request";
		$this->objMessage->DateTime = QDateTime::Now(); 
	    $this->objMessage->Save();
	}
	
	
	protected function btnInvite_Click_RemoveFromOffers($strFormId, $strControlId, $strParameter) {
        
		//QApplication::DisplayAlert("You invite OK");
		//QApplication::Redirect(__SUBDIRECTORY__ . '/addally_submit_popup.php');
	}
	
	public function btnInvite_Click_RemoveFromTargets($strFormId, $strControlId, $strParameter) {
        
        if($this->objTargets){
           $this->objTargets->Delete();
        }
	}


	


	

}
?>
