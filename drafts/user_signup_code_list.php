<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the UserSignupCode class.  It uses the code-generated
	 * UserSignupCodeDataGrid control which has meta-methods to help with
	 * easily creating/defining UserSignupCode columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both user_signup_code_list.php AND
	 * user_signup_code_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class UserSignupCodeListForm extends QForm {
		// Local instance of the Meta DataGrid to list UserSignupCodes
		protected $dtgUserSignupCodes;

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
			$this->dtgUserSignupCodes = new UserSignupCodeDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgUserSignupCodes->CssClass = 'datagrid';
			$this->dtgUserSignupCodes->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgUserSignupCodes->Paginator = new QPaginator($this->dtgUserSignupCodes);
			$this->dtgUserSignupCodes->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/user_signup_code_edit.php';
			$this->dtgUserSignupCodes->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for user_signup_code's properties, or you
			// can traverse down QQN::user_signup_code() to display fields that are down the hierarchy)
			$this->dtgUserSignupCodes->MetaAddColumn(QQN::UserSignupCode()->User);
			$this->dtgUserSignupCodes->MetaAddColumn(QQN::UserSignupCode()->GropeCode);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// user_signup_code_list.tpl.php as the included HTML template file
	UserSignupCodeListForm::Run('UserSignupCodeListForm');
?>