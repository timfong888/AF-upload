<?php

class OfferCP extends QCollapsablePanel  {

	public $lblName;
	public $lblAllies;
	public $lblThreads;

	public $objOffer;
	
	public $objAlliesArray;
	public $dtgContacts;

	public function __construct($objParentObject, $strControlId = null, $objOffer) {
		// First, let's call the Parent's __constructor
		try {
			parent::__construct($objParentObject, $strControlId);
		} catch (QCallerException $objExc) {
			$objExc->IncrementOffset();
			throw $objExc;
		}
		
		
		$objUser = unserialize($_SESSION['User']);
		
		$this->objOffer = $objOffer;
		$this->CssClass = "offer_list";

		/* commented out
		$this->Button->SetCustomStyle("padding-top", "5px");
		*/
		
//		$this->Button->SetCustomStyle("float", "left");

		$this->Header->Template = __TEMPLATES__ . "/OfferCPHeader.tpl.php";
		$this->Header->CssClass = "Offer_header";

		$intNContacts = Contact::CountByOfferId($this->objOffer->Id);		
		
		$this->lblName = new QLabel($this->Header);
		$this->lblName->CssClass = "Account_Offered";
		
		$this->lblName->SetCustomStyle("width", "33%");
		$this->lblName->Text = $this->objOffer->Account->Name  . "(" . $intNContacts . ")";
		

		$AlliesArray = $objUser->GetUserAsAlliesArray();
		
		$intAllies = 0;
		foreach($AlliesArray as $Ally){
			$Target = Target::LoadByUserIdAccountId($Ally->Id,$this->objOffer->Account->Id);
			if($Target)
				$intAllies++;
		}	
		
		$this->lblAllies = new QLabel($this->Header);
		$this->lblAllies->CssClass = "numballieswhotarget";	
		/* commenting style out -- just use CSS */
		/*
		$this->lblAllies->SetCustomStyle("width", "33%");
		$this->lblAllies->SetCustomStyle("margin-left", "33%");
		$this->lblAllies->SetCustomStyle("text-align", "center");
		*/
		$this->lblAllies->Text = $intAllies;
			
		

		$this->lblThreads = new QLabel($this->Header);
		$this->lblThreads->CssClass = "numballiesgiven_account";
		/* commenting style out -- just use CSS */
		/*
		$this->lblThreads->SetCustomStyle("width", "33%");
		$this->lblThreads->SetCustomStyle("margin-left", "66%");
		$this->lblThreads->SetCustomStyle("text-align", "center");
		*/
		
		$this->lblThreads->Text = $intAllies;
		

		$this->Body->AutoRenderChildren = true;
		$this->Body->CssClass = "Offer_body";

		$this->dtgContacts = new QDataGrid($this->Body);
		$this->dtgContacts->CssClass = 'datagrid_offer';
		$this->dtgContacts->CellPadding = 5;
		$this->dtgContacts->CellSpacing = 0;

		// Let's enable AJAX!!!
		$this->dtgContacts->UseAjax = true;

		// Enable Pagination, and set to 5 items per page
		$objPaginator = new QPaginator($this->dtgContacts);
		$this->dtgContacts->Paginator = $objPaginator; 
		$this->dtgContacts->ItemsPerPage = 10;
		
		 $this->dtgContacts->AddColumn(new QDataGridColumn('Contacts', '<?= $_ITEM->Name ?>', 'Width=120',
		 array('OrderByClause' => QQ::OrderBy(QQN::Contact()->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Contact()->Name,false))));
		 $this->dtgContacts->AddColumn(new QDataGridColumn('Title', '<?= $_ITEM->Title ?>', 'Width=120',
		 array('OrderByClause' => QQ::OrderBy(QQN::Contact()->Title), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Contact()->Title,false))));
		 $this->dtgContacts->AddColumn(new QDataGridColumn('Email', '<?= $_ITEM->Email ?>', 'Width=120'));
		 $this->dtgContacts->AddColumn(new QDataGridColumn('Phone', '<?= $_ITEM->Phone ?>', 'Width=120'));			
		 $this->dtgContacts->AddColumn(new QDataGridColumn('Admin', '<?= $_CONTROL->ParentControl->ParentControl->AdminColumn_Render($_ITEM) ?>', 'HtmlEntities=false'));
	 
		// Let's make sorting Ajax-ified
		$this->dtgContacts->UseAjax = true;

		// Let's pre-default the sorting by ticket (column index #3)
		$this->dtgContacts->SortColumnIndex = 0;
			
		// Make the DataGrid look nice
		$objStyle = $this->dtgContacts->RowStyle;
		$objStyle->FontSize = 12;
		$objStyle->BackColor = 'a7e0fd';

		// Uncommented this section (lines 102-103)//
		$objStyle = $this->dtgContacts->AlternateRowStyle;
		$objStyle->BackColor = '#eaeaea';

		$objStyle = $this->dtgContacts->HeaderRowStyle;
		$objStyle->ForeColor = 'white';
		$objStyle->BackColor = '#990066';
			
		$objStyle = $this->dtgContacts->HeaderLinkStyle;
		$objStyle->ForeColor = 'white';

		$this->dtgContacts->SetDataBinder('dtgContacts_Bind', $this); 


	}

	public function dtgContacts_Bind(){
		
			$this->dtgContacts->DataSource =   Contact::LoadArrayByOfferId($this->objOffer->Id,
											QQ::Clause($this->dtgContacts->OrderByClause,$this->dtgContacts->LimitClause)
											);
											
			$this->dtgContacts->TotalItemCount = Contact::CountByOfferId($this->objOffer->Id);    		
	}

	public function AdminColumn_Render(Contact $objContact) {
		return "<a href=''>EDIT</a>";
			
	}

}

?>