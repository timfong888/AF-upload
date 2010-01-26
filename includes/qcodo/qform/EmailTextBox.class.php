<?php
// A subclass of TextBox with its validate method overridden -- Validate will also ensure
// that the Text is a valid email address

class EmailTextBox extends QTextBox {
	//////////
	// Methods
	//////////
/* this protects the email accounts */
	protected $ProvidersBannedArray = array(1 => 'spam.com',2=>'spam.com', 3 => 'spam.com');

	public function Validate() {
		if (parent::Validate()) {
			
			$Provider = explode("@",$this->strText);
			$Provider = strtolower(end($Provider));
			
			
			if ($this->strText != "") {
				// RegExp taken from php.net
				if ( !eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*"."@([a-z0-9]+([\.-][a-z0-9]{1,})+)*$", $this->strText) ) {
					$this->strValidationError = QApplication::Translate("Invalid e-mail address");
					return false;
				}

				
				if(array_search($Provider, $this->ProvidersBannedArray)){
					$this->strValidationError = QApplication::Translate("Please provide a Work Email");
					return false;
				}
					
			}
		} else
		return false;

		$this->strValidationError = "";
		return true;
	}
}
?>