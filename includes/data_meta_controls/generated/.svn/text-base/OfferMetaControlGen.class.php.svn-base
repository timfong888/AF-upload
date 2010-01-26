<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Offer class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Offer object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a OfferMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Offer $Offer the actual Offer data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $UserOwnerIdControl
	 * property-read QLabel $UserOwnerIdLabel
	 * property QListBox $AccountIdControl
	 * property-read QLabel $AccountIdLabel
	 * property QLabel $TimestampControl
	 * property-read QLabel $TimestampLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class OfferMetaControlGen extends QBaseClass {
		// General Variables
		protected $objOffer;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Offer's individual data fields
		protected $lblId;
		protected $lstUserOwner;
		protected $lstAccount;
		protected $lblTimestamp;

		// Controls that allow the viewing of Offer's individual data fields
		protected $lblUserOwnerId;
		protected $lblAccountId;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * OfferMetaControl to edit a single Offer object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Offer object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OfferMetaControl
		 * @param Offer $objOffer new or existing Offer object
		 */
		 public function __construct($objParentObject, Offer $objOffer) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this OfferMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Offer object
			$this->objOffer = $objOffer;

			// Figure out if we're Editing or Creating New
			if ($this->objOffer->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this OfferMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Offer object creation - defaults to CreateOrEdit
 		 * @return OfferMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objOffer = Offer::Load($intId);

				// Offer was found -- return it!
				if ($objOffer)
					return new OfferMetaControl($objParentObject, $objOffer);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Offer object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new OfferMetaControl($objParentObject, new Offer());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OfferMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Offer object creation - defaults to CreateOrEdit
		 * @return OfferMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return OfferMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OfferMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Offer object creation - defaults to CreateOrEdit
		 * @return OfferMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return OfferMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objOffer->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstUserOwner
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstUserOwner_Create($strControlId = null) {
			$this->lstUserOwner = new QListBox($this->objParentObject, $strControlId);
			$this->lstUserOwner->Name = QApplication::Translate('User Owner');
			$this->lstUserOwner->Required = true;
			if (!$this->blnEditMode)
				$this->lstUserOwner->AddItem(QApplication::Translate('- Select One -'), null);
			$objUserOwnerArray = User::LoadAll();
			if ($objUserOwnerArray) foreach ($objUserOwnerArray as $objUserOwner) {
				$objListItem = new QListItem($objUserOwner->__toString(), $objUserOwner->Id);
				if (($this->objOffer->UserOwner) && ($this->objOffer->UserOwner->Id == $objUserOwner->Id))
					$objListItem->Selected = true;
				$this->lstUserOwner->AddItem($objListItem);
			}
			return $this->lstUserOwner;
		}

		/**
		 * Create and setup QLabel lblUserOwnerId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUserOwnerId_Create($strControlId = null) {
			$this->lblUserOwnerId = new QLabel($this->objParentObject, $strControlId);
			$this->lblUserOwnerId->Name = QApplication::Translate('User Owner');
			$this->lblUserOwnerId->Text = ($this->objOffer->UserOwner) ? $this->objOffer->UserOwner->__toString() : null;
			$this->lblUserOwnerId->Required = true;
			return $this->lblUserOwnerId;
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
				if (($this->objOffer->Account) && ($this->objOffer->Account->Id == $objAccount->Id))
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
			$this->lblAccountId->Text = ($this->objOffer->Account) ? $this->objOffer->Account->__toString() : null;
			$this->lblAccountId->Required = true;
			return $this->lblAccountId;
		}

		/**
		 * Create and setup QLabel lblTimestamp
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTimestamp_Create($strControlId = null) {
			$this->lblTimestamp = new QLabel($this->objParentObject, $strControlId);
			$this->lblTimestamp->Name = QApplication::Translate('Timestamp');
			if ($this->blnEditMode)
				$this->lblTimestamp->Text = $this->objOffer->Timestamp;
			else
				$this->lblTimestamp->Text = 'N/A';
			return $this->lblTimestamp;
		}



		/**
		 * Refresh this MetaControl with Data from the local Offer object.
		 * @param boolean $blnReload reload Offer from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objOffer->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objOffer->Id;

			if ($this->lstUserOwner) {
					$this->lstUserOwner->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstUserOwner->AddItem(QApplication::Translate('- Select One -'), null);
				$objUserOwnerArray = User::LoadAll();
				if ($objUserOwnerArray) foreach ($objUserOwnerArray as $objUserOwner) {
					$objListItem = new QListItem($objUserOwner->__toString(), $objUserOwner->Id);
					if (($this->objOffer->UserOwner) && ($this->objOffer->UserOwner->Id == $objUserOwner->Id))
						$objListItem->Selected = true;
					$this->lstUserOwner->AddItem($objListItem);
				}
			}
			if ($this->lblUserOwnerId) $this->lblUserOwnerId->Text = ($this->objOffer->UserOwner) ? $this->objOffer->UserOwner->__toString() : null;

			if ($this->lstAccount) {
					$this->lstAccount->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstAccount->AddItem(QApplication::Translate('- Select One -'), null);
				$objAccountArray = Account::LoadAll();
				if ($objAccountArray) foreach ($objAccountArray as $objAccount) {
					$objListItem = new QListItem($objAccount->__toString(), $objAccount->Id);
					if (($this->objOffer->Account) && ($this->objOffer->Account->Id == $objAccount->Id))
						$objListItem->Selected = true;
					$this->lstAccount->AddItem($objListItem);
				}
			}
			if ($this->lblAccountId) $this->lblAccountId->Text = ($this->objOffer->Account) ? $this->objOffer->Account->__toString() : null;

			if ($this->lblTimestamp) if ($this->blnEditMode) $this->lblTimestamp->Text = $this->objOffer->Timestamp;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC OFFER OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Offer instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveOffer() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstUserOwner) $this->objOffer->UserOwnerId = $this->lstUserOwner->SelectedValue;
				if ($this->lstAccount) $this->objOffer->AccountId = $this->lstAccount->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Offer object
				$this->objOffer->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Offer instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteOffer() {
			$this->objOffer->Delete();
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
				case 'Offer': return $this->objOffer;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Offer fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'UserOwnerIdControl':
					if (!$this->lstUserOwner) return $this->lstUserOwner_Create();
					return $this->lstUserOwner;
				case 'UserOwnerIdLabel':
					if (!$this->lblUserOwnerId) return $this->lblUserOwnerId_Create();
					return $this->lblUserOwnerId;
				case 'AccountIdControl':
					if (!$this->lstAccount) return $this->lstAccount_Create();
					return $this->lstAccount;
				case 'AccountIdLabel':
					if (!$this->lblAccountId) return $this->lblAccountId_Create();
					return $this->lblAccountId;
				case 'TimestampControl':
					if (!$this->lblTimestamp) return $this->lblTimestamp_Create();
					return $this->lblTimestamp;
				case 'TimestampLabel':
					if (!$this->lblTimestamp) return $this->lblTimestamp_Create();
					return $this->lblTimestamp;
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
					// Controls that point to Offer fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'UserOwnerIdControl':
						return ($this->lstUserOwner = QType::Cast($mixValue, 'QControl'));
					case 'AccountIdControl':
						return ($this->lstAccount = QType::Cast($mixValue, 'QControl'));
					case 'TimestampControl':
						return ($this->lblTimestamp = QType::Cast($mixValue, 'QControl'));
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