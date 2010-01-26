<?php
	require_once('MailMessage.class.php');
	
    class managerInviteRepsForm extends QForm {
    	
		protected $txtEmail;
		protected $btnInvite;
		protected $strTemplate;
		
		protected $htmlMailMessage;
			
		protected function Form_Create() {	
		
			$this->strTemplate = __TEMPLATES_MAIL__ . '/invite_reps.html';

			$this->txtEmail = new EmailTextBox($this);
			$this->txtEmail->Required = true;
			$this->txtEmail->CssClass = "span-6";
			
			$this->btnInvite = new QButton($this);
			$this->btnInvite->Text = QApplication::Translate('Invite');
			$this->btnInvite->AddAction(new QClickEvent(), new QAjaxAction('btnInvite_Click'));
			$this->btnInvite->PrimaryButton = true;
			$this->btnInvite->CssClass = 'alliesInvite';
		}
		
		protected function ReadTemplate(){

			$handle = @fopen($this->strTemplate, "r");
			$template = @fread($handle, filesize($this->strTemplate));
			@fclose($handle);
			return($template);
		}

		protected function ApplyTemplate($template, $variablesArray){

			if (is_array($variablesArray)) {
				foreach ($variablesArray as $needle=>$data) {
					$template = str_replace("{".$needle."}",$data,$template);
				}
			}

			return ($template);
		}
		
		protected function btnInvite_Click($strFormId, $strControlId, $strParameter) {

			$this->lblMessage->Display = False;
		
			if(!$this->txtEmail->Validate())
			{
				$this->txtEmail->Text = "";
				return;
			}
		
			$objUser = unserialize($_SESSION['User']);

		/* initialize adding to iContact */
		  $api = new IcApi("http://api.icontact.com/icp");
		  $api->setVersion("1.0");
		  $api->setKey("xKmv8x9A72RvAFI1tEcFkbDqMEBjQSne");
		  $api->setSecret("tzzsXySUrAgR6PIpjLUuMoLpTcyzVMDe");
		  $api->setLogin("timfong888");
		  $api->setPassword("4417348");
		  $api->setDebug(false);

		/* create link to store in icontact*/		  
		  $codename = $objUser->UserDetail->CodeName;
		  $referral = $objUser->Id;
		  $domain = (__DOMAIN__);
		  $inviter = $objUser->FullName;
		  
		 // Create a new contact and verify the contact
		 $new_contact = new IcResource_Contact();
		 $new_contact->newContact($this->txtEmail->Text,$this->txtFullName->Text,$codename,$referral,'-' ,'-',$domain,$inviter);
		 $response = $api->put($new_contact);
		 $new_contact->setXml($response->getXml());  // Populate $new_contact with the response from the API
		 // $api->follow($new_contact,'contact',1);     // Follow the link to the new contact to verify it
		  
		  // Subscribes the new contact to a list
		 $new_contact->newSubscription(30186,'subscribed');
		 $new_contact->putSubscription();
		 $response = $api->put($new_contact);

/* end of added code TF 2-9-09 */
		  
		$this->objMessage =  new MailMessage();
			
		/* Mail Variables to use un template __TEMPLATES_MAIL__ . '/invite.html'*/
		/* Ally: Ally invited*/
		/* User: User whom invite ally*/
		/* Link: link to signup */
		
		$variablesArray['ally']=$this->txtFullName->Text;
		$variablesArray['user']= $objUser->FullName;
		$variablesArray['link']= (__DOMAIN__) . '/signup_invite.php?username=' . $objUser->UserDetail->CodeName . '&referral=' . $objUser->Id . '&fname=' . $this->txtFullName->Text . '&email=' . $this->txtEmail->Text;
		
		/* Offers: some offers */

		if(!$this->objMessageArray)
		{ 
			$this->lblBottom = new QLabel($this);
			$this->lblBottom->HtmlEntities = false;
			
		$this->lblBottom->Text.= 'Some accounts available to you from ' . $objUser->FullName . ' include:';

		$objOfferArray = Offer::LoadArrayByUserOwnerId($objUser->Id,
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
		
		/* End Mail Variables */

		$this->objMessage->ReadTemplate($this->strTemplate);
		$this->objMessage->HtmlBody = $this->objMessage->ApplyVariablesToTemplate($variablesArray);
		
		/*$this->objMessage->From = 'Allyforce ' . QApplication::Translate('Invite') .'<noreply@allyforce.com>';*/
		$this->objMessage->From = $objUser->FullName .'<noreply@allyforce.com>';
		$this->objMessage->To = $this->txtEmail->Text;
		$this->objMessage->Subject = $objUser->FullName . ' wants to share leads with you!';
		QEmailServer::Send($this->objMessage);
		
		$this->lblMessage->Text ="Your invite was sent sucessfully to " . $this->txtFullName->Text;
		$this->lblMessage->Display = True;
		return true;
	}
    }
?>