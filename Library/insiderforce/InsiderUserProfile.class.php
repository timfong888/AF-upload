<?php
class InsiderUserProfileForm extends QForm{
	
	protected $objUser;
	protected $lblUserName;
	protected $dtgOffers;
	protected $dtgTargets;
	protected $txtFirstName;
	protected $txtLastName;
	protected $txtEMail;
	protected $txtCompany;
	protected $btnRequest;
	protected $wrtMessage;
	
	protected function Form_Create() {
		
		$userName= QApplication::QueryString('username');
		$userName= str_replace('_',' ',$userName);
		$this->objUser = User::QuerySingle(QQ::Equal(QQN::User()->UserDetail->CodeName,$userName));
		
		$name = $userName;
		
		$this->lblUserName = new QLabel($this);
		$this->lblUserName->Text = $name;
		
		$this->txtFirstName = new QTextBox($this);
		$this->txtLastName = new QTextBox($this);
		$this->txtEMail = new EmailTextBox($this);
		$this->txtCompany = new QTextBox($this);
		$this->wrtMessage = new QWriteBox($this);
		$this->wrtMessage->Rows = 4;
		
		$this->btnRequest = new QButton($this);
		$this->btnRequest->Text = 'Request Contacts';
		$this->btnRequest->AddAction(new QClickEvent(),new QAjaxAction('btnClick'));
		
		
		$this->dtgOffers = new QDataGrid($this);
		$this->dtgOffers->UseAjax = true;
		$this->dtgOffers->CellPadding = 5;
		$this->dtgOffers->CellSpacing = 5;
		$this->dtgOffers->AddColumn(new QDataGridColumn('Account Name','<center><a href="/account/<?= str_replace(" ","_",$_ITEM->Account->Name); ?>"><?= $_ITEM->Account->Name ?></a></center>',  'HtmlEntities=false',array('OrderByClause' => 				QQ::OrderBy(QQN::Offer()->Account->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Offer()->Account->Name,false))));
		$this->dtgOffers->GetColumn(0)->Width = '200px';
		
		$this->dtgOffers->SortColumnIndex = 0;
			
		$objStyle = $this->dtgOffers->RowStyle;
		$objStyle->FontSize = 14;
		$objStyle->BackColor = 'a7e0fd';
		$objStyle = $this->dtgOffers->AlternateRowStyle;
		$objStyle->BackColor = '#eaeaea';
		$objStyle = $this->dtgOffers->HeaderRowStyle;
		$objStyle->ForeColor = 'white';
		$objStyle->BackColor = '#990066';		
		$objStyle = $this->dtgOffers->HeaderLinkStyle;
		$objStyle->ForeColor = 'white';

		$this->dtgOffers->SetDataBinder('dtgOffers_Bind', $this); 
		
		$this->dtgTargets = new QDataGrid($this);
		$this->dtgTargets->CellPadding = 5;
		$this->dtgTargets->CellSpacing = 5;
		$this->dtgTargets->UseAjax = true;
		$this->dtgTargets->AddColumn(new QDataGridColumn('Account Name','<center><a href="/account/<?= str_replace(" ","_",$_ITEM->Account->Name); ?>"><?= $_ITEM->Account->Name ?></a></center>','HtmlEntities=false',array('OrderByClause' => 				QQ::OrderBy(QQN::Target()->Account->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Target()->Account->Name,false))));
		$this->dtgTargets->GetColumn(0)->Width = '200px';
		$this->dtgTargets->SortColumnIndex = 0;
			
		$objStyle = $this->dtgTargets->RowStyle;
		$objStyle->FontSize = 14;
		$objStyle->BackColor = 'a7e0fd';
		$objStyle = $this->dtgTargets->AlternateRowStyle;
		$objStyle->BackColor = '#eaeaea';
		$objStyle = $this->dtgTargets->HeaderRowStyle;
		$objStyle->ForeColor = 'white';
		$objStyle->BackColor = '#990066';		
		$objStyle = $this->dtgTargets->HeaderLinkStyle;
		$objStyle->ForeColor = 'white';

		$this->dtgTargets->SetDataBinder('dtgTargets_Bind', $this); 	
	}
	
	public function dtgOffers_Bind(){
			$this->dtgOffers->DataSource = Offer::LoadArrayByUserOwnerId($this->objUser->Id,QQ::Clause($this->dtgOffers->OrderByClause));
						
	}
	
	public function dtgTargets_Bind(){
			$this->dtgTargets->DataSource = Target::LoadArrayByUserId($this->objUser->Id,QQ::Clause($this->dtgTargets->OrderByClause));				
	}
	
	public function radioRender(Offer $offer) {
		$ControlId = 'radio'.$offer->Id;
		$radio = $this->GetControl($ControlId);
		if(!$radio) {	
			$radio = new QRadioButton($this->dtgOffers,$ControlId);
			$radio->SetCustomAttribute('value',$offer->Account->Name); 
			$radio->ActionParameter =  $offer->Id;
			$actionArray = array (new QAjaxAction('checkClick'), new QJavaScriptAction("radioSelect('$ControlId');"));	
			$radio->AddActionArray(new QClickEvent(),$actionArray);	
		}
		return $radio->Render(false);
	}
	
	public function checkRender(Target $target) {
		$ControlId = 'check'.$target->AccountId;
		$check = $this->GetControl($ControlId);
		if(!$check) {	
			$check = new QCheckBox($this->dtgTargets,$ControlId);
			$check->SetCustomAttribute('value',$target->Account->Name); 
			$check->ActionParameter =  $target->AccountId;
			$actionArray = array (new QAjaxAction('radioClick'), new QJavaScriptAction("checkSelect('$ControlId');"));	
			$check->AddActionArray(new QClickEvent(),$actionArray);	
		}
		return $check->Render(false);
	}
	
	protected function checkClick($strFormId, $strControlId, $strParameter) {	
	}
	
	
	protected function radioClick($strFormId, $strControlId, $strParameter) {	
	}
	
	protected function btnClick($strFormId, $strControlId, $strParameter) {	
		
		if(!$this->txtEMail->Validate()) {
			$this->txtEMail->Text = "";
			$this->txtEMail->Warning = "Invalid email address";
		}
		else {	
			$FirstName = $this->txtFirstName->Text;
			$LastName = $this->txtLastName->Text;
			$Mail = $this->txtEMail->Text;
			$Mssg = $this->wrtMessage->Text;
			
			$arrCheckable =explode(' ',$_POST['Qform__FormCheckableControls']);
			$arrKeys = array_keys($_POST);
			$accounts = '';
			$checkedControls  = array_intersect($arrKeys,$arrCheckable);
			foreach ($checkedControls as $control) {
				$cntrl = $this->GetControl($control);
				if (stripos($cntrl->ControlId,'radio') === 0) $action = ' Get ';
				else $action = ' Offer ';
				$accName = $cntrl->GetCustomAttribute('value');
				$accounts .= $accName.',';				
			}
			
			$message = 'User '.$LastName.' '.$FirstName.'    Email: '.$Mail.'  Message: '.$Mssg.' want to '.$action.' Contacts: '.$accounts;
			
			echo $message;exit();
			$to = $this->objUser->Username;
			//mail($to,'Subject',$message);
		}	
	}
	
	
}
?>