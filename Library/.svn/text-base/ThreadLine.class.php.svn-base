<?php

class ThreadLine extends QPanel  {
	
	public $objMessage;

	public function __construct($objParentObject, $strControlId = null, $objMessage) {
		// First, let's call the Parent's __constructor
		try {
			parent::__construct($objParentObject, $strControlId);
		} catch (QCallerException $objExc) {
			$objExc->IncrementOffset();
			throw $objExc;
		}

		$this->objMessage = $objMessage;
		$this->CssClass = "thread_list";
		$this->Template = __TEMPLATES__ . "/thread.tpl.php";
	}
}

?>