<?php
// Class to manage invite information in My Offers Webpage
// Template: allies.tpl.php

require_once('MailMessage.class.php');

class AccountPopupRequest extends QForm {

	protected $btnRequestCotact;
	protected $btnRemoveOffer;
	protected $btnRemoveTarget;
	protected $objUser;
	protected $objAccount;
	protected $objTargets;
	protected $objMessageArray;
	protected $objMessage;
	protected $allyId;
	




	protected function Form_PreRender() {	 
		$this->objUser = unserialize($_SESSION['User']);
		$this->objAccount = Account::LoadById($_GET['accountId']);
		$this->objTargets = Target::Load($this->objUser->Id, $this->objAccount->Id);
		$this->allyId  = $_GET['allyId'];

	}
	
	
	protected function Form_Create() {

		

		$this->btnRequestCotact = new QButton($this);
		$this->btnRequestCotact->Text = QApplication::Translate('REQUEST a CONTACT');
		$this->btnRequestCotact->AddAction(new QClickEvent(), new QAjaxAction('btnInvite_Click_Request'));
		$this->btnRequestCotact->PrimaryButton = true;
		$this->btnRequestCotact->CssClass = 'positive';
		
		
		$this->btnRemoveOffer = new QButton($this);
		$this->btnRemoveOffer->Text = QApplication::Translate('REMOVE from OFFERS');
		$this->btnRemoveOffer->AddAction(new QClickEvent(), new QAjaxAction('btnInvite_Click_RemoveFromOffers'));
		$this->btnRemoveOffer->PrimaryButton = true;
		$this->btnRemoveOffer->CssClass = 'negative';
	
		
		$this->btnRemoveTarget = new QButton($this);
		$this->btnRemoveTarget->Text = QApplication::Translate('REMOVE from TARGETS');
		$this->btnRemoveTarget->AddAction(new QClickEvent(), new QAjaxAction('btnInvite_Click_RemoveFromTargets'));
		$this->btnRemoveTarget->PrimaryButton = true;
		$this->btnRemoveTarget->CssClass = 'negative';
		
		//$objStyle = $this->btnRemoveTarget->Style;
		//$objStyle->visibility = 'hidden';

	}

	protected function btnInvite_Click_Request($strFormId, $strControlId, $strParameter) {

		$this->objMessage = new Message();
		$this->objMessage->FromUserId = $this->objUser->Id;
		$this->objMessage->ToUserId = $this->allyId;
		$this->objMessage->MessageTypeId = 1;
		$this->objMessage->OfferId =  $this->objAccount->Id;
		$this->objMessage->Body = "Hey I'd like this contact.";
		$this->objMessage->Subject = "rrrrrrrrr";
		$this->objMessage->DateTime = QDateTime::Now(); 
	    $this->objMessage->Save();
	}
	
	
	protected function btnInvite_Click_RemoveFromOffers($strFormId, $strControlId, $strParameter) {
        
		//QApplication::DisplayAlert("You invite OK");
		QApplication::Redirect(__SUBDIRECTORY__ . '/addally_submit_popup.php');
	}
	
	protected function btnInvite_Click_RemoveFromTargets($strFormId, $strControlId, $strParameter) {
        
        if($this->objTargets){
            $this->objTargets->Delete();
        }
	}


	


	

}
?>
