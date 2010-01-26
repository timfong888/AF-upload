<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the User class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single User object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a UserMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read User $User the actual User data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $UsernameControl
	 * property-read QLabel $UsernameLabel
	 * property QTextBox $PasswordControl
	 * property-read QLabel $PasswordLabel
	 * property QTextBox $FullNameControl
	 * property-read QLabel $FullNameLabel
	 * property QCheckBox $ActiveControl
	 * property-read QLabel $ActiveLabel
	 * property QListBox $AccountIdControl
	 * property-read QLabel $AccountIdLabel
	 * property QListBox $UserDetailIdControl
	 * property-read QLabel $UserDetailIdLabel
	 * property QListBox $ManagerIdControl
	 * property-read QLabel $ManagerIdLabel
	 * property QTextBox $CodeControl
	 * property-read QLabel $CodeLabel
	 * property QListBox $ParentUserAsAlliesControl
	 * property-read QLabel $ParentUserAsAlliesLabel
	 * property QListBox $UserAsAlliesControl
	 * property-read QLabel $UserAsAlliesLabel
	 * property QListBox $GroupCodeControl
	 * property-read QLabel $GroupCodeLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class UserMetaControlGen extends QBaseClass {
		// General Variables
		protected $objUser;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of User's individual data fields
		protected $lblId;
		protected $txtUsername;
		protected $txtPassword;
		protected $txtFullName;
		protected $chkActive;
		protected $lstAccountIdObject;
		protected $lstUserDetail;
		protected $lstManagerIdObject;
		protected $txtCode;

		// Controls that allow the viewing of User's individual data fields
		protected $lblUsername;
		protected $lblPassword;
		protected $lblFullName;
		protected $lblActive;
		protected $lblAccountId;
		protected $lblUserDetailId;
		protected $lblManagerId;
		protected $lblCode;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstParentUsersAsAllies;
		protected $strParentUserAsAlliesGlue;
		protected $lstUsersAsAllies;
		protected $strUserAsAlliesGlue;
		protected $lstGroupCodes;
		protected $strGroupCodeGlue;

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblParentUsersAsAllies;
		protected $lblUsersAsAllies;
		protected $lblGroupCodes;


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * UserMetaControl to edit a single User object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single User object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserMetaControl
		 * @param User $objUser new or existing User object
		 */
		 public function __construct($objParentObject, User $objUser) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this UserMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked User object
			$this->objUser = $objUser;

			// Figure out if we're Editing or Creating New
			if ($this->objUser->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing User object creation - defaults to CreateOrEdit
 		 * @return UserMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objUser = User::Load($intId);

				// User was found -- return it!
				if ($objUser)
					return new UserMetaControl($objParentObject, $objUser);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a User object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new UserMetaControl($objParentObject, new User());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing User object creation - defaults to CreateOrEdit
		 * @return UserMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return UserMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing User object creation - defaults to CreateOrEdit
		 * @return UserMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return UserMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objUser->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtUsername
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtUsername_Create($strControlId = null) {
			$this->txtUsername = new QTextBox($this->objParentObject, $strControlId);
			$this->txtUsername->Name = QApplication::Translate('Username');
			$this->txtUsername->Text = $this->objUser->Username;
			$this->txtUsername->Required = true;
			$this->txtUsername->MaxLength = User::UsernameMaxLength;
			return $this->txtUsername;
		}

		/**
		 * Create and setup QLabel lblUsername
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUsername_Create($strControlId = null) {
			$this->lblUsername = new QLabel($this->objParentObject, $strControlId);
			$this->lblUsername->Name = QApplication::Translate('Username');
			$this->lblUsername->Text = $this->objUser->Username;
			$this->lblUsername->Required = true;
			return $this->lblUsername;
		}

		/**
		 * Create and setup QTextBox txtPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPassword_Create($strControlId = null) {
			$this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPassword->Name = QApplication::Translate('Password');
			$this->txtPassword->Text = $this->objUser->Password;
			$this->txtPassword->Required = true;
			$this->txtPassword->MaxLength = User::PasswordMaxLength;
			return $this->txtPassword;
		}

		/**
		 * Create and setup QLabel lblPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPassword_Create($strControlId = null) {
			$this->lblPassword = new QLabel($this->objParentObject, $strControlId);
			$this->lblPassword->Name = QApplication::Translate('Password');
			$this->lblPassword->Text = $this->objUser->Password;
			$this->lblPassword->Required = true;
			return $this->lblPassword;
		}

		/**
		 * Create and setup QTextBox txtFullName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFullName_Create($strControlId = null) {
			$this->txtFullName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFullName->Name = QApplication::Translate('Full Name');
			$this->txtFullName->Text = $this->objUser->FullName;
			$this->txtFullName->Required = true;
			$this->txtFullName->MaxLength = User::FullNameMaxLength;
			return $this->txtFullName;
		}

		/**
		 * Create and setup QLabel lblFullName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFullName_Create($strControlId = null) {
			$this->lblFullName = new QLabel($this->objParentObject, $strControlId);
			$this->lblFullName->Name = QApplication::Translate('Full Name');
			$this->lblFullName->Text = $this->objUser->FullName;
			$this->lblFullName->Required = true;
			return $this->lblFullName;
		}

		/**
		 * Create and setup QCheckBox chkActive
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkActive_Create($strControlId = null) {
			$this->chkActive = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkActive->Name = QApplication::Translate('Active');
			$this->chkActive->Checked = $this->objUser->Active;
			return $this->chkActive;
		}

		/**
		 * Create and setup QLabel lblActive
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblActive_Create($strControlId = null) {
			$this->lblActive = new QLabel($this->objParentObject, $strControlId);
			$this->lblActive->Name = QApplication::Translate('Active');
			$this->lblActive->Text = ($this->objUser->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblActive;
		}

		/**
		 * Create and setup QListBox lstAccountIdObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstAccountIdObject_Create($strControlId = null) {
			$this->lstAccountIdObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstAccountIdObject->Name = QApplication::Translate('Account Id Object');
			$this->lstAccountIdObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstAccountIdObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objAccountIdObjectArray = Account::LoadAll();
			if ($objAccountIdObjectArray) foreach ($objAccountIdObjectArray as $objAccountIdObject) {
				$objListItem = new QListItem($objAccountIdObject->__toString(), $objAccountIdObject->Id);
				if (($this->objUser->AccountIdObject) && ($this->objUser->AccountIdObject->Id == $objAccountIdObject->Id))
					$objListItem->Selected = true;
				$this->lstAccountIdObject->AddItem($objListItem);
			}
			return $this->lstAccountIdObject;
		}

		/**
		 * Create and setup QLabel lblAccountId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAccountId_Create($strControlId = null) {
			$this->lblAccountId = new QLabel($this->objParentObject, $strControlId);
			$this->lblAccountId->Name = QApplication::Translate('Account Id Object');
			$this->lblAccountId->Text = ($this->objUser->AccountIdObject) ? $this->objUser->AccountIdObject->__toString() : null;
			$this->lblAccountId->Required = true;
			return $this->lblAccountId;
		}

		/**
		 * Create and setup QListBox lstUserDetail
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstUserDetail_Create($strControlId = null) {
			$this->lstUserDetail = new QListBox($this->objParentObject, $strControlId);
			$this->lstUserDetail->Name = QApplication::Translate('User Detail');
			$this->lstUserDetail->Required = true;
			if (!$this->blnEditMode)
				$this->lstUserDetail->AddItem(QApplication::Translate('- Select One -'), null);
			$objUserDetailArray = UserDetails::LoadAll();
			if ($objUserDetailArray) foreach ($objUserDetailArray as $objUserDetail) {
				$objListItem = new QListItem($objUserDetail->__toString(), $objUserDetail->Id);
				if (($this->objUser->UserDetail) && ($this->objUser->UserDetail->Id == $objUserDetail->Id))
					$objListItem->Selected = true;
				$this->lstUserDetail->AddItem($objListItem);
			}
			return $this->lstUserDetail;
		}

		/**
		 * Create and setup QLabel lblUserDetailId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUserDetailId_Create($strControlId = null) {
			$this->lblUserDetailId = new QLabel($this->objParentObject, $strControlId);
			$this->lblUserDetailId->Name = QApplication::Translate('User Detail');
			$this->lblUserDetailId->Text = ($this->objUser->UserDetail) ? $this->objUser->UserDetail->__toString() : null;
			$this->lblUserDetailId->Required = true;
			return $this->lblUserDetailId;
		}

		/**
		 * Create and setup QListBox lstManagerIdObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstManagerIdObject_Create($strControlId = null) {
			$this->lstManagerIdObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstManagerIdObject->Name = QApplication::Translate('Manager Id Object');
			$this->lstManagerIdObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objManagerIdObjectArray = User::LoadAll();
			if ($objManagerIdObjectArray) foreach ($objManagerIdObjectArray as $objManagerIdObject) {
				$objListItem = new QListItem($objManagerIdObject->__toString(), $objManagerIdObject->Id);
				if (($this->objUser->ManagerIdObject) && ($this->objUser->ManagerIdObject->Id == $objManagerIdObject->Id))
					$objListItem->Selected = true;
				$this->lstManagerIdObject->AddItem($objListItem);
			}
			return $this->lstManagerIdObject;
		}

		/**
		 * Create and setup QLabel lblManagerId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblManagerId_Create($strControlId = null) {
			$this->lblManagerId = new QLabel($this->objParentObject, $strControlId);
			$this->lblManagerId->Name = QApplication::Translate('Manager Id Object');
			$this->lblManagerId->Text = ($this->objUser->ManagerIdObject) ? $this->objUser->ManagerIdObject->__toString() : null;
			return $this->lblManagerId;
		}

		/**
		 * Create and setup QTextBox txtCode
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCode_Create($strControlId = null) {
			$this->txtCode = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCode->Name = QApplication::Translate('Code');
			$this->txtCode->Text = $this->objUser->Code;
			$this->txtCode->MaxLength = User::CodeMaxLength;
			return $this->txtCode;
		}

		/**
		 * Create and setup QLabel lblCode
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCode_Create($strControlId = null) {
			$this->lblCode = new QLabel($this->objParentObject, $strControlId);
			$this->lblCode->Name = QApplication::Translate('Code');
			$this->lblCode->Text = $this->objUser->Code;
			return $this->lblCode;
		}

		/**
		 * Create and setup QListBox lstParentUsersAsAllies
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstParentUsersAsAllies_Create($strControlId = null) {
			$this->lstParentUsersAsAllies = new QListBox($this->objParentObject, $strControlId);
			$this->lstParentUsersAsAllies->Name = QApplication::Translate('Parent Users As Allies');
			$this->lstParentUsersAsAllies->SelectionMode = QSelectionMode::Multiple;
			$objAssociatedArray = $this->objUser->GetParentUserAsAlliesArray();
			$objUserArray = User::LoadAll();
			if ($objUserArray) foreach ($objUserArray as $objUser) {
				$objListItem = new QListItem($objUser->qFormat(), $objUser->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objUser->Id)
						$objListItem->Selected = true;
				}
				$this->lstParentUsersAsAllies->AddItem($objListItem);
			}
			return $this->lstParentUsersAsAllies;
		}

		/**
		 * Create and setup QLabel lblParentUsersAsAllies
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblParentUsersAsAllies_Create($strControlId = null, $strGlue = ', ') {
			$this->lblParentUsersAsAllies = new QLabel($this->objParentObject, $strControlId);
			$this->lblParentUsersAsAllies->Name = QApplication::Translate('Parent Users As Allies');
			$this->strParentUserAsAlliesGlue = $strGlue;
			
			$objAssociatedArray = $this->objUser->GetParentUserAsAlliesArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblParentUsersAsAllies->Text = implode($this->strParentUserAsAlliesGlue, $strItems);
			return $this->lblParentUsersAsAllies;
		}


		/**
		 * Create and setup QListBox lstUsersAsAllies
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstUsersAsAllies_Create($strControlId = null) {
			$this->lstUsersAsAllies = new QListBox($this->objParentObject, $strControlId);
			$this->lstUsersAsAllies->Name = QApplication::Translate('Users As Allies');
			$this->lstUsersAsAllies->SelectionMode = QSelectionMode::Multiple;
			$objAssociatedArray = $this->objUser->GetUserAsAlliesArray();
			$objUserArray = User::LoadAll();
			if ($objUserArray) foreach ($objUserArray as $objUser) {
				$objListItem = new QListItem($objUser->qFormat(), $objUser->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objUser->Id)
						$objListItem->Selected = true;
				}
				$this->lstUsersAsAllies->AddItem($objListItem);
			}
			return $this->lstUsersAsAllies;
		}

		/**
		 * Create and setup QLabel lblUsersAsAllies
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblUsersAsAllies_Create($strControlId = null, $strGlue = ', ') {
			$this->lblUsersAsAllies = new QLabel($this->objParentObject, $strControlId);
			$this->lblUsersAsAllies->Name = QApplication::Translate('Users As Allies');
			$this->strUserAsAlliesGlue = $strGlue;
			
			$objAssociatedArray = $this->objUser->GetUserAsAlliesArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblUsersAsAllies->Text = implode($this->strUserAsAlliesGlue, $strItems);
			return $this->lblUsersAsAllies;
		}


		/**
		 * Create and setup QListBox lstGroupCodes
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstGroupCodes_Create($strControlId = null) {
			$this->lstGroupCodes = new QListBox($this->objParentObject, $strControlId);
			$this->lstGroupCodes->Name = QApplication::Translate('Group Codes');
			$this->lstGroupCodes->SelectionMode = QSelectionMode::Multiple;
			$objAssociatedArray = $this->objUser->GetGroupCodeArray();
			$objGroupCodeArray = GroupCode::LoadAll();
			if ($objGroupCodeArray) foreach ($objGroupCodeArray as $objGroupCode) {
				$objListItem = new QListItem($objGroupCode->qFormat(), $objGroupCode->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objGroupCode->Id)
						$objListItem->Selected = true;
				}
				$this->lstGroupCodes->AddItem($objListItem);
			}
			return $this->lstGroupCodes;
		}

		/**
		 * Create and setup QLabel lblGroupCodes
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblGroupCodes_Create($strControlId = null, $strGlue = ', ') {
			$this->lblGroupCodes = new QLabel($this->objParentObject, $strControlId);
			$this->lblGroupCodes->Name = QApplication::Translate('Group Codes');
			$this->strGroupCodeGlue = $strGlue;
			
			$objAssociatedArray = $this->objUser->GetGroupCodeArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblGroupCodes->Text = implode($this->strGroupCodeGlue, $strItems);
			return $this->lblGroupCodes;
		}




		/**
		 * Refresh this MetaControl with Data from the local User object.
		 * @param boolean $blnReload reload User from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objUser->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objUser->Id;

			if ($this->txtUsername) $this->txtUsername->Text = $this->objUser->Username;
			if ($this->lblUsername) $this->lblUsername->Text = $this->objUser->Username;

			if ($this->txtPassword) $this->txtPassword->Text = $this->objUser->Password;
			if ($this->lblPassword) $this->lblPassword->Text = $this->objUser->Password;

			if ($this->txtFullName) $this->txtFullName->Text = $this->objUser->FullName;
			if ($this->lblFullName) $this->lblFullName->Text = $this->objUser->FullName;

			if ($this->chkActive) $this->chkActive->Checked = $this->objUser->Active;
			if ($this->lblActive) $this->lblActive->Text = ($this->objUser->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->lstAccountIdObject) {
					$this->lstAccountIdObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstAccountIdObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objAccountIdObjectArray = Account::LoadAll();
				if ($objAccountIdObjectArray) foreach ($objAccountIdObjectArray as $objAccountIdObject) {
					$objListItem = new QListItem($objAccountIdObject->__toString(), $objAccountIdObject->Id);
					if (($this->objUser->AccountIdObject) && ($this->objUser->AccountIdObject->Id == $objAccountIdObject->Id))
						$objListItem->Selected = true;
					$this->lstAccountIdObject->AddItem($objListItem);
				}
			}
			if ($this->lblAccountId) $this->lblAccountId->Text = ($this->objUser->AccountIdObject) ? $this->objUser->AccountIdObject->__toString() : null;

			if ($this->lstUserDetail) {
					$this->lstUserDetail->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstUserDetail->AddItem(QApplication::Translate('- Select One -'), null);
				$objUserDetailArray = UserDetails::LoadAll();
				if ($objUserDetailArray) foreach ($objUserDetailArray as $objUserDetail) {
					$objListItem = new QListItem($objUserDetail->__toString(), $objUserDetail->Id);
					if (($this->objUser->UserDetail) && ($this->objUser->UserDetail->Id == $objUserDetail->Id))
						$objListItem->Selected = true;
					$this->lstUserDetail->AddItem($objListItem);
				}
			}
			if ($this->lblUserDetailId) $this->lblUserDetailId->Text = ($this->objUser->UserDetail) ? $this->objUser->UserDetail->__toString() : null;

			if ($this->lstManagerIdObject) {
					$this->lstManagerIdObject->RemoveAllItems();
				$this->lstManagerIdObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objManagerIdObjectArray = User::LoadAll();
				if ($objManagerIdObjectArray) foreach ($objManagerIdObjectArray as $objManagerIdObject) {
					$objListItem = new QListItem($objManagerIdObject->__toString(), $objManagerIdObject->Id);
					if (($this->objUser->ManagerIdObject) && ($this->objUser->ManagerIdObject->Id == $objManagerIdObject->Id))
						$objListItem->Selected = true;
					$this->lstManagerIdObject->AddItem($objListItem);
				}
			}
			if ($this->lblManagerId) $this->lblManagerId->Text = ($this->objUser->ManagerIdObject) ? $this->objUser->ManagerIdObject->__toString() : null;

			if ($this->txtCode) $this->txtCode->Text = $this->objUser->Code;
			if ($this->lblCode) $this->lblCode->Text = $this->objUser->Code;

			if ($this->lstParentUsersAsAllies) {
				$this->lstParentUsersAsAllies->RemoveAllItems();
				$objAssociatedArray = $this->objUser->GetParentUserAsAlliesArray();
				$objUserArray = User::LoadAll();
				if ($objUserArray) foreach ($objUserArray as $objUser) {
					$objListItem = new QListItem($objUser->__toString(), $objUser->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objUser->Id)
							$objListItem->Selected = true;
					}
					$this->lstParentUsersAsAllies->AddItem($objListItem);
				}
			}
			if ($this->lblParentUsersAsAllies) {
				$objAssociatedArray = $this->objUser->GetParentUserAsAlliesArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblParentUsersAsAllies->Text = implode($this->strParentUserAsAlliesGlue, $strItems);
			}

			if ($this->lstUsersAsAllies) {
				$this->lstUsersAsAllies->RemoveAllItems();
				$objAssociatedArray = $this->objUser->GetUserAsAlliesArray();
				$objUserArray = User::LoadAll();
				if ($objUserArray) foreach ($objUserArray as $objUser) {
					$objListItem = new QListItem($objUser->__toString(), $objUser->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objUser->Id)
							$objListItem->Selected = true;
					}
					$this->lstUsersAsAllies->AddItem($objListItem);
				}
			}
			if ($this->lblUsersAsAllies) {
				$objAssociatedArray = $this->objUser->GetUserAsAlliesArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblUsersAsAllies->Text = implode($this->strUserAsAlliesGlue, $strItems);
			}

			if ($this->lstGroupCodes) {
				$this->lstGroupCodes->RemoveAllItems();
				$objAssociatedArray = $this->objUser->GetGroupCodeArray();
				$objGroupCodeArray = GroupCode::LoadAll();
				if ($objGroupCodeArray) foreach ($objGroupCodeArray as $objGroupCode) {
					$objListItem = new QListItem($objGroupCode->__toString(), $objGroupCode->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objGroupCode->Id)
							$objListItem->Selected = true;
					}
					$this->lstGroupCodes->AddItem($objListItem);
				}
			}
			if ($this->lblGroupCodes) {
				$objAssociatedArray = $this->objUser->GetGroupCodeArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblGroupCodes->Text = implode($this->strGroupCodeGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstParentUsersAsAllies_Update() {
			if ($this->lstParentUsersAsAllies) {
				$this->objUser->UnassociateAllParentUsersAsAllies();
				$objSelectedListItems = $this->lstParentUsersAsAllies->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objUser->AssociateParentUserAsAllies(User::Load($objListItem->Value));
				}
			}
		}

		protected function lstUsersAsAllies_Update() {
			if ($this->lstUsersAsAllies) {
				$this->objUser->UnassociateAllUsersAsAllies();
				$objSelectedListItems = $this->lstUsersAsAllies->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objUser->AssociateUserAsAllies(User::Load($objListItem->Value));
				}
			}
		}

		protected function lstGroupCodes_Update() {
			if ($this->lstGroupCodes) {
				$this->objUser->UnassociateAllGroupCodes();
				$objSelectedListItems = $this->lstGroupCodes->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objUser->AssociateGroupCode(GroupCode::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC USER OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's User instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveUser() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtUsername) $this->objUser->Username = $this->txtUsername->Text;
				if ($this->txtPassword) $this->objUser->Password = $this->txtPassword->Text;
				if ($this->txtFullName) $this->objUser->FullName = $this->txtFullName->Text;
				if ($this->chkActive) $this->objUser->Active = $this->chkActive->Checked;
				if ($this->lstAccountIdObject) $this->objUser->AccountId = $this->lstAccountIdObject->SelectedValue;
				if ($this->lstUserDetail) $this->objUser->UserDetailId = $this->lstUserDetail->SelectedValue;
				if ($this->lstManagerIdObject) $this->objUser->ManagerId = $this->lstManagerIdObject->SelectedValue;
				if ($this->txtCode) $this->objUser->Code = $this->txtCode->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the User object
				$this->objUser->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstParentUsersAsAllies_Update();
				$this->lstUsersAsAllies_Update();
				$this->lstGroupCodes_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's User instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteUser() {
			$this->objUser->UnassociateAllParentUsersAsAllies();
			$this->objUser->UnassociateAllUsersAsAllies();
			$this->objUser->UnassociateAllGroupCodes();
			$this->objUser->Delete();
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
				case 'User': return $this->objUser;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to User fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'UsernameControl':
					if (!$this->txtUsername) return $this->txtUsername_Create();
					return $this->txtUsername;
				case 'UsernameLabel':
					if (!$this->lblUsername) return $this->lblUsername_Create();
					return $this->lblUsername;
				case 'PasswordControl':
					if (!$this->txtPassword) return $this->txtPassword_Create();
					return $this->txtPassword;
				case 'PasswordLabel':
					if (!$this->lblPassword) return $this->lblPassword_Create();
					return $this->lblPassword;
				case 'FullNameControl':
					if (!$this->txtFullName) return $this->txtFullName_Create();
					return $this->txtFullName;
				case 'FullNameLabel':
					if (!$this->lblFullName) return $this->lblFullName_Create();
					return $this->lblFullName;
				case 'ActiveControl':
					if (!$this->chkActive) return $this->chkActive_Create();
					return $this->chkActive;
				case 'ActiveLabel':
					if (!$this->lblActive) return $this->lblActive_Create();
					return $this->lblActive;
				case 'AccountIdControl':
					if (!$this->lstAccountIdObject) return $this->lstAccountIdObject_Create();
					return $this->lstAccountIdObject;
				case 'AccountIdLabel':
					if (!$this->lblAccountId) return $this->lblAccountId_Create();
					return $this->lblAccountId;
				case 'UserDetailIdControl':
					if (!$this->lstUserDetail) return $this->lstUserDetail_Create();
					return $this->lstUserDetail;
				case 'UserDetailIdLabel':
					if (!$this->lblUserDetailId) return $this->lblUserDetailId_Create();
					return $this->lblUserDetailId;
				case 'ManagerIdControl':
					if (!$this->lstManagerIdObject) return $this->lstManagerIdObject_Create();
					return $this->lstManagerIdObject;
				case 'ManagerIdLabel':
					if (!$this->lblManagerId) return $this->lblManagerId_Create();
					return $this->lblManagerId;
				case 'CodeControl':
					if (!$this->txtCode) return $this->txtCode_Create();
					return $this->txtCode;
				case 'CodeLabel':
					if (!$this->lblCode) return $this->lblCode_Create();
					return $this->lblCode;
				case 'ParentUserAsAlliesControl':
					if (!$this->lstParentUsersAsAllies) return $this->lstParentUsersAsAllies_Create();
					return $this->lstParentUsersAsAllies;
				case 'ParentUserAsAlliesLabel':
					if (!$this->lblParentUsersAsAllies) return $this->lblParentUsersAsAllies_Create();
					return $this->lblParentUsersAsAllies;
				case 'UserAsAlliesControl':
					if (!$this->lstUsersAsAllies) return $this->lstUsersAsAllies_Create();
					return $this->lstUsersAsAllies;
				case 'UserAsAlliesLabel':
					if (!$this->lblUsersAsAllies) return $this->lblUsersAsAllies_Create();
					return $this->lblUsersAsAllies;
				case 'GroupCodeControl':
					if (!$this->lstGroupCodes) return $this->lstGroupCodes_Create();
					return $this->lstGroupCodes;
				case 'GroupCodeLabel':
					if (!$this->lblGroupCodes) return $this->lblGroupCodes_Create();
					return $this->lblGroupCodes;
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
					// Controls that point to User fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'UsernameControl':
						return ($this->txtUsername = QType::Cast($mixValue, 'QControl'));
					case 'PasswordControl':
						return ($this->txtPassword = QType::Cast($mixValue, 'QControl'));
					case 'FullNameControl':
						return ($this->txtFullName = QType::Cast($mixValue, 'QControl'));
					case 'ActiveControl':
						return ($this->chkActive = QType::Cast($mixValue, 'QControl'));
					case 'AccountIdControl':
						return ($this->lstAccountIdObject = QType::Cast($mixValue, 'QControl'));
					case 'UserDetailIdControl':
						return ($this->lstUserDetail = QType::Cast($mixValue, 'QControl'));
					case 'ManagerIdControl':
						return ($this->lstManagerIdObject = QType::Cast($mixValue, 'QControl'));
					case 'CodeControl':
						return ($this->txtCode = QType::Cast($mixValue, 'QControl'));
					case 'ParentUserAsAlliesControl':
						return ($this->lstParentUsersAsAllies = QType::Cast($mixValue, 'QControl'));
					case 'UserAsAlliesControl':
						return ($this->lstUsersAsAllies = QType::Cast($mixValue, 'QControl'));
					case 'GroupCodeControl':
						return ($this->lstGroupCodes = QType::Cast($mixValue, 'QControl'));
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