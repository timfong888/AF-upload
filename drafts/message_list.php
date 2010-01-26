<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Message class.  It uses the code-generated
	 * MessageDataGrid control which has meta-methods to help with
	 * easily creating/defining Message columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both message_list.php AND
	 * message_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class MessageListForm extends QForm {
		// Local instance of the Meta DataGrid to list Messages
		protected $dtgMessages;

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
			$this->dtgMessages = new MessageDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgMessages->CssClass = 'datagrid';
			$this->dtgMessages->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgMessages->Paginator = new QPaginator($this->dtgMessages);
			$this->dtgMessages->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/message_edit.php';
			$this->dtgMessages->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

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
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// message_list.tpl.php as the included HTML template file
	MessageListForm::Run('MessageListForm');
?>