<?php
// Class to manage targets information in My Profile Webpage
// Template: profile.tpl.php

require_once("TargetCP.class.php");

class TargetForm extends QForm {

	protected $objUser;
	protected $objTarget;
	protected $pnlAddTarget;
	protected $pnlUploadTarget;
	protected $pnlTargetDisplay;
	protected $txtNewTarget;
	protected $btnAddTarget;
	protected $txtTarget;
	protected $dtgTargets;
	protected $btnDelButton;
	
	protected $pnlTargetArray;
	
	protected $pnlWaitIcon;
 

	protected function Form_Create() {

		$this->pnlAddTarget = new QPanel($this);
		$this->pnlAddTarget->Position = QPosition::Relative;
		$this->pnlAddTarget->CssClass = 'pnlAddTarget';
		$this->pnlAddTarget->Template = __TEMPLATES__ . "/addnewtarget.tpl.php";

		/* Define control as autocomplete control */
		$this->txtNewTarget = new QAutoCompleteTextBox($this);
		// QAutoCompleteTextBoxEvent Action is needed for Ajax respond
		$this->txtNewTarget->UseAjax = true; 
		$this->pnlWaitIcon = new QWaitIcon($this, 'loader');
//		$this->pnlWaitIcon->blnDisplay = true;
		
		$this->txtNewTarget->AddAction(new QAutoCompleteTextBoxEvent(), new QAjaxAction('txtNewTarget_Change', $this->pnlWaitIcon));
		
		$this->btnAddTarget = new QButton($this->pnlAddTarget,"btnAddTarget");
		$this->btnAddTarget->CssClass =  "button";
		$this->btnAddTarget->Text = "Add Account to Targets";

		$this->btnAddTarget->AddAction(new QClickEvent(), new QAjaxAction('btnAddTarget_Click'));
		$this->txtNewTarget->AddAction(new QEnterKeyEvent(), new QAjaxAction('btnAddTarget_Click'));
		$this->txtNewTarget->AddAction(new QEnterKeyEvent(), new QTerminateAction());

		$this->pnlUploadTarget = new QPanel($this);
		$this->pnlUploadTarget->Position = QPosition::Relative;
		$this->pnlUploadTarget->CssClass = 'pnlUploadTarget';
		//$this->pnlUploadTarget->AutoRenderChildren = true;
		
		$this->pnlTargetDisplay = new QPanel($this);
		$this->pnlTargetDisplay->Position = QPosition::Relative;
		$this->pnlTargetDisplay->CssClass = 'pnlTargetDisplay';
		$this->pnlTargetDisplay->AutoRenderChildren = true; 
		
		// Add Target Data Grid
		
		$this->dtgTargets = new QDataGrid($this);
		$this->dtgTargets->CellPadding = 5;
		$this->dtgTargets->CellSpacing = 5;
		$this->dtgTargets->UseAjax = true;
		$this->dtgTargets->AddColumn(new QDataGridColumn("Del", '<?= $_FORM->DeleteButton_Render($_ITEM) ?>', 'Width=10', 'HtmlEntities=false')); //add TF 11-27-08
		$this->dtgTargets->AddColumn(new QDataGridColumn('Target Account','<a href="/account_detail.php?aid=<?= str_replace(" ","_",$_ITEM->Account->Id); ?>"><?= $_ITEM->Account->Name ?></a>','HtmlEntities=false',array('OrderByClause' => QQ::OrderBy(QQN::Target()->Account->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Target()->Account->Name,false))));

		$this->dtgTargets->SortColumnIndex = 0;
		
		$objStyle = $this->dtgTargets->GetColumn(0);
		$objStyle->CssClass = "col0";	
		$objStyle = $this->dtgTargets->RowStyle;
		//$objStyle->FontSize = 14;
		//$objStyle->BackColor = 'a7e0fd';
		$objStyle = $this->dtgTargets->AlternateRowStyle;
		//$objStyle->BackColor = '#eaeaea';
		$objStyle = $this->dtgTargets->HeaderRowStyle;
		//$objStyle->ForeColor = 'white';
		//$objStyle->BackColor = '#328AA4';		
		$objStyle = $this->dtgTargets->HeaderLinkStyle;
		//$objStyle->ForeColor = 'white';

		$this->dtgTargets->SetDataBinder('dtgTargets_Bind', $this); 
		// End Load Target DataGrid
				
		//Load all targets
		$objUser = unserialize($_SESSION['User']);
		
		/* no longer creating a Target Array because should be in the Target DataGrid
		$objTargetArray = Target::LoadArrayByUserId($objUser->Id,QQ::Clause(QQ::OrderBy(QQN::Target()->Account->Name)));
		$i=0;
		
		
		foreach($objTargetArray as $objTarget){
			$this->pnlTargetArray[$i] = new TargetCP($this->pnlTargetDisplay,"pnlTarget" . $objTarget->AccountId,$objTarget);
			
			
			 
			$i++;
		}
		
		*/
		
	}

