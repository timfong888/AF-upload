<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the UserDetails class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of UserDetails objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this UserDetailsListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class UserDetailsListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list UserDetailses
		public $dtgUserDetailses;

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
			$this->Template = 'UserDetailsListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgUserDetailses = new UserDetailsDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgUserDetailses->CssClass = 'datagrid';
			$this->dtgUserDetailses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgUserDetailses->Paginator = new QPaginator($this->dtgUserDetailses);
			$this->dtgUserDetailses->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgUserDetailses->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for user_details's properties, or you
			// can traverse down QQN::user_details() to display fields that are down the hierarchy)
			$this->dtgUserDetailses->MetaAddColumn('Id');
			$this->dtgUserDetailses->MetaAddColumn('CodeName');
			$this->dtgUserDetailses->MetaAddColumn('FName');
			$this->dtgUserDetailses->MetaAddColumn('LName');
			$this->dtgUserDetailses->MetaAddColumn('Title');
			$this->dtgUserDetailses->MetaAddColumn('City');
			$this->dtgUserDetailses->MetaAddColumn('Region');
			$this->dtgUserDetailses->MetaAddColumn('ZipCode');
			$this->dtgUserDetailses->MetaAddColumn('Solutions');
			$this->dtgUserDetailses->MetaAddColumn('Territory');
			$this->dtgUserDetailses->MetaAddColumn('Picture');
			$this->dtgUserDetailses->MetaAddColumn('BackupEmail');
			$this->dtgUserDetailses->MetaAddColumn('Reseller');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('UserDetails');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new UserDetailsEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new UserDetailsEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>