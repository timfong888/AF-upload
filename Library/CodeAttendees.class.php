<?php
// Class to manage invite information in My Offers Webpage

class CodeAttendeesForm extends QForm {

	protected $objUser;
	protected $objAllies;
	protected $dtgAllies;
	protected $strCode;    
	protected $objCodes; 
	protected $txtNewCode;
	protected $btnAddCode;
	protected $lblMessage;  
	protected $strCodeCount;
	
	protected function Form_Create() {
		
		// Add a new Code
		$this->txtNewCode = new QTextbox($this); //textfield
		$this->btnAddCode = new QButton($this); //button
		$this->btnAddCode->Text = QApplication::Translate('Add Code'); 
		$this->btnAddCode->CssClass = 'button';
		$this->btnAddCode->AddAction(new QClickEvent(), new QAjaxAction('btnAddCode_Click'));
		
		// Notification Label
		$this->lblMessage = new QLabel($this);
		$this->lblMessage->Display = false;
		$this->lblMessage->CssClass = "message";
		
		// Add Allies Data Grid
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
		//$this->dtgAllies->GetColumn(0)->Width = '50px';
		$objStyle = $this->dtgAllies->GetColumn(0);
		$objStyle->CssClass = "col0";
		
		$this->dtgAllies->SortColumnIndex = 0;
		
		/*	
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
		*/
		
		$this->dtgAllies->SetDataBinder('dtgAllies_Bind', $this); 
		// End Load Target DataGrid	
	}	
	
	protected function btnAddCode_Click($strFormId, $strControlId, $strParameter) {
		
		$objUser = unserialize($_SESSION['User']);	// grab user from session
		
		$groupCode = GroupCode::LoadBySignupCode($this->txtNewCode->Text);
		if (!$groupCode) {
		    // If not found, create new group code and save it in DB
		    $groupCode = new GroupCode();
	        $groupCode->SignupCode = $this->txtNewCode->Text;
		    $groupCode->Save();			
	    }
		
		$objUser->AssociateGroupCode($groupCode); //associate User with the entered code
		
		$this->objUser->Save();
		$this->lblMessage->Text ="Successfully entered code:" . $this->txtNewCode->Text;
		$this->lblMessage->Display = True;
	}
	
	protected function Form_PreRender() {	 
		$this->objUser = unserialize($_SESSION['User']);
	    $this->objCodes = $this->objUser->GetGroupCodeArray();
	    if(isset($this->objCodes[0]->SignupCode))$this->strCode = $this->objCodes[0]->SignupCode;
		$this->strCodeCount = count($this->objCodes);
		$codes = $this->objUser->GetGroupCodeArray();

	}

	public function dtgAllies_Bind() {
	    $arrAllysExceptMe = array();
	    $arrAllys = User::LoadArrayByGroupCode($this->objCodes[0]->Id);
	    foreach($arrAllys as $ally) {
	        if($ally->Id != $this->objUser->Id) {
	            $arrAllysExceptMe[] = $ally;
	        }
	    }
        $this->dtgAllies->DataSource = $arrAllysExceptMe;
	}
}
?>
