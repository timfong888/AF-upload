<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Contact class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Contact object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ContactMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Contact $Contact the actual Contact data class being edited
	 * property QListBox $OfferIdControl
	 * property-read QLabel $OfferIdLabel
	 * property QTextBox $NameControl
	 * property-read QLabel $NameLabel
	 * property QTextBox $EmailControl
	 * property-read QLabel $EmailLabel
	 * property QTextBox $TitleControl
	 * property-read QLabel $TitleLabel
	 * property QTextBox $PhoneControl
	 * property-read QLabel $PhoneLabel
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ContactMetaControlGen extends QBaseClass {
		// General Variables
		protected $objContact;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Contact's individual data fields
		protected $lstOffer;
		protected $txtName;
		protected $txtEmail;
		protected $txtTitle;
		protected $txtPhone;
		protected $lblId;

		// Controls that allow the viewing of Contact's individual data fields
		protected $lblOfferId;
		protected $lblName;
		protected $lblEmail;
		protected $lblTitle;
		protected $lblPhone;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ContactMetaControl to edit a single Contact object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Contact object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ContactMetaControl
		 * @param Contact $objContact new or existing Contact object
		 */
		 public function __construct($objParentObject, Contact $objContact) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ContactMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Contact object
			$this->objContact = $objContact;

			// Figure out if we're Editing or Creating New
			if ($this->objContact->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ContactMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Contact object creation - defaults to CreateOrEdit
 		 * @return ContactMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objContact = Contact::Load($intId);

				// Contact was found -- return it!
				if ($objContact)
					return new ContactMetaControl($objParentObject, $objContact);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Contact object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ContactMetaControl($objParentObject, new Contact());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ContactMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Contact object creation - defaults to CreateOrEdit
		 * @return ContactMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ContactMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ContactMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Contact object creation - defaults to CreateOrEdit
		 * @return ContactMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ContactMetaControl::Create($objParentObject, $intId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstOffer
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstOffer_Create($strControlId = null) {
			$this->lstOffer = new QListBox($this->objParentObject, $strControlId);
			$this->lstOffer->Name = QApplication::Translate('Offer');
			$this->lstOffer->Required = true;
			if (!$this->blnEditMode)
				$this->lstOffer->AddItem(QApplication::Translate('- Select One -'), null);
			$objOfferArray = Offer::LoadAll();
			if ($objOfferArray) foreach ($objOfferArray as $objOffer) {
				$objListItem = new QListItem($objOffer->__toString(), $objOffer->Id);
				if (($this->objContact->Offer) && ($this->objContact->Offer->Id == $objOffer->Id))
					$objListItem->Selected = true;
				$this->lstOffer->AddItem($objListItem);
			}
			return $this->lstOffer;
		}

		/**
		 * Create and setup QLabel lblOfferId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOfferId_Create($strControlId = null) {
			$this->lblOfferId = new QLabel($this->objParentObject, $strControlId);
			$this->lblOfferId->Name = QApplication::Translate('Offer');
			$this->lblOfferId->Text = ($this->objContact->Offer) ? $this->objContact->Offer->__toString() : null;
			$this->lblOfferId->Required = true;
			return $this->lblOfferId;
		}

		/**
		 * Create and setup QTextBox txtName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtName_Create($strControlId = null) {
			$this->txtName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtName->Name = QApplication::Translate('Name');
			$this->txtName->Text = $this->objContact->Name;
			$this->txtName->Required = true;
			$this->txtName->MaxLength = Contact::NameMaxLength;
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
			$this->lblName->Text = $this->objContact->Name;
			$this->lblName->Required = true;
			return $this->lblName;
		}

		/**
		 * Create and setup QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->Text = $this->objContact->Email;
			$this->txtEmail->Required = true;
			$this->txtEmail->MaxLength = Contact::EmailMaxLength;
			return $this->txtEmail;
		}

		/**
		 * Create and setup QLabel lblEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmail_Create($strControlId = null) {
			$this->lblEmail = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmail->Name = QApplication::Translate('Email');
			$this->lblEmail->Text = $this->objContact->Email;
			$this->lblEmail->Required = true;
			return $this->lblEmail;
		}

		/**
		 * Create and setup QTextBox txtTitle
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTitle_Create($strControlId = null) {
			$this->txtTitle = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTitle->Name = QApplication::Translate('Title');
			$this->txtTitle->Text = $this->objContact->Title;
			$this->txtTitle->Required = true;
			$this->txtTitle->MaxLength = Contact::TitleMaxLength;
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
			$this->lblTitle->Text = $this->objContact->Title;
			$this->lblTitle->Required = true;
			return $this->lblTitle;
		}

		/**
		 * Create and setup QTextBox txtPhone
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPhone_Create($strControlId = null) {
			$this->txtPhone = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPhone->Name = QApplication::Translate('Phone');
			$this->txtPhone->Text = $this->objContact->Phone;
			$this->txtPhone->Required = true;
			$this->txtPhone->MaxLength = Contact::PhoneMaxLength;
			return $this->txtPhone;
		}

		/**
		 * Create and setup QLabel lblPhone
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPhone_Create($strControlId = null) {
			$this->lblPhone = new QLabel($this->objParentObject, $strControlId);
			$this->lblPhone->Name = QApplication::Translate('Phone');
			$this->lblPhone->Text = $this->objContact->Phone;
			$this->lblPhone->Required = true;
			return $this->lblPhone;
		}

		/**
		 * Create and setup QLabel lblId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblId_Create($strControlId = null) {
			$this->lblId = new QLabel($this->objParentObject, $strControlId);
			$this->lblId->Name = QApplication::Translate('Id');
			if ($this->blnEditMode)
				$this->lblId->Text = $this->objContact->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}



		/**
		 * Refresh this MetaControl with Data from the local Contact object.
		 * @param boolean $blnReload reload Contact from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objContact->Reload();

			if ($this->lstOffer) {
					$this->lstOffer->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstOffer->AddItem(QApplication::Translate('- Select One -'), null);
				$objOfferArray = Offer::LoadAll();
				if ($objOfferArray) foreach ($objOfferArray as $objOffer) {
					$objListItem = new QListItem($objOffer->__toString(), $objOffer->Id);
					if (($this->objContact->Offer) && ($this->objContact->Offer->Id == $objOffer->Id))
						$objListItem->Selected = true;
					$this->lstOffer->AddItem($objListItem);
				}
			}
			if ($this->lblOfferId) $this->lblOfferId->Text = ($this->objContact->Offer) ? $this->objContact->Offer->__toString() : null;

			if ($this->txtName) $this->txtName->Text = $this->objContact->Name;
			if ($this->lblName) $this->lblName->Text = $this->objContact->Name;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objContact->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objContact->Email;

			if ($this->txtTitle) $this->txtTitle->Text = $this->objContact->Title;
			if ($this->lblTitle) $this->lblTitle->Text = $this->objContact->Title;

			if ($this->txtPhone) $this->txtPhone->Text = $this->objContact->Phone;
			if ($this->lblPhone) $this->lblPhone->Text = $this->objContact->Phone;

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objContact->Id;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC CONTACT OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Contact instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveContact() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstOffer) $this->objContact->OfferId = $this->lstOffer->SelectedValue;
				if ($this->txtName) $this->objContact->Name = $this->txtName->Text;
				if ($this->txtEmail) $this->objContact->Email = $this->txtEmail->Text;
				if ($this->txtTitle) $this->objContact->Title = $this->txtTitle->Text;
				if ($this->txtPhone) $this->objContact->Phone = $this->txtPhone->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Contact object
				$this->objContact->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Contact instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteContact() {
			$this->objContact->Delete();
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
				case 'Contact': return $this->objContact;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Contact fields -- will be created dynamically if not yet created
				case 'OfferIdControl':
					if (!$this->lstOffer) return $this->lstOffer_Create();
					return $this->lstOffer;
				case 'OfferIdLabel':
					if (!$this->lblOfferId) return $this->lblOfferId_Create();
					return $this->lblOfferId;
				case 'NameControl':
					if (!$this->txtName) return $this->txtName_Create();
					return $this->txtName;
				case 'NameLabel':
					if (!$this->lblName) return $this->lblName_Create();
					return $this->lblName;
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
				case 'TitleControl':
					if (!$this->txtTitle) return $this->txtTitle_Create();
					return $this->txtTitle;
				case 'TitleLabel':
					if (!$this->lblTitle) return $this->lblTitle_Create();
					return $this->lblTitle;
				case 'PhoneControl':
					if (!$this->txtPhone) return $this->txtPhone_Create();
					return $this->txtPhone;
				case 'PhoneLabel':
					if (!$this->lblPhone) return $this->lblPhone_Create();
					return $this->lblPhone;
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
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
					// Controls that point to Contact fields
					case 'OfferIdControl':
						return ($this->lstOffer = QType::Cast($mixValue, 'QControl'));
					case 'NameControl':
						return ($this->txtName = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
					case 'TitleControl':
						return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
					case 'PhoneControl':
						return ($this->txtPhone = QType::Cast($mixValue, 'QControl'));
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
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