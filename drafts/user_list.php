<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the User class.  It uses the code-generated
	 * UserDataGrid control which has meta-methods to help with
	 * easily creating/defining User columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both user_list.php AND
	 * user_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class UserListForm extends QForm {
		// Local instance of the Meta DataGrid to list Users
		protected $dtgUsers;

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
			$this->dtgUsers = new UserDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgUsers->CssClass = 'datagrid';
			$this->dtgUsers->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgUsers->Paginator = new QPaginator($this->dtgUsers);
			$this->dtgUsers->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/user_edit.php';
			$this->dtgUsers->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for user's properties, or you
			// can traverse down QQN::user() to display fields that are down the hierarchy)
			$this->dtgUsers->MetaAddColumn('Id');
			$this->dtgUsers->MetaAddColumn('Username');
			$this->dtgUsers->MetaAddColumn('Password');
			$this->dtgUsers->MetaAddColumn('FullName');
			$this->dtgUsers->MetaAddColumn('Active');
			$this->dtgUsers->MetaAddColumn(QQN::User()->AccountIdObject);
			$this->dtgUsers->MetaAddColumn(QQN::User()->UserDetail);
			$this->dtgUsers->MetaAddColumn(QQN::User()->ManagerIdObject);
			$this->dtgUsers->MetaAddColumn('Code');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// user_list.tpl.php as the included HTML template file
	UserListForm::Run('UserListForm');
?>