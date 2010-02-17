<?php
// Class to manage user information in My Profile Webpage
// Template: profile.tpl.php

require_once('MailMessage.class.php');
require_once('ThreadLine.class.php');

class MessageSendForm extends QForm {
	protected $txtFullName;

	protected $objUser;
	protected $objAlly;
	protected $strTemplate;

	protected $objAccount;
	protected $lstContacts;
	protected $txtMessage;
	protected $txtCompany;
	protected $lblCompany;
	protected $txtContactName;
	protected $txtContactEmail;
	protected $txtContactTitle;
	protected $txtContactPhone;
	protected $lblBottom;
	protected $btnGive;
	protected $lblMessage;
	protected $lblSubject;
	protected $objOffer;

	protected $objMessage;

	protected $pnlThreadDisplay;
	protected $pnlThreadArray;

	protected $objMessageArray;	
	
	protected $msgType;	
	
	protected $btnSave;

	protected function Form_Create() {

		$this->strTemplate = __TEMPLATES_MAIL__ . '/send.html';				

		if(isset($_SESSION['User']))
		$this->objUser = unserialize($_SESSION['User']);
			
		$this->objAlly = User::Load(QApplication::QueryString('aid'));

		//Get message type in thread
		$this->msgType = QApplication::QueryString('type');		
		
		if(QApplication::QueryString('acid')){
			$this->objAccount = Account::Load(QApplication::QueryString('acid'));
		}		
		
		if(isset($this->objAccount)){
			if($this->msgType == MessageType::Send and isset($this->objAlly))
				$this->objOffer = Offer::LoadByUserOwnerIdAccountId($this->objUser->Id,$this->objAccount->Id);
			elseif($this->msgType == MessageType::Reply and isset($this->objAlly)){
				$this->objOffer = Offer::LoadByUserOwnerIdAccountId($this->objAlly->Id,$this->objAccount->Id);

			}
			if($this->objOffer){	
			$this->pnlThreadDisplay = new QPanel($this);
			$this->pnlThreadDisplay->Position = QPosition::Relative;
			$this->pnlThreadDisplay->AutoRenderChildren = true;				
				
			//QApplication::$Database[1]->EnableProfiling();
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
			
			//QApplication::$Database[1]->OutputProfiling();
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
			
			if($this->msgType == MessageType::Send ){				
				$this->lstContacts = new QListBox($this);
				$this->lstContacts->AddItem('- Select One -', null);
				$this->lstContacts->CssClass = "lstContact_offer";

				$OfferContactsArray = $this->objOffer->GetContactArray();
				foreach($OfferContactsArray as $Contact){
					$this->lstContacts->AddItem($Contact->Name, $Contact->Id);
				}
			  }		
			}
		} else {
			$this->txtCompany = new QTextBox($this);
			$this->txtCompany->Text = QApplication::QueryString('aname');
			$this->txtCompany->CssClass = "inputbox_offer";
			
		}

		$this->txtMessage = new QTextBox($this);
		$this->txtMessage->Name = "Notes";
		$this->txtMessage->Rows = 5;
		$this->txtMessage->Columns = 20;
		$this->txtMessage->TextMode = "MultiLine";
		$this->txtMessage->CssClass = "inputbox_request";

		$this->txtContactName = new QTextBox($this);
		$this->txtContactName->CssClass = "textbox";
		$this->txtContactEmail = new EmailTextBox($this);
		$this->txtContactEmail->CssClass = "textbox";
		$this->txtContactTitle = new QTextBox($this);
		$this->txtContactTitle->CssClass = "textbox";
		$this->txtContactPhone = new QTextBox($this);
		$this->txtContactPhone->CssClass = "textbox";
			

		if(!$this->objMessageArray)
		{
			$this->lblBottom = new QLabel($this);
			$this->lblBottom->HtmlEntities = false;
			$this->lblBottom->Text = "Your ally, <b>" . $this->objUser->FullName . '</b> at <b>' . $this->objUser->AccountIdObject->Name .'</b> is sending you information about an account.<br>';
			$this->lblBottom->Text.= $this->objUser->FullName . ' is looking for contacts or information at some of these Target Accounts:';
	
			$objTargetArray = Target::LoadArrayByUserId($this->objUser->Id,
										QQ::Clause(
											QQ::OrderBy(QQN::Target()->Account->Name),
											QQ::LimitInfo(5)
										));
	
			$this->lblBottom->Text.= '<ul>';
			foreach($objTargetArray as $objTarget){
				$this->lblBottom->Text.= '<li>' . $objTarget->Account->Name.'</li>';
			}
			$this->lblBottom->Text.= '</ul>';
		}
			
		$this->btnGive = new QButton($this);
		$this->btnGive->Text = QApplication::Translate('Send');
		$this->btnGive->AddAction(new QClickEvent(), new QAjaxAction('btnGive_Click'));
		$this->btnGive->PrimaryButton = true;
		$this->btnGive->CssClass = 'give';

		$this->lblMessage = new QLabel($this);
		$this->lblMessage->Display = false;
		$this->lblMessage->CssClass = "AllyMessageSend";		
		
	}

