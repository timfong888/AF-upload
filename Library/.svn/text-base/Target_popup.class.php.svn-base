<?php
	/**
	 * Class for processing pop up window 
	 * 'Cut and Paste large strings of Target Names' functionality
	 */
class Target_popup extends QForm {
	
	protected $btnSubmit;
	protected $txtStrings;
	protected $lblTitle;
	protected $pnlFace;
	protected $sndx_indx;
	protected $sndx;
	protected $exst_accnt;
	protected $new_accnt;
	protected $added;
	
	protected function Form_Create() {
		
			$objAccountArray = Account::QueryArray(QQ::All());
			foreach($objAccountArray as $objAccount){
				$metaphone =  metaphone($objAccount->Name);
				$this->sndx_indx[] =  $metaphone;
				$this->sndx[$metaphone] = $objAccount->Name;
			}
		
			$this->btnSubmit =  new QButton($this);		
			$this->btnSubmit->Text = 'Submit';
			$this->btnSubmit->CssClass = "Signup_submit";
			$this->btnSubmit->PrimaryButton = true;
			$this->btnSubmit->AddAction(new QClickEvent(),new QServerAction('btnSub_Click'));
			
			$this->txtStrings = new QWriteBox($this);
			$this->txtStrings->Columns = '50';
			$this->txtStrings->Rows = '20';
			
			
			$this->lblTitle = new QLabel($this);
			$this->lblTitle->Text='Cut and paste Target Accounts here';
			
			$this->pnlFace = new QPanel($this);
			$this->pnlFace->Position = QPosition::Relative;
			$this->pnlFace->Template = __TEMPLATES__ . "/pasteTarget.tpl.php";
		
	}
	
	protected function Form_PreRender() {
		
		if(isset($_POST['pop'])) {
			
			if($_POST['pop'] == '2') {
				
				$this->exst_accnt = array();
				$this->new_accnt = array();
				
				$this->lblTitle = new QLabel($this);
				$this->lblTitle->Text='Verify and Accept Accounts';				
				$array = split("[\n;]",$this->txtStrings->Text);
				
				foreach ($array as $word) {		
					if(in_array(metaphone($word),$this->sndx_indx)) $this->exst_accnt[$this->sndx[metaphone($word)]] = $word;
					else $this->new_accnt[] = $word; 
				}		
			
				$this->btnSubmit->Text = 'Add Targets!';
				
				$this->pnlFace = new QPanel($this);
				$this->pnlFace->Position = QPosition::Relative;
				$this->pnlFace->Template = __TEMPLATES__ . "/pasteTarget2.tpl.php";
			}
		
			if($_POST['pop'] == '3') {
				
				$this->added = array();
						
				$objUser = unserialize($_SESSION['User']);
		
				if (isset($_POST['exst_accnt_chk'])) {
				
					foreach ($_POST['exst_accnt_chk'] as $name) {
						
						$objAccount = Account::LoadByName($name);
						$objUser->AccountId = $objAccount->Id;
						$objTarget = Target::LoadByUserIdAccountId($objUser->Id,$objAccount->Id);
						if($objTarget){
							QApplication::DisplayAlert("This account ($name) already exists!!");
						} else {
							$this->added[] = $name;
							$objTarget = new Target();
							$objTarget->UserId = $objUser->Id;
							$objTarget->AccountId = $objAccount->Id;
							$objTarget->Save();
						}
					}
				}
				if (isset($_POST['new_accnt_chk'])) {
					
					foreach ($_POST['new_accnt_chk'] as $name) {
			
						$objAccount = new Account();
						$objAccount->Name = $name;
						$objAccount->Save();	
							
						$objTarget = new Target();
						$objTarget->UserId = $objUser->Id;
						$objTarget->AccountId = $objAccount->Id;
						$objTarget->Save();
						
						$this->added[] = $name;
					}
				}
				//Visual
				$this->lblTitle = new QLabel($this);
				$this->lblTitle->Text='Successfully Added Accounts to Your Targets!';
				
				$this->pnlFace = new QPanel($this);
				$this->pnlFace->Position = QPosition::Relative;
				$this->pnlFace->Template = __TEMPLATES__ . "/pasteTarget3.tpl.php";
			}	
			
			
		}
		
	}
	protected function btnSub_Click() {}
}



?>