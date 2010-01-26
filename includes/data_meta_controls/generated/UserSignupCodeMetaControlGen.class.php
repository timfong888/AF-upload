<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the UserSignupCode class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single UserSignupCode object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a UserSignupCodeMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read UserSignupCode $UserSignupCode the actual UserSignupCode data class being edited
	 * property QListBox $UserIdControl
	 * property-read QLabel $UserIdLabel
	 * property QListBox $GropeCodeIdControl
	 * property-read QLabel $GropeCodeIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class UserSignupCodeMetaControlGen extends QBaseClass {
		// General Variables
		protected $objUserSignupCode;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of UserSignupCode's individual data fields
		protected $lstUser;
		protected $lstGropeCode;

		// Controls that allow the viewing of UserSignupCode's individual data fields
		protected $lblUserId;
		protected $lblGropeCodeId;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * UserSignupCodeMetaControl to edit a single UserSignupCode object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single UserSignupCode object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserSignupCodeMetaControl
		 * @param UserSignupCode $objUserSignupCode new or existing UserSignupCode object
		 */
		 public function __construct($objParentObject, UserSignupCode $objUserSignupCode) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this UserSignupCodeMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked UserSignupCode object
			$this->objUserSignupCode = $objUserSignupCode;

			// Figure out if we're Editing or Creating New
			if ($this->objUserSignupCode->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserSignupCodeMetaControl
		 * @param integer $intUserId primary key value
		 * @param integer $intGropeCodeId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing UserSignupCode object creation - defaults to CreateOrEdit
 		 * @return UserSignupCodeMetaControl
		 */
		public static function Create($objParentObject, $intUserId = null, $intGropeCodeId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intUserId) && strlen($intGropeCodeId)) {
				$objUserSignupCode = UserSignupCode::Load($intUserId, $intGropeCodeId);

				// UserSignupCode was found -- return it!
				if ($objUserSignupCode)
					return new UserSignupCodeMetaControl($objParentObject, $objUserSignupCode);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a UserSignupCode object with PK arguments: ' . $intUserId . ', ' . $intGropeCodeId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new UserSignupCodeMetaControl($objParentObject, new UserSignupCode());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserSignupCodeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing UserSignupCode object creation - defaults to CreateOrEdit
		 * @return UserSignupCodeMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUserId = QApplication::PathInfo(0);
			$intGropeCodeId = QApplication::PathInfo(1);
			return UserSignupCodeMetaControl::Create($objParentObject, $intUserId, $intGropeCodeId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserSignupCodeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing UserSignupCode object creation - defaults to CreateOrEdit
		 * @return UserSignupCodeMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUserId = QApplication::QueryString('intUserId');
			$intGropeCodeId = QApplication::QueryString('intGropeCodeId');
			return UserSignupCodeMetaControl::Create($objParentObject, $intUserId, $intGropeCodeId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstUser
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstUser_Create($strControlId = null) {
			$this->lstUser = new QListBox($this->objParentObject, $strControlId);
			$this->lstUser->Name = QApplication::Translate('User');
			$this->lstUser->Required = true;
			if (!$this->blnEditMode)
				$this->lstUser->AddItem(QApplication::Translate('- Select One -'), null);
			$objUserArray = User::LoadAll();
			if ($objUserArray) foreach ($objUserArray as $objUser) {
				$objListItem = new QListItem($objUser->__toString(), $objUser->Id);
				if (($this->objUserSignupCode->User) && ($this->objUserSignupCode->User->Id == $objUser->Id))
					$objListItem->Selected = true;
				$this->lstUser->AddItem($objListItem);
			}
			return $this->lstUser;
		}

		/**
		 * Create and setup QLabel lblUserId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUserId_Create($strControlId = null) {
			$this->lblUserId = new QLabel($this->objParentObject, $strControlId);
			$this->lblUserId->Name = QApplication::Translate('User');
			$this->lblUserId->Text = ($this->objUserSignupCode->User) ? $this->objUserSignupCode->User->__toString() : null;
			$this->lblUserId->Required = true;
			return $this->lblUserId;
		}

		/**
		 * Create and setup QListBox lstGropeCode
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstGropeCode_Create($strControlId = null) {
			$this->lstGropeCode = new QListBox($this->objParentObject, $strControlId);
			$this->lstGropeCode->Name = QApplication::Translate('Grope Code');
			$this->lstGropeCode->Required = true;
			if (!$this->blnEditMode)
				$this->lstGropeCode->AddItem(QApplication::Translate('- Select One -'), null);
			$objGropeCodeArray = GroupCode::LoadAll();
			if ($objGropeCodeArray) foreach ($objGropeCodeArray as $objGropeCode) {
				$objListItem = new QListItem($objGropeCode->__toString(), $objGropeCode->Id);
				if (($this->objUserSignupCode->GropeCode) && ($this->objUserSignupCode->GropeCode->Id == $objGropeCode->Id))
					$objListItem->Selected = true;
				$this->lstGropeCode->AddItem($objListItem);
			}
			return $this->lstGropeCode;
		}

		/**
		 * Create and setup QLabel lblGropeCodeId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblGropeCodeId_Create($strControlId = null) {
			$this->lblGropeCodeId = new QLabel($this->objParentObject, $strControlId);
			$this->lblGropeCodeId->Name = QApplication::Translate('Grope Code');
			$this->lblGropeCodeId->Text = ($this->objUserSignupCode->GropeCode) ? $this->objUserSignupCode->GropeCode->__toString() : null;
			$this->lblGropeCodeId->Required = true;
			return $this->lblGropeCodeId;
		}



		/**
		 * Refresh this MetaControl with Data from the local UserSignupCode object.
		 * @param boolean $blnReload reload UserSignupCode from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objUserSignupCode->Reload();

			if ($this->lstUser) {
					$this->lstUser->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objUserArray = User::LoadAll();
				if ($objUserArray) foreach ($objUserArray as $objUser) {
					$objListItem = new QListItem($objUser->__toString(), $objUser->Id);
					if (($this->objUserSignupCode->User) && ($this->objUserSignupCode->User->Id == $objUser->Id))
						$objListItem->Selected = true;
					$this->lstUser->AddItem($objListItem);
				}
			}
			if ($this->lblUserId) $this->lblUserId->Text = ($this->objUserSignupCode->User) ? $this->objUserSignupCode->User->__toString() : null;

			if ($this->lstGropeCode) {
					$this->lstGropeCode->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstGropeCode->AddItem(QApplication::Translate('- Select One -'), null);
				$objGropeCodeArray = GroupCode::LoadAll();
				if ($objGropeCodeArray) foreach ($objGropeCodeArray as $objGropeCode) {
					$objListItem = new QListItem($objGropeCode->__toString(), $objGropeCode->Id);
					if (($this->objUserSignupCode->GropeCode) && ($this->objUserSignupCode->GropeCode->Id == $objGropeCode->Id))
						$objListItem->Selected = true;
					$this->lstGropeCode->AddItem($objListItem);
				}
			}
			if ($this->lblGropeCodeId) $this->lblGropeCodeId->Text = ($this->objUserSignupCode->GropeCode) ? $this->objUserSignupCode->GropeCode->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC USERSIGNUPCODE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's UserSignupCode instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveUserSignupCode() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstUser) $this->objUserSignupCode->UserId = $this->lstUser->SelectedValue;
				if ($this->lstGropeCode) $this->objUserSignupCode->GropeCodeId = $this->lstGropeCode->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the UserSignupCode object
				$this->objUserSignupCode->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's UserSignupCode instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteUserSignupCode() {
			$this->objUserSignupCode->Delete();
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
				case 'UserSignupCode': return $this->objUserSignupCode;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to UserSignupCode fields -- will be created dynamically if not yet created
				case 'UserIdControl':
					if (!$this->lstUser) return $this->lstUser_Create();
					return $this->lstUser;
				case 'UserIdLabel':
					if (!$this->lblUserId) return $this->lblUserId_Create();
					return $this->lblUserId;
				case 'GropeCodeIdControl':
					if (!$this->lstGropeCode) return $this->lstGropeCode_Create();
					return $this->lstGropeCode;
				case 'GropeCodeIdLabel':
					if (!$this->lblGropeCodeId) return $this->lblGropeCodeId_Create();
					return $this->lblGropeCodeId;
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
					// Controls that point to UserSignupCode fields
					case 'UserIdControl':
						return ($this->lstUser = QType::Cast($mixValue, 'QControl'));
					case 'GropeCodeIdControl':
						return ($this->lstGropeCode = QType::Cast($mixValue, 'QControl'));
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