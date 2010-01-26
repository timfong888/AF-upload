<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Message class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Message objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this MessageListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class MessageListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Messages
		public $dtgMessages;

		// Other public QControls in this panel
		public $btnCreateNew;
		public $pxyEdit;

		// Callback Method Names
		protected $strSetEditPanelMethod;
		protected $strCloseEditPanelMethod;
		
		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Record Method Callbacks
			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			// Setup the Template
			$this->Template = 'MessageListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgMessages = new MessageDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgMessages->CssClass = 'datagrid';
			$this->dtgMessages->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgMessages->Paginator = new QPaginator($this->dtgMessages);
			$this->dtgMessages->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgMessages->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for message's properties, or you
			// can traverse down QQN::message() to display fields that are down the hierarchy)
			$this->dtgMessages->MetaAddColumn(QQN::Message()->FromUser);
			$this->dtgMessages->MetaAddColumn(QQN::Message()->ToUser);
			$this->dtgMessages->MetaAddColumn('Body');
			$this->dtgMessages->MetaAddTypeColumn('MessageTypeId', 'MessageType');
			$this->dtgMessages->MetaAddColumn('Id');
			$this->dtgMessages->MetaAddColumn('Subject');
			$this->dtgMessages->MetaAddColumn(QQN::Message()->Offer);
			$this->dtgMessages->MetaAddColumn('DateTime');
			$this->dtgMessages->MetaAddColumn(QQN::Message()->Contact);

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Message');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new MessageEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new MessageEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>