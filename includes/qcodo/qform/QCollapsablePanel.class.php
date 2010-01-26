<?php
	require('includes/prepend.inc.php');		/* if you DO NOT have "includes/" in your include_path */
	
	// Control for representing a "Collapsable" panel, that looks like this
	//  __________________________________________
	// | ________________________________________ |
	// ||[-]           header                    ||
	// ||________________________________________||
	// | ________________________________________ |
	// ||                                        ||
	// ||                                        ||
	// ||              body                      ||
	// ||                                        ||
	// ||________________________________________||
	// |__________________________________________|
	// 
	// Clicking the toggle button expands/collapses the body but leaves the header visible.
	// 
	// Is UseAjax is false, this is done purely on the client side. This means that the current 
	// state is not communicated back to the control object when the button is clicked. 
	// The control also has methods to Expand, Collapse and Toggle programatically.  
	// The header and body are standard QPanel's so you can put anything in them.
	// 
	// Note that, when extending this control, most likey you do not want to use it with a template, 
	// however you can use templates for the header and the body. If you do use a template for the header
	// make sure to render at least the toggle botton.
	// 
	// properties:
	// "Header":   the header panel
	// "Body":     the body panel
	// "Button":   the +/- toggle button (which is a QImageButton) 
	// "Expanded": true if the panel is currently expanded, false if it's collapsed
	// "UseAjax":  if true, clicking the toggle button will invoke an ajax request back to the control and thus
	//             save the current state 
	// 
	class QCollapsablePanel extends QPanel {
		protected $pnlHeader;
		protected $pnlBody;
		protected $btnToggle;
		
		protected $blnExpanded;
		protected $blnUseAjax = true;
		
		protected $strExpandedImagePath;
		protected $strCollapsedImagePath;

		// constructor arguments:
		// blnExpanded:           initial state of the body
		// blnUseAjax:            use ajax actions instead of javascript actions
		// strExpandedImagePath:  the image path for the expanded state image ([-]). 
		//                        Default is QTreeNav's [-] image.
		// strCollapsedImagePath: the image path for the collapsed state image ([+])
		//                        Default is QTreeNav's [+] image.
		public function __construct($objParentObject, $strControlId = null, $blnExpanded = false, $blnUseAjax = true, $strExpandedImagePath = null, $strCollapsedImagePath = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->blnExpanded = $blnExpanded;
			$this->blnUseAjax = $blnUseAjax;
			if (!$this->strExpandedImagePath) {
				$this->strExpandedImagePath =  __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/treenav_expanded.png";
			}
			if (!$this->strCollapsedImagePath) {
				$this->strCollapsedImagePath =  __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/treenav_not_expanded.png";
			}
			
			$this->AutoRenderChildren = true;
			
			$this->btnToggle = new QImageButton($this);
			$this->btnToggle->ImageUrl = $blnExpanded ? $this->strExpandedImagePath : $this->strCollapsedImagePath;

			$this->pnlHeader = new QPanel($this);
			$this->pnlBody = new QPanel($this);
			if ($this->blnUseAjax) {
				$this->pnlBody->Visible = $blnExpanded;
			} else {
				$this->pnlBody->DisplayStyle = $blnExpanded ? QDisplayStyle::Block : QDisplayStyle::None;
			}
			
			$this->setButtonAction();
		}
		
		protected function setButtonAction() {
			$this->btnToggle->RemoveAllActions(QClickEvent::EventName);
			if ($this->blnUseAjax) {
				$this->btnToggle->AddAction(new QClickEvent(), new QAjaxControlAction($this, "btnToggle_Click"));
			} else {
				$onclick = "el=document.getElementById('".$this->pnlBody->ControlId."'); imgEl=document.getElementById('".$this->btnToggle->ControlId."'); if (el.style.display=='block') {el.style.display='none'; imgEl.src = '".$this->strCollapsedImagePath."';} else {el.style.display='block'; imgEl.src = '".$this->strExpandedImagePath."';}"; 
				$this->btnToggle->AddAction(new QClickEvent(), new QJavaScriptAction($onclick));
			}
		}

		public function btnToggle_Click($strFormId, $strControlId, $strParameter) {
			$this->ToggleBody();
		}
		
		public function ToggleBody() {
			if ($this->blnExpanded) {
				$this->CollapseBody();
			} else {
				$this->ExpandBody();
			}
		}
		
		public function ExpandBody() {
			if ($this->blnUseAjax) {
				$this->pnlBody->Visible = true;
			} else {
				$this->pnlBody->DisplayStyle = QDisplayStyle::Block;
			}
			if ($this->btnToggle instanceof QImageButton) {
				$this->btnToggle->ImageUrl = $this->strExpandedImagePath;
			}
			$this->blnExpanded = true;
			$this->MarkAsModified();
		}
		
		public function CollapseBody() {
			if ($this->blnUseAjax) {
				$this->pnlBody->Visible = false;
			} else {
				$this->pnlBody->DisplayStyle = QDisplayStyle::None;
			}
			$this->btnToggle->ImageUrl = $this->strCollapsedImagePath;
			$this->blnExpanded = false;
			$this->MarkAsModified();
		}
		
		/////////////////////////
		// Public Properties: GET
		/////////////////////////
		public function __get($strName) {
			switch ($strName) {
				case "Header": return $this->pnlHeader;
				case "Body": return $this->pnlBody;
				case "Button": return $this->btnToggle;
				case "Expanded": return $this->blnExpanded;
				case "UseAjax": return $this->blnUseAjax;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
		/////////////////////////
		// Public Properties: SET
		/////////////////////////
		public function __set($strName, $mixValue) {
			$this->blnModified = true;

			switch ($strName) {
				case "Expanded":
					try {
						$this->blnExpanded = QType::Cast($mixValue, QType::Boolean);
						if ($this->blnExpanded) {
							$this->ExpandBody();
						} else {
							$this->CollapseBody();
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "Header":
					try {
						$this->pnlHeader = QType::Cast($mixValue, 'QControl');
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "Body":
					try {
						$this->pnlBody = QType::Cast($mixValue, 'QControl');
						$this->setButtonAction();
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "Button":
					try {
						$this->RemoveChildControl($this->btnToggle->ControlId, true);
						$this->btnToggle = QType::Cast($mixValue, 'QControl');
						$this->setButtonAction();
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "UseAjax":
					try {
						$this->blnUseAjax = QType::Cast($mixValue, QType::Boolean);
						$this->setButtonAction();
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					break;
			}
		}
	}
?>