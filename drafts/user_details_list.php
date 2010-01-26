<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the UserDetails class.  It uses the code-generated
	 * UserDetailsDataGrid control which has meta-methods to help with
	 * easily creating/defining UserDetails columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both user_details_list.php AND
	 * user_details_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class UserDetailsListForm extends QForm {
		// Local instance of the Meta DataGrid to list UserDetailses
		protected $dtgUserDetailses;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Instantiate the Meta DataGrid
			$this->dtgUserDetailses = new UserDetailsDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgUserDetailses->CssClass = 'datagrid';
			$this->dtgUserDetailses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgUserDetailses->Paginator = new QPaginator($this->dtgUserDetailses);
			$this->dtgUserDetailses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/user_details_edit.php';
			$this->dtgUserDetailses->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

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
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// user_details_list.tpl.php as the included HTML template file
	UserDetailsListForm::Run('UserDetailsListForm');
?>