<?php
// Class to manage invite information in My Offers Webpage
// Template: allies.tpl.php

require_once('MailMessage.class.php');


class AddAllyPopup extends QDialogBox {

	public $btnInvite;
	public $btnClose;

	protected $htmlMailMessage;
	protected $lblBottom;
	protected $objUser;
	public $objAlly;
	protected $objOffer;
	protected $btnDelButton;
	
	protected $objMessageArray;

	protected $txtAlly;

	protected $dtgAllies;

	protected $objMessage;
	protected $pnlAllyArray;
    protected $strCloseCallback;
    protected $strTemplate = 'Templates/add_ally_popup.tpl.php';
    protected $strCssClass = 'calculator_widget';
    protected $blnMatteClickable = false;
    public $txtTextBox;




	public function __construct($strCloseCallback, $objParentObject, $strControlId = null) {

		parent::__construct($objParentObject, $strControlId);
		$this->strCloseCallback = $strCloseCallback;
		$this->objUser = unserialize($_SESSION['User']);
		$this->objAlly = User::LoadById(121);
		//$this->objAlly = User::LoadById($_GET['allyId']);
		
		$this->btnInvite = new QButton($this);
		$this->btnInvite->Text = QApplication::Translate('Send Invite');
		$this->btnInvite->AddAction(new QClickEvent(), new QAjaxAction('addAllyPopup_btnInvite_Click'));
		$this->btnInvite->PrimaryButton = true;
		$this->btnInvite->CssClass = 'alliesInvite';

		$this->btnClose = new QButton($this);
		$this->btnClose->Text = QApplication::Translate('Close');
		$this->btnClose->AddAction(new QClickEvent(), new QAjaxAction('addAllyPopup__btnClose_Click'));
		$this->btnClose->CssClass = 'alliesInvite';
		
	}

	public function btnInvite_Click($strFormId, $strControlId, $strParameter) {
           
        //initialize adding to iContact
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
            $this->objAlly->Username,
            $this->objAlly->FullName,
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

        $variablesArray['ally']=$this->objAlly->FullName;
        $variablesArray['user']= $this->objUser->FullName;
        $variablesArray['link']= 
            (__DOMAIN__) . 
            '/signup_invite.php?manager=n&reseller=' .$reseller. 
            '&username=' . $this->objUser->UserDetail->CodeName . 
            '&referral=' . $this->objUser->Id . 
            '&fname=' . 'Tanya' . 
            '&email=' . $this->objAlly->Username;
		
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
		$this->objMessage->To = $this->objAlly->Username;
		
		// the subject changes depending on whether the sender is a Reseller or not 
		if ($reseller = "Y") {
			$this->objMessage->Subject = $this->objUser->FullName . ' can sell your solution into new accounts...!';
		} else {
			$this->objMessage->Subject = $this->objUser->FullName . ' wants to share leads with you!';
		}

		QEmailServer::Send($this->objMessage);
		
		//$this->addAllyPopupSubmit->ShowDialogBox();‭
		//QApplication::Redirect(__SUBDIRECTORY__ . '/add_ally_submit_popup.php');
		
	
	}


	public function btnClose_Click() {
			$this->HideDialogBox();
		}


	

}
?>
