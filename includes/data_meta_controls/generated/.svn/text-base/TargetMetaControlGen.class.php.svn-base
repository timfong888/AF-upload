<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Target class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Target object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TargetMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Target $Target the actual Target data class being edited
	 * property QListBox $UserIdControl
	 * property-read QLabel $UserIdLabel
	 * property QListBox $AccountIdControl
	 * property-read QLabel $AccountIdLabel
	 * property QLabel $DatetimestampControl
	 * property-read QLabel $DatetimestampLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TargetMetaControlGen extends QBaseClass {
		// General Variables
		protected $objTarget;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Target's individual data fields
		protected $lstUser;
		protected $lstAccount;
		protected $lblDatetimestamp;

		// Controls that allow the viewing of Target's individual data fields
		protected $lblUserId;
		protected $lblAccountId;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * TargetMetaControl to edit a single Target object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Target object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TargetMetaControl
		 * @param Target $objTarget new or existing Target object
		 */
		 public function __construct($objParentObject, Target $objTarget) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TargetMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Target object
			$this->objTarget = $objTarget;

			// Figure out if we're Editing or Creating New
			if ($this->objTarget->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TargetMetaControl
		 * @param integer $intUserId primary key value
		 * @param integer $intAccountId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Target object creation - defaults to CreateOrEdit
 		 * @return TargetMetaControl
		 */
		public static function Create($objParentObject, $intUserId = null, $intAccountId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intUserId) && strlen($intAccountId)) {
				$objTarget = Target::Load($intUserId, $intAccountId);

				// Target was found -- return it!
				if ($objTarget)
					return new TargetMetaControl($objParentObject, $objTarget);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Target object with PK arguments: ' . $intUserId . ', ' . $intAccountId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TargetMetaControl($objParentObject, new Target());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TargetMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Target object creation - defaults to CreateOrEdit
		 * @return TargetMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUserId = QApplication::PathInfo(0);
			$intAccountId = QApplication::PathInfo(1);
			return TargetMetaControl::Create($objParentObject, $intUserId, $intAccountId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TargetMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Target object creation - defaults to CreateOrEdit
		 * @return TargetMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUserId = QApplication::QueryString('intUserId');
			$intAccountId = QApplication::QueryString('intAccountId');
			return TargetMetaControl::Create($objParentObject, $intUserId, $intAccountId, $intCreateType);
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
				if (($this->objTarget->User) && ($this->objTarget->User->Id == $objUser->Id))
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
			$this->lblUserId->Text = ($this->objTarget->User) ? $this->objTarget->User->__toString() : null;
			$this->lblUserId->Required = true;
			return $this->lblUserId;
		}

		/**
		 * Create and setup QListBox lstAccount
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstAccount_Create($strControlId = null) {
			$this->lstAccount = new QListBox($this->objParentObject, $strControlId);
			$this->lstAccount->Name = QApplication::Translate('Account');
			$this->lstAccount->Required = true;
			if (!$this->blnEditMode)
				$this->lstAccount->AddItem(QApplication::Translate('- Select One -'), null);
			$objAccountArray = Account::LoadAll();
			if ($objAccountArray) foreach ($objAccountArray as $objAccount) {
				$objListItem = new QListItem($objAccount->__toString(), $objAccount->Id);
				if (($this->objTarget->Account) && ($this->objTarget->Account->Id == $objAccount->Id))
					$objListItem->Selected = true;
				$this->lstAccount->AddItem($objListItem);
			}
			return $this->lstAccount;
		}

		/**
		 * Create and setup QLabel lblAccountId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAccountId_Create($strControlId = null) {
			$this->lblAccountId = new QLabel($this->objParentObject, $strControlId);
			$this->lblAccountId->Name = QApplication::Translate('Account');
			$this->lblAccountId->Text = ($this->objTarget->Account) ? $this->objTarget->Account->__toString() : null;
			$this->lblAccountId->Required = true;
			return $this->lblAccountId;
		}

		/**
		 * Create and setup QLabel lblDatetimestamp
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDatetimestamp_Create($strControlId = null) {
			$this->lblDatetimestamp = new QLabel($this->objParentObject, $strControlId);
			$this->lblDatetimestamp->Name = QApplication::Translate('Datetimestamp');
			if ($this->blnEditMode)
				$this->lblDatetimestamp->Text = $this->objTarget->Datetimestamp;
			else
				$this->lblDatetimestamp->Text = 'N/A';
			return $this->lblDatetimestamp;
		}



		/**
		 * Refresh this MetaControl with Data from the local Target object.
		 * @param boolean $blnReload reload Target from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objTarget->Reload();

			if ($this->lstUser) {
					$this->lstUser->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objUserArray = User::LoadAll();
				if ($objUserArray) foreach ($objUserArray as $objUser) {
					$objListItem = new QListItem($objUser->__toString(), $objUser->Id);
					if (($this->objTarget->User) && ($this->objTarget->User->Id == $objUser->Id))
						$objListItem->Selected = true;
					$this->lstUser->AddItem($objListItem);
				}
			}
			if ($this->lblUserId) $this->lblUserId->Text = ($this->objTarget->User) ? $this->objTarget->User->__toString() : null;

			if ($this->lstAccount) {
					$this->lstAccount->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstAccount->AddItem(QApplication::Translate('- Select One -'), null);
				$objAccountArray = Account::LoadAll();
				if ($objAccountArray) foreach ($objAccountArray as $objAccount) {
					$objListItem = new QListItem($objAccount->__toString(), $objAccount->Id);
					if (($this->objTarget->Account) && ($this->objTarget->Account->Id == $objAccount->Id))
						$objListItem->Selected = true;
					$this->lstAccount->AddItem($objListItem);
				}
			}
			if ($this->lblAccountId) $this->lblAccountId->Text = ($this->objTarget->Account) ? $this->objTarget->Account->__toString() : null;

			if ($this->lblDatetimestamp) if ($this->blnEditMode) $this->lblDatetimestamp->Text = $this->objTarget->Datetimestamp;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC TARGET OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Target instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTarget() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstUser) $this->objTarget->UserId = $this->lstUser->SelectedValue;
				if ($this->lstAccount) $this->objTarget->AccountId = $this->lstAccount->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Target object
				$this->objTarget->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Target instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTarget() {
			$this->objTarget->Delete();
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
				case 'Target': return $this->objTarget;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Target fields -- will be created dynamically if not yet created
				case 'UserIdControl':
					if (!$this->lstUser) return $this->lstUser_Create();
					return $this->lstUser;
				case 'UserIdLabel':
					if (!$this->lblUserId) return $this->lblUserId_Create();
					return $this->lblUserId;
				case 'AccountIdControl':
					if (!$this->lstAccount) return $this->lstAccount_Create();
					return $this->lstAccount;
				case 'AccountIdLabel':
					if (!$this->lblAccountId) return $this->lblAccountId_Create();
					return $this->lblAccountId;
				case 'DatetimestampControl':
					if (!$this->lblDatetimestamp) return $this->lblDatetimestamp_Create();
					return $this->lblDatetimestamp;
				case 'DatetimestampLabel':
					if (!$this->lblDatetimestamp) return $this->lblDatetimestamp_Create();
					return $this->lblDatetimestamp;
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
					// Controls that point to Target fields
					case 'UserIdControl':
						return ($this->lstUser = QType::Cast($mixValue, 'QControl'));
					case 'AccountIdControl':
						return ($this->lstAccount = QType::Cast($mixValue, 'QControl'));
					case 'DatetimestampControl':
						return ($this->lblDatetimestamp = QType::Cast($mixValue, 'QControl'));
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