	public function dtgTargets_Bind(){
			$objUser = unserialize($_SESSION['User']);
			$this->dtgTargets->DataSource = Target::LoadArrayByUserId($objUser->Id,QQ::Clause(QQ::OrderBy(QQN::Target()->Account->Name)));
			//$this->dtgTargets->DataSource = Target::LoadArrayByUserId($this->objUser->Id,QQ::Clause($this->dtgTargets->OrderByClause));				
	}
	
	protected function btnAddTarget_Click($strFormId, $strControlId, $strParameter) {

		if($this->txtNewTarget->Text == ''){
			$this->txtNewTarget->Warning = "You must be enter a target company name!";
			return false;
		}

		$objUser = unserialize($_SESSION['User']);

		$objAccount = Account::LoadByName($this->txtNewTarget->Text);
		if($objAccount){
			$objUser->AccountId = $objAccount->Id;
			$objTarget = Target::LoadByUserIdAccountId($objUser->Id,$objAccount->Id);
			if($objTarget){
				QApplication::DisplayAlert("This account already exists!!");
			} else {
				$objTarget = new Target();
				$objTarget->UserId = $objUser->Id;
				$objTarget->AccountId = $objAccount->Id;
				$objTarget->Save();
				QApplication::DisplayAlert("New account was added successfully");
			}
		}
		else {
			$objAccount = new Account();
			$objAccount->Name = $this->txtNewTarget->Text;
			$aid = $objAccount->Save();	
			
			$objDatabase = QApplication::$Database[1];
			$strQuery = 'UPDATE `account` SET `sndx`=SOUNDEX("'.$objAccount->Name.'") WHERE `Id`='.$aid;
    		$objDbResult = $objDatabase->Query($strQuery);	
				
			$objTarget = new Target();
			$objTarget->UserId = $objUser->Id;
			$objTarget->AccountId = $objAccount->Id;
			$objTarget->Save();
			QApplication::DisplayAlert("New account was added successfully");
		}
		
		$this->txtNewTarget->Text = "";
		
		$this->pnlTargetDisplay->RemoveChildControls(true);
		
	
		//Load all targets
		$objUser = unserialize($_SESSION['User']);
		
		/* comment this section out because using dtgTargets_Bind
		$objTargetArray = Target::LoadArrayByUserId($objUser->Id,QQ::Clause(QQ::OrderBy(QQN::Target()->Account->Name)));
		$i=0;
		foreach($objTargetArray as $objTarget){
			$this->pnlTargetArray[$i] = new TargetCP($this->pnlTargetDisplay,"pnlTarget" . $objTarget->AccountId,$objTarget); 
			$i++;
		}
		*/
			
	}
	
	/* Implement server side metod to handle autocomplete */
	public function txtNewTarget_Change($strFormId, $strControlId, $strParameter){
		
		if((ord($strParameter) > 65) && (ord($strParameter) < 125)){
			$objAccountArray = Account::QueryArray( QQ::Like(QQN::Account()->Name,$strParameter.'%'), QQ::Clause(QQ::OrderBy(QQN::Account()->Name)));
//		header("Content-type: application/xml; charset=UTF-8");
		foreach($objAccountArray as $objAccount){
			echo ($objAccount->Name) . "\n";
		}
		
		}
		//exit();
	}
	
	public function DeleteButton_Render(Target $objTarget) {
		$this->btnDelButton = new QImageButton($this->dtgTargets);
		$this->btnDelButton->ImageUrl="images/x_red.gif";
		$this->btnDelButton->SetCustomStyle('cursor','pointer');
		$this->btnDelButton->AddAction(new QClickEvent(),new QConfirmAction('Are you sure???'));
		$this->btnDelButton->AddAction(new QClickEvent(),new QAjaxAction('deleteTarget'));
		//$this->btnDelButton->ActionParameter = $objTarget ->Id;
		
		return $this->btnDelButton->Render(false);
	}
	
	protected function deleteTarget($strFormId, $strControlId, $strParameter) {
		$objUser = unserialize($_SESSION['User']);
		$target = UserGen::Load($strParameter);

		$this->dtgTargets->Refresh();
	}

}
?>