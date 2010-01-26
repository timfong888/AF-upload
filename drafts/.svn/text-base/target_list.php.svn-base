<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Target class.  It uses the code-generated
	 * TargetDataGrid control which has meta-methods to help with
	 * easily creating/defining Target columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both target_list.php AND
	 * target_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class TargetListForm extends QForm {
		// Local instance of the Meta DataGrid to list Targets
		protected $dtgTargets;

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
			$this->dtgTargets = new TargetDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgTargets->CssClass = 'datagrid';
			$this->dtgTargets->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgTargets->Paginator = new QPaginator($this->dtgTargets);
			$this->dtgTargets->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/target_edit.php';
			$this->dtgTargets->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for target's properties, or you
			// can traverse down QQN::target() to display fields that are down the hierarchy)
			$this->dtgTargets->MetaAddColumn(QQN::Target()->User);
			$this->dtgTargets->MetaAddColumn(QQN::Target()->Account);
			$this->dtgTargets->MetaAddColumn('Datetimestamp');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// target_list.tpl.php as the included HTML template file
	TargetListForm::Run('TargetListForm');
?>