<?php
// Class to manage invite information in My Offers Webpage
// Template: allies.tpl.php

require_once('MailMessage.class.php');

class AddAllySubmitPopup extends QDialogBox {
    public $txtEmail;
	public $txtFirstName;
	public $btnInvite;
	public $btnClose;
	public $lblBottom;
	protected $objUser;
	public $objOffer;
	public $objMessageArray;
	public $objMessage;
	protected $strCloseCallback;
	public $strTemplate = 'Templates/add_ally_submit_popup.tpl.php';
	public $userId;


	
	public function __construct($strCloseCallback, $objParentObject, $strControlId = null) {
        parent::__construct($objParentObject, $strControlId);
		$this->strCloseCallback = $strCloseCallback;
		
        //$this->objUser = unserialize($_SESSION['User']);
        
        $this->txtEmail = new EmailTextBox($this);
		$this->txtEmail->Required = true;
		$this->txtEmail->CssClass = "span-6";
		
		$this->txtFirstName = new QTextBox($this);
		$this->txtFirstName->Required = true;
		$this->txtFirstName->CssClass = "span-6";

		$this->btnInvite = new QButton($this);
		$this->btnInvite->Text = QApplication::Translate('Invite Rep');
		$this->btnInvite->AddAction(new QClickEvent(), new QAjaxAction('addAllySubmitPopup_btnInvite_Click'));
		$this->btnInvite->PrimaryButton = true;
		$this->btnInvite->CssClass = 'alliesInvite';
		
		$this->btnClose = new QButton($this);
		$this->btnClose->Text = QApplication::Translate('Close');
		$this->btnClose->AddAction(new QClickEvent(), new QAjaxAction('addAllySubmitPopup_btnClose_Click'));
		$this->btnClose->CssClass = 'alliesInvite';

	}

	public function btnInvite_Click() {
        $this->objUser = User::LoadById($this->userId);
       // initialize adding to iContact 
        $api = new IcApi("http://api.icontact.com/icp");
        $api->setVersion("1.0");
        $api->setKey("xKmv8x9A72RvAFI1tEcFkbDqMEBjQSne");
        $api->setSecret("tzzsXySUrAgR6PIpjLUuMoLpTcyzVMDe");
        $api->setLogin("timfong888");
        $api->setPassword("4417348");
        $api->setDebug(false);

        // create link to store in icontact

        $codename = $this->objUser->UserDetail->CodeName;
        $referral = $this->objUser->Id;
        $domain = (__DOMAIN__);
        $inviter = $this->objUser->FullName;

        //check if a reseller or not
        $reseller = $this->objUser->UserDetail->Reseller;
		  
        // Create a new contact and verify the contact
        $new_contact = new IcResource_Contact();
        $new_contact->newContact(
            $this->txtEmail->Text,
            $this->txtFirstName->Text,
            $codename,$referral,
            '-' ,
            '-',
            $domain,
            $inviter
		);
        $response = $api->put($new_contact);
        $new_contact->setXml($response->getXml());  // Populate $new_contact with the response from the API
        // $api->follow($new_contact,'contact',1);     // Follow the link to the new contact to verify it

        // Subscribes the new contact to a list
        $new_contact->newSubscription(30186,'subscribed');
        $new_contact->putSubscription();
        $response = $api->put($new_contact);

        // end of added code TF 2-9-09
          
        $this->objMessage =  new MailMessage();

        // Mail Variables to use un template __TEMPLATES_MAIL__ . '/invite.html'
        // Ally: Ally invited
        // User: User whom invite ally
        // Link: link to signup 

        $variablesArray['ally']= $this->txtFirstName->Text;
        $variablesArray['user']= $this->objUser->FullName;
        $variablesArray['link']= 
            (__DOMAIN__) . 
            '/signup_invite.php?manager=n&reseller=' .$reseller. 
            '&username=' . $this->objUser->UserDetail->CodeName . 
            '&referral=' . $this->objUser->Id . 
            '&fname=' . 'Tanya' . 
            '&email=' . $this->txtEmail->Text;
		
		// Offers: some offers 

	    if(!$this->objMessageArray)
		{ 
			$this->lblBottom = new QLabel($this);
			$this->lblBottom->HtmlEntities = false;
			
		$this->lblBottom->Text.= 'Some accounts available to you from ' . $this->objUser->FullName . ' include:';

		$objOfferArray = Offer::LoadArrayByUserOwnerId($this->objUser->Id,
			QQ::Clause(
						QQ::OrderBy(QQN::Offer()->Account->Name),
						QQ::LimitInfo(5)
			));		

		$this->lblBottom->Text.= '<ul>';

		foreach($objOfferArray as $objOffer){
			$this->lblBottom->Text.= '<li>' . $objOffer->Account->Name.'</li>';
		}
		
		$this->lblBottom->Text.= '</ul>';
	
		$variablesArray['offers']= $this->lblBottom->Text; 
		} 	
		
		// End Mail Variables 

		$this->objMessage->HtmlBody = $this->objMessage->ApplyVariablesToTemplate($variablesArray);
		
		$this->objMessage->From = 'Allyforce ' . QApplication::Translate('Invite') .'<noreply@allyforce.com>';
		$this->objMessage->From = $this->objUser->FullName .'<noreply@allyforce.com>';
		$this->objMessage->To = $this->txtEmail->Text;
		
		// the subject changes depending on whether the sender is a Reseller or not 
		if ($reseller = "Y") {
			$this->objMessage->Subject = $this->objUser->FullName . ' can sell your solution into new accounts...!';
		} else {
			$this->objMessage->Subject = $this->objUser->FullName . ' wants to share leads with you!';
		}

		QEmailServer::Send($this->objMessage);
	}
		
	public function btnClose_Click() {
	    $this->HideDialogBox();
	}
}
?>
