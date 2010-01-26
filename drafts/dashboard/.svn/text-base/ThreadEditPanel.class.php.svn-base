<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Thread class.  It uses the code-generated
	 * ThreadMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Thread columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both thread_edit.php AND
	 * thread_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ThreadEditPanel extends QPanel {
		// Local instance of the ThreadMetaControl
		protected $mctThread;

		// Controls for Thread's Data Fields
		public $lblId;
		public $lstSenderUser;
		public $lstReceiverUser;
		public $txtSubject;
		public $calDateTime;
		public $lstLastUser;
		public $lstAccount;
		public $txtMessageTypeId;

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
			$this->strTemplate = 'ThreadEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the ThreadMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctThread = ThreadMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on Thread's data fields
			$this->lblId = $this->mctThread->lblId_Create();
			$this->lstSenderUser = $this->mctThread->lstSenderUser_Create();
			$this->lstReceiverUser = $this->mctThread->lstReceiverUser_Create();
			$this->txtSubject = $this->mctThread->txtSubject_Create();
			$this->calDateTime = $this->mctThread->calDateTime_Create();
			$this->lstLastUser = $this->mctThread->lstLastUser_Create();
			$this->lstAccount = $this->mctThread->lstAccount_Create();
			$this->txtMessageTypeId = $this->mctThread->txtMessageTypeId_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Thread') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctThread->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ThreadMetaControl
			$this->mctThread->SaveThread();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ThreadMetaControl
			$this->mctThread->DeleteThread();
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