	protected function btnGive_Click($strFormId, $strControlId, $strParameter) {

		//Required contact in first message
		//Remove Requirement for Contact in first message
		
		if($this->msgType == MessageType::Send and !$this->objMessageArray)
		{	
			if(isset($this->objAccount)){
				
				if(isset($this->lstContacts)){
					if($this->lstContacts->SelectedValue == '' and
					($this->txtContactEmail->Text == '' or $this->txtContactName->Text == '' or
					$this->txtContactPhone->Text == '' or $this->txtContactTitle->Text == '')){
						$this->txtContactEmail->Warning = "You need choose a contact or provide a new contact information";
						return false;
					}
				}
				elseif($this->txtContactEmail->Text == '' or $this->txtContactName->Text == '' or
				$this->txtContactPhone->Text == '' or $this->txtContactTitle->Text == ''){
					$this->txtContactEmail->Warning = "You need provide complete information for new contact";
					return false;
				}
			}
			else {
				if($this->txtCompany->Text == ''){
					$this->txtCompany->Warning = "You must be provide a company name";
					return false;
				}
	
				if($this->txtContactEmail->Text == '' or $this->txtContactName->Text == '' or
				$this->txtContactPhone->Text == '' or $this->txtContactTitle->Text == ''){
					$this->txtContactEmail->Warning = "You need provide complete information for new contact";
					return false;
				}
			}
			
	
			if(!$this->txtContactEmail->Validate())
			{
				$this->txtContactEmail->Text = "";
				return;
			}
			
			if(isset($this->objOffer)){
				if($this->lstContacts->SelectedValue == ''){
					//create a new contact
					$objContact = new Contact();
					$objContact->Name = $this->txtContactName->Text;
					$objContact->Email = $this->txtContactEmail->Text;
					$objContact->Title = $this->txtContactTitle->Text;
					$objContact->Phone = $this->txtContactPhone->Text;
					$objContact->OfferId = $this->objOffer->Id;
					$objContact->Save();
				}
				else {
					$objContact = Contact::Load($this->lstContacts->SelectedValue);
				}
			} else {
	
				$this->objOffer = new Offer();
				$this->objOffer->UserOwnerId = $this->objUser->Id;

				//Validate new or exist account and creting offer
				if(!isset($this->objAccount)) {
					$this->objAccount = Account::LoadByName($this->txtCompany->Text);

					$this->objAccount = new Account();
					$this->objAccount->Name = $this->txtCompany->Text;
					$this->objAccount->Save();
	
					$this->objOffer->AccountId = $this->objAccount->Id;
				} elseif($this->objAccount){
					$this->objOffer->AccountId = $this->objAccount->Id;
				}
					
				$this->objOffer->Save();
	
				//creating new contact
				$objContact = new Contact();
				$objContact->Name = $this->txtContactName->Text;
				$objContact->Email = $this->txtContactEmail->Text;
				$objContact->Title = $this->txtContactTitle->Text;
				$objContact->Phone = $this->txtContactPhone->Text;
				$objContact->OfferId = $this->objOffer->Id;
				$objContact->Save();
			}
		} 
		//Check optional new contact in reply send		
		else if($this->msgType == MessageType::Send){
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
		
		$this->lblMessage->Display = False;

		$this->objMessage =  new MailMessage();
			
		/* Mail Variables to use un template __TEMPLATES_MAIL__ . '/send.html'*/
		/* Ally: Ally invited*/
		/* User: User whom request an account from ally*/
		/* Thread: thread link to follow up the thread */
		/* Offers: Accounts/Companys offer */

		$variablesArray['ally']=$this->objAlly->FullName;
		$variablesArray['user']= $this->objUser->FullName;

		if($this->msgType == MessageType::Send)
			$variablesArray['link']= (__DOMAIN__)  . '/message_send.php?app=dev&aid=' . $this->objUser->Id. '&acid=' . $this->objAccount->Id . '&type=' . MessageType::Reply;
		elseif($this->msgType == MessageType::Reply)
			$variablesArray['link']= (__DOMAIN__)  . '/message_send.php?app=dev&aid=' . $this->objUser->Id. '&acid=' . $this->objAccount->Id . '&type=' . MessageType::Send;
			
		$variablesArray['message']= $this->txtMessage->Text;
		
		//Add bottom message only in first message in thread
		//if(isset($this->lblBottom))
		//add new definitions of lblBottom (this is duplicate text)
		//Logic for displaying {offers} for each email message
			$this->lblBottom = new QLabel($this);
			$this->lblBottom->HtmlEntities = false;
			$this->lblBottom->Text = "Your ally, <b>" . $this->objUser->FullName . '</b> at <b>' . $this->objUser->AccountIdObject->Name .'</b> is sending you information about an account.<br>';
			$this->lblBottom->Text.= $this->objUser->FullName . ' is looking for contacts or information at some of these Target Accounts:';
	
			$objTargetArray = Target::LoadArrayByUserId($this->objUser->Id,
										QQ::Clause(
											QQ::OrderBy(QQN::Target()->Account->Name),
											QQ::LimitInfo(5)
										));
	
			$this->lblBottom->Text.= '<ul>';
			foreach($objTargetArray as $objTarget){
				$this->lblBottom->Text.= '<li>' . $objTarget->Account->Name.'</li>';
			}
			$this->lblBottom->Text.= '</ul>';
		
			$variablesArray['offers']= $this->lblBottom->Text;
			
		$variablesArray['contact']= '';
		/* End Mail Variables */

		/* Read template */
		$this->objMessage->ReadTemplate($this->strTemplate);
		/* Applying variables in template */
		$this->objMessage->HtmlBody = $this->objMessage->ApplyVariablesToTemplate($variablesArray);

		$this->objMessage->From = $this->objUser->FullName .'<noreply@allyforce.com>';
		$this->objMessage->To = $this->objAlly->Username;
		
		/* Logic for Subject Line */
		if($this->msgType == MessageType::Send) {
			$this->objMessage->Subject = $this->objAccount->Name . '! ' . $this->objUser->FullName . ' is Offering a Contact '  ;
		}
		
		if($this->msgType == MessageType::Reply) {
			$this->objMessage->Subject = $this->objAccount->Name . '! ' . $this->objUser->FullName . ' sent you a Reply '  ;
		}
		
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
		$objMessage->Body = '<div class="bmessage">' . $this->txtMessage->Text . '</div>';
		$objMessage->MessageTypeId = MessageType::Send;
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
			$objThread->MessageTypeId = MessageType::Send;
		}
		else 
			$objThread->MessageTypeId = MessageType::Reply;
		
		if($this->objUser->Id==$objThread->ReceiverUserId) 
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
			if($this->msgType == MessageType::Send)
				$this->lblMessage->Text ="Your offer contact was sent sucessfully to " . $this->objAlly->FullName;
			else
				$this->lblMessage->Text ="Your reply was sent sucessfully to " . $this->objAlly->FullName;
				
			$this->lblMessage->Display = True;
		}	
		else {
			//Send Email
			QEmailServer::Send($this->objMessage);
			//Reload page with thread
			QApplication::Redirect( __SUBDIRECTORY__ . '/message_send.php?' . 'aid=' . $this->objAlly->Id . '&acid=' . $this->objAccount->Id . '&type=' . $this->msgType);	
		}
		return true;
	}
}
?>