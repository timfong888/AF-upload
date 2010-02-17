<?php
// Class to manage user information in My Profile Webpage
// Template: Mail/request.html
// Template: message_request.html

require_once('MailMessage.class.php');
require_once('ThreadLine.class.php');

class MessageRequestForm extends QForm {
	protected $txtFullName;

	protected $strTemplate;
	protected $objUser;
	protected $objAlly;
	protected $objOffer;

	protected $objAccount;
	protected $txtMessage;
	protected $lblBottom;
	protected $btnGive;
	protected $lblMessage;
	protected $lblSubject;
	
	protected $txtContactName;
	protected $txtContactEmail;
	protected $txtContactTitle;
	protected $txtContactPhone;	
	protected $lstContacts;	

	protected $pnlThreadDisplay;
	protected $pnlThreadArray;
	
	protected $objMessageArray;

	protected $btnSave;

	protected $objMessage;
	
	protected $msgType;

	protected function Form_Create() {

		$this->strTemplate = __TEMPLATES_MAIL__ . '/request.html';

		if(isset($_SESSION['User']))
		$this->objUser = unserialize($_SESSION['User']);
			
		$this->objAlly = User::Load(QApplication::QueryString('aid'));

		if(QApplication::QueryString('acid')){
			$this->objAccount = Account::Load(QApplication::QueryString('acid'));
		}

		//Get message type in thread
		$this->msgType = QApplication::QueryString('type');
		
		if(($this->msgType == MessageType::Request and isset($this->objAlly) and $this->objAccount))
			$this->objOffer = Offer::LoadByUserOwnerIdAccountId($this->objAlly->Id,$this->objAccount->Id);
		elseif(($this->msgType == MessageType::Reply and isset($this->objAlly) and $this->objAccount))
			$this->objOffer = Offer::LoadByUserOwnerIdAccountId($this->objUser->Id,$this->objAccount->Id);

		if(isset($this->objOffer)){

			$this->pnlThreadDisplay = new QPanel($this);
			$this->pnlThreadDisplay->Position = QPosition::Relative;
			$this->pnlThreadDisplay->AutoRenderChildren = true;

			$this->objMessageArray = Message::QueryArray(
					QQ::AndCondition(
						QQ::Equal(QQN::Message()->OfferId,$this->objOffer->Id),
					QQ::OrCondition(
						QQ::AndCondition(
							QQ::Equal(QQN::Message()->FromUserId,$this->objUser->Id),
							QQ::Equal(QQN::Message()->ToUserId,$this->objAlly->Id)
						),
						QQ::AndCondition(
							QQ::Equal(QQN::Message()->FromUserId,$this->objAlly->Id),
							QQ::Equal(QQN::Message()->ToUserId,$this->objUser->Id)
						)
					)),
					QQ::Clause(QQ::OrderBy(QQN::Message()->DateTime))
					);

			if($this->objMessageArray){
				$this->lblSubject = new QLabel($this);
				$this->lblSubject->CssClass = "thread_subject";
								
				$i=0;					
				foreach($this->objMessageArray as $objMessage){
					$this->pnlThreadArray[$i] = new ThreadLine($this->pnlThreadDisplay,"pnlMessage" . $objMessage->Id,$objMessage);
					if(!$i)
						 $this->lblSubject->Text = $objMessage->Subject; 
					$i++;				
				}
			}
		}

		if($this->msgType == MessageType::Reply){
			
			$this->lstContacts = new QListBox($this);
			$this->lstContacts->AddItem('- Select One -', null);
			$this->lstContacts->CssClass = "lstContact_offer";
			if($this->objOffer) {
				$OfferContactsArray = $this->objOffer->GetContactArray();
				foreach($OfferContactsArray as $Contact){
					$this->lstContacts->AddItem($Contact->Name, $Contact->Id);
				}
			}
			
			$this->txtContactName = new QTextBox($this);
			$this->txtContactName->CssClass = "textbox";
			$this->txtContactEmail = new EmailTextBox($this);
			$this->txtContactEmail->CssClass = "textbox";
			$this->txtContactTitle = new QTextBox($this);
			$this->txtContactTitle->CssClass = "textbox";
			$this->txtContactPhone = new QTextBox($this);
			$this->txtContactPhone->CssClass = "textbox";			
			
		}
		
		$this->txtMessage = new QTextBox($this);
		$this->txtMessage->Name = "Notes";
		$this->txtMessage->Rows = 5;
		$this->txtMessage->Columns = 20;
		$this->txtMessage->TextMode = "MultiLine";
		$this->txtMessage->CssClass = "inputbox_request";

/* this is the lblBottom message of the request thread */
	
		if(!$this->objMessageArray)
		{
			$this->lblBottom = new QLabel($this);
			$this->lblBottom->HtmlEntities = false;
			$this->lblBottom->Text = "Your ally, <b>" . $this->objUser->FullName . '</b> at <b>' . $this->objUser->AccountIdObject->Name .'</b> is requesting contact information and/or an introduction to your contacts at <b>' . $this->objAccount->Name .'</b>.<br><br>';
			$this->lblBottom->Text.= 'Some accounts available to you include:';
	
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
		}	
		
		$this->btnGive = new QButton($this);
		$this->btnGive->Text = QApplication::Translate('Send');
		$this->btnGive->AddAction(new QClickEvent(), new QAjaxAction('btnRequest_Click'));
		$this->btnGive->PrimaryButton = true;
		$this->btnGive->CssClass = 'give';

		$this->lblMessage = new QLabel($this);
		$this->lblMessage->Display = false;
		$this->lblMessage->CssClass = "AllyMessageRequest";

		
	}

