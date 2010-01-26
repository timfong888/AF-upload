<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Thread class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Thread object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ThreadMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Thread $Thread the actual Thread data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $SenderUserIdControl
	 * property-read QLabel $SenderUserIdLabel
	 * property QListBox $ReceiverUserIdControl
	 * property-read QLabel $ReceiverUserIdLabel
	 * property QTextBox $SubjectControl
	 * property-read QLabel $SubjectLabel
	 * property QDateTimePicker $DateTimeControl
	 * property-read QLabel $DateTimeLabel
	 * property QListBox $LastUserIdControl
	 * property-read QLabel $LastUserIdLabel
	 * property QListBox $AccountIdControl
	 * property-read QLabel $AccountIdLabel
	 * property QTextBox $MessageTypeIdControl
	 * property-read QLabel $MessageTypeIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ThreadMetaControlGen extends QBaseClass {
		// General Variables
		protected $objThread;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Thread's individual data fields
		protected $lblId;
		protected $lstSenderUser;
		protected $lstReceiverUser;
		protected $txtSubject;
		protected $calDateTime;
		protected $lstLastUser;
		protected $lstAccount;
		protected $txtMessageTypeId;

		// Controls that allow the viewing of Thread's individual data fields
		protected $lblSenderUserId;
		protected $lblReceiverUserId;
		protected $lblSubject;
		protected $lblDateTime;
		protected $lblLastUserId;
		protected $lblAccountId;
		protected $lblMessageTypeId;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ThreadMetaControl to edit a single Thread object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Thread object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ThreadMetaControl
		 * @param Thread $objThread new or existing Thread object
		 */
		 public function __construct($objParentObject, Thread $objThread) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ThreadMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Thread object
			$this->objThread = $objThread;

			// Figure out if we're Editing or Creating New
			if ($this->objThread->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ThreadMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Thread object creation - defaults to CreateOrEdit
 		 * @return ThreadMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objThread = Thread::Load($intId);

				// Thread was found -- return it!
				if ($objThread)
					return new ThreadMetaControl($objParentObject, $objThread);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Thread object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ThreadMetaControl($objParentObject, new Thread());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ThreadMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Thread object creation - defaults to CreateOrEdit
		 * @return ThreadMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ThreadMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ThreadMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Thread object creation - defaults to CreateOrEdit
		 * @return ThreadMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ThreadMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objThread->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstSenderUser
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstSenderUser_Create($strControlId = null) {
			$this->lstSenderUser = new QListBox($this->objParentObject, $strControlId);
			$this->lstSenderUser->Name = QApplication::Translate('Sender User');
			$this->lstSenderUser->Required = true;
			if (!$this->blnEditMode)
				$this->lstSenderUser->AddItem(QApplication::Translate('- Select One -'), null);
			$objSenderUserArray = User::LoadAll();
			if ($objSenderUserArray) foreach ($objSenderUserArray as $objSenderUser) {
				$objListItem = new QListItem($objSenderUser->__toString(), $objSenderUser->Id);
				if (($this->objThread->SenderUser) && ($this->objThread->SenderUser->Id == $objSenderUser->Id))
					$objListItem->Selected = true;
				$this->lstSenderUser->AddItem($objListItem);
			}
			return $this->lstSenderUser;
		}

		/**
		 * Create and setup QLabel lblSenderUserId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSenderUserId_Create($strControlId = null) {
			$this->lblSenderUserId = new QLabel($this->objParentObject, $strControlId);
			$this->lblSenderUserId->Name = QApplication::Translate('Sender User');
			$this->lblSenderUserId->Text = ($this->objThread->SenderUser) ? $this->objThread->SenderUser->__toString() : null;
			$this->lblSenderUserId->Required = true;
			return $this->lblSenderUserId;
		}

		/**
		 * Create and setup QListBox lstReceiverUser
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstReceiverUser_Create($strControlId = null) {
			$this->lstReceiverUser = new QListBox($this->objParentObject, $strControlId);
			$this->lstReceiverUser->Name = QApplication::Translate('Receiver User');
			$this->lstReceiverUser->Required = true;
			if (!$this->blnEditMode)
				$this->lstReceiverUser->AddItem(QApplication::Translate('- Select One -'), null);
			$objReceiverUserArray = User::LoadAll();
			if ($objReceiverUserArray) foreach ($objReceiverUserArray as $objReceiverUser) {
				$objListItem = new QListItem($objReceiverUser->__toString(), $objReceiverUser->Id);
				if (($this->objThread->ReceiverUser) && ($this->objThread->ReceiverUser->Id == $objReceiverUser->Id))
					$objListItem->Selected = true;
				$this->lstReceiverUser->AddItem($objListItem);
			}
			return $this->lstReceiverUser;
		}

		/**
		 * Create and setup QLabel lblReceiverUserId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReceiverUserId_Create($strControlId = null) {
			$this->lblReceiverUserId = new QLabel($this->objParentObject, $strControlId);
			$this->lblReceiverUserId->Name = QApplication::Translate('Receiver User');
			$this->lblReceiverUserId->Text = ($this->objThread->ReceiverUser) ? $this->objThread->ReceiverUser->__toString() : null;
			$this->lblReceiverUserId->Required = true;
			return $this->lblReceiverUserId;
		}

		/**
		 * Create and setup QTextBox txtSubject
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSubject_Create($strControlId = null) {
			$this->txtSubject = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSubject->Name = QApplication::Translate('Subject');
			$this->txtSubject->Text = $this->objThread->Subject;
			$this->txtSubject->Required = true;
			$this->txtSubject->MaxLength = Thread::SubjectMaxLength;
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
			$this->lblSubject->Text = $this->objThread->Subject;
			$this->lblSubject->Required = true;
			return $this->lblSubject;
		}

		/**
		 * Create and setup QDateTimePicker calDateTime
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDateTime_Create($strControlId = null) {
			$this->calDateTime = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDateTime->Name = QApplication::Translate('Date Time');
			$this->calDateTime->DateTime = $this->objThread->DateTime;
			$this->calDateTime->DateTimePickerType = QDateTimePickerType::DateTime;
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
			$this->lblDateTime->Text = sprintf($this->objThread->DateTime) ? $this->objThread->DateTime->qFormat($this->strDateTimeDateTimeFormat) : null;
			return $this->lblDateTime;
		}

		protected $strDateTimeDateTimeFormat;


		/**
		 * Create and setup QListBox lstLastUser
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstLastUser_Create($strControlId = null) {
			$this->lstLastUser = new QListBox($this->objParentObject, $strControlId);
			$this->lstLastUser->Name = QApplication::Translate('Last User');
			$this->lstLastUser->Required = true;
			if (!$this->blnEditMode)
				$this->lstLastUser->AddItem(QApplication::Translate('- Select One -'), null);
			$objLastUserArray = User::LoadAll();
			if ($objLastUserArray) foreach ($objLastUserArray as $objLastUser) {
				$objListItem = new QListItem($objLastUser->__toString(), $objLastUser->Id);
				if (($this->objThread->LastUser) && ($this->objThread->LastUser->Id == $objLastUser->Id))
					$objListItem->Selected = true;
				$this->lstLastUser->AddItem($objListItem);
			}
			return $this->lstLastUser;
		}

		/**
		 * Create and setup QLabel lblLastUserId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLastUserId_Create($strControlId = null) {
			$this->lblLastUserId = new QLabel($this->objParentObject, $strControlId);
			$this->lblLastUserId->Name = QApplication::Translate('Last User');
			$this->lblLastUserId->Text = ($this->objThread->LastUser) ? $this->objThread->LastUser->__toString() : null;
			$this->lblLastUserId->Required = true;
			return $this->lblLastUserId;
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
				if (($this->objThread->Account) && ($this->objThread->Account->Id == $objAccount->Id))
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
			$this->lblAccountId->Text = ($this->objThread->Account) ? $this->objThread->Account->__toString() : null;
			$this->lblAccountId->Required = true;
			return $this->lblAccountId;
		}

		/**
		 * Create and setup QTextBox txtMessageTypeId
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtMessageTypeId_Create($strControlId = null) {
			$this->txtMessageTypeId = new QTextBox($this->objParentObject, $strControlId);
			$this->txtMessageTypeId->Name = QApplication::Translate('Message Type Id');
			$this->txtMessageTypeId->Text = $this->objThread->MessageTypeId;
			$this->txtMessageTypeId->Required = true;
			$this->txtMessageTypeId->MaxLength = Thread::MessageTypeIdMaxLength;
			return $this->txtMessageTypeId;
		}

		/**
		 * Create and setup QLabel lblMessageTypeId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMessageTypeId_Create($strControlId = null) {
			$this->lblMessageTypeId = new QLabel($this->objParentObject, $strControlId);
			$this->lblMessageTypeId->Name = QApplication::Translate('Message Type Id');
			$this->lblMessageTypeId->Text = $this->objThread->MessageTypeId;
			$this->lblMessageTypeId->Required = true;
			return $this->lblMessageTypeId;
		}



		/**
		 * Refresh this MetaControl with Data from the local Thread object.
		 * @param boolean $blnReload reload Thread from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objThread->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objThread->Id;

			if ($this->lstSenderUser) {
					$this->lstSenderUser->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstSenderUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objSenderUserArray = User::LoadAll();
				if ($objSenderUserArray) foreach ($objSenderUserArray as $objSenderUser) {
					$objListItem = new QListItem($objSenderUser->__toString(), $objSenderUser->Id);
					if (($this->objThread->SenderUser) && ($this->objThread->SenderUser->Id == $objSenderUser->Id))
						$objListItem->Selected = true;
					$this->lstSenderUser->AddItem($objListItem);
				}
			}
			if ($this->lblSenderUserId) $this->lblSenderUserId->Text = ($this->objThread->SenderUser) ? $this->objThread->SenderUser->__toString() : null;

			if ($this->lstReceiverUser) {
					$this->lstReceiverUser->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstReceiverUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objReceiverUserArray = User::LoadAll();
				if ($objReceiverUserArray) foreach ($objReceiverUserArray as $objReceiverUser) {
					$objListItem = new QListItem($objReceiverUser->__toString(), $objReceiverUser->Id);
					if (($this->objThread->ReceiverUser) && ($this->objThread->ReceiverUser->Id == $objReceiverUser->Id))
						$objListItem->Selected = true;
					$this->lstReceiverUser->AddItem($objListItem);
				}
			}
			if ($this->lblReceiverUserId) $this->lblReceiverUserId->Text = ($this->objThread->ReceiverUser) ? $this->objThread->ReceiverUser->__toString() : null;

			if ($this->txtSubject) $this->txtSubject->Text = $this->objThread->Subject;
			if ($this->lblSubject) $this->lblSubject->Text = $this->objThread->Subject;

			if ($this->calDateTime) $this->calDateTime->DateTime = $this->objThread->DateTime;
			if ($this->lblDateTime) $this->lblDateTime->Text = sprintf($this->objThread->DateTime) ? $this->objThread->DateTime->qFormat($this->strDateTimeDateTimeFormat) : null;

			if ($this->lstLastUser) {
					$this->lstLastUser->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLastUser->AddItem(QApplication::Translate('- Select One -'), null);
				$objLastUserArray = User::LoadAll();
				if ($objLastUserArray) foreach ($objLastUserArray as $objLastUser) {
					$objListItem = new QListItem($objLastUser->__toString(), $objLastUser->Id);
					if (($this->objThread->LastUser) && ($this->objThread->LastUser->Id == $objLastUser->Id))
						$objListItem->Selected = true;
					$this->lstLastUser->AddItem($objListItem);
				}
			}
			if ($this->lblLastUserId) $this->lblLastUserId->Text = ($this->objThread->LastUser) ? $this->objThread->LastUser->__toString() : null;

			if ($this->lstAccount) {
					$this->lstAccount->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstAccount->AddItem(QApplication::Translate('- Select One -'), null);
				$objAccountArray = Account::LoadAll();
				if ($objAccountArray) foreach ($objAccountArray as $objAccount) {
					$objListItem = new QListItem($objAccount->__toString(), $objAccount->Id);
					if (($this->objThread->Account) && ($this->objThread->Account->Id == $objAccount->Id))
						$objListItem->Selected = true;
					$this->lstAccount->AddItem($objListItem);
				}
			}
			if ($this->lblAccountId) $this->lblAccountId->Text = ($this->objThread->Account) ? $this->objThread->Account->__toString() : null;

			if ($this->txtMessageTypeId) $this->txtMessageTypeId->Text = $this->objThread->MessageTypeId;
			if ($this->lblMessageTypeId) $this->lblMessageTypeId->Text = $this->objThread->MessageTypeId;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC THREAD OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Thread instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveThread() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstSenderUser) $this->objThread->SenderUserId = $this->lstSenderUser->SelectedValue;
				if ($this->lstReceiverUser) $this->objThread->ReceiverUserId = $this->lstReceiverUser->SelectedValue;
				if ($this->txtSubject) $this->objThread->Subject = $this->txtSubject->Text;
				if ($this->calDateTime) $this->objThread->DateTime = $this->calDateTime->DateTime;
				if ($this->lstLastUser) $this->objThread->LastUserId = $this->lstLastUser->SelectedValue;
				if ($this->lstAccount) $this->objThread->AccountId = $this->lstAccount->SelectedValue;
				if ($this->txtMessageTypeId) $this->objThread->MessageTypeId = $this->txtMessageTypeId->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Thread object
				$this->objThread->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Thread instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteThread() {
			$this->objThread->Delete();
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
				case 'Thread': return $this->objThread;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Thread fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'SenderUserIdControl':
					if (!$this->lstSenderUser) return $this->lstSenderUser_Create();
					return $this->lstSenderUser;
				case 'SenderUserIdLabel':
					if (!$this->lblSenderUserId) return $this->lblSenderUserId_Create();
					return $this->lblSenderUserId;
				case 'ReceiverUserIdControl':
					if (!$this->lstReceiverUser) return $this->lstReceiverUser_Create();
					return $this->lstReceiverUser;
				case 'ReceiverUserIdLabel':
					if (!$this->lblReceiverUserId) return $this->lblReceiverUserId_Create();
					return $this->lblReceiverUserId;
				case 'SubjectControl':
					if (!$this->txtSubject) return $this->txtSubject_Create();
					return $this->txtSubject;
				case 'SubjectLabel':
					if (!$this->lblSubject) return $this->lblSubject_Create();
					return $this->lblSubject;
				case 'DateTimeControl':
					if (!$this->calDateTime) return $this->calDateTime_Create();
					return $this->calDateTime;
				case 'DateTimeLabel':
					if (!$this->lblDateTime) return $this->lblDateTime_Create();
					return $this->lblDateTime;
				case 'LastUserIdControl':
					if (!$this->lstLastUser) return $this->lstLastUser_Create();
					return $this->lstLastUser;
				case 'LastUserIdLabel':
					if (!$this->lblLastUserId) return $this->lblLastUserId_Create();
					return $this->lblLastUserId;
				case 'AccountIdControl':
					if (!$this->lstAccount) return $this->lstAccount_Create();
					return $this->lstAccount;
				case 'AccountIdLabel':
					if (!$this->lblAccountId) return $this->lblAccountId_Create();
					return $this->lblAccountId;
				case 'MessageTypeIdControl':
					if (!$this->txtMessageTypeId) return $this->txtMessageTypeId_Create();
					return $this->txtMessageTypeId;
				case 'MessageTypeIdLabel':
					if (!$this->lblMessageTypeId) return $this->lblMessageTypeId_Create();
					return $this->lblMessageTypeId;
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
					// Controls that point to Thread fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'SenderUserIdControl':
						return ($this->lstSenderUser = QType::Cast($mixValue, 'QControl'));
					case 'ReceiverUserIdControl':
						return ($this->lstReceiverUser = QType::Cast($mixValue, 'QControl'));
					case 'SubjectControl':
						return ($this->txtSubject = QType::Cast($mixValue, 'QControl'));
					case 'DateTimeControl':
						return ($this->calDateTime = QType::Cast($mixValue, 'QControl'));
					case 'LastUserIdControl':
						return ($this->lstLastUser = QType::Cast($mixValue, 'QControl'));
					case 'AccountIdControl':
						return ($this->lstAccount = QType::Cast($mixValue, 'QControl'));
					case 'MessageTypeIdControl':
						return ($this->txtMessageTypeId = QType::Cast($mixValue, 'QControl'));
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