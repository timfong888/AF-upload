<?php

require_once('MailMessage.class.php');

class ReportsForm extends QForm {
    	
	protected $txtEmail;
	protected $txtFullName;
	protected $btnInvite;
	protected $btnComp;
	
	protected $htmlMailMessage;
	protected $strTemplate;
	protected $lblMessage;
	protected $lblBottom;
	protected $objUser;
	protected $objOffer;
	protected $btnDelButton;
	//AJAX vars
	protected $intCompanyId;
	protected $intRepId;
	
	protected $objMessageArray;

	protected $txtAlly;

	protected $dtgAllies;
	protected $dtgRepsSummary;
	protected $dtgRepsDetailsGiven;
	protected $dtgRepsDetailsReceived;
		
	protected $objMessage;
	protected $pnlAllyArray;
	
	protected $dataSummary;
	protected $dataAllies;
	protected $dataRepsGiven;
	protected $dataRepsReceived;

	protected function Form_Create() {
		$this->objUser = unserialize($_SESSION['User']);
		
		
		$this->txtEmail = new EmailTextBox($this);
		$this->txtEmail->Required = true;
		$this->txtEmail->CssClass = "span-6";

		$this->txtFullName = new EmailTextBox($this);
		$this->txtFullName->Required = true;
		$this->txtFullName->CssClass = "span-6";

		$this->btnInvite = new QButton($this);
		$this->btnInvite->Text = QApplication::Translate('Invite Reps');
		$this->btnInvite->AddAction(new QClickEvent(), new QAjaxAction('btnInvite_Click'));
		$this->btnInvite->PrimaryButton = true;
		$this->btnInvite->CssClass = 'alliesInvite';
		
		$this->btnComp = new QButton($this);
		$this->btnComp->Text = QApplication::Translate('Invite Reps');
		$this->btnComp->AddAction(new QClickEvent(), new QAjaxAction('btnInvite_Click'));
		$this->btnComp->PrimaryButton = true;
		$this->btnComp->CssClass = 'alliesInvite';
		
		$this->lblMessage = new QLabel($this);
		$this->lblMessage->Display = false;
		$this->lblMessage->CssClass = "AllyMessageInvite";
		
		$this->dtgAllies = new QDataGrid($this);
		$this->dtgAllies->CellPadding = 5;
		$this->dtgAllies->CellSpacing = 0;
		$this->dtgAllies->RowActionParameterHtml = '<?= $_ITEM["CompanyId"] ?>';
    	$this->dtgAllies->AddRowAction(new QClickEvent(), new QAjaxAction("company_Click"));
		
		
		$this->dtgRepsSummary = new QDataGrid($this);
		$this->dtgRepsSummary->CellPadding = 5;
		$this->dtgRepsSummary->CellSpacing = 0;
		$this->dtgRepsSummary->RowActionParameterHtml = '<?= $_ITEM["RepId"] ?>';
    	$this->dtgRepsSummary->AddRowAction(new QClickEvent(), new QAjaxAction("rep_Click"));
		
		
		$this->dtgRepsDetailsGiven = new QDataGrid($this);
		$this->dtgRepsDetailsGiven->CellPadding = 5;
		$this->dtgRepsDetailsGiven->CellSpacing = 0;		

		$this->dtgRepsDetailsReceived = new QDataGrid($this);
		$this->dtgRepsDetailsReceived->CellPadding = 5;
		$this->dtgRepsDetailsReceived->CellSpacing = 0;	
		//------------------ QUERIES FOR GETTING DATA FOR DATAGRID START HERE -----------------//
		
		
				
				
		
		
		
		//------------------------------------- END OF QUERIES ----------------------------------------------------//
		// Let's enable AJAX!!!
		$this->dtgAllies->UseAjax = true;
		
		$this->dtgAllies->AddColumn(new QDataGridColumn('Ally Company', '<?= $_ITEM["Company"] ?>', 'Width=120',
		array('SortByCommand' =>'Company', 'ReverseSortByCommand' => 'CompanyR')));
		
		$this->dtgAllies->AddColumn(new QDataGridColumn('# of Reps', '<?= $_ITEM["Reps"] ?>', 'Width=120'));

		$this->dtgAllies->AddColumn(new QDataGridColumn('Total Leads FROM', '<?=  $_ITEM["From"] ?>', 'Width=120',
		array('OrderByClause' => QQ::OrderBy(QQN::User()->AccountIdObject->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::User()->AccountIdObject->Name,false))));

		$this->dtgAllies->AddColumn(new QDataGridColumn('Total Leads TO', '<?= $_ITEM["To"] ?>', 'Width=120',
		array('OrderByClause' => QQ::OrderBy(QQN::User()->AccountIdObject->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::User()->AccountIdObject->Name,false))));
  
   		$this->dtgAllies->SetDataBinder('dtgAllies_Bind');
		
		// Let's enable AJAX!!!
		$this->dtgRepsSummary->UseAjax = true;

		$this->dtgRepsSummary->AddColumn(new QDataGridColumn("Del", '<?=  ?>', 'Width=10', 'HtmlEntities=false'));
		$this->dtgRepsSummary->AddColumn(new QDataGridColumn('Rep', '<?= $_ITEM["FullName"] ?>', "Width=200")) ;
		$this->dtgRepsSummary->AddColumn(new QDataGridColumn('# Targets','<?= $_ITEM["TTargets"] ?>', "Width=10")) ;
		$this->dtgRepsSummary->AddColumn(new QDataGridColumn('# Offers','<?= $_ITEM["TOffers"] ?>', 'Width=10')) ;
		$this->dtgRepsSummary->AddColumn(new QDataGridColumn('# FROM Ally','<?= $_ITEM["FromAlly"] ?>','Width=30'));
		$this->dtgRepsSummary->AddColumn(new QDataGridColumn('# TO Ally','<?= $_ITEM["ToAlly"] ?>','Width=30'));
		
   		$this->dtgRepsSummary->SetDataBinder('dtgRepsSummary_Bind');
		
		// Let's enable AJAX!!!
		$this->dtgRepsDetailsGiven->UseAjax = true;
		
		$this->dtgRepsDetailsGiven->AddColumn(new QDataGridColumn('Given Account', '<?= $_ITEM["Account"] ?>', 'Width=120',
		array('OrderByClause' => QQ::OrderBy(QQN::User()->AccountIdObject->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::User()->AccountIdObject->Name,false))));
		$this->dtgRepsDetailsGiven->AddColumn(new QDataGridColumn('Ally Given To', '<?= $_ITEM["Ally"] ?>', 'Width=60'));
		$this->dtgRepsDetailsGiven->AddColumn(new QDataGridColumn('Date Given to Ally', '<?= $_ITEM["Date"] ?>', 'Width=60'));  
		
   		$this->dtgRepsDetailsGiven->SetDataBinder('dtgRepsDetailsGiven_Bind');
		
		$this->dtgRepsDetailsReceived->UseAjax = true;	
		$this->dtgRepsDetailsReceived->AddColumn(new QDataGridColumn('Received Account', '<?= $_ITEM["Account"] ?>', 'Width=120',
		array('OrderByClause' => QQ::OrderBy(QQN::User()->AccountIdObject->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::User()->AccountIdObject->Name,false))));
		$this->dtgRepsDetailsReceived->AddColumn(new QDataGridColumn('Ally Received From','<?= $_ITEM["Ally"] ?>', 'Width=120'));
		$this->dtgRepsDetailsReceived->AddColumn(new QDataGridColumn('Date Received','<?= $_ITEM["Date"] ?>', 'Width=30'));				
		
		$this->dtgRepsDetailsReceived->SetDataBinder('dtgRepsDetailsReceived_Bind');
    }
	
