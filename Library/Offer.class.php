<?php

// Class to manage offers information in My Offers Webpage

// Template: offer.tpl.php

require_once("OfferCP.class.php");

class OfferForm extends QForm {

	protected $pnlAddOffer;
	protected $pnlUploadOffer;
	protected $pnlOfferDisplay;
	protected $txtNewOffer;
	protected $btnAddOffer;
	protected $txtOffer;
	protected $pnlOfferArray;
    protected $pnlWaitIcon;

	protected function Form_Create() {


		$this->pnlAddOffer = new QPanel($this);
		$this->pnlAddOffer->Position = QPosition::Relative;
		$this->pnlAddOffer->CssClass = 'pnlAddOffer';
		$this->pnlAddOffer->Template = __TEMPLATES__ . "/addnewOffer.tpl.php";

		/* Define control as autocomplete control */
		$this->txtNewOffer = new QAutoCompleteTextBox($this);
		// QAutoCompleteTextBoxEvent Action is needed for Ajax respond

		$this->txtNewOffer->UseAjax = true; 
		$this->txtNewOffer->AddAction(new QAutoCompleteTextBoxEvent(), new QAjaxAction('txtNewOffer_Change'));
 		$this->pnlWaitIcon = new QWaitIcon($this, 'loader');
 		// $this->pnlWaitIcon->blnDisplay = true;
 		$this->txtNewOffer->AddAction(new QAutoCompleteTextBoxEvent(), new QAjaxAction('txtNewOffer_Change', $this->pnlWaitIcon)); 

		$this->btnAddOffer = new QButton($this->pnlAddOffer,"btnAddOffer");

		$this->btnAddOffer->CssClass =  "button";

		$this->btnAddOffer->Text = "Add";
		$this->txtNewOffer->AddAction(new QEnterKeyEvent(), new QAjaxAction('btnAddOffer_Click'));
		$this->txtNewOffer->AddAction(new QEnterKeyEvent(), new QTerminateAction());
		
		$this->btnAddOffer->AddAction(new QClickEvent(), new QAjaxAction('btnAddOffer_Click'));

		$this->pnlUploadOffer = new QPanel($this);

		$this->pnlUploadOffer->Position = QPosition::Relative;

		$this->pnlUploadOffer->CssClass = 'pnlUploadOffer';

		//$this->pnlUploadOffer->AutoRenderChildren = true;

		$this->pnlOfferDisplay = new QPanel($this);

		$this->pnlOfferDisplay->Position = QPosition::Relative;

		//$this->pnlOfferDisplay->CssClass = 'pnlOfferDisplay';
		//this line AutoRenderChildren was remove in one version-- putting back in...
		$this->pnlOfferDisplay->AutoRenderChildren = true; 

		//Load all Offers

		$objUser = unserialize($_SESSION['User']);

		$objOfferArray = Offer::LoadArrayByUserOwnerId($objUser->Id,QQ::Clause(QQ::OrderBy(QQN::Offer()->Account->Name)));

		$i=0;

		foreach($objOfferArray as $objOffer){

			$this->pnlOfferArray[$i] = new OfferCP($this->pnlOfferDisplay,"pnlOffer" . $objOffer->AccountId,$objOffer); 

			$i++;

		}

	}

	protected function btnAddOffer_Click($strFormId, $strControlId, $strParameter) {
		if($this->txtNewOffer->Text == ''){

			$this->txtNewOffer->Warning = "You must be enter a offer company name!";
			return false;

		}
		$objUser = unserialize($_SESSION['User']);

		$objAccount = Account::LoadByName($this->txtNewOffer->Text);

		if($objAccount){
			$objUser->AccountId = $objAccount->Id;
			$objOffer = Offer::LoadByUserOwnerIdAccountId($objUser->Id,$objAccount->Id);
			if($objOffer){

				QApplication::DisplayAlert("This account already exists!!");

			} else {

				$objOffer = new Offer();
				$objOffer->UserOwnerId = $objUser->Id;
				$objOffer->AccountId = $objAccount->Id;
				$objOffer->Save();

				#QApplication::DisplayAlert("New account was added successfully");
			}
		}

		else {
			$objAccount = new Account();
			$objAccount->Name = $this->txtNewOffer->Text;		
			$aid = $objAccount->Save();				
			$objDatabase = QApplication::$Database[1];			
			$strQuery = 'UPDATE `account` SET `sndx`=SOUNDEX("'.$objAccount->Name.'") WHERE `Id`='.$aid;			 
    		$objDbResult = $objDatabase->Query($strQuery);
				
			$objOffer = new Offer();
			$objOffer->UserOwnerId = $objUser->Id;
			$objOffer->AccountId = $objAccount->Id;
			$objOffer->Save();

			#QApplication::DisplayAlert("New account was added successfully");

		}

		$this->txtNewOffer->Text = "";
		$this->pnlOfferDisplay->RemoveChildControls(true);
		//Load all Offers

		$objUser = unserialize($_SESSION['User']);
		$objOfferArray = Offer::LoadArrayByUserOwnerId($objUser->Id,QQ::Clause(QQ::OrderBy(QQN::Offer()->Account->Name)));

		$i=0;

		foreach($objOfferArray as $objOffer){
			$this->pnlOfferArray[$i] = new OfferCP($this->pnlOfferDisplay,"pnlOffer" . $objOffer->AccountId,$objOffer); 
			$i++;
		}			
	}

	/* Implement server side metod to handle autocomplete */

	public function txtNewOffer_Change($strFormId, $strControlId, $strParameter){
		$objAccountArray = Account::QueryArray( QQ::Like(QQN::Account()->Name,$strParameter.'%'), QQ::Clause(QQ::OrderBy(QQN::Account()->Name)));
		foreach($objAccountArray as $objAccount){

			echo $objAccount->Name . "\n";

		}
		exit;

	}
}

?>