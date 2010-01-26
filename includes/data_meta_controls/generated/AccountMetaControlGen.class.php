<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Account class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Account object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AccountMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Account $Account the actual Account data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NameControl
	 * property-read QLabel $NameLabel
	 * property QTextBox $LogoControl
	 * property-read QLabel $LogoLabel
	 * property QTextBox $UrlControl
	 * property-read QLabel $UrlLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class AccountMetaControlGen extends QBaseClass {
		// General Variables
		protected $objAccount;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Account's individual data fields
		protected $lblId;
		protected $txtName;
		protected $txtLogo;
		protected $txtUrl;

		// Controls that allow the viewing of Account's individual data fields
		protected $lblName;
		protected $lblLogo;
		protected $lblUrl;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * AccountMetaControl to edit a single Account object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Account object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AccountMetaControl
		 * @param Account $objAccount new or existing Account object
		 */
		 public function __construct($objParentObject, Account $objAccount) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AccountMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Account object
			$this->objAccount = $objAccount;

			// Figure out if we're Editing or Creating New
			if ($this->objAccount->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
		 * edit, or if we are also allowed to create a new one, etc.
		 * 
		 * @param mixed $objParentObject QForm or QPanel which will be using this AccountMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Account object creation - defaults to CreateOrEdit
 		 * @return AccountMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objAccount = Account::Load($intId);

				// Account was found -- return it!
				if ($objAccount)
					return new AccountMetaControl($objParentObject, $objAccount);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Account object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AccountMetaControl($objParentObject, new Account());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AccountMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Account object creation - defaults to CreateOrEdit
		 * @return AccountMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return AccountMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AccountMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Account object creation - defaults to CreateOrEdit
		 * @return AccountMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return AccountMetaControl::Create($objParentObject, $intId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblId_Create($strControlId = null) {
			$this->lblId = new QLabel($this->objParentObject, $strControlId);
			$this->lblId->Name = QApplication::Translate('Id');
			if ($this->blnEditMode)
				$this->lblId->Text = $this->objAccount->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtName_Create($strControlId = null) {
			$this->txtName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtName->Name = QApplication::Translate('Name');
			$this->txtName->Text = $this->objAccount->Name;
			$this->txtName->Required = true;
			$this->txtName->MaxLength = Account::NameMaxLength;
			return $this->txtName;
		}

		/**
		 * Create and setup QLabel lblName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblName_Create($strControlId = null) {
			$this->lblName = new QLabel($this->objParentObject, $strControlId);
			$this->lblName->Name = QApplication::Translate('Name');
			$this->lblName->Text = $this->objAccount->Name;
			$this->lblName->Required = true;
			return $this->lblName;
		}

		/**
		 * Create and setup QTextBox txtLogo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLogo_Create($strControlId = null) {
			$this->txtLogo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLogo->Name = QApplication::Translate('Logo');
			$this->txtLogo->Text = $this->objAccount->Logo;
			$this->txtLogo->MaxLength = Account::LogoMaxLength;
			return $this->txtLogo;
		}

		/**
		 * Create and setup QLabel lblLogo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLogo_Create($strControlId = null) {
			$this->lblLogo = new QLabel($this->objParentObject, $strControlId);
			$this->lblLogo->Name = QApplication::Translate('Logo');
			$this->lblLogo->Text = $this->objAccount->Logo;
			return $this->lblLogo;
		}

		/**
		 * Create and setup QTextBox txtUrl
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtUrl_Create($strControlId = null) {
			$this->txtUrl = new QTextBox($this->objParentObject, $strControlId);
			$this->txtUrl->Name = QApplication::Translate('Url');
			$this->txtUrl->Text = $this->objAccount->Url;
			$this->txtUrl->MaxLength = Account::UrlMaxLength;
			return $this->txtUrl;
		}

		/**
		 * Create and setup QLabel lblUrl
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUrl_Create($strControlId = null) {
			$this->lblUrl = new QLabel($this->objParentObject, $strControlId);
			$this->lblUrl->Name = QApplication::Translate('Url');
			$this->lblUrl->Text = $this->objAccount->Url;
			return $this->lblUrl;
		}



		/**
		 * Refresh this MetaControl with Data from the local Account object.
		 * @param boolean $blnReload reload Account from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objAccount->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objAccount->Id;

			if ($this->txtName) $this->txtName->Text = $this->objAccount->Name;
			if ($this->lblName) $this->lblName->Text = $this->objAccount->Name;

			if ($this->txtLogo) $this->txtLogo->Text = $this->objAccount->Logo;
			if ($this->lblLogo) $this->lblLogo->Text = $this->objAccount->Logo;

			if ($this->txtUrl) $this->txtUrl->Text = $this->objAccount->Url;
			if ($this->lblUrl) $this->lblUrl->Text = $this->objAccount->Url;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ACCOUNT OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Account instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAccount() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtName) $this->objAccount->Name = $this->txtName->Text;
				if ($this->txtLogo) $this->objAccount->Logo = $this->txtLogo->Text;
				if ($this->txtUrl) $this->objAccount->Url = $this->txtUrl->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Account object
				$this->objAccount->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Account instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAccount() {
			$this->objAccount->Delete();
		}		



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'Account': return $this->objAccount;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Account fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'NameControl':
					if (!$this->txtName) return $this->txtName_Create();
					return $this->txtName;
				case 'NameLabel':
					if (!$this->lblName) return $this->lblName_Create();
					return $this->lblName;
				case 'LogoControl':
					if (!$this->txtLogo) return $this->txtLogo_Create();
					return $this->txtLogo;
				case 'LogoLabel':
					if (!$this->lblLogo) return $this->lblLogo_Create();
					return $this->lblLogo;
				case 'UrlControl':
					if (!$this->txtUrl) return $this->txtUrl_Create();
					return $this->txtUrl;
				case 'UrlLabel':
					if (!$this->lblUrl) return $this->lblUrl_Create();
					return $this->lblUrl;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					// Controls that point to Account fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NameControl':
						return ($this->txtName = QType::Cast($mixValue, 'QControl'));
					case 'LogoControl':
						return ($this->txtLogo = QType::Cast($mixValue, 'QControl'));
					case 'UrlControl':
						return ($this->txtUrl = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>