    protected function Form_PreRender()  {
            $this->dtgRepsSummary->Refresh();
            $this->dtgRepsDetailsGiven->Refresh();
			$this->dtgRepsDetailsReceived->Refresh();
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

	public function dtgAllies_Bind(){

		//Ally Company Summary
		$i=0;
		$Data = array();
		
		$tmp = User::QueryArray(
			QQ::AndCondition(	
				QQ::Equal(
				  QQN::User()->ManagerId,NULL
				),
				QQ::Equal(
					QQN::User()->UserAsAllies->UserOwnerId,$this->objUser->Id
				)
			)
		);
		
		foreach ($tmp as $item) {
			$usrrep=array();
			$allyrep=array();
			$Data[$i]['CompanyId'] = $item->AccountIdObject->Id;
			$Data[$i]['Company'] = $item->AccountIdObject->Name;
			$Data[$i]['Reps'] = User::CountByManagerId($item->Id);
			$UserReps = User::LoadArrayByManagerId($this->objUser->Id);
			$AllyReps = User::LoadArrayByManagerId($item->Id);
			foreach ($UserReps as $v) {
				$usrrep[] = $v->Id;
			}
			foreach ($AllyReps as $v) {
				$allyrep[] = $v->Id;
			}
			$mleadsTo = Message::QueryCount(
				QQ::AndCondition(
					QQ::In(QQN::Message()->FromUserId,$usrrep),
					QQ::In(QQN::Message()->ToUserId,$allyrep),
					QQ::IsNotNull(QQN::Message()->ContactId)
				),
				QQ::Clause (
					QQ::GroupBy(QQN::Message()->Offer->Id)
				)
			);
			$Data[$i]['To'] = $mleadsTo;
			$mleadsFrom = Message::QueryCount(
				QQ::AndCondition(
					QQ::In(QQN::Message()->FromUserId,$allyrep),
					QQ::In(QQN::Message()->ToUserId,$usrrep),
					QQ::IsNotNull(QQN::Message()->ContactId)
				),
				QQ::Clause (
					QQ::GroupBy(QQN::Message()->Offer->Id)
				)
			);
			$Data[$i]['From'] = $mleadsFrom;
			$i++;
		}
		$this->dataAllies = $Data;		
		
		switch($this->dtgAllies->SortInfo) {
		  case "Company":
		    usort($this->dataAllies,array($this,"CompanyCompare"));
		    break;
		  case "CompanyR":
		    usort($this->dataAllies,array($this,"CompanyRCompare"));
		    break;
		}
		$this->dtgAllies->DataSource = $this->dataAllies;
	}
	
	public function dtgRepsSummary_Bind(){
		
		//Summary of reps by Selected Ally Company
		$i=0;
		$Data = array();
		
		if(isset($_SESSION['companyId'])) $companyId = $_SESSION['companyId'];
		else  $companyId = 0;
	
		$UserReps = User::LoadArrayByManagerId($this->objUser->Id);

		foreach ($UserReps as $item) {
			$RepAlly = array();
			$Data[$i]['RepId'] = $item->Id;
			$Data[$i]['FullName'] = $item->FullName;
			$Data[$i]['TOffers'] = $item->CountOffersAsOwner();
			$Data[$i]['TTargets'] = $item->CountTargetsAsUser();
			
			//Looking for allies for this Rep which from choosed Company 
			$tmp = User::QueryArray(
				QQ::AndCondition(	
					QQ::Equal(
					  QQN::User()->AccountId,$companyId
					),
					QQ::Equal(
						QQN::User()->UserAsAllies->UserOwnerId,$item->Id
					)
				)
			);
			foreach ($tmp as $v) {
				$RepAlly[] = $v->Id;
			}
			//Looking  how many accounts ally give to the rep
			$accountsFrom = Thread::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Thread()->ReceiverUserId,$item->Id),
					QQ::In(QQN::Thread()->SenderUserId,$RepAlly)
				)
			);
			
