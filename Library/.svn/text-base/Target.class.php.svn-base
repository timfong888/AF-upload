<?php
// Class to manage targets information in My Profile Webpage
// Template: profile.tpl.php

require_once("TargetCP.class.php");

class TargetForm extends QForm {

	protected $pnlAddTarget;
	protected $pnlUploadTarget;
	protected $pnlTargetDisplay;
	protected $txtNewTarget;
	protected $btnAddTarget;
	protected $txtTarget;
	
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
		$this->txtNewTarget->Width="200";
		
		$this->btnAddTarget = new QButton($this->pnlAddTarget,"btnAddTarget");
		$this->btnAddTarget->CssClass =  "button";
		$this->btnAddTarget->Text = "Add";

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
		
		//Load all targets
		$objUser = unserialize($_SESSION['User']);
		$objTargetArray = Target::LoadArrayByUserId($objUser->Id,QQ::Clause(QQ::OrderBy(QQN::Target()->Account->Name)));
		$i=0;
		
		
		foreach($objTargetArray as $objTarget){
			$this->pnlTargetArray[$i] = new TargetCP($this->pnlTargetDisplay,"pnlTarget" . $objTarget->AccountId,$objTarget);
			
			
			 
			$i++;
		}

	}

	protected function btnAddTarget_Click($strFormId, $strControlId, $strParameter) {

		if($this->txtNewTarget->Text == ''){
			$this->txtNewTarget->Warning = "You must be enter a targer company name!";
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
				#QApplication::DisplayAlert("New account was added successfully");
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
			#QApplication::DisplayAlert("New account was added successfully");
		}
		
		$this->txtNewTarget->Text = "";
		
		$this->pnlTargetDisplay->RemoveChildControls(true);
		
	
		//Load all targets
		$objUser = unserialize($_SESSION['User']);
		$objTargetArray = Target::LoadArrayByUserId($objUser->Id,QQ::Clause(QQ::OrderBy(QQN::Target()->Account->Name)));
		$i=0;
		foreach($objTargetArray as $objTarget){
			$this->pnlTargetArray[$i] = new TargetCP($this->pnlTargetDisplay,"pnlTarget" . $objTarget->AccountId,$objTarget); 
			$i++;
		}	
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
		exit();
	}
}
?>