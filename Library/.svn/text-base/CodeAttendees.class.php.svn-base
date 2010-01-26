<?php
// Class to manage invite information in My Offers Webpage
// Template: allies.tpl.php

require_once("OfferCP.class.php");
require_once('MailMessage.class.php');

class CodeAttendeesForm extends QForm {

	protected $objUser;
	protected $objAllies;
	protected $dtgAllies;
	protected $strCode;    
	protected $objCodes;     
	
	protected function Form_Create() {
		
		// Add Target Data Grid
		$this->dtgAllies = new QDataGrid($this);
		$this->dtgAllies->CellPadding = 3;
		$this->dtgAllies->CellSpacing = 3;
		$this->dtgAllies->UseAjax = false;
		
		$this->dtgAllies->AddColumn(
		    new QDataGridColumn(
		        'Allies',
		        '<div>
		            <a href="/profile_activity.php?aid=<?= str_replace(" ","_",$_ITEM->Id)?>">
		            <?= $_ITEM->FullName?>
		            </a>
		         </div>',
		        'HtmlEntities=false'
		    )
		);
		$this->dtgAllies->AddColumn(
		    new QDataGridColumn(
		        'Company',
		        '<div><?= Account::LoadById($_ITEM->AccountId)->Name ?></div>',
		        'HtmlEntities=false'
		    )
		);
		$this->dtgAllies->AddColumn( 
		    new QDataGridColumn(
		        'Title',
		        '<div><?= $_ITEM->UserDetail->Title ?></div>',
		        'HtmlEntities=false'
		    )
		);
		$this->dtgAllies->AddColumn(
		    new QDataGridColumn(
		        'Primary City',
		        '<div><?= $_ITEM->UserDetail->City ?></div>',
		        'HtmlEntities=false'
		    )
		);
		$this->dtgAllies->GetColumn(0)->Width = '50px';
		$this->dtgAllies->SortColumnIndex = 0;
			
		$objStyle = $this->dtgAllies->RowStyle;
		$objStyle->FontSize = 12;
		$objStyle->BackColor = 'a7e0fd';
		$objStyle = $this->dtgAllies->AlternateRowStyle;
		$objStyle->BackColor = '#eaeaea';
		$objStyle = $this->dtgAllies->HeaderRowStyle;
		$objStyle->ForeColor = 'white';
		$objStyle->BackColor = '#328AA4';		
		$objStyle = $this->dtgAllies->HeaderLinkStyle;
		$objStyle->ForeColor = 'white';

		$this->dtgAllies->SetDataBinder('dtgAllies_Bind', $this); 
		// End Load Target DataGrid	
	}	
	
	protected function Form_PreRender() {	 
		$objUser = unserialize($_SESSION['User']);
	    $this->objCodes = $objUser->GetGroupCodeArray();
	    $this->strCode = $this->objCodes[0]->SignupCode;
	}

	public function dtgAllies_Bind() {
        $this->dtgAllies->DataSource = User::LoadArrayByGroupCode($this->objCodes[0]->Id);
	}
}
?>
