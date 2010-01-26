<?php

class TargetCP extends QCollapsablePanel  {

	public $lblName;
	public $lblAllies;
	public $lblRecomended;

	public $objTarget;
	public $objRecommendedAlly;
	public $objAlliesArray;
	public $dtgAllies;

	public function __construct($objParentObject, $strControlId = null, $objTarget) {
		// First, let's call the Parent's __constructor
		try {
			parent::__construct($objParentObject, $strControlId);
		} catch (QCallerException $objExc) {
			$objExc->IncrementOffset();
			throw $objExc;
		}
		
		$this->objTarget = $objTarget;
		$this->CssClass = "target_list";

		$objUser = unserialize($_SESSION['User']);

		/*$this->Button->SetCustomStyle("padding-top", "5px");*/
//		$this->Button->SetCustomStyle("float", "left");
//		$this->SetCustomStyle("float", "left");

		$this->Header->Template = __TEMPLATES__ . "/TargetCPHeader.tpl.php";
		$this->Header->CssClass = "Target_header";
		$this->Header->blnIsBlockElement = false;
		$this->blnIsBlockElement = false;
		
		$this->SetCustomStyle("position", "relative");
		$this->Header->SetCustomStyle("display", "inline");

		$this->lblName = new QLabel($this->Header);
		$this->lblName->SetCustomStyle("width", "100px");
		$this->lblName->Text = $this->objTarget->Account->Name;
		$this->lblName->CssClass = "Target_Offered";
		$this->lblName->blnIsBlockElement = false;
			
		$AlliesArray = $objUser->GetUserAsAlliesArray();
		
		$objOffersArray = Offer::QueryArray(QQ::Equal(QQN::Offer()->AccountId,$objTarget->AccountId));//select all users  from offers table who offering this target
		
			if(count($objOffersArray) == 1) {//if only one element in array - get it as ally
				
				$this->objRecommendedAlly = $objOffersArray[0];
			}
			else {
		
				$offerNoMessage=array();
				
				$offers = Offer::LoadArrayByAccountId($objTarget->AccountId);
				foreach ($offers as $offr) {	
					$offrid[] = $offr->Id; 	
				}
			
				foreach ($objOffersArray as $offer) {//else traveling array and select quantity of messages from message table where this user is present
					
					$count=Message::QueryCount(
						QQ::AndCondition(
							QQ::OrCondition(QQ::Equal(QQN::Message()->FromUserId,$offer->UserOwnerId),
											QQ::Equal(QQN::Message()->ToUserId,$offer->UserOwnerId)),	
							QQ::In(QQN::Message()->OfferId,$offrid)
						));	
					if($count==0) $offerNoMessage[]=$offer;//if count iz zero add him in new array
				}
				if(count($offerNoMessage) == 1) {// if count of users in  new array equals 1 then get him as ally
					
					$this->objRecommendedAlly = $objOffersArray[0];
				}
				else {
					
					$max=0;
					foreach ($offerNoMessage as $offer)//else select count of offers from user which presents in targets list of  future ally
					{
						 $strQuery = 'SELECT COUNT(`offer`.`Id`) cnt FROM `offer` 
						 				INNER JOIN `target` ON `offer`.`account_id`=`target`.`Account_id` 
						 					WHERE `offer`.`user_owner_id`='.($objUser->Id).' AND `target`.`User_id`='.($offer->UserOwnerId).'';
						 $objDatabase = QApplication::$Database[1];
						 $objDbResult = $objDatabase->Query($strQuery);
						 while ($Row = $objDbResult->FetchRow()) {
					     	if($Row[0] > $max) {//get ally with maximum count 
					      		$max = $Row[0];
					      		$this->objRecommendedAlly = $offer;
					      		
					      	}
					     }		
					}
		
				}
			}
			
			
		$this->lblRecomended = new QLabel($this->Header);		
		//$this->lblRecomended->SetCustomStyle("border", "solid");
		$this->lblRecomended->SetCustomStyle("width", "220px");
		$this->lblRecomended->SetCustomStyle("text-align","right");
		$this->lblRecomended->HtmlEntities = false;
		$this->lblRecomended->Text = !empty($this->objRecommendedAlly) ? ('<a href="message_request.php?aid='.($this->objRecommendedAlly->UserOwner->Id).'&acid='.($this->objRecommendedAlly->AccountId).'&type=1">'.($this->objRecommendedAlly->UserOwner->FullName).'</a>') : '';
		$this->lblRecomended->CssClass = "Account_target_threads";	
			
		
		$intAllies = 0;
		foreach($AlliesArray as $Ally){
			$Offer = Offer::LoadByUserOwnerIdAccountId($Ally->Id,$this->objTarget->Account->Id);
			if($Offer)
				$intAllies++;
		}			
		
		$this->lblAllies = new QLabel($this->Header);
		/* comment out */
		/*
		$this->lblAllies->SetCustomStyle("width", "33%");
		$this->lblAllies->SetCustomStyle("margin-left", "33%");
		*/
		
		$this->lblAllies->SetCustomStyle("text-align", "center");
		$this->lblAllies->Text = $intAllies;
		$this->lblAllies->CssClass = "Account_target_howmany_offer";

		

		//$this->Body->Template = __TEMPLATES__ . "/TargetCPBody.tpl.php";
		$this->Body->AutoRenderChildren = true;
		$this->Body->CssClass = "Target_body";

		$this->dtgAllies = new QDataGrid($this->Body);
		$this->dtgAllies->CssClass = 'datagrid_target';

		$this->dtgAllies->CellPadding = 5;
		$this->dtgAllies->CellSpacing = 0;

		// Let's enable AJAX!!!
		$this->dtgAllies->UseAjax = true;

		// Enable Pagination, and set to 5 items per page
		$objPaginator = new QPaginator($this->dtgAllies);
		$this->dtgAllies->Paginator = $objPaginator;
		$this->dtgAllies->ItemsPerPage = 10;
			
		$this->dtgAllies->AddColumn(new QDataGridColumn('Ally', '<?= $_ITEM->UserOwner->FullName ?>', 'Width=120',
		array('OrderByClause' => QQ::OrderBy(QQN::Offer()->UserOwner->FullName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Offer()->UserOwner->FullName,false))));
		$this->dtgAllies->AddColumn(new QDataGridColumn('Ally Company', '<?= $_ITEM->UserOwner->AccountIdObject->Name ?>', 'Width=120',
		array('OrderByClause' => QQ::OrderBy(QQN::Offer()->UserOwner->AccountIdObject->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Offer()->UserOwner->AccountIdObject->Name,false))));
		$this->dtgAllies->AddColumn(new QDataGridColumn('Offered Contacts', '<?= $_ITEM->CountContacts(); ?>', 'Width=120'));
		$this->dtgAllies->AddColumn(new QDataGridColumn('# Matched Target you can give', '<?=  $_CONTROL->ParentControl->ParentControl->MatchColumn_Render($_ITEM) ?>', 'Width=120'));
		$this->dtgAllies->AddColumn(new QDataGridColumn('Admin', '<?=  $_CONTROL->ParentControl->ParentControl->RequestColumn_Render($_ITEM) ?>', 'HtmlEntities=false'));
			
		/*		 $this->dtgAllies->AddColumn(new QDataGridColumn('Admin', '<?= $_CONTROL->ParentControl->AdminColumn_Render($_ITEM) ?'.'>', 'HtmlEntities=false'));*/
			
		// Let's make sorting Ajax-ified
		$this->dtgAllies->UseAjax = true;

		// Let's pre-default the sorting by ticket (column index #3)
		$this->dtgAllies->SortColumnIndex = 0;
			
		// Make the DataGrid look nice
		$objStyle = $this->dtgAllies->RowStyle;
		$objStyle->FontSize = 12;
		$objStyle->BackColor = 'a7e0fd';

		// AlternateRowStyle -- was commented out //
		$objStyle = $this->dtgAllies->AlternateRowStyle;
		$objStyle->BackColor = '#eaeaea';

		$objStyle = $this->dtgAllies->HeaderRowStyle;
		$objStyle->ForeColor = 'white';
		$objStyle->BackColor = '#0066CC';
			
		$objStyle = $this->dtgAllies->HeaderLinkStyle;
		$objStyle->ForeColor = 'white';

		$this->dtgAllies->SetDataBinder('dtgAllies_Bind', $this);


	}

