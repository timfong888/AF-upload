<?php

class MailMessage extends QEmailMessage {

	protected $strTemplate;

	public function ReadTemplate($template){

		$handle = @fopen($template, "r");
		$this->strTemplate = @fread($handle, filesize($template));
		@fclose($handle);
		//return($template_content);
	}

	public function ApplyVariablesToTemplate($variablesArray){

		if (is_array($variablesArray)) {
			foreach ($variablesArray as $needle=>$data) {
				$this->strTemplate = str_replace("{".$needle."}",$data,$this->strTemplate);
			}
		}
		
		return $this->strTemplate;
	}

	public function __get($strName) {
		switch ($strName) {
			//case 'From': return $this->strFrom;
			default:
				try {
					return parent::__get($strName);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
		}
	}	

	public function __set($strName, $mixValue) {
		try {
			switch ($strName) {
				//case 'From': return ($this->strFrom = QType::Cast($mixValue, QType::String));
				default: return (parent::__set($strName, $mixValue));
			}
		} catch (QInvalidCastException $objExc) {
			$objExc->IncrementOffset();
			throw $objExc;
		}
	}
}

?>