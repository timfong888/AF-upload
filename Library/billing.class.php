<?php
// Class to manage user home in Billing Web Page
// Template: billing.tpl.php

class BillingForm extends QForm {

    protected $objUser;
	
	protected $btnSave;

	protected function Form_Create() {
		if(isset($_SESSION['User']))
			$this->objUser = unserialize($_SESSION['User']);	 
		}
	protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
		
	}
}
?>