	public function dtgAllies_Bind(){

		$objUser = unserialize($_SESSION['User']);

		$AlliesArray = $objUser->GetUserAsAlliesArray();
		$AlliesIdArray = array();
		
		foreach($AlliesArray as $Ally)
			array_push($AlliesIdArray,$Ally->Id);		
		
		$this->dtgAllies->DataSource =   Offer::QueryArray(
											QQ::AndCondition(
												QQ::In(QQN::Offer()->UserOwnerId,$AlliesIdArray),
												QQ::Equal(QQN::Offer()->AccountId,$this->objTarget->AccountId)
											),
											QQ::Clause($this->dtgAllies->OrderByClause,$this->dtgAllies->LimitClause)
										);
			
		$this->dtgAllies->TotalItemCount = count($AlliesIdArray);
	}

	public function MatchColumn_Render(Offer $objOffer) {

		$objUser = unserialize($_SESSION['User']);

		$InArray = array();

		$objMyOfferArray = Offer::LoadArrayByUserOwnerId($objUser->Id);
		foreach($objMyOfferArray as $objMyOffer)
		array_push($InArray,$objMyOffer->AccountId);


		$objHisTargetArray = Target::QueryArray(
		QQ::AndCondition(
		QQ::Equal(QQN::Target()->UserId,$objOffer->UserOwnerId),
		QQ::In(QQN::Target()->AccountId,$InArray)
		));

		return count($objHisTargetArray);
			
	}

	public function RequestColumn_Render(Offer $objOffer) {
		// Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
		$strControlId = 'btnRequest' .  $objOffer->Id .'' . $this->dtgAllies->CurrentRowIndex;

		$btnRequest = $this->objForm->GetControl($strControlId);
		if (!$btnRequest) {
			// Only create/instantiate a new Edit button for this Row if it doesn't yet exist
			$btnRequest = new QButton($this->dtgAllies, $strControlId);
			$btnRequest->Text = 'Request';

			// Define an Event Handler on the Button
			// Because the event handler, itself, is defined in the control, we use QAjaxControlAction instead of QAjaxAction
			$btnRequest->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnRequest_Click'));
		}

		// Finally, update the Actionparameter for our button to store the $objPerson's ID.
		$btnRequest->ActionParameter = $objOffer->Id;

		// Return the Rendered Button Control
		return $btnRequest->Render(false);
	}

	public function btnRequest_Click($strFormId, $strControlId, $strParameter) {

		$objOffer = Offer::Load($strParameter);
			
		QApplication::Redirect(__SUBDIRECTORY__ . '/message_request.php?aid=' . $objOffer->UserOwner->Id . '&acid=' . $objOffer->Account->Id . '&type=' . MessageType::Request);
			
			
	}


}
?>