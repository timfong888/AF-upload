<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Thread class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Thread objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this ThreadListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class ThreadListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Threads
		public $dtgThreads;

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
			$this->Template = 'ThreadListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgThreads = new ThreadDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgThreads->CssClass = 'datagrid';
			$this->dtgThreads->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgThreads->Paginator = new QPaginator($this->dtgThreads);
			$this->dtgThreads->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgThreads->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for thread's properties, or you
			// can traverse down QQN::thread() to display fields that are down the hierarchy)
			$this->dtgThreads->MetaAddColumn('Id');
			$this->dtgThreads->MetaAddColumn(QQN::Thread()->SenderUser);
			$this->dtgThreads->MetaAddColumn(QQN::Thread()->ReceiverUser);
			$this->dtgThreads->MetaAddColumn('Subject');
			$this->dtgThreads->MetaAddColumn('DateTime');
			$this->dtgThreads->MetaAddColumn(QQN::Thread()->LastUser);
			$this->dtgThreads->MetaAddColumn(QQN::Thread()->Account);
			$this->dtgThreads->MetaAddColumn('MessageTypeId');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Thread');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new ThreadEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new ThreadEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>