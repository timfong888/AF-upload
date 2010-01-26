<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Message class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Message object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MessageMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Message $Message the actual Message data class being edited
	 * property QListBox $FromUserIdControl
	 * property-read QLabel $FromUserIdLabel
	 * property QListBox $ToUserIdControl
	 * property-read QLabel $ToUserIdLabel
	 * property QTextBox $BodyControl
	 * property-read QLabel $BodyLabel
	 * property QListBox $MessageTypeIdControl
	 * property-read QLabel $MessageTypeIdLabel
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $SubjectControl
	 * property-read QLabel $SubjectLabel
	 * property QListBox $OfferIdControl
	 * property-read QLabel $OfferIdLabel
	 * property QDateTimePicker $DateTimeControl
	 * property-read QLabel $DateTimeLabel
	 * property QListBox $ContactIdControl
	 * property-read QLabel $ContactIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class MessageMetaControlGen extends QBaseClass {
		// General Variables
		protected $objMessage;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Message's individual data fields
		protected $lstFromUser;
		protected $lstToUser;
		protected $txtBody;
		protected $lstMessageType;
		protected $lblId;
		protected $txtSubject;
		protected $lstOffer;
		protected $calDateTime;
		protected $lstContact;

		// Controls that allow the viewing of Message's individual data fields
		protected $lblFromUserId;
		protected $lblToUserId;
		protected $lblBody;
		protected $lblMessageTypeId;
		protected $lblSubject;
		protected $lblOfferId;
		protected $lblDateTime;
		protected $lblContactId;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * MessageMetaControl to edit a single Message object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Message object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MessageMetaControl
		 * @param Message $objMessage new or existing Message object
		 */
		 public function __construct($objParentObject, Message $objMessage) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this MessageMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Message object
			$this->objMessage = $objMessage;

			// Figure out if we're Editing or Creating New
			if ($this->objMessage->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this MessageMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Message object creation - defaults to CreateOrEdit
 		 * @return MessageMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objMessage = Message::Load($intId);

				// Message was found -- return it!
				if ($objMessage)
					return new MessageMetaControl($objParentObject, $objMessage);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Message object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new MessageMetaControl($objParentObject, new Message());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MessageMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Message object creation - defaults to CreateOrEdit
		 * @return MessageMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return MessageMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MessageMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Message object creation - defaults to CreateOrEdit
		 * @return MessageMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return MessageMetaControl::Create($objParentObject, $intId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstFromUser
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstFromUser_Create($strControlId = null) {
			$this->lstFromUser = new QListBox($this->objParentObject, $strControlId);
			$this->lstFromUser->Name = QApplication::Translate('From User');
			$this->lstFromUser->Required = true;
			if (!$this->blnEditMode)
				$this->lstFromUser->AddItem(QApplication::Translate('- Select One -'), null);
			$objFromUserArray = User::LoadAll();
			if ($objFromUserArray) foreach ($objFromUserArray as $objFromUser) {
				$objListItem = new QListItem($objFromUser->__toString(), $objFromUser->Id);
				if (($this->objMessage->FromUser) && ($this->objMessage->FromUser->Id == $objFromUser->Id))
					$objListItem->Selected = true;
				$this->lstFromUser->AddItem($objListItem);
			}
			return $this->lstFromUser;
		}

		/**
		 * Create and setup QLabel lblFromUserId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFromUserId_Create($strControlId = null) {
			$this->lblFromUserId = new QLabel($this->objParentObject, $strControlId);
			$this->lblFromUserId->Name = QApplication::Translate('From User');
			$this->lblFromUserId->Text = ($this->objMessage->FromUser) ? $this->objMessage->FromUser->__toString() : null;
			$this->lblFromUserId->Required = true;
			return $this->lblFromUserId;
		}

		/**
		 * Create and setup QListBox lstToUser
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstToUser_Create($strControlId = null) {
			$this->lstToUser = new QListBox($this->objParentObject, $strControlId);
			$this->lstToUser->Name = QApplication::Translate('To User');
			$this->lstToUser->Required = true;
			if (!$this->blnEditMode)
				$this->lstToUser->AddItem(QApplication::Translate('- Select One -'), null);
			$objToUserArray = User::LoadAll();
			if ($objToUserArray) foreach ($objToUserArray as $objToUser) {
				$objListItem = new QListItem($objToUser->__toString(), $objToUser->Id);
				if (($this->objMessage->ToUser) && ($this->objMessage->ToUser->Id == $objToUser->Id))
					$objListItem->Selected = true;
				$this->lstToUser->AddItem($objListItem);
			}
			return $this->lstToUser;
		}

		/**
		 * Create and setup QLabel lblToUserId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblToUserId_Create($strControlId = null) {
			$this->lblToUserId = new QLabel($this->objParentObject, $strControlId);
			$this->lblToUserId->Name = QApplication::Translate('To User');
			$this->lblToUserId->Text = ($this->objMessage->ToUser) ? $this->objMessage->ToUser->__toString() : null;
			$this->lblToUserId->Required = true;
			return $this->lblToUserId;
		}

		/**
		 * Create and setup QTextBox txtBody
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtBody_Create($strControlId = null) {
			$this->txtBody = new QTextBox($this->objParentObject, $strControlId);
			$this->txtBody->Name = QApplication::Translate('Body');
			$this->txtBody->Text = $this->objMessage->Body;
			$this->txtBody->Required = true;
			$this->txtBody->TextMode = QTextMode::MultiLine;
			return $this->txtBody;
		}

		/**
		 * Create and setup QLabel lblBody
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBody_Create($strControlId = null) {
			$this->lblBody = new QLabel($this->objParentObject, $strControlId);
			$this->lblBody->Name = QApplication::Translate('Body');
			$this->lblBody->Text = $this->objMessage->Body;
			$this->lblBody->Required = true;
			return $this->lblBody;
		}

		/**
		 * Create and setup QListBox lstMessageType
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstMessageType_Create($strControlId = null) {
			$this->lstMessageType = new QListBox($this->objParentObject, $strControlId);
			$this->lstMessageType->Name = QApplication::Translate('Message Type');
			$this->lstMessageType->Required = true;
			foreach (MessageType::$NameArray as $intId => $strValue)
				$this->lstMessageType->AddItem(new QListItem($strValue, $intId, $this->objMessage->MessageTypeId == $intId));
			return $this->lstMessageType;
		}

		/**
		 * Create and setup QLabel lblMessageTypeId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMessageTypeId_Create($strControlId = null) {
			$this->lblMessageTypeId = new QLabel($this->objParentObject, $strControlId);
			$this->lblMessageTypeId->Name = QApplication::Translate('Message Type');
			$this->lblMessageTypeId->Text = ($this->objMessage->MessageTypeId) ? MessageType::$NameArray[$this->objMessage->MessageTypeId] : null;
			$this->lblMessageTypeId->Required = true;
			return $this->lblMessageTypeId;
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
				$this->lblId->Text = $this->objMessage->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtSubject
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSubject_Create($strControlId = null) {
			$this->txtSubject = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSubject->Name = QApplication::Translate('Subject');
			$this->txtSubject->Text = $this->objMessage->Subject;
			$this->txtSubject->Required = true;
			$this->txtSubject->MaxLength = Message::SubjectMaxLength;
			return $this->txtSubject;
		}

		/**
		 * Create and setup QLabel lblSubject
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSubject_Create($strControlId = null) {
			$this->lblSubject = new QLabel($this->objParentObject, $strControlId);
			$this->lblSubject->Name = QApplication::Translate('Subject');
			$this->lblSubject->Text = $this->objMessage->Subject;
			$this->lblSubject->Required = true;
			return $this->lblSubject;
		}

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
				if (($this->objMessage->Offer) && ($this->objMessage->Offer->Id == $objOffer->Id))
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
			$this->lblOfferId->Text = ($this->objMessage->Offer) ? $this->objMessage->Offer->__toString() : null;
			$this->lblOfferId->Required = true;
			return $this->lblOfferId;
		}

		/**
		 * Create and setup QDateTimePicker calDateTime
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDateTime_Create($strControlId = null) {
			$this->calDateTime = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDateTime->Name = QApplication::Translate('Date Time');
			$this->calDateTime->DateTime = $this->objMessage->DateTime;
			$this->calDateTime->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calDateTime->Required = true;
			return $this->calDateTime;
		}

		/**
		 * Create and setup QLabel lblDateTime
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblDateTime_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblDateTime = new QLabel($this->objParentObject, $strControlId);
			$this->lblDateTime->Name = QApplication::Translate('Date Time');
			$this->strDateTimeDateTimeFormat = $strDateTimeFormat;
			$this->lblDateTime->Text = sprintf($this->objMessage->DateTime) ? $this->objMessage->DateTime->qFormat($this->strDateTimeDateTimeFormat) : null;
			$this->lblDateTime->Required = true;
			return $this->lblDateTime;
		}

		protected $strDateTimeDateTimeFormat;


		/**
		 * Create and setup QListBox lstContact
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstContact_Create($strControlId = null) {
			$this->lstContact = new QListBox($this->objParentObject, $strControlId);
			$this->lstContact->Name = QApplication::Translate('Contact');
			$this->lstContact->AddItem(QApplication::Translate('- Select One -'), null);
			$objContactArray = Contact::LoadAll();
			if ($objContactArray) foreach ($objContactArray as $objContact) {
				$objListItem = new QListItem($objContact->__toString(), $objContact->Id);
				if (($this->objMessage->Contact) && ($this->objMessage->Contact->Id == $objContact->Id))
					$objListItem->Selected = true;
				$this->lstContact->AddItem($objListItem);
			}
			return $this->lstContact;
		}

		/**
		 * Create and setup QLabel lblContactId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblContactId_Create($strControlId = null) {
			$this->lblContactId = new QLabel($this->objParentObject, $strControlId);
			$this->lblContactId->Name = QApplication::Translate('Contact');
			$this->lblContactId->Text = ($this->objMessage->Contact) ? $this->objMessage->Contact->__toString() : null;
			return $this->lblContactId;
		}



		/**
		 * Refresh this MetaControl with Data from the local Message object.
		 * @param boolean $blnReload reload Message from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objMessage->Reload();

			if ($this->lstFromUser) {
					$this->lstFromUser->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstFromUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objFromUserArray = User::LoadAll();
				if ($objFromUserArray) foreach ($objFromUserArray as $objFromUser) {
					$objListItem = new QListItem($objFromUser->__toString(), $objFromUser->Id);
					if (($this->objMessage->FromUser) && ($this->objMessage->FromUser->Id == $objFromUser->Id))
						$objListItem->Selected = true;
					$this->lstFromUser->AddItem($objListItem);
				}
			}
			if ($this->lblFromUserId) $this->lblFromUserId->Text = ($this->objMessage->FromUser) ? $this->objMessage->FromUser->__toString() : null;

			if ($this->lstToUser) {
					$this->lstToUser->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstToUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objToUserArray = User::LoadAll();
				if ($objToUserArray) foreach ($objToUserArray as $objToUser) {
					$objListItem = new QListItem($objToUser->__toString(), $objToUser->Id);
					if (($this->objMessage->ToUser) && ($this->objMessage->ToUser->Id == $objToUser->Id))
						$objListItem->Selected = true;
					$this->lstToUser->AddItem($objListItem);
				}
			}
			if ($this->lblToUserId) $this->lblToUserId->Text = ($this->objMessage->ToUser) ? $this->objMessage->ToUser->__toString() : null;

			if ($this->txtBody) $this->txtBody->Text = $this->objMessage->Body;
			if ($this->lblBody) $this->lblBody->Text = $this->objMessage->Body;

			if ($this->lstMessageType) $this->lstMessageType->SelectedValue = $this->objMessage->MessageTypeId;
			if ($this->lblMessageTypeId) $this->lblMessageTypeId->Text = ($this->objMessage->MessageTypeId) ? MessageType::$NameArray[$this->objMessage->MessageTypeId] : null;

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objMessage->Id;

			if ($this->txtSubject) $this->txtSubject->Text = $this->objMessage->Subject;
			if ($this->lblSubject) $this->lblSubject->Text = $this->objMessage->Subject;

			if ($this->lstOffer) {
					$this->lstOffer->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstOffer->AddItem(QApplication::Translate('- Select One -'), null);
				$objOfferArray = Offer::LoadAll();
				if ($objOfferArray) foreach ($objOfferArray as $objOffer) {
					$objListItem = new QListItem($objOffer->__toString(), $objOffer->Id);
					if (($this->objMessage->Offer) && ($this->objMessage->Offer->Id == $objOffer->Id))
						$objListItem->Selected = true;
					$this->lstOffer->AddItem($objListItem);
				}
			}
			if ($this->lblOfferId) $this->lblOfferId->Text = ($this->objMessage->Offer) ? $this->objMessage->Offer->__toString() : null;

			if ($this->calDateTime) $this->calDateTime->DateTime = $this->objMessage->DateTime;
			if ($this->lblDateTime) $this->lblDateTime->Text = sprintf($this->objMessage->DateTime) ? $this->objMessage->DateTime->qFormat($this->strDateTimeDateTimeFormat) : null;

			if ($this->lstContact) {
					$this->lstContact->RemoveAllItems();
				$this->lstContact->AddItem(QApplication::Translate('- Select One -'), null);
				$objContactArray = Contact::LoadAll();
				if ($objContactArray) foreach ($objContactArray as $objContact) {
					$objListItem = new QListItem($objContact->__toString(), $objContact->Id);
					if (($this->objMessage->Contact) && ($this->objMessage->Contact->Id == $objContact->Id))
						$objListItem->Selected = true;
					$this->lstContact->AddItem($objListItem);
				}
			}
			if ($this->lblContactId) $this->lblContactId->Text = ($this->objMessage->Contact) ? $this->objMessage->Contact->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC MESSAGE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Message instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveMessage() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstFromUser) $this->objMessage->FromUserId = $this->lstFromUser->SelectedValue;
				if ($this->lstToUser) $this->objMessage->ToUserId = $this->lstToUser->SelectedValue;
				if ($this->txtBody) $this->objMessage->Body = $this->txtBody->Text;
				if ($this->lstMessageType) $this->objMessage->MessageTypeId = $this->lstMessageType->SelectedValue;
				if ($this->txtSubject) $this->objMessage->Subject = $this->txtSubject->Text;
				if ($this->lstOffer) $this->objMessage->OfferId = $this->lstOffer->SelectedValue;
				if ($this->calDateTime) $this->objMessage->DateTime = $this->calDateTime->DateTime;
				if ($this->lstContact) $this->objMessage->ContactId = $this->lstContact->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Message object
				$this->objMessage->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Message instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteMessage() {
			$this->objMessage->Delete();
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
				case 'Message': return $this->objMessage;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Message fields -- will be created dynamically if not yet created
				case 'FromUserIdControl':
					if (!$this->lstFromUser) return $this->lstFromUser_Create();
					return $this->lstFromUser;
				case 'FromUserIdLabel':
					if (!$this->lblFromUserId) return $this->lblFromUserId_Create();
					return $this->lblFromUserId;
				case 'ToUserIdControl':
					if (!$this->lstToUser) return $this->lstToUser_Create();
					return $this->lstToUser;
				case 'ToUserIdLabel':
					if (!$this->lblToUserId) return $this->lblToUserId_Create();
					return $this->lblToUserId;
				case 'BodyControl':
					if (!$this->txtBody) return $this->txtBody_Create();
					return $this->txtBody;
				case 'BodyLabel':
					if (!$this->lblBody) return $this->lblBody_Create();
					return $this->lblBody;
				case 'MessageTypeIdControl':
					if (!$this->lstMessageType) return $this->lstMessageType_Create();
					return $this->lstMessageType;
				case 'MessageTypeIdLabel':
					if (!$this->lblMessageTypeId) return $this->lblMessageTypeId_Create();
					return $this->lblMessageTypeId;
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'SubjectControl':
					if (!$this->txtSubject) return $this->txtSubject_Create();
					return $this->txtSubject;
				case 'SubjectLabel':
					if (!$this->lblSubject) return $this->lblSubject_Create();
					return $this->lblSubject;
				case 'OfferIdControl':
					if (!$this->lstOffer) return $this->lstOffer_Create();
					return $this->lstOffer;
				case 'OfferIdLabel':
					if (!$this->lblOfferId) return $this->lblOfferId_Create();
					return $this->lblOfferId;
				case 'DateTimeControl':
					if (!$this->calDateTime) return $this->calDateTime_Create();
					return $this->calDateTime;
				case 'DateTimeLabel':
					if (!$this->lblDateTime) return $this->lblDateTime_Create();
					return $this->lblDateTime;
				case 'ContactIdControl':
					if (!$this->lstContact) return $this->lstContact_Create();
					return $this->lstContact;
				case 'ContactIdLabel':
					if (!$this->lblContactId) return $this->lblContactId_Create();
					return $this->lblContactId;
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
					// Controls that point to Message fields
					case 'FromUserIdControl':
						return ($this->lstFromUser = QType::Cast($mixValue, 'QControl'));
					case 'ToUserIdControl':
						return ($this->lstToUser = QType::Cast($mixValue, 'QControl'));
					case 'BodyControl':
						return ($this->txtBody = QType::Cast($mixValue, 'QControl'));
					case 'MessageTypeIdControl':
						return ($this->lstMessageType = QType::Cast($mixValue, 'QControl'));
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'SubjectControl':
						return ($this->txtSubject = QType::Cast($mixValue, 'QControl'));
					case 'OfferIdControl':
						return ($this->lstOffer = QType::Cast($mixValue, 'QControl'));
					case 'DateTimeControl':
						return ($this->calDateTime = QType::Cast($mixValue, 'QControl'));
					case 'ContactIdControl':
						return ($this->lstContact = QType::Cast($mixValue, 'QControl'));
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