			$Data[$i]['FromAlly'] = $accountsFrom;
			
			//Looking  how many accounts rep give to the ally
			$accountsTo = Thread::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Thread()->SenderUserId,$item->Id),
					QQ::In(QQN::Thread()->ReceiverUserId,$RepAlly)
				)
			);
			
			$Data[$i]['ToAlly'] = $accountsTo;
			
			$i++;
		}
		$this->dataSummary = $Data;
		$this->dtgRepsSummary->DataSource =  $this->dataSummary;
		$this->intCompanyId = $companyId;		
		unset($_SESSION["companyId"]);
	}
	
	public function dtgRepsDetailsGiven_Bind(){
		static $r=0;
		//Details for Selected Rep
		$i=0;
		$Data = array();
		if(isset($_SESSION['repId'])) $RepId = $_SESSION['repId'];
		else $RepId = 0;
		
		//if(isset($_SESSION['repId'])) QApplication::ExecuteJavascript(printf("alert('%s')",$_SESSION['repId']));
		$allies  = User::LoadArrayByUserAsAllies($RepId);
		$thr = new Thread();
		//Given 
		foreach ($allies as $item) {
			$accountsTo = Thread::QueryArray(
				QQ::AndCondition(
					QQ::AndCondition(
						QQ::Equal(QQN::Thread()->SenderUserId,$RepId),
						QQ::Equal(QQN::Thread()->ReceiverUserId,$item->Id)
					),
					QQ::Equal(QQN::Thread()->ReceiverUser->AccountId,$this->intCompanyId)
				)	
			);
			foreach ($accountsTo as $account) {
				$Data[$i]['Ally'] = $item->FullName;
				$Data[$i]['Account'] = $account->Account->Name;
				$Data[$i]['Date'] = $account->DateTime->__toString();
				$i++;
			}
			
		}
		$this->dataRepsGiven = $Data;		

		$objUser = unserialize($_SESSION['User']);	
		
		$this->dtgRepsDetailsGiven->DataSource =   $this->dataRepsGiven;		

	}

	public function dtgRepsDetailsReceived_Bind(){
		
		//Details for Selected Rep
		$i=0;
		$Data = array();
		
		if(isset($_SESSION["repId"])) $RepId = $_SESSION["repId"];
		else $RepId = 0;
		$allies  = User::LoadArrayByUserAsAllies($RepId);
		
		//Received
		foreach ($allies as $item) {
			$accountsFrom = Thread::QueryArray(
				QQ::AndCondition(
					QQ::AndCondition(
						QQ::Equal(QQN::Thread()->SenderUserId,$item->Id),
						QQ::Equal(QQN::Thread()->ReceiverUserId,$RepId)
					),
					QQ::Equal(QQN::Thread()->SenderUser->AccountId,$this->intCompanyId)
				)	
			);
			
			
			
			foreach ($accountsFrom as $account) {
				$Data[$i]['Ally'] = $item->FullName;
				$Data[$i]['Account'] = $account->Account->Name;
				$Data[$i]['Date'] = $account->DateTime->__toString();
				$i++;
			}
			
		}
		$this->dataRepsReceived = $Data;
		$this->dtgRepsDetailsReceived->DataSource =  $this->dataRepsReceived;
		$this->intRepId = $RepId;
		unset($_SESSION["repId"]);
	}
		
	public function DeleteButton_Render(User $objUser) {
		$this->btnDelButton = new QImageButton($this->dtgRepsSummary);
		$this->btnDelButton->ImageUrl="images/x_red.gif";
		$this->btnDelButton->SetCustomStyle('cursor','pointer');
		$this->btnDelButton->AddAction(new QClickEvent(),new QConfirmAction('Are you sure???'));
		$this->btnDelButton->AddAction(new QClickEvent(),new QAjaxAction('deleteAlly'));
		$this->btnDelButton->ActionParameter = $objUser->Id;
		
		return $this->btnDelButton->Render(false);
	}
	
	
	protected function CompanyCompare($a, $b){
	return ($a['Company'] > $b['Company']) ? -1 : 1;}
	
	protected function CompanyRCompare($a, $b){
	return ($a['Company'] < $b['Company']) ? -1 : 1;}
	
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
			
		/* Ally: Ally invited*/
		/* User: User whom invite ally*/
		/* Link: link to signup */
		
		$variablesArray['ally']=$this->txtFullName->Text;
		$variablesArray['user']= $objUser->FullName;
		$variablesArray['link']= (__DOMAIN__) . '/signup_manager_invite.php?username=' . $objUser->UserDetail->CodeName . '&referral=' . $objUser->Id . '&fname=' . $this->txtFullName->Text . '&email=' . $this->txtEmail->Text;
				
		/* End Mail Variables */
		$this->strTemplate = __TEMPLATES_MAIL__ . '/manager.html';
		
		$this->objMessage->ReadTemplate($this->strTemplate);
		$this->objMessage->HtmlBody = $this->objMessage->ApplyVariablesToTemplate($variablesArray);
		
		/*$this->objMessage->From = 'Allyforce ' . QApplication::Translate('Invite') .'<noreply@allyforce.com>';*/
		$this->objMessage->From = $objUser->FullName .'<noreply@allyforce.com>';
		$this->objMessage->To = $this->txtEmail->Text;
		$this->objMessage->Subject = $objUser->FullName . ' wants to help you beat quota!';
		QEmailServer::Send($this->objMessage);
		
		$this->lblMessage->Text ="Your invite was sent sucessfully to " . $this->txtFullName->Text;
		$this->lblMessage->Display = True;
		return true;
	}
	
	public function company_Click($strFormId, $strControlId, $strParameter) {
    	$_SESSION["companyId"] = $strParameter;
    	$_SESSION["repId"] = $this->intRepId;
	}
	
	public function rep_Click($strFormId, $strControlId, $strParameter) {
    	$_SESSION["repId"] = $strParameter;
    	$_SESSION["companyId"] = $this->intCompanyId;
	}
}
?>