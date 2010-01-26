<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Thread class.  It uses the code-generated
	 * ThreadDataGrid control which has meta-methods to help with
	 * easily creating/defining Thread columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both thread_list.php AND
	 * thread_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ThreadListForm extends QForm {
		// Local instance of the Meta DataGrid to list Threads
		protected $dtgThreads;

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
			$this->dtgThreads = new ThreadDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgThreads->CssClass = 'datagrid';
			$this->dtgThreads->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgThreads->Paginator = new QPaginator($this->dtgThreads);
			$this->dtgThreads->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/thread_edit.php';
			$this->dtgThreads->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

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
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// thread_list.tpl.php as the included HTML template file
	ThreadListForm::Run('ThreadListForm');
?>