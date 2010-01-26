<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Contact class.  It uses the code-generated
	 * ContactDataGrid control which has meta-methods to help with
	 * easily creating/defining Contact columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both contact_list.php AND
	 * contact_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ContactListForm extends QForm {
		// Local instance of the Meta DataGrid to list Contacts
		protected $dtgContacts;

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
			$this->dtgContacts = new ContactDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgContacts->CssClass = 'datagrid';
			$this->dtgContacts->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgContacts->Paginator = new QPaginator($this->dtgContacts);
			$this->dtgContacts->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/contact_edit.php';
			$this->dtgContacts->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for contact's properties, or you
			// can traverse down QQN::contact() to display fields that are down the hierarchy)
			$this->dtgContacts->MetaAddColumn(QQN::Contact()->Offer);
			$this->dtgContacts->MetaAddColumn('Name');
			$this->dtgContacts->MetaAddColumn('Email');
			$this->dtgContacts->MetaAddColumn('Title');
			$this->dtgContacts->MetaAddColumn('Phone');
			$this->dtgContacts->MetaAddColumn('Id');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// contact_list.tpl.php as the included HTML template file
	ContactListForm::Run('ContactListForm');
?>