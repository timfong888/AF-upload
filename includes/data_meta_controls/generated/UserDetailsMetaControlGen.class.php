<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the UserDetails class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single UserDetails object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a UserDetailsMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read UserDetails $UserDetails the actual UserDetails data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $CodeNameControl
	 * property-read QLabel $CodeNameLabel
	 * property QTextBox $FNameControl
	 * property-read QLabel $FNameLabel
	 * property QTextBox $LNameControl
	 * property-read QLabel $LNameLabel
	 * property QTextBox $TitleControl
	 * property-read QLabel $TitleLabel
	 * property QTextBox $CityControl
	 * property-read QLabel $CityLabel
	 * property QTextBox $RegionControl
	 * property-read QLabel $RegionLabel
	 * property QTextBox $ZipCodeControl
	 * property-read QLabel $ZipCodeLabel
	 * property QTextBox $SolutionsControl
	 * property-read QLabel $SolutionsLabel
	 * property QTextBox $TerritoryControl
	 * property-read QLabel $TerritoryLabel
	 * property QTextBox $PictureControl
	 * property-read QLabel $PictureLabel
	 * property QTextBox $BackupEmailControl
	 * property-read QLabel $BackupEmailLabel
	 * property QTextBox $ResellerControl
	 * property-read QLabel $ResellerLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class UserDetailsMetaControlGen extends QBaseClass {
		// General Variables
		protected $objUserDetails;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of UserDetails's individual data fields
		protected $lblId;
		protected $txtCodeName;
		protected $txtFName;
		protected $txtLName;
		protected $txtTitle;
		protected $txtCity;
		protected $txtRegion;
		protected $txtZipCode;
		protected $txtSolutions;
		protected $txtTerritory;
		protected $txtPicture;
		protected $txtBackupEmail;
		protected $txtReseller;

		// Controls that allow the viewing of UserDetails's individual data fields
		protected $lblCodeName;
		protected $lblFName;
		protected $lblLName;
		protected $lblTitle;
		protected $lblCity;
		protected $lblRegion;
		protected $lblZipCode;
		protected $lblSolutions;
		protected $lblTerritory;
		protected $lblPicture;
		protected $lblBackupEmail;
		protected $lblReseller;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * UserDetailsMetaControl to edit a single UserDetails object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single UserDetails object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserDetailsMetaControl
		 * @param UserDetails $objUserDetails new or existing UserDetails object
		 */
		 public function __construct($objParentObject, UserDetails $objUserDetails) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this UserDetailsMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked UserDetails object
			$this->objUserDetails = $objUserDetails;

			// Figure out if we're Editing or Creating New
			if ($this->objUserDetails->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserDetailsMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing UserDetails object creation - defaults to CreateOrEdit
 		 * @return UserDetailsMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objUserDetails = UserDetails::Load($intId);

				// UserDetails was found -- return it!
				if ($objUserDetails)
					return new UserDetailsMetaControl($objParentObject, $objUserDetails);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a UserDetails object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new UserDetailsMetaControl($objParentObject, new UserDetails());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserDetailsMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing UserDetails object creation - defaults to CreateOrEdit
		 * @return UserDetailsMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return UserDetailsMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserDetailsMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing UserDetails object creation - defaults to CreateOrEdit
		 * @return UserDetailsMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return UserDetailsMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objUserDetails->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtCodeName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCodeName_Create($strControlId = null) {
			$this->txtCodeName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCodeName->Name = QApplication::Translate('Code Name');
			$this->txtCodeName->Text = $this->objUserDetails->CodeName;
			$this->txtCodeName->MaxLength = UserDetails::CodeNameMaxLength;
			return $this->txtCodeName;
		}

		/**
		 * Create and setup QLabel lblCodeName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCodeName_Create($strControlId = null) {
			$this->lblCodeName = new QLabel($this->objParentObject, $strControlId);
			$this->lblCodeName->Name = QApplication::Translate('Code Name');
			$this->lblCodeName->Text = $this->objUserDetails->CodeName;
			return $this->lblCodeName;
		}

		/**
		 * Create and setup QTextBox txtFName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFName_Create($strControlId = null) {
			$this->txtFName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFName->Name = QApplication::Translate('F Name');
			$this->txtFName->Text = $this->objUserDetails->FName;
			$this->txtFName->MaxLength = UserDetails::FNameMaxLength;
			return $this->txtFName;
		}

		/**
		 * Create and setup QLabel lblFName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFName_Create($strControlId = null) {
			$this->lblFName = new QLabel($this->objParentObject, $strControlId);
			$this->lblFName->Name = QApplication::Translate('F Name');
			$this->lblFName->Text = $this->objUserDetails->FName;
			return $this->lblFName;
		}

		/**
		 * Create and setup QTextBox txtLName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLName_Create($strControlId = null) {
			$this->txtLName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLName->Name = QApplication::Translate('L Name');
			$this->txtLName->Text = $this->objUserDetails->LName;
			$this->txtLName->Required = true;
			$this->txtLName->MaxLength = UserDetails::LNameMaxLength;
			return $this->txtLName;
		}

		/**
		 * Create and setup QLabel lblLName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLName_Create($strControlId = null) {
			$this->lblLName = new QLabel($this->objParentObject, $strControlId);
			$this->lblLName->Name = QApplication::Translate('L Name');
			$this->lblLName->Text = $this->objUserDetails->LName;
			$this->lblLName->Required = true;
			return $this->lblLName;
		}

		/**
		 * Create and setup QTextBox txtTitle
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTitle_Create($strControlId = null) {
			$this->txtTitle = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTitle->Name = QApplication::Translate('Title');
			$this->txtTitle->Text = $this->objUserDetails->Title;
			$this->txtTitle->MaxLength = UserDetails::TitleMaxLength;
			return $this->txtTitle;
		}

		/**
		 * Create and setup QLabel lblTitle
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTitle_Create($strControlId = null) {
			$this->lblTitle = new QLabel($this->objParentObject, $strControlId);
			$this->lblTitle->Name = QApplication::Translate('Title');
			$this->lblTitle->Text = $this->objUserDetails->Title;
			return $this->lblTitle;
		}

		/**
		 * Create and setup QTextBox txtCity
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCity_Create($strControlId = null) {
			$this->txtCity = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCity->Name = QApplication::Translate('City');
			$this->txtCity->Text = $this->objUserDetails->City;
			$this->txtCity->MaxLength = UserDetails::CityMaxLength;
			return $this->txtCity;
		}

		/**
		 * Create and setup QLabel lblCity
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCity_Create($strControlId = null) {
			$this->lblCity = new QLabel($this->objParentObject, $strControlId);
			$this->lblCity->Name = QApplication::Translate('City');
			$this->lblCity->Text = $this->objUserDetails->City;
			return $this->lblCity;
		}

		/**
		 * Create and setup QTextBox txtRegion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtRegion_Create($strControlId = null) {
			$this->txtRegion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtRegion->Name = QApplication::Translate('Region');
			$this->txtRegion->Text = $this->objUserDetails->Region;
			$this->txtRegion->MaxLength = UserDetails::RegionMaxLength;
			return $this->txtRegion;
		}

		/**
		 * Create and setup QLabel lblRegion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRegion_Create($strControlId = null) {
			$this->lblRegion = new QLabel($this->objParentObject, $strControlId);
			$this->lblRegion->Name = QApplication::Translate('Region');
			$this->lblRegion->Text = $this->objUserDetails->Region;
			return $this->lblRegion;
		}

		/**
		 * Create and setup QTextBox txtZipCode
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtZipCode_Create($strControlId = null) {
			$this->txtZipCode = new QTextBox($this->objParentObject, $strControlId);
			$this->txtZipCode->Name = QApplication::Translate('Zip Code');
			$this->txtZipCode->Text = $this->objUserDetails->ZipCode;
			$this->txtZipCode->MaxLength = UserDetails::ZipCodeMaxLength;
			return $this->txtZipCode;
		}

		/**
		 * Create and setup QLabel lblZipCode
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblZipCode_Create($strControlId = null) {
			$this->lblZipCode = new QLabel($this->objParentObject, $strControlId);
			$this->lblZipCode->Name = QApplication::Translate('Zip Code');
			$this->lblZipCode->Text = $this->objUserDetails->ZipCode;
			return $this->lblZipCode;
		}

		/**
		 * Create and setup QTextBox txtSolutions
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSolutions_Create($strControlId = null) {
			$this->txtSolutions = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSolutions->Name = QApplication::Translate('Solutions');
			$this->txtSolutions->Text = $this->objUserDetails->Solutions;
			$this->txtSolutions->TextMode = QTextMode::MultiLine;
			return $this->txtSolutions;
		}

		/**
		 * Create and setup QLabel lblSolutions
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSolutions_Create($strControlId = null) {
			$this->lblSolutions = new QLabel($this->objParentObject, $strControlId);
			$this->lblSolutions->Name = QApplication::Translate('Solutions');
			$this->lblSolutions->Text = $this->objUserDetails->Solutions;
			return $this->lblSolutions;
		}

		/**
		 * Create and setup QTextBox txtTerritory
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTerritory_Create($strControlId = null) {
			$this->txtTerritory = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTerritory->Name = QApplication::Translate('Territory');
			$this->txtTerritory->Text = $this->objUserDetails->Territory;
			$this->txtTerritory->TextMode = QTextMode::MultiLine;
			return $this->txtTerritory;
		}

		/**
		 * Create and setup QLabel lblTerritory
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTerritory_Create($strControlId = null) {
			$this->lblTerritory = new QLabel($this->objParentObject, $strControlId);
			$this->lblTerritory->Name = QApplication::Translate('Territory');
			$this->lblTerritory->Text = $this->objUserDetails->Territory;
			return $this->lblTerritory;
		}

		/**
		 * Create and setup QTextBox txtPicture
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPicture_Create($strControlId = null) {
			$this->txtPicture = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPicture->Name = QApplication::Translate('Picture');
			$this->txtPicture->Text = $this->objUserDetails->Picture;
			$this->txtPicture->MaxLength = UserDetails::PictureMaxLength;
			return $this->txtPicture;
		}

		/**
		 * Create and setup QLabel lblPicture
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPicture_Create($strControlId = null) {
			$this->lblPicture = new QLabel($this->objParentObject, $strControlId);
			$this->lblPicture->Name = QApplication::Translate('Picture');
			$this->lblPicture->Text = $this->objUserDetails->Picture;
			return $this->lblPicture;
		}

		/**
		 * Create and setup QTextBox txtBackupEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtBackupEmail_Create($strControlId = null) {
			$this->txtBackupEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtBackupEmail->Name = QApplication::Translate('Backup Email');
			$this->txtBackupEmail->Text = $this->objUserDetails->BackupEmail;
			$this->txtBackupEmail->MaxLength = UserDetails::BackupEmailMaxLength;
			return $this->txtBackupEmail;
		}

		/**
		 * Create and setup QLabel lblBackupEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBackupEmail_Create($strControlId = null) {
			$this->lblBackupEmail = new QLabel($this->objParentObject, $strControlId);
			$this->lblBackupEmail->Name = QApplication::Translate('Backup Email');
			$this->lblBackupEmail->Text = $this->objUserDetails->BackupEmail;
			return $this->lblBackupEmail;
		}

		/**
		 * Create and setup QTextBox txtReseller
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtReseller_Create($strControlId = null) {
			$this->txtReseller = new QTextBox($this->objParentObject, $strControlId);
			$this->txtReseller->Name = QApplication::Translate('Reseller');
			$this->txtReseller->Text = $this->objUserDetails->Reseller;
			$this->txtReseller->MaxLength = UserDetails::ResellerMaxLength;
			return $this->txtReseller;
		}

		/**
		 * Create and setup QLabel lblReseller
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReseller_Create($strControlId = null) {
			$this->lblReseller = new QLabel($this->objParentObject, $strControlId);
			$this->lblReseller->Name = QApplication::Translate('Reseller');
			$this->lblReseller->Text = $this->objUserDetails->Reseller;
			return $this->lblReseller;
		}



		/**
		 * Refresh this MetaControl with Data from the local UserDetails object.
		 * @param boolean $blnReload reload UserDetails from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objUserDetails->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objUserDetails->Id;

			if ($this->txtCodeName) $this->txtCodeName->Text = $this->objUserDetails->CodeName;
			if ($this->lblCodeName) $this->lblCodeName->Text = $this->objUserDetails->CodeName;

			if ($this->txtFName) $this->txtFName->Text = $this->objUserDetails->FName;
			if ($this->lblFName) $this->lblFName->Text = $this->objUserDetails->FName;

			if ($this->txtLName) $this->txtLName->Text = $this->objUserDetails->LName;
			if ($this->lblLName) $this->lblLName->Text = $this->objUserDetails->LName;

			if ($this->txtTitle) $this->txtTitle->Text = $this->objUserDetails->Title;
			if ($this->lblTitle) $this->lblTitle->Text = $this->objUserDetails->Title;

			if ($this->txtCity) $this->txtCity->Text = $this->objUserDetails->City;
			if ($this->lblCity) $this->lblCity->Text = $this->objUserDetails->City;

			if ($this->txtRegion) $this->txtRegion->Text = $this->objUserDetails->Region;
			if ($this->lblRegion) $this->lblRegion->Text = $this->objUserDetails->Region;

			if ($this->txtZipCode) $this->txtZipCode->Text = $this->objUserDetails->ZipCode;
			if ($this->lblZipCode) $this->lblZipCode->Text = $this->objUserDetails->ZipCode;

			if ($this->txtSolutions) $this->txtSolutions->Text = $this->objUserDetails->Solutions;
			if ($this->lblSolutions) $this->lblSolutions->Text = $this->objUserDetails->Solutions;

			if ($this->txtTerritory) $this->txtTerritory->Text = $this->objUserDetails->Territory;
			if ($this->lblTerritory) $this->lblTerritory->Text = $this->objUserDetails->Territory;

			if ($this->txtPicture) $this->txtPicture->Text = $this->objUserDetails->Picture;
			if ($this->lblPicture) $this->lblPicture->Text = $this->objUserDetails->Picture;

			if ($this->txtBackupEmail) $this->txtBackupEmail->Text = $this->objUserDetails->BackupEmail;
			if ($this->lblBackupEmail) $this->lblBackupEmail->Text = $this->objUserDetails->BackupEmail;

			if ($this->txtReseller) $this->txtReseller->Text = $this->objUserDetails->Reseller;
			if ($this->lblReseller) $this->lblReseller->Text = $this->objUserDetails->Reseller;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC USERDETAILS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's UserDetails instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveUserDetails() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtCodeName) $this->objUserDetails->CodeName = $this->txtCodeName->Text;
				if ($this->txtFName) $this->objUserDetails->FName = $this->txtFName->Text;
				if ($this->txtLName) $this->objUserDetails->LName = $this->txtLName->Text;
				if ($this->txtTitle) $this->objUserDetails->Title = $this->txtTitle->Text;
				if ($this->txtCity) $this->objUserDetails->City = $this->txtCity->Text;
				if ($this->txtRegion) $this->objUserDetails->Region = $this->txtRegion->Text;
				if ($this->txtZipCode) $this->objUserDetails->ZipCode = $this->txtZipCode->Text;
				if ($this->txtSolutions) $this->objUserDetails->Solutions = $this->txtSolutions->Text;
				if ($this->txtTerritory) $this->objUserDetails->Territory = $this->txtTerritory->Text;
				if ($this->txtPicture) $this->objUserDetails->Picture = $this->txtPicture->Text;
				if ($this->txtBackupEmail) $this->objUserDetails->BackupEmail = $this->txtBackupEmail->Text;
				if ($this->txtReseller) $this->objUserDetails->Reseller = $this->txtReseller->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the UserDetails object
				$this->objUserDetails->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's UserDetails instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteUserDetails() {
			$this->objUserDetails->Delete();
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
				case 'UserDetails': return $this->objUserDetails;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to UserDetails fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'CodeNameControl':
					if (!$this->txtCodeName) return $this->txtCodeName_Create();
					return $this->txtCodeName;
				case 'CodeNameLabel':
					if (!$this->lblCodeName) return $this->lblCodeName_Create();
					return $this->lblCodeName;
				case 'FNameControl':
					if (!$this->txtFName) return $this->txtFName_Create();
					return $this->txtFName;
				case 'FNameLabel':
					if (!$this->lblFName) return $this->lblFName_Create();
					return $this->lblFName;
				case 'LNameControl':
					if (!$this->txtLName) return $this->txtLName_Create();
					return $this->txtLName;
				case 'LNameLabel':
					if (!$this->lblLName) return $this->lblLName_Create();
					return $this->lblLName;
				case 'TitleControl':
					if (!$this->txtTitle) return $this->txtTitle_Create();
					return $this->txtTitle;
				case 'TitleLabel':
					if (!$this->lblTitle) return $this->lblTitle_Create();
					return $this->lblTitle;
				case 'CityControl':
					if (!$this->txtCity) return $this->txtCity_Create();
					return $this->txtCity;
				case 'CityLabel':
					if (!$this->lblCity) return $this->lblCity_Create();
					return $this->lblCity;
				case 'RegionControl':
					if (!$this->txtRegion) return $this->txtRegion_Create();
					return $this->txtRegion;
				case 'RegionLabel':
					if (!$this->lblRegion) return $this->lblRegion_Create();
					return $this->lblRegion;
				case 'ZipCodeControl':
					if (!$this->txtZipCode) return $this->txtZipCode_Create();
					return $this->txtZipCode;
				case 'ZipCodeLabel':
					if (!$this->lblZipCode) return $this->lblZipCode_Create();
					return $this->lblZipCode;
				case 'SolutionsControl':
					if (!$this->txtSolutions) return $this->txtSolutions_Create();
					return $this->txtSolutions;
				case 'SolutionsLabel':
					if (!$this->lblSolutions) return $this->lblSolutions_Create();
					return $this->lblSolutions;
				case 'TerritoryControl':
					if (!$this->txtTerritory) return $this->txtTerritory_Create();
					return $this->txtTerritory;
				case 'TerritoryLabel':
					if (!$this->lblTerritory) return $this->lblTerritory_Create();
					return $this->lblTerritory;
				case 'PictureControl':
					if (!$this->txtPicture) return $this->txtPicture_Create();
					return $this->txtPicture;
				case 'PictureLabel':
					if (!$this->lblPicture) return $this->lblPicture_Create();
					return $this->lblPicture;
				case 'BackupEmailControl':
					if (!$this->txtBackupEmail) return $this->txtBackupEmail_Create();
					return $this->txtBackupEmail;
				case 'BackupEmailLabel':
					if (!$this->lblBackupEmail) return $this->lblBackupEmail_Create();
					return $this->lblBackupEmail;
				case 'ResellerControl':
					if (!$this->txtReseller) return $this->txtReseller_Create();
					return $this->txtReseller;
				case 'ResellerLabel':
					if (!$this->lblReseller) return $this->lblReseller_Create();
					return $this->lblReseller;
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
					// Controls that point to UserDetails fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'CodeNameControl':
						return ($this->txtCodeName = QType::Cast($mixValue, 'QControl'));
					case 'FNameControl':
						return ($this->txtFName = QType::Cast($mixValue, 'QControl'));
					case 'LNameControl':
						return ($this->txtLName = QType::Cast($mixValue, 'QControl'));
					case 'TitleControl':
						return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
					case 'CityControl':
						return ($this->txtCity = QType::Cast($mixValue, 'QControl'));
					case 'RegionControl':
						return ($this->txtRegion = QType::Cast($mixValue, 'QControl'));
					case 'ZipCodeControl':
						return ($this->txtZipCode = QType::Cast($mixValue, 'QControl'));
					case 'SolutionsControl':
						return ($this->txtSolutions = QType::Cast($mixValue, 'QControl'));
					case 'TerritoryControl':
						return ($this->txtTerritory = QType::Cast($mixValue, 'QControl'));
					case 'PictureControl':
						return ($this->txtPicture = QType::Cast($mixValue, 'QControl'));
					case 'BackupEmailControl':
						return ($this->txtBackupEmail = QType::Cast($mixValue, 'QControl'));
					case 'ResellerControl':
						return ($this->txtReseller = QType::Cast($mixValue, 'QControl'));
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