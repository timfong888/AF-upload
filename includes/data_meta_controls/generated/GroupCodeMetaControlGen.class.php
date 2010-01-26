<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the GroupCode class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single GroupCode object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a GroupCodeMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read GroupCode $GroupCode the actual GroupCode data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $SignupCodeControl
	 * property-read QLabel $SignupCodeLabel
	 * property QListBox $UserControl
	 * property-read QLabel $UserLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class GroupCodeMetaControlGen extends QBaseClass {
		// General Variables
		protected $objGroupCode;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of GroupCode's individual data fields
		protected $lblId;
		protected $txtSignupCode;

		// Controls that allow the viewing of GroupCode's individual data fields
		protected $lblSignupCode;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstUsers;
		protected $strUserGlue;

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblUsers;


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * GroupCodeMetaControl to edit a single GroupCode object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single GroupCode object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this GroupCodeMetaControl
		 * @param GroupCode $objGroupCode new or existing GroupCode object
		 */
		 public function __construct($objParentObject, GroupCode $objGroupCode) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this GroupCodeMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked GroupCode object
			$this->objGroupCode = $objGroupCode;

			// Figure out if we're Editing or Creating New
			if ($this->objGroupCode->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this GroupCodeMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing GroupCode object creation - defaults to CreateOrEdit
 		 * @return GroupCodeMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objGroupCode = GroupCode::Load($intId);

				// GroupCode was found -- return it!
				if ($objGroupCode)
					return new GroupCodeMetaControl($objParentObject, $objGroupCode);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a GroupCode object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new GroupCodeMetaControl($objParentObject, new GroupCode());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this GroupCodeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing GroupCode object creation - defaults to CreateOrEdit
		 * @return GroupCodeMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return GroupCodeMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this GroupCodeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing GroupCode object creation - defaults to CreateOrEdit
		 * @return GroupCodeMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return GroupCodeMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objGroupCode->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtSignupCode
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSignupCode_Create($strControlId = null) {
			$this->txtSignupCode = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSignupCode->Name = QApplication::Translate('Signup Code');
			$this->txtSignupCode->Text = $this->objGroupCode->SignupCode;
			$this->txtSignupCode->Required = true;
			$this->txtSignupCode->MaxLength = GroupCode::SignupCodeMaxLength;
			return $this->txtSignupCode;
		}

		/**
		 * Create and setup QLabel lblSignupCode
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSignupCode_Create($strControlId = null) {
			$this->lblSignupCode = new QLabel($this->objParentObject, $strControlId);
			$this->lblSignupCode->Name = QApplication::Translate('Signup Code');
			$this->lblSignupCode->Text = $this->objGroupCode->SignupCode;
			$this->lblSignupCode->Required = true;
			return $this->lblSignupCode;
		}

		/**
		 * Create and setup QListBox lstUsers
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstUsers_Create($strControlId = null) {
			$this->lstUsers = new QListBox($this->objParentObject, $strControlId);
			$this->lstUsers->Name = QApplication::Translate('Users');
			$this->lstUsers->SelectionMode = QSelectionMode::Multiple;
			$objAssociatedArray = $this->objGroupCode->GetUserArray();
			$objUserArray = User::LoadAll();
			if ($objUserArray) foreach ($objUserArray as $objUser) {
				$objListItem = new QListItem($objUser->qFormat(), $objUser->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objUser->Id)
						$objListItem->Selected = true;
				}
				$this->lstUsers->AddItem($objListItem);
			}
			return $this->lstUsers;
		}

		/**
		 * Create and setup QLabel lblUsers
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblUsers_Create($strControlId = null, $strGlue = ', ') {
			$this->lblUsers = new QLabel($this->objParentObject, $strControlId);
			$this->lblUsers->Name = QApplication::Translate('Users');
			$this->strUserGlue = $strGlue;
			
			$objAssociatedArray = $this->objGroupCode->GetUserArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblUsers->Text = implode($this->strUserGlue, $strItems);
			return $this->lblUsers;
		}




		/**
		 * Refresh this MetaControl with Data from the local GroupCode object.
		 * @param boolean $blnReload reload GroupCode from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objGroupCode->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objGroupCode->Id;

			if ($this->txtSignupCode) $this->txtSignupCode->Text = $this->objGroupCode->SignupCode;
			if ($this->lblSignupCode) $this->lblSignupCode->Text = $this->objGroupCode->SignupCode;

			if ($this->lstUsers) {
				$this->lstUsers->RemoveAllItems();
				$objAssociatedArray = $this->objGroupCode->GetUserArray();
				$objUserArray = User::LoadAll();
				if ($objUserArray) foreach ($objUserArray as $objUser) {
					$objListItem = new QListItem($objUser->__toString(), $objUser->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objUser->Id)
							$objListItem->Selected = true;
					}
					$this->lstUsers->AddItem($objListItem);
				}
			}
			if ($this->lblUsers) {
				$objAssociatedArray = $this->objGroupCode->GetUserArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblUsers->Text = implode($this->strUserGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstUsers_Update() {
			if ($this->lstUsers) {
				$this->objGroupCode->UnassociateAllUsers();
				$objSelectedListItems = $this->lstUsers->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objGroupCode->AssociateUser(User::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC GROUPCODE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's GroupCode instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveGroupCode() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtSignupCode) $this->objGroupCode->SignupCode = $this->txtSignupCode->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the GroupCode object
				$this->objGroupCode->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstUsers_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's GroupCode instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteGroupCode() {
			$this->objGroupCode->UnassociateAllUsers();
			$this->objGroupCode->Delete();
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
				case 'GroupCode': return $this->objGroupCode;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to GroupCode fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'SignupCodeControl':
					if (!$this->txtSignupCode) return $this->txtSignupCode_Create();
					return $this->txtSignupCode;
				case 'SignupCodeLabel':
					if (!$this->lblSignupCode) return $this->lblSignupCode_Create();
					return $this->lblSignupCode;
				case 'UserControl':
					if (!$this->lstUsers) return $this->lstUsers_Create();
					return $this->lstUsers;
				case 'UserLabel':
					if (!$this->lblUsers) return $this->lblUsers_Create();
					return $this->lblUsers;
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
					// Controls that point to GroupCode fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'SignupCodeControl':
						return ($this->txtSignupCode = QType::Cast($mixValue, 'QControl'));
					case 'UserControl':
						return ($this->lstUsers = QType::Cast($mixValue, 'QControl'));
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