	protected function btnRequest_Click($strFormId, $strControlId, $strParameter) {

		$this->lblMessage->Display = False;

		//Check optional new contact in reply request		
		if($this->msgType == MessageType::Reply){
			if(isset($this->objOffer)){
				//Check new contact optional
				if($this->lstContacts->SelectedValue == '' and
					($this->txtContactEmail->Text != '' or $this->txtContactName->Text != '' or
					$this->txtContactPhone->Text != '' or $this->txtContactTitle->Text != '')){
					//create a new contact
					$objContact = new Contact();
					$objContact->Name = $this->txtContactName->Text;
					$objContact->Email = $this->txtContactEmail->Text;
					$objContact->Title = $this->txtContactTitle->Text;
					$objContact->Phone = $this->txtContactPhone->Text;
					$objContact->OfferId = $this->objOffer->Id;
					$objContact->Save();
				}
				else if($this->lstContacts->SelectedValue != '') {
					$objContact = Contact::Load($this->lstContacts->SelectedValue);
				}
			} 
		}		
		
		$this->objMessage =  new MailMessage();
			
		/* Mail Variables to use un template __TEMPLATES_MAIL__ . '/request.html'*/
		/* Ally: Ally invited*/
		/* User: User whom request an account from ally*/
		/* Thread: thread link to follow up the thread */
		/* Offers: Accounts/Companys offer */

		$variablesArray['ally']=$this->objAlly->FullName;
		$variablesArray['user']= $this->objUser->FullName;
		if($this->msgType == MessageType::Request)
			$variablesArray['link']=  (__DOMAIN__) .  '/message_request.php?app=dev&aid=' . $this->objUser->Id. '&acid=' . $this->objAccount->Id . '&type=' . MessageType::Reply;
		elseif($this->msgType == MessageType::Reply)	
			$variablesArray['link']= (__DOMAIN__)  . '/message_request.php?app=dev&aid=' . $this->objUser->Id. '&acid=' . $this->objAccount->Id . '&type=' . MessageType::Request;
				
		$variablesArray['message']= $this->txtMessage->Text;

		//Add bottom message only in first message in thread
		//if(isset($this->lblBottom))
		//Logic for displaying {offers} for each email message		
		$this->lblBottom = new QLabel($this);
		$this->lblBottom->HtmlEntities = false;
	//	$this->lblBottom->Text = "Your ally, <b>" . $this->objUser->FullName . '</b> at <b>' . $this->objUser->AccountIdObject->Name .'</b> is requesting contact information and/or an introduction to your contacts at <b>' . $this->objAccount->Name .'</b>.<br><br>';
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
		
	/* End Mail Variables */
       /* Add Request to Target */
		/* Check whether the account is a Target already */
		$objTarget = Target::Load($this->objUser->Id, $this->objAccount->Id);
		/* If it is already, then skip the part of making it a Target */
		if (!$objTarget) {
			/* Add Account to Target */
			$objTarget = new Target();
			$objTarget->UserId = $this->objUser->Id;
			$objTarget->AccountId = $this->objAccount->Id;
			$objTarget->Save();
		}

		$this->objMessage->ReadTemplate($this->strTemplate);
		$this->objMessage->HtmlBody = $this->objMessage->ApplyVariablesToTemplate($variablesArray);

		$this->objMessage->From = $this->objUser->FullName  .'<noreply@allyforce.com>';
		$this->objMessage->To = $this->objAlly->Username;
		
		//Logic for Creating Subject Line//
		if($this->msgType == MessageType::Request) {
					$this->objMessage->Subject = $this->objAccount->Name . '? '. $this->objUser->FullName . ' is Requesting a Contact.';
		}
		
		if($this->msgType == MessageType::Reply) {
			$this->objMessage->Subject = $this->objAccount->Name . '? ' . $this->objUser->FullName . ' sent you a Reply '  ;
		}

		print_r($this->objMessage);
		//Create message	
		//Contact div to include in body
		if(isset($objContact)){
			$contact_body_message = '<div class="contact"><div class=row id=name>' . $objContact->Name . '</div>';
			$contact_body_message.= '<div class=row id=title>' . $objContact->Title . '</div>';
			$contact_body_message.= '<div class=row id=email>' . $objContact->Email . '</div>';
			$contact_body_message.= '<div class=row id=phone>' . $objContact->Phone . '</div></div>';
		}		
		
		$objMessage = new Message();
		$objMessage->FromUserId = $this->objUser->Id;
		$objMessage->ToUserId = $this->objAlly->Id;
		$objMessage->OfferId = ($this->objOffer) ? $this->objOffer->Id : 0;
		$objMessage->Subject = $this->objMessage->Subject;
		$objMessage->Body = $this->txtMessage->Text;
		$objMessage->MessageTypeId = MessageType::Request;
		$objMessage->DateTime = QDateTime::Now();

		if(isset($objContact)){
			$objMessage->Body.= $contact_body_message;			
			$objMessage->ContactId = $objContact->Id;
		}		
		
		$objMessage->Save();
		
		// Create / Update thread
		$objThread = Thread::LoadBySenderUserIdReceiverUserIdAccountId($this->objUser->Id,$this->objAlly->Id,$this->objAccount->Id);
		if(empty($objThread))	{
			$objThread = Thread::LoadBySenderUserIdReceiverUserIdAccountId($this->objAlly->Id,$this->objUser->Id,$this->objAccount->Id);
		}
		
		if(!$objThread) {
			$objThread = new Thread();
			$objThread->SenderUserId = $this->objUser->Id;
			$objThread->ReceiverUserId = $this->objAlly->Id;
			$objThread ->AccountId = $this->objAccount->Id;
			$objThread->Subject = $this->objAccount->Name;
			$objThread->MessageTypeId = MessageType::Request;
		}
		else 
			$objThread->MessageTypeId = MessageType::Reply;
		
		$objThread->DateTime = QDateTime::Now();
		$objThread->LastUserId = $this->objUser->Id;
		$objThread->Save();

		
		$this->txtMessage->Text = "";
		
		//add new message in thread
		if($this->objMessageArray){
			new ThreadLine($this->pnlThreadDisplay,"pnlMessage" . $objMessage->Id,$objMessage);
			//Send Email
			QEmailServer::Send($this->objMessage);
			//Display Label message
			if($this->msgType == MessageType::Request)
				$this->lblMessage->Text ="Your request was sent sucessfully to " . $this->objAlly->FullName;
			else
				$this->lblMessage->Text ="Your reply was sent sucessfully to " . $this->objAlly->FullName;
				
			$this->lblMessage->Display = True;
		}	
		else {
			//Send Email
			QEmailServer::Send($this->objMessage);
			//Reload page with thread
			QApplication::Redirect( __SUBDIRECTORY__ . '/message_request.php?' . 'aid=' . $this->objAlly->Id . '&acid=' . $this->objAccount->Id . '&type=' . $this->msgType);	
		}
		
		return true;
	}
}
?>
