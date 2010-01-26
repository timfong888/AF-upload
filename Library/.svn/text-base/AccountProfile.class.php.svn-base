<?php

class AccountProfileForm extends QForm {
	
	protected $aid;
	protected $lblAccountName;
	protected $dtgOffers;
	protected $dtgTargets;
	
	protected function Form_Create() {
		
		$accountName= QApplication::QueryString('accountname');
		$accountName= str_replace('_',' ',$accountName);
		$account = Account::LoadByName($accountName);
	//	print_r($account);exit();
		$this->aid = $account->Id;
		$name = $account->Name;
		
		$this->lblAccountName = new QLabel($this);
		$this->lblAccountName->Text = $name;
		
		
		$this->dtgOffers = new QDataGrid($this);
		$this->dtgOffers->CellPadding = 5;
		$this->dtgOffers->CellSpacing = 5;
		$this->dtgOffers->AddColumn(new QDataGridColumn('UserName','<center><a href="/user/<?= str_replace(" ","_",$_ITEM->UserOwner->UserDetail->CodeName); ?>"><?= $_ITEM->UserOwner->UserDetail->CodeName ?></a></center>',  'HtmlEntities=false',array('OrderByClause' => 				QQ::OrderBy(QQN::Offer()->UserOwner->UserDetail->CodeName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Offer()->UserOwner->UserDetail->CodeName,false))));
		$this->dtgOffers->AddColumn(new QDataGridColumn('Sample Target Account','<center><a href="/account/<?= $_CONTROL->Form->Target_Render($_ITEM); ?>"><?= $_CONTROL->Form->Target_Render($_ITEM); ?></a></center>','HtmlEntities=false'));
		$this->dtgOffers->GetColumn(0)->Width = '150px';
		$this->dtgOffers->GetColumn(1)->Width = '150px';
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
		$this->dtgTargets->AddColumn(new QDataGridColumn('UserName','<center><a href="/user/<?= str_replace(" ","_",$_ITEM->User->UserDetail->CodeName); ?>"><?= $_ITEM->User->UserDetail->CodeName ?></a></center>','HtmlEntities=false',array('OrderByClause' => 				QQ::OrderBy(QQN::Target()->User->UserDetail->CodeName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Target()->User->UserDetail->CodeName,false))));
		$this->dtgTargets->AddColumn(new QDataGridColumn('Can Offer Account','<center><a href="/account/<?= $_CONTROL->Form->Offer_Render($_ITEM); ?>"><?= $_CONTROL->Form->Offer_Render($_ITEM); ?></a></center>','HtmlEntities=false',array('OrderByClause' => QQ::OrderBy(QQN::Account()->Name), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Account()->Name,false))));
		$this->dtgTargets->GetColumn(0)->Width = '150px';
		$this->dtgTargets->GetColumn(1)->Width = '150px';
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
			$this->dtgOffers->DataSource = Offer::LoadArrayByAccountId($this->aid,QQ::Clause($this->dtgOffers->OrderByClause));	
				
	}
	
	public function dtgTargets_Bind(){
			$this->dtgTargets->DataSource = Target::LoadArrayByAccountId($this->aid,QQ::Clause($this->dtgTargets->OrderByClause));			
	}	
	
	public function Target_Render(Offer $objOffer) {
		$target_name = '';
		$arrTargets = Target::LoadArrayByUserId($objOffer->UserOwnerId);
		if(!empty($arrTargets))
		$target_name = $arrTargets[0]->Account->Name;
		return str_replace(' ','_',$target_name);		
	}

	public function Offer_Render(Target $objTarget) {
		$offer_name = '';
		$arrOffers = Offer::LoadArrayByUserOwnerId($objTarget->UserId);
		if(!empty($arrOffers))
		$offer_name = $arrOffers[0]->Account->Name;
		return str_replace(' ','_',$offer_name);		
	}
	
	
}


?>