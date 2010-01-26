<?php

class SignupFinish extends QForm
{
	protected $lstListbox;
    protected $txtOffered;
    protected $btnAdd;
 	protected $pnlWaitIcon;
 	protected $btnFinish;
 	protected $lblReferal;
 	protected $lblOffer1;
    protected $lblOffer2;
    protected $lblOffer3;
 	protected $objUser;
 	
	protected function Form_Create()
	{
		
			$this->objUser = unserialize($_SESSION['User']);
			
			/* removing this -- getting errors and don't need it 
			$ReferalArray = User::LoadArrayByUserAsAllies($this->objUser->Id);
			
			$this->lblReferal = new QLabel($this);
			$this->lblReferal->Text = $ReferalArray[0]->FullName;
			
			$OfferArray=Offer::LoadArrayByUserOwnerId($ReferalArray[0]->Id);
	
			$this->lblOffer1 = new QLabel($this);
			$this->lblOffer1->Text = $OfferArray[0]->Account->Name;
			
			$this->lblOffer2 = new QLabel($this);
			$this->lblOffer2->Text = $OfferArray[1]->Account->Name;
			
			$this->lblOffer3 = new QLabel($this);
			$this->lblOffer3->Text = $OfferArray[2]->Account->Name;
			*/		
			
            $this->lstListbox = new QListBox($this);
            $this->lstListbox->Height="200";
            $this->lstListbox->Width="300";
            $this->lstListbox->Rows = 6;
            $this->lstListbox->AddAction(new QChangeEvent(), new QAjaxAction('lstListbox_Change'));


   
            $this->txtOffered = new QAutoCompleteTextBox($this,'txtOffered');	
			$this->txtOffered->UseAjax=true;	
			$this->pnlWaitIcon = new QWaitIcon($this, 'loader');
			$this->txtOffered->AddAction(new QAutoCompleteTextBoxEvent(), new QAjaxAction('txtOffered_Change', $this->pnlWaitIcon));
			$this->txtOffered->Width="245";
			$this->txtOffered->CssClass="textbox";
       
            $this->btnAdd = new QButton($this);
            $this->btnAdd->Text = 'Add Item';
           
            $objSubmitListItemActions = array(
                new QToggleEnableAction($this->btnAdd, false),
                new QToggleEnableAction($this->txtOffered, false),
                new QToggleEnableAction($this->lstListbox, false),
                new QAjaxAction('AddListItem')
            );

            $this->btnAdd->AddActionArray(new QClickEvent(0, "qcodo.getControl('txtOffered').value != ''"), $objSubmitListItemActions);
            
            
			$this->btnFinish = new QButton($this);
			$this->btnFinish->Text = QApplication::Translate('Finished!');
			$this->btnFinish->AddAction(new QClickEvent(), new QAjaxAction('btnFinish_Click'));
			$this->btnFinish->PrimaryButton = true;
			$this->btnFinish->Enabled = false;
			$this->btnFinish->CssClass = "Signup_submit";
        }


        protected function AddListItem() {          
            if (!strlen(trim($this->txtOffered->Text))) {
                $this->txtOffered->Warning = 'Nothing was entered';
            } else {  
                $this->lstListbox->AddItem(trim($this->txtOffered->Text), trim($this->txtOffered->Text));
            }
            $this->txtOffered->Text = '';
            $this->txtOffered->Enabled = true;
            $this->lstListbox->Enabled = true;
            $this->btnAdd->Enabled = true;
            if($this->lstListbox->ItemCount == 2)
            {
            	$this->btnFinish->Enabled=true;
            }
        }
        
        protected function txtOffered_Change($strFormId, $strControlId, $strParameter){
			$objAccountArray = Account::QueryArray( QQ::Like(QQN::Account()->Name,$strParameter.'%'), QQ::Clause(QQ::OrderBy(QQN::Account()->Name)));
			foreach($objAccountArray as $objAccount){
				echo $objAccount->Name . "\n";
			}
			exit;
		}	
				
		protected function btnFinish_Click($strFormId, $strControlId, $strParameter) {
		
		for($i=0;$i<2;$i++)
		{	
			
			$objOffer = new Offer();	
			$objOffer->UserOwnerId = $this->objUser->Id;	
			$objAccount = Account::LoadByName($this->lstListbox->GetItem($i)->Value);	
			if($objAccount)	
				$objOffer->AccountId = $objAccount->Id;	
			else {	
				$objAccount = new Account();	
				$objAccount->Name = $this->lstListbox->GetItem($i)->Value;	
				$objOffer->AccountId = $objAccount->Save();
				}
	
			$objOfferId = $objOffer->Save();	
							
		}
			
			QApplication::Redirect(__SUBDIRECTORY__ . '/allies.php');
			
			return true;
		}
}