<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the UserDetails class.  It uses the code-generated
	 * UserDetailsMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a UserDetails columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both user_details_edit.php AND
	 * user_details_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class UserDetailsEditPanel extends QPanel {
		// Local instance of the UserDetailsMetaControl
		protected $mctUserDetails;

		// Controls for UserDetails's Data Fields
		public $lblId;
		public $txtCodeName;
		public $txtFName;
		public $txtLName;
		public $txtTitle;
		public $txtCity;
		public $txtRegion;
		public $txtZipCode;
		public $txtSolutions;
		public $txtTerritory;
		public $txtPicture;
		public $txtBackupEmail;
		public $txtReseller;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'UserDetailsEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the UserDetailsMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctUserDetails = UserDetailsMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on UserDetails's data fields
			$this->lblId = $this->mctUserDetails->lblId_Create();
			$this->txtCodeName = $this->mctUserDetails->txtCodeName_Create();
			$this->txtFName = $this->mctUserDetails->txtFName_Create();
			$this->txtLName = $this->mctUserDetails->txtLName_Create();
			$this->txtTitle = $this->mctUserDetails->txtTitle_Create();
			$this->txtCity = $this->mctUserDetails->txtCity_Create();
			$this->txtRegion = $this->mctUserDetails->txtRegion_Create();
			$this->txtZipCode = $this->mctUserDetails->txtZipCode_Create();
			$this->txtSolutions = $this->mctUserDetails->txtSolutions_Create();
			$this->txtTerritory = $this->mctUserDetails->txtTerritory_Create();
			$this->txtPicture = $this->mctUserDetails->txtPicture_Create();
			$this->txtBackupEmail = $this->mctUserDetails->txtBackupEmail_Create();
			$this->txtReseller = $this->mctUserDetails->txtReseller_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('UserDetails') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctUserDetails->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the UserDetailsMetaControl
			$this->mctUserDetails->SaveUserDetails();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the UserDetailsMetaControl
			$this->mctUserDetails->DeleteUserDetails();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	}
?>