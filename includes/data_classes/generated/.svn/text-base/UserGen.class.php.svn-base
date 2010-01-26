<?php
	/**
	 * The abstract UserGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the User subclass which
	 * extends this UserGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the User class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Username the value for strUsername (Unique)
	 * @property string $Password the value for strPassword (Not Null)
	 * @property string $FullName the value for strFullName (Not Null)
	 * @property boolean $Active the value for blnActive (Not Null)
	 * @property integer $AccountId the value for intAccountId (Not Null)
	 * @property integer $UserDetailId the value for intUserDetailId (Not Null)
	 * @property integer $ManagerId the value for intManagerId 
	 * @property string $Code the value for strCode 
	 * @property Account $AccountIdObject the value for the Account object referenced by intAccountId (Not Null)
	 * @property UserDetails $UserDetail the value for the UserDetails object referenced by intUserDetailId (Not Null)
	 * @property User $ManagerIdObject the value for the User object referenced by intManagerId 
	 * @property-read User $_ParentUserAsAllies the value for the private _objParentUserAsAllies (Read-Only) if set due to an expansion on the allies_assn association table
	 * @property-read User[] $_ParentUserAsAlliesArray the value for the private _objParentUserAsAlliesArray (Read-Only) if set due to an ExpandAsArray on the allies_assn association table
	 * @property-read User $_UserAsAllies the value for the private _objUserAsAllies (Read-Only) if set due to an expansion on the allies_assn association table
	 * @property-read User[] $_UserAsAlliesArray the value for the private _objUserAsAlliesArray (Read-Only) if set due to an ExpandAsArray on the allies_assn association table
	 * @property-read GroupCode $_GroupCode the value for the private _objGroupCode (Read-Only) if set due to an expansion on the user_group_code_assn association table
	 * @property-read GroupCode[] $_GroupCodeArray the value for the private _objGroupCodeArray (Read-Only) if set due to an ExpandAsArray on the user_group_code_assn association table
	 * @property-read Message $_MessageAsFrom the value for the private _objMessageAsFrom (Read-Only) if set due to an expansion on the message.from_user_id reverse relationship
	 * @property-read Message[] $_MessageAsFromArray the value for the private _objMessageAsFromArray (Read-Only) if set due to an ExpandAsArray on the message.from_user_id reverse relationship
	 * @property-read Message $_MessageAsTo the value for the private _objMessageAsTo (Read-Only) if set due to an expansion on the message.to_user_id reverse relationship
	 * @property-read Message[] $_MessageAsToArray the value for the private _objMessageAsToArray (Read-Only) if set due to an ExpandAsArray on the message.to_user_id reverse relationship
	 * @property-read Offer $_OfferAsOwner the value for the private _objOfferAsOwner (Read-Only) if set due to an expansion on the offer.user_owner_id reverse relationship
	 * @property-read Offer[] $_OfferAsOwnerArray the value for the private _objOfferAsOwnerArray (Read-Only) if set due to an ExpandAsArray on the offer.user_owner_id reverse relationship
	 * @property-read Target $_TargetAsUser the value for the private _objTargetAsUser (Read-Only) if set due to an expansion on the target.User_id reverse relationship
	 * @property-read Target[] $_TargetAsUserArray the value for the private _objTargetAsUserArray (Read-Only) if set due to an ExpandAsArray on the target.User_id reverse relationship
	 * @property-read Thread $_ThreadAsLast the value for the private _objThreadAsLast (Read-Only) if set due to an expansion on the thread.last_user_id reverse relationship
	 * @property-read Thread[] $_ThreadAsLastArray the value for the private _objThreadAsLastArray (Read-Only) if set due to an ExpandAsArray on the thread.last_user_id reverse relationship
	 * @property-read Thread $_ThreadAsReceiver the value for the private _objThreadAsReceiver (Read-Only) if set due to an expansion on the thread.receiver_user_id reverse relationship
	 * @property-read Thread[] $_ThreadAsReceiverArray the value for the private _objThreadAsReceiverArray (Read-Only) if set due to an ExpandAsArray on the thread.receiver_user_id reverse relationship
	 * @property-read Thread $_ThreadAsSender the value for the private _objThreadAsSender (Read-Only) if set due to an expansion on the thread.sender_user_id reverse relationship
	 * @property-read Thread[] $_ThreadAsSenderArray the value for the private _objThreadAsSenderArray (Read-Only) if set due to an ExpandAsArray on the thread.sender_user_id reverse relationship
	 * @property-read User $_UserAsManagerId the value for the private _objUserAsManagerId (Read-Only) if set due to an expansion on the user.Manager_Id reverse relationship
	 * @property-read User[] $_UserAsManagerIdArray the value for the private _objUserAsManagerIdArray (Read-Only) if set due to an ExpandAsArray on the user.Manager_Id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class UserGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column user.Id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Username
		 * @var string strUsername
		 */
		protected $strUsername;
		const UsernameMaxLength = 45;
		const UsernameDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Password
		 * @var string strPassword
		 */
		protected $strPassword;
		const PasswordMaxLength = 45;
		const PasswordDefault = null;


		/**
		 * Protected member variable that maps to the database column user.FullName
		 * @var string strFullName
		 */
		protected $strFullName;
		const FullNameMaxLength = 45;
		const FullNameDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Active
		 * @var boolean blnActive
		 */
		protected $blnActive;
		const ActiveDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Account_Id
		 * @var integer intAccountId
		 */
		protected $intAccountId;
		const AccountIdDefault = null;


		/**
		 * Protected member variable that maps to the database column user.User_detail_id
		 * @var integer intUserDetailId
		 */
		protected $intUserDetailId;
		const UserDetailIdDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Manager_Id
		 * @var integer intManagerId
		 */
		protected $intManagerId;
		const ManagerIdDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeMaxLength = 10;
		const CodeDefault = null;


		/**
		 * Private member variable that stores a reference to a single ParentUserAsAllies object
		 * (of type User), if this User object was restored with
		 * an expansion on the allies_assn association table.
		 * @var User _objParentUserAsAllies;
		 */
		private $_objParentUserAsAllies;

		/**
		 * Private member variable that stores a reference to an array of ParentUserAsAllies objects
		 * (of type User[]), if this User object was restored with
		 * an ExpandAsArray on the allies_assn association table.
		 * @var User[] _objParentUserAsAlliesArray;
		 */
		private $_objParentUserAsAlliesArray = array();

		/**
		 * Private member variable that stores a reference to a single UserAsAllies object
		 * (of type User), if this User object was restored with
		 * an expansion on the allies_assn association table.
		 * @var User _objUserAsAllies;
		 */
		private $_objUserAsAllies;

		/**
		 * Private member variable that stores a reference to an array of UserAsAllies objects
		 * (of type User[]), if this User object was restored with
		 * an ExpandAsArray on the allies_assn association table.
		 * @var User[] _objUserAsAlliesArray;
		 */
		private $_objUserAsAlliesArray = array();

		/**
		 * Private member variable that stores a reference to a single GroupCode object
		 * (of type GroupCode), if this User object was restored with
		 * an expansion on the user_group_code_assn association table.
		 * @var GroupCode _objGroupCode;
		 */
		private $_objGroupCode;

		/**
		 * Private member variable that stores a reference to an array of GroupCode objects
		 * (of type GroupCode[]), if this User object was restored with
		 * an ExpandAsArray on the user_group_code_assn association table.
		 * @var GroupCode[] _objGroupCodeArray;
		 */
		private $_objGroupCodeArray = array();

		/**
		 * Private member variable that stores a reference to a single MessageAsFrom object
		 * (of type Message), if this User object was restored with
		 * an expansion on the message association table.
		 * @var Message _objMessageAsFrom;
		 */
		private $_objMessageAsFrom;

		/**
		 * Private member variable that stores a reference to an array of MessageAsFrom objects
		 * (of type Message[]), if this User object was restored with
		 * an ExpandAsArray on the message association table.
		 * @var Message[] _objMessageAsFromArray;
		 */
		private $_objMessageAsFromArray = array();

		/**
		 * Private member variable that stores a reference to a single MessageAsTo object
		 * (of type Message), if this User object was restored with
		 * an expansion on the message association table.
		 * @var Message _objMessageAsTo;
		 */
		private $_objMessageAsTo;

		/**
		 * Private member variable that stores a reference to an array of MessageAsTo objects
		 * (of type Message[]), if this User object was restored with
		 * an ExpandAsArray on the message association table.
		 * @var Message[] _objMessageAsToArray;
		 */
		private $_objMessageAsToArray = array();

		/**
		 * Private member variable that stores a reference to a single OfferAsOwner object
		 * (of type Offer), if this User object was restored with
		 * an expansion on the offer association table.
		 * @var Offer _objOfferAsOwner;
		 */
		private $_objOfferAsOwner;

		/**
		 * Private member variable that stores a reference to an array of OfferAsOwner objects
		 * (of type Offer[]), if this User object was restored with
		 * an ExpandAsArray on the offer association table.
		 * @var Offer[] _objOfferAsOwnerArray;
		 */
		private $_objOfferAsOwnerArray = array();

		/**
		 * Private member variable that stores a reference to a single TargetAsUser object
		 * (of type Target), if this User object was restored with
		 * an expansion on the target association table.
		 * @var Target _objTargetAsUser;
		 */
		private $_objTargetAsUser;

		/**
		 * Private member variable that stores a reference to an array of TargetAsUser objects
		 * (of type Target[]), if this User object was restored with
		 * an ExpandAsArray on the target association table.
		 * @var Target[] _objTargetAsUserArray;
		 */
		private $_objTargetAsUserArray = array();

		/**
		 * Private member variable that stores a reference to a single ThreadAsLast object
		 * (of type Thread), if this User object was restored with
		 * an expansion on the thread association table.
		 * @var Thread _objThreadAsLast;
		 */
		private $_objThreadAsLast;

		/**
		 * Private member variable that stores a reference to an array of ThreadAsLast objects
		 * (of type Thread[]), if this User object was restored with
		 * an ExpandAsArray on the thread association table.
		 * @var Thread[] _objThreadAsLastArray;
		 */
		private $_objThreadAsLastArray = array();

		/**
		 * Private member variable that stores a reference to a single ThreadAsReceiver object
		 * (of type Thread), if this User object was restored with
		 * an expansion on the thread association table.
		 * @var Thread _objThreadAsReceiver;
		 */
		private $_objThreadAsReceiver;

		/**
		 * Private member variable that stores a reference to an array of ThreadAsReceiver objects
		 * (of type Thread[]), if this User object was restored with
		 * an ExpandAsArray on the thread association table.
		 * @var Thread[] _objThreadAsReceiverArray;
		 */
		private $_objThreadAsReceiverArray = array();

		/**
		 * Private member variable that stores a reference to a single ThreadAsSender object
		 * (of type Thread), if this User object was restored with
		 * an expansion on the thread association table.
		 * @var Thread _objThreadAsSender;
		 */
		private $_objThreadAsSender;

		/**
		 * Private member variable that stores a reference to an array of ThreadAsSender objects
		 * (of type Thread[]), if this User object was restored with
		 * an ExpandAsArray on the thread association table.
		 * @var Thread[] _objThreadAsSenderArray;
		 */
		private $_objThreadAsSenderArray = array();

		/**
		 * Private member variable that stores a reference to a single UserAsManagerId object
		 * (of type User), if this User object was restored with
		 * an expansion on the user association table.
		 * @var User _objUserAsManagerId;
		 */
		private $_objUserAsManagerId;

		/**
		 * Private member variable that stores a reference to an array of UserAsManagerId objects
		 * (of type User[]), if this User object was restored with
		 * an ExpandAsArray on the user association table.
		 * @var User[] _objUserAsManagerIdArray;
		 */
		private $_objUserAsManagerIdArray = array();

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column user.Account_Id.
		 *
		 * NOTE: Always use the AccountIdObject property getter to correctly retrieve this Account object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Account objAccountIdObject
		 */
		protected $objAccountIdObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column user.User_detail_id.
		 *
		 * NOTE: Always use the UserDetail property getter to correctly retrieve this UserDetails object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var UserDetails objUserDetail
		 */
		protected $objUserDetail;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column user.Manager_Id.
		 *
		 * NOTE: Always use the ManagerIdObject property getter to correctly retrieve this User object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var User objManagerIdObject
		 */
		protected $objManagerIdObject;





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a User from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return User::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Users
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call User::QueryArray to perform the LoadAll query
			try {
				return User::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Users
		 * @return int
		 */
		public static function CountAll() {
			// Call User::QueryCount to perform the CountAll query
			return User::QueryCount(QQ::All());
		}




				///////////////////////////////
		// QCUBED QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcubed Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Create/Build out the QueryBuilder object with User-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'user');
			User::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('user');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcubed Query method to query for a single User object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return User the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = User::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new User object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = User::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;					
				}
				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if(null === $objDbRow)
					return null;
				return User::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of User objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return User[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = User::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return User::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of User objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = User::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			$strQuery = User::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/user', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = User::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this User
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'user';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'Id', $strAliasPrefix . 'Id');
			$objBuilder->AddSelectItem($strTableName, 'Username', $strAliasPrefix . 'Username');
			$objBuilder->AddSelectItem($strTableName, 'Password', $strAliasPrefix . 'Password');
			$objBuilder->AddSelectItem($strTableName, 'FullName', $strAliasPrefix . 'FullName');
			$objBuilder->AddSelectItem($strTableName, 'Active', $strAliasPrefix . 'Active');
			$objBuilder->AddSelectItem($strTableName, 'Account_Id', $strAliasPrefix . 'Account_Id');
			$objBuilder->AddSelectItem($strTableName, 'User_detail_id', $strAliasPrefix . 'User_detail_id');
			$objBuilder->AddSelectItem($strTableName, 'Manager_Id', $strAliasPrefix . 'Manager_Id');
			$objBuilder->AddSelectItem($strTableName, 'Code', $strAliasPrefix . 'Code');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a User from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this User::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return User
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'user__';

						// Expanding many-to-many references: ParentUserAsAllies
						$strAlias = $strAliasPrefix . 'parentuserasallies__user_ally_id__Id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objParentUserAsAlliesArray)) {
								$objPreviousChildItems = $objPreviousItem->_objParentUserAsAlliesArray;
								$objChildItem = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentuserasallies__user_ally_id__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objParentUserAsAlliesArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objParentUserAsAlliesArray[] = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentuserasallies__user_ally_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding many-to-many references: UserAsAllies
						$strAlias = $strAliasPrefix . 'userasallies__user_owner_id__Id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objUserAsAlliesArray)) {
								$objPreviousChildItems = $objPreviousItem->_objUserAsAlliesArray;
								$objChildItem = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasallies__user_owner_id__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objUserAsAlliesArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objUserAsAlliesArray[] = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasallies__user_owner_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding many-to-many references: GroupCode
						$strAlias = $strAliasPrefix . 'groupcode__group_code_id__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objGroupCodeArray)) {
								$objPreviousChildItems = $objPreviousItem->_objGroupCodeArray;
								$objChildItem = GroupCode::InstantiateDbRow($objDbRow, $strAliasPrefix . 'groupcode__group_code_id__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objGroupCodeArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objGroupCodeArray[] = GroupCode::InstantiateDbRow($objDbRow, $strAliasPrefix . 'groupcode__group_code_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}


						// Expanding reverse references: MessageAsFrom
						$strAlias = $strAliasPrefix . 'messageasfrom__Id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMessageAsFromArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMessageAsFromArray;
								$objChildItem = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'messageasfrom__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMessageAsFromArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMessageAsFromArray[] = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'messageasfrom__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: MessageAsTo
						$strAlias = $strAliasPrefix . 'messageasto__Id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMessageAsToArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMessageAsToArray;
								$objChildItem = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'messageasto__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMessageAsToArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMessageAsToArray[] = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'messageasto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: OfferAsOwner
						$strAlias = $strAliasPrefix . 'offerasowner__Id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objOfferAsOwnerArray)) {
								$objPreviousChildItems = $objPreviousItem->_objOfferAsOwnerArray;
								$objChildItem = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'offerasowner__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objOfferAsOwnerArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objOfferAsOwnerArray[] = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'offerasowner__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TargetAsUser
						$strAlias = $strAliasPrefix . 'targetasuser__User_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTargetAsUserArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTargetAsUserArray;
								$objChildItem = Target::InstantiateDbRow($objDbRow, $strAliasPrefix . 'targetasuser__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTargetAsUserArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTargetAsUserArray[] = Target::InstantiateDbRow($objDbRow, $strAliasPrefix . 'targetasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ThreadAsLast
						$strAlias = $strAliasPrefix . 'threadaslast__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objThreadAsLastArray)) {
								$objPreviousChildItems = $objPreviousItem->_objThreadAsLastArray;
								$objChildItem = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadaslast__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objThreadAsLastArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objThreadAsLastArray[] = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadaslast__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ThreadAsReceiver
						$strAlias = $strAliasPrefix . 'threadasreceiver__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objThreadAsReceiverArray)) {
								$objPreviousChildItems = $objPreviousItem->_objThreadAsReceiverArray;
								$objChildItem = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadasreceiver__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objThreadAsReceiverArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objThreadAsReceiverArray[] = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadasreceiver__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ThreadAsSender
						$strAlias = $strAliasPrefix . 'threadassender__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objThreadAsSenderArray)) {
								$objPreviousChildItems = $objPreviousItem->_objThreadAsSenderArray;
								$objChildItem = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadassender__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objThreadAsSenderArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objThreadAsSenderArray[] = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadassender__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: UserAsManagerId
						$strAlias = $strAliasPrefix . 'userasmanagerid__Id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objUserAsManagerIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objUserAsManagerIdArray;
								$objChildItem = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasmanagerid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objUserAsManagerIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objUserAsManagerIdArray[] = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasmanagerid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'user__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the User object
			$objToReturn = new User();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'Id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Id'] : $strAliasPrefix . 'Id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'Username', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Username'] : $strAliasPrefix . 'Username';
			$objToReturn->strUsername = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Password', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Password'] : $strAliasPrefix . 'Password';
			$objToReturn->strPassword = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'FullName', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'FullName'] : $strAliasPrefix . 'FullName';
			$objToReturn->strFullName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Active', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Active'] : $strAliasPrefix . 'Active';
			$objToReturn->blnActive = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'Account_Id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Account_Id'] : $strAliasPrefix . 'Account_Id';
			$objToReturn->intAccountId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'User_detail_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'User_detail_id'] : $strAliasPrefix . 'User_detail_id';
			$objToReturn->intUserDetailId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'Manager_Id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Manager_Id'] : $strAliasPrefix . 'Manager_Id';
			$objToReturn->intManagerId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'Code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Code'] : $strAliasPrefix . 'Code';
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					if (array_diff($objPreviousItem->_objParentUserAsAlliesArray, $objToReturn->_objParentUserAsAlliesArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objUserAsAlliesArray, $objToReturn->_objUserAsAlliesArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objGroupCodeArray, $objToReturn->_objGroupCodeArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objMessageAsFromArray, $objToReturn->_objMessageAsFromArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objMessageAsToArray, $objToReturn->_objMessageAsToArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objOfferAsOwnerArray, $objToReturn->_objOfferAsOwnerArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objTargetAsUserArray, $objToReturn->_objTargetAsUserArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objThreadAsLastArray, $objToReturn->_objThreadAsLastArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objThreadAsReceiverArray, $objToReturn->_objThreadAsReceiverArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objThreadAsSenderArray, $objToReturn->_objThreadAsSenderArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objUserAsManagerIdArray, $objToReturn->_objUserAsManagerIdArray) != null) {
						continue;
					}

					// complete match - all primary key columns are the same
					return null;
				}
			}

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'user__';

			// Check for AccountIdObject Early Binding
			$strAlias = $strAliasPrefix . 'Account_Id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAccountIdObject = Account::InstantiateDbRow($objDbRow, $strAliasPrefix . 'Account_Id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for UserDetail Early Binding
			$strAlias = $strAliasPrefix . 'User_detail_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUserDetail = UserDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'User_detail_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ManagerIdObject Early Binding
			$strAlias = $strAliasPrefix . 'Manager_Id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objManagerIdObject = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'Manager_Id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



			// Check for ParentUserAsAllies Virtual Binding
			$strAlias = $strAliasPrefix . 'parentuserasallies__user_ally_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objParentUserAsAlliesArray[] = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentuserasallies__user_ally_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objParentUserAsAllies = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentuserasallies__user_ally_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for UserAsAllies Virtual Binding
			$strAlias = $strAliasPrefix . 'userasallies__user_owner_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objUserAsAlliesArray[] = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasallies__user_owner_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objUserAsAllies = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasallies__user_owner_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for GroupCode Virtual Binding
			$strAlias = $strAliasPrefix . 'groupcode__group_code_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objGroupCodeArray[] = GroupCode::InstantiateDbRow($objDbRow, $strAliasPrefix . 'groupcode__group_code_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objGroupCode = GroupCode::InstantiateDbRow($objDbRow, $strAliasPrefix . 'groupcode__group_code_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			// Check for MessageAsFrom Virtual Binding
			$strAlias = $strAliasPrefix . 'messageasfrom__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objMessageAsFromArray[] = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'messageasfrom__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMessageAsFrom = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'messageasfrom__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for MessageAsTo Virtual Binding
			$strAlias = $strAliasPrefix . 'messageasto__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objMessageAsToArray[] = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'messageasto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMessageAsTo = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'messageasto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for OfferAsOwner Virtual Binding
			$strAlias = $strAliasPrefix . 'offerasowner__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objOfferAsOwnerArray[] = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'offerasowner__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objOfferAsOwner = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'offerasowner__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TargetAsUser Virtual Binding
			$strAlias = $strAliasPrefix . 'targetasuser__User_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objTargetAsUserArray[] = Target::InstantiateDbRow($objDbRow, $strAliasPrefix . 'targetasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTargetAsUser = Target::InstantiateDbRow($objDbRow, $strAliasPrefix . 'targetasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ThreadAsLast Virtual Binding
			$strAlias = $strAliasPrefix . 'threadaslast__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objThreadAsLastArray[] = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadaslast__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objThreadAsLast = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadaslast__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ThreadAsReceiver Virtual Binding
			$strAlias = $strAliasPrefix . 'threadasreceiver__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objThreadAsReceiverArray[] = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadasreceiver__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objThreadAsReceiver = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadasreceiver__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ThreadAsSender Virtual Binding
			$strAlias = $strAliasPrefix . 'threadassender__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objThreadAsSenderArray[] = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadassender__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objThreadAsSender = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'threadassender__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for UserAsManagerId Virtual Binding
			$strAlias = $strAliasPrefix . 'userasmanagerid__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objUserAsManagerIdArray[] = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasmanagerid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objUserAsManagerId = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasmanagerid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Users from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return User[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = User::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = User::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single User object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return User::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single User object,
		 * by Username Index(es)
		 * @param string $strUsername
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User
		*/
		public static function LoadByUsername($strUsername, $objOptionalClauses = null) {
			return User::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->Username, $strUsername)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of User objects,
		 * by UserDetailId Index(es)
		 * @param integer $intUserDetailId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		*/
		public static function LoadArrayByUserDetailId($intUserDetailId, $objOptionalClauses = null) {
			// Call User::QueryArray to perform the LoadArrayByUserDetailId query
			try {
				return User::QueryArray(
					QQ::Equal(QQN::User()->UserDetailId, $intUserDetailId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Users
		 * by UserDetailId Index(es)
		 * @param integer $intUserDetailId
		 * @return int
		*/
		public static function CountByUserDetailId($intUserDetailId) {
			// Call User::QueryCount to perform the CountByUserDetailId query
			return User::QueryCount(
				QQ::Equal(QQN::User()->UserDetailId, $intUserDetailId)
			);
		}
			
		/**
		 * Load an array of User objects,
		 * by AccountId Index(es)
		 * @param integer $intAccountId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		*/
		public static function LoadArrayByAccountId($intAccountId, $objOptionalClauses = null) {
			// Call User::QueryArray to perform the LoadArrayByAccountId query
			try {
				return User::QueryArray(
					QQ::Equal(QQN::User()->AccountId, $intAccountId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Users
		 * by AccountId Index(es)
		 * @param integer $intAccountId
		 * @return int
		*/
		public static function CountByAccountId($intAccountId) {
			// Call User::QueryCount to perform the CountByAccountId query
			return User::QueryCount(
				QQ::Equal(QQN::User()->AccountId, $intAccountId)
			);
		}
			
		/**
		 * Load an array of User objects,
		 * by ManagerId Index(es)
		 * @param integer $intManagerId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		*/
		public static function LoadArrayByManagerId($intManagerId, $objOptionalClauses = null) {
			// Call User::QueryArray to perform the LoadArrayByManagerId query
			try {
				return User::QueryArray(
					QQ::Equal(QQN::User()->ManagerId, $intManagerId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Users
		 * by ManagerId Index(es)
		 * @param integer $intManagerId
		 * @return int
		*/
		public static function CountByManagerId($intManagerId) {
			// Call User::QueryCount to perform the CountByManagerId query
			return User::QueryCount(
				QQ::Equal(QQN::User()->ManagerId, $intManagerId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of User objects for a given ParentUserAsAllies
		 * via the allies_assn table
		 * @param integer $intUserAllyId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		*/
		public static function LoadArrayByParentUserAsAllies($intUserAllyId, $objOptionalClauses = null) {
			// Call User::QueryArray to perform the LoadArrayByParentUserAsAllies query
			try {
				return User::QueryArray(
					QQ::Equal(QQN::User()->ParentUserAsAllies->UserAllyId, $intUserAllyId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Users for a given ParentUserAsAllies
		 * via the allies_assn table
		 * @param integer $intUserAllyId
		 * @return int
		*/
		public static function CountByParentUserAsAllies($intUserAllyId) {
			return User::QueryCount(
				QQ::Equal(QQN::User()->ParentUserAsAllies->UserAllyId, $intUserAllyId)
			);
		}
			/**
		 * Load an array of User objects for a given UserAsAllies
		 * via the allies_assn table
		 * @param integer $intUserOwnerId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		*/
		public static function LoadArrayByUserAsAllies($intUserOwnerId, $objOptionalClauses = null) {
			// Call User::QueryArray to perform the LoadArrayByUserAsAllies query
			try {
				return User::QueryArray(
					QQ::Equal(QQN::User()->UserAsAllies->UserOwnerId, $intUserOwnerId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Users for a given UserAsAllies
		 * via the allies_assn table
		 * @param integer $intUserOwnerId
		 * @return int
		*/
		public static function CountByUserAsAllies($intUserOwnerId) {
			return User::QueryCount(
				QQ::Equal(QQN::User()->UserAsAllies->UserOwnerId, $intUserOwnerId)
			);
		}
			/**
		 * Load an array of GroupCode objects for a given GroupCode
		 * via the user_group_code_assn table
		 * @param integer $intGroupCodeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		*/
		public static function LoadArrayByGroupCode($intGroupCodeId, $objOptionalClauses = null) {
			// Call User::QueryArray to perform the LoadArrayByGroupCode query
			try {
				return User::QueryArray(
					QQ::Equal(QQN::User()->GroupCode->GroupCodeId, $intGroupCodeId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Users for a given GroupCode
		 * via the user_group_code_assn table
		 * @param integer $intGroupCodeId
		 * @return int
		*/
		public static function CountByGroupCode($intGroupCodeId) {
			return User::QueryCount(
				QQ::Equal(QQN::User()->GroupCode->GroupCodeId, $intGroupCodeId)
			);
		}




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this User
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `user` (
							`Username`,
							`Password`,
							`FullName`,
							`Active`,
							`Account_Id`,
							`User_detail_id`,
							`Manager_Id`,
							`Code`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strUsername) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . ',
							' . $objDatabase->SqlVariable($this->strFullName) . ',
							' . $objDatabase->SqlVariable($this->blnActive) . ',
							' . $objDatabase->SqlVariable($this->intAccountId) . ',
							' . $objDatabase->SqlVariable($this->intUserDetailId) . ',
							' . $objDatabase->SqlVariable($this->intManagerId) . ',
							' . $objDatabase->SqlVariable($this->strCode) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('user', 'Id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`user`
						SET
							`Username` = ' . $objDatabase->SqlVariable($this->strUsername) . ',
							`Password` = ' . $objDatabase->SqlVariable($this->strPassword) . ',
							`FullName` = ' . $objDatabase->SqlVariable($this->strFullName) . ',
							`Active` = ' . $objDatabase->SqlVariable($this->blnActive) . ',
							`Account_Id` = ' . $objDatabase->SqlVariable($this->intAccountId) . ',
							`User_detail_id` = ' . $objDatabase->SqlVariable($this->intUserDetailId) . ',
							`Manager_Id` = ' . $objDatabase->SqlVariable($this->intManagerId) . ',
							`Code` = ' . $objDatabase->SqlVariable($this->strCode) . '
						WHERE
							`Id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this User
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this User with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Users
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`');
		}

		/**
		 * Truncate user table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `user`');
		}

		/**
		 * Reload this User from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved User object.');

			// Reload the Object
			$objReloaded = User::Load($this->intId);

			// Update $this's local variables to match
			$this->strUsername = $objReloaded->strUsername;
			$this->strPassword = $objReloaded->strPassword;
			$this->strFullName = $objReloaded->strFullName;
			$this->blnActive = $objReloaded->blnActive;
			$this->AccountId = $objReloaded->AccountId;
			$this->UserDetailId = $objReloaded->UserDetailId;
			$this->ManagerId = $objReloaded->ManagerId;
			$this->strCode = $objReloaded->strCode;
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Id':
					/**
					 * Gets the value for intId (Read-Only PK)
					 * @return integer
					 */
					return $this->intId;

				case 'Username':
					/**
					 * Gets the value for strUsername (Unique)
					 * @return string
					 */
					return $this->strUsername;

				case 'Password':
					/**
					 * Gets the value for strPassword (Not Null)
					 * @return string
					 */
					return $this->strPassword;

				case 'FullName':
					/**
					 * Gets the value for strFullName (Not Null)
					 * @return string
					 */
					return $this->strFullName;

				case 'Active':
					/**
					 * Gets the value for blnActive (Not Null)
					 * @return boolean
					 */
					return $this->blnActive;

				case 'AccountId':
					/**
					 * Gets the value for intAccountId (Not Null)
					 * @return integer
					 */
					return $this->intAccountId;

				case 'UserDetailId':
					/**
					 * Gets the value for intUserDetailId (Not Null)
					 * @return integer
					 */
					return $this->intUserDetailId;

				case 'ManagerId':
					/**
					 * Gets the value for intManagerId 
					 * @return integer
					 */
					return $this->intManagerId;

				case 'Code':
					/**
					 * Gets the value for strCode 
					 * @return string
					 */
					return $this->strCode;


				///////////////////
				// Member Objects
				///////////////////
				case 'AccountIdObject':
					/**
					 * Gets the value for the Account object referenced by intAccountId (Not Null)
					 * @return Account
					 */
					try {
						if ((!$this->objAccountIdObject) && (!is_null($this->intAccountId)))
							$this->objAccountIdObject = Account::Load($this->intAccountId);
						return $this->objAccountIdObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserDetail':
					/**
					 * Gets the value for the UserDetails object referenced by intUserDetailId (Not Null)
					 * @return UserDetails
					 */
					try {
						if ((!$this->objUserDetail) && (!is_null($this->intUserDetailId)))
							$this->objUserDetail = UserDetails::Load($this->intUserDetailId);
						return $this->objUserDetail;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ManagerIdObject':
					/**
					 * Gets the value for the User object referenced by intManagerId 
					 * @return User
					 */
					try {
						if ((!$this->objManagerIdObject) && (!is_null($this->intManagerId)))
							$this->objManagerIdObject = User::Load($this->intManagerId);
						return $this->objManagerIdObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ParentUserAsAllies':
					/**
					 * Gets the value for the private _objParentUserAsAllies (Read-Only)
					 * if set due to an expansion on the allies_assn association table
					 * @return User
					 */
					return $this->_objParentUserAsAllies;

				case '_ParentUserAsAlliesArray':
					/**
					 * Gets the value for the private _objParentUserAsAlliesArray (Read-Only)
					 * if set due to an ExpandAsArray on the allies_assn association table
					 * @return User[]
					 */
					return (array) $this->_objParentUserAsAlliesArray;

				case '_UserAsAllies':
					/**
					 * Gets the value for the private _objUserAsAllies (Read-Only)
					 * if set due to an expansion on the allies_assn association table
					 * @return User
					 */
					return $this->_objUserAsAllies;

				case '_UserAsAlliesArray':
					/**
					 * Gets the value for the private _objUserAsAlliesArray (Read-Only)
					 * if set due to an ExpandAsArray on the allies_assn association table
					 * @return User[]
					 */
					return (array) $this->_objUserAsAlliesArray;

				case '_GroupCode':
					/**
					 * Gets the value for the private _objGroupCode (Read-Only)
					 * if set due to an expansion on the user_group_code_assn association table
					 * @return GroupCode
					 */
					return $this->_objGroupCode;

				case '_GroupCodeArray':
					/**
					 * Gets the value for the private _objGroupCodeArray (Read-Only)
					 * if set due to an ExpandAsArray on the user_group_code_assn association table
					 * @return GroupCode[]
					 */
					return (array) $this->_objGroupCodeArray;

				case '_MessageAsFrom':
					/**
					 * Gets the value for the private _objMessageAsFrom (Read-Only)
					 * if set due to an expansion on the message.from_user_id reverse relationship
					 * @return Message
					 */
					return $this->_objMessageAsFrom;

				case '_MessageAsFromArray':
					/**
					 * Gets the value for the private _objMessageAsFromArray (Read-Only)
					 * if set due to an ExpandAsArray on the message.from_user_id reverse relationship
					 * @return Message[]
					 */
					return (array) $this->_objMessageAsFromArray;

				case '_MessageAsTo':
					/**
					 * Gets the value for the private _objMessageAsTo (Read-Only)
					 * if set due to an expansion on the message.to_user_id reverse relationship
					 * @return Message
					 */
					return $this->_objMessageAsTo;

				case '_MessageAsToArray':
					/**
					 * Gets the value for the private _objMessageAsToArray (Read-Only)
					 * if set due to an ExpandAsArray on the message.to_user_id reverse relationship
					 * @return Message[]
					 */
					return (array) $this->_objMessageAsToArray;

				case '_OfferAsOwner':
					/**
					 * Gets the value for the private _objOfferAsOwner (Read-Only)
					 * if set due to an expansion on the offer.user_owner_id reverse relationship
					 * @return Offer
					 */
					return $this->_objOfferAsOwner;

				case '_OfferAsOwnerArray':
					/**
					 * Gets the value for the private _objOfferAsOwnerArray (Read-Only)
					 * if set due to an ExpandAsArray on the offer.user_owner_id reverse relationship
					 * @return Offer[]
					 */
					return (array) $this->_objOfferAsOwnerArray;

				case '_TargetAsUser':
					/**
					 * Gets the value for the private _objTargetAsUser (Read-Only)
					 * if set due to an expansion on the target.User_id reverse relationship
					 * @return Target
					 */
					return $this->_objTargetAsUser;

				case '_TargetAsUserArray':
					/**
					 * Gets the value for the private _objTargetAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the target.User_id reverse relationship
					 * @return Target[]
					 */
					return (array) $this->_objTargetAsUserArray;

				case '_ThreadAsLast':
					/**
					 * Gets the value for the private _objThreadAsLast (Read-Only)
					 * if set due to an expansion on the thread.last_user_id reverse relationship
					 * @return Thread
					 */
					return $this->_objThreadAsLast;

				case '_ThreadAsLastArray':
					/**
					 * Gets the value for the private _objThreadAsLastArray (Read-Only)
					 * if set due to an ExpandAsArray on the thread.last_user_id reverse relationship
					 * @return Thread[]
					 */
					return (array) $this->_objThreadAsLastArray;

				case '_ThreadAsReceiver':
					/**
					 * Gets the value for the private _objThreadAsReceiver (Read-Only)
					 * if set due to an expansion on the thread.receiver_user_id reverse relationship
					 * @return Thread
					 */
					return $this->_objThreadAsReceiver;

				case '_ThreadAsReceiverArray':
					/**
					 * Gets the value for the private _objThreadAsReceiverArray (Read-Only)
					 * if set due to an ExpandAsArray on the thread.receiver_user_id reverse relationship
					 * @return Thread[]
					 */
					return (array) $this->_objThreadAsReceiverArray;

				case '_ThreadAsSender':
					/**
					 * Gets the value for the private _objThreadAsSender (Read-Only)
					 * if set due to an expansion on the thread.sender_user_id reverse relationship
					 * @return Thread
					 */
					return $this->_objThreadAsSender;

				case '_ThreadAsSenderArray':
					/**
					 * Gets the value for the private _objThreadAsSenderArray (Read-Only)
					 * if set due to an ExpandAsArray on the thread.sender_user_id reverse relationship
					 * @return Thread[]
					 */
					return (array) $this->_objThreadAsSenderArray;

				case '_UserAsManagerId':
					/**
					 * Gets the value for the private _objUserAsManagerId (Read-Only)
					 * if set due to an expansion on the user.Manager_Id reverse relationship
					 * @return User
					 */
					return $this->_objUserAsManagerId;

				case '_UserAsManagerIdArray':
					/**
					 * Gets the value for the private _objUserAsManagerIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the user.Manager_Id reverse relationship
					 * @return User[]
					 */
					return (array) $this->_objUserAsManagerIdArray;


				case '__Restored':
					return $this->__blnRestored;

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
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Username':
					/**
					 * Sets the value for strUsername (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUsername = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Password':
					/**
					 * Sets the value for strPassword (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPassword = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FullName':
					/**
					 * Sets the value for strFullName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFullName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Active':
					/**
					 * Sets the value for blnActive (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnActive = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AccountId':
					/**
					 * Sets the value for intAccountId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAccountIdObject = null;
						return ($this->intAccountId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserDetailId':
					/**
					 * Sets the value for intUserDetailId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objUserDetail = null;
						return ($this->intUserDetailId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ManagerId':
					/**
					 * Sets the value for intManagerId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objManagerIdObject = null;
						return ($this->intManagerId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Code':
					/**
					 * Sets the value for strCode 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'AccountIdObject':
					/**
					 * Sets the value for the Account object referenced by intAccountId (Not Null)
					 * @param Account $mixValue
					 * @return Account
					 */
					if (is_null($mixValue)) {
						$this->intAccountId = null;
						$this->objAccountIdObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Account object
						try {
							$mixValue = QType::Cast($mixValue, 'Account');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Account object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved AccountIdObject for this User');

						// Update Local Member Variables
						$this->objAccountIdObject = $mixValue;
						$this->intAccountId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'UserDetail':
					/**
					 * Sets the value for the UserDetails object referenced by intUserDetailId (Not Null)
					 * @param UserDetails $mixValue
					 * @return UserDetails
					 */
					if (is_null($mixValue)) {
						$this->intUserDetailId = null;
						$this->objUserDetail = null;
						return null;
					} else {
						// Make sure $mixValue actually is a UserDetails object
						try {
							$mixValue = QType::Cast($mixValue, 'UserDetails');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED UserDetails object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved UserDetail for this User');

						// Update Local Member Variables
						$this->objUserDetail = $mixValue;
						$this->intUserDetailId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ManagerIdObject':
					/**
					 * Sets the value for the User object referenced by intManagerId 
					 * @param User $mixValue
					 * @return User
					 */
					if (is_null($mixValue)) {
						$this->intManagerId = null;
						$this->objManagerIdObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a User object
						try {
							$mixValue = QType::Cast($mixValue, 'User');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED User object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved ManagerIdObject for this User');

						// Update Local Member Variables
						$this->objManagerIdObject = $mixValue;
						$this->intManagerId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
		// Related Objects' Methods for MessageAsFrom
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MessagesAsFrom as an array of Message objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message[]
		*/ 
		public function GetMessageAsFromArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Message::LoadArrayByFromUserId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MessagesAsFrom
		 * @return int
		*/ 
		public function CountMessagesAsFrom() {
			if ((is_null($this->intId)))
				return 0;

			return Message::CountByFromUserId($this->intId);
		}

		/**
		 * Associates a MessageAsFrom
		 * @param Message $objMessage
		 * @return void
		*/ 
		public function AssociateMessageAsFrom(Message $objMessage) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMessageAsFrom on this unsaved User.');
			if ((is_null($objMessage->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMessageAsFrom on this User with an unsaved Message.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`message`
				SET
					`from_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objMessage->Id) . '
			');
		}

		/**
		 * Unassociates a MessageAsFrom
		 * @param Message $objMessage
		 * @return void
		*/ 
		public function UnassociateMessageAsFrom(Message $objMessage) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsFrom on this unsaved User.');
			if ((is_null($objMessage->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsFrom on this User with an unsaved Message.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`message`
				SET
					`from_user_id` = null
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objMessage->Id) . ' AND
					`from_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all MessagesAsFrom
		 * @return void
		*/ 
		public function UnassociateAllMessagesAsFrom() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsFrom on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`message`
				SET
					`from_user_id` = null
				WHERE
					`from_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated MessageAsFrom
		 * @param Message $objMessage
		 * @return void
		*/ 
		public function DeleteAssociatedMessageAsFrom(Message $objMessage) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsFrom on this unsaved User.');
			if ((is_null($objMessage->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsFrom on this User with an unsaved Message.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`message`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objMessage->Id) . ' AND
					`from_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated MessagesAsFrom
		 * @return void
		*/ 
		public function DeleteAllMessagesAsFrom() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsFrom on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`message`
				WHERE
					`from_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for MessageAsTo
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MessagesAsTo as an array of Message objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message[]
		*/ 
		public function GetMessageAsToArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Message::LoadArrayByToUserId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MessagesAsTo
		 * @return int
		*/ 
		public function CountMessagesAsTo() {
			if ((is_null($this->intId)))
				return 0;

			return Message::CountByToUserId($this->intId);
		}

		/**
		 * Associates a MessageAsTo
		 * @param Message $objMessage
		 * @return void
		*/ 
		public function AssociateMessageAsTo(Message $objMessage) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMessageAsTo on this unsaved User.');
			if ((is_null($objMessage->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMessageAsTo on this User with an unsaved Message.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`message`
				SET
					`to_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objMessage->Id) . '
			');
		}

		/**
		 * Unassociates a MessageAsTo
		 * @param Message $objMessage
		 * @return void
		*/ 
		public function UnassociateMessageAsTo(Message $objMessage) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsTo on this unsaved User.');
			if ((is_null($objMessage->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsTo on this User with an unsaved Message.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`message`
				SET
					`to_user_id` = null
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objMessage->Id) . ' AND
					`to_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all MessagesAsTo
		 * @return void
		*/ 
		public function UnassociateAllMessagesAsTo() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsTo on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`message`
				SET
					`to_user_id` = null
				WHERE
					`to_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated MessageAsTo
		 * @param Message $objMessage
		 * @return void
		*/ 
		public function DeleteAssociatedMessageAsTo(Message $objMessage) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsTo on this unsaved User.');
			if ((is_null($objMessage->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsTo on this User with an unsaved Message.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`message`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objMessage->Id) . ' AND
					`to_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated MessagesAsTo
		 * @return void
		*/ 
		public function DeleteAllMessagesAsTo() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessageAsTo on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`message`
				WHERE
					`to_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for OfferAsOwner
		//-------------------------------------------------------------------

		/**
		 * Gets all associated OffersAsOwner as an array of Offer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer[]
		*/ 
		public function GetOfferAsOwnerArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Offer::LoadArrayByUserOwnerId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated OffersAsOwner
		 * @return int
		*/ 
		public function CountOffersAsOwner() {
			if ((is_null($this->intId)))
				return 0;

			return Offer::CountByUserOwnerId($this->intId);
		}

		/**
		 * Associates a OfferAsOwner
		 * @param Offer $objOffer
		 * @return void
		*/ 
		public function AssociateOfferAsOwner(Offer $objOffer) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOfferAsOwner on this unsaved User.');
			if ((is_null($objOffer->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOfferAsOwner on this User with an unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`offer`
				SET
					`user_owner_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objOffer->Id) . '
			');
		}

		/**
		 * Unassociates a OfferAsOwner
		 * @param Offer $objOffer
		 * @return void
		*/ 
		public function UnassociateOfferAsOwner(Offer $objOffer) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsOwner on this unsaved User.');
			if ((is_null($objOffer->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsOwner on this User with an unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`offer`
				SET
					`user_owner_id` = null
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objOffer->Id) . ' AND
					`user_owner_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all OffersAsOwner
		 * @return void
		*/ 
		public function UnassociateAllOffersAsOwner() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsOwner on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`offer`
				SET
					`user_owner_id` = null
				WHERE
					`user_owner_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated OfferAsOwner
		 * @param Offer $objOffer
		 * @return void
		*/ 
		public function DeleteAssociatedOfferAsOwner(Offer $objOffer) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsOwner on this unsaved User.');
			if ((is_null($objOffer->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsOwner on this User with an unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`offer`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objOffer->Id) . ' AND
					`user_owner_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated OffersAsOwner
		 * @return void
		*/ 
		public function DeleteAllOffersAsOwner() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOfferAsOwner on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`offer`
				WHERE
					`user_owner_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for TargetAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TargetsAsUser as an array of Target objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Target[]
		*/ 
		public function GetTargetAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Target::LoadArrayByUserId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TargetsAsUser
		 * @return int
		*/ 
		public function CountTargetsAsUser() {
			if ((is_null($this->intId)))
				return 0;

			return Target::CountByUserId($this->intId);
		}

		/**
		 * Associates a TargetAsUser
		 * @param Target $objTarget
		 * @return void
		*/ 
		public function AssociateTargetAsUser(Target $objTarget) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTargetAsUser on this unsaved User.');
			if ((is_null($objTarget->UserId)) || (is_null($objTarget->AccountId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTargetAsUser on this User with an unsaved Target.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`target`
				SET
					`User_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`User_id` = ' . $objDatabase->SqlVariable($objTarget->UserId) . ' AND
					`Account_id` = ' . $objDatabase->SqlVariable($objTarget->AccountId) . '
			');
		}

		/**
		 * Unassociates a TargetAsUser
		 * @param Target $objTarget
		 * @return void
		*/ 
		public function UnassociateTargetAsUser(Target $objTarget) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsUser on this unsaved User.');
			if ((is_null($objTarget->UserId)) || (is_null($objTarget->AccountId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsUser on this User with an unsaved Target.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`target`
				SET
					`User_id` = null
				WHERE
					`User_id` = ' . $objDatabase->SqlVariable($objTarget->UserId) . ' AND
					`Account_id` = ' . $objDatabase->SqlVariable($objTarget->AccountId) . ' AND
					`User_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all TargetsAsUser
		 * @return void
		*/ 
		public function UnassociateAllTargetsAsUser() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsUser on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`target`
				SET
					`User_id` = null
				WHERE
					`User_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated TargetAsUser
		 * @param Target $objTarget
		 * @return void
		*/ 
		public function DeleteAssociatedTargetAsUser(Target $objTarget) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsUser on this unsaved User.');
			if ((is_null($objTarget->UserId)) || (is_null($objTarget->AccountId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsUser on this User with an unsaved Target.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`target`
				WHERE
					`User_id` = ' . $objDatabase->SqlVariable($objTarget->UserId) . ' AND
					`Account_id` = ' . $objDatabase->SqlVariable($objTarget->AccountId) . ' AND
					`User_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated TargetsAsUser
		 * @return void
		*/ 
		public function DeleteAllTargetsAsUser() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsUser on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`target`
				WHERE
					`User_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for ThreadAsLast
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ThreadsAsLast as an array of Thread objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread[]
		*/ 
		public function GetThreadAsLastArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Thread::LoadArrayByLastUserId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ThreadsAsLast
		 * @return int
		*/ 
		public function CountThreadsAsLast() {
			if ((is_null($this->intId)))
				return 0;

			return Thread::CountByLastUserId($this->intId);
		}

		/**
		 * Associates a ThreadAsLast
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function AssociateThreadAsLast(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateThreadAsLast on this unsaved User.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateThreadAsLast on this User with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`last_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . '
			');
		}

		/**
		 * Unassociates a ThreadAsLast
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function UnassociateThreadAsLast(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsLast on this unsaved User.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsLast on this User with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`last_user_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . ' AND
					`last_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all ThreadsAsLast
		 * @return void
		*/ 
		public function UnassociateAllThreadsAsLast() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsLast on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`last_user_id` = null
				WHERE
					`last_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ThreadAsLast
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function DeleteAssociatedThreadAsLast(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsLast on this unsaved User.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsLast on this User with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`thread`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . ' AND
					`last_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated ThreadsAsLast
		 * @return void
		*/ 
		public function DeleteAllThreadsAsLast() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsLast on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`thread`
				WHERE
					`last_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for ThreadAsReceiver
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ThreadsAsReceiver as an array of Thread objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread[]
		*/ 
		public function GetThreadAsReceiverArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Thread::LoadArrayByReceiverUserId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ThreadsAsReceiver
		 * @return int
		*/ 
		public function CountThreadsAsReceiver() {
			if ((is_null($this->intId)))
				return 0;

			return Thread::CountByReceiverUserId($this->intId);
		}

		/**
		 * Associates a ThreadAsReceiver
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function AssociateThreadAsReceiver(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateThreadAsReceiver on this unsaved User.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateThreadAsReceiver on this User with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`receiver_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . '
			');
		}

		/**
		 * Unassociates a ThreadAsReceiver
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function UnassociateThreadAsReceiver(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsReceiver on this unsaved User.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsReceiver on this User with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`receiver_user_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . ' AND
					`receiver_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all ThreadsAsReceiver
		 * @return void
		*/ 
		public function UnassociateAllThreadsAsReceiver() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsReceiver on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`receiver_user_id` = null
				WHERE
					`receiver_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ThreadAsReceiver
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function DeleteAssociatedThreadAsReceiver(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsReceiver on this unsaved User.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsReceiver on this User with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`thread`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . ' AND
					`receiver_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated ThreadsAsReceiver
		 * @return void
		*/ 
		public function DeleteAllThreadsAsReceiver() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsReceiver on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`thread`
				WHERE
					`receiver_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for ThreadAsSender
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ThreadsAsSender as an array of Thread objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread[]
		*/ 
		public function GetThreadAsSenderArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Thread::LoadArrayBySenderUserId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ThreadsAsSender
		 * @return int
		*/ 
		public function CountThreadsAsSender() {
			if ((is_null($this->intId)))
				return 0;

			return Thread::CountBySenderUserId($this->intId);
		}

		/**
		 * Associates a ThreadAsSender
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function AssociateThreadAsSender(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateThreadAsSender on this unsaved User.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateThreadAsSender on this User with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`sender_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . '
			');
		}

		/**
		 * Unassociates a ThreadAsSender
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function UnassociateThreadAsSender(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsSender on this unsaved User.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsSender on this User with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`sender_user_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . ' AND
					`sender_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all ThreadsAsSender
		 * @return void
		*/ 
		public function UnassociateAllThreadsAsSender() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsSender on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`sender_user_id` = null
				WHERE
					`sender_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ThreadAsSender
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function DeleteAssociatedThreadAsSender(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsSender on this unsaved User.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsSender on this User with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`thread`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . ' AND
					`sender_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated ThreadsAsSender
		 * @return void
		*/ 
		public function DeleteAllThreadsAsSender() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThreadAsSender on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`thread`
				WHERE
					`sender_user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for UserAsManagerId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated UsersAsManagerId as an array of User objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		*/ 
		public function GetUserAsManagerIdArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return User::LoadArrayByManagerId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated UsersAsManagerId
		 * @return int
		*/ 
		public function CountUsersAsManagerId() {
			if ((is_null($this->intId)))
				return 0;

			return User::CountByManagerId($this->intId);
		}

		/**
		 * Associates a UserAsManagerId
		 * @param User $objUser
		 * @return void
		*/ 
		public function AssociateUserAsManagerId(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUserAsManagerId on this unsaved User.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUserAsManagerId on this User with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`user`
				SET
					`Manager_Id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objUser->Id) . '
			');
		}

		/**
		 * Unassociates a UserAsManagerId
		 * @param User $objUser
		 * @return void
		*/ 
		public function UnassociateUserAsManagerId(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsManagerId on this unsaved User.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsManagerId on this User with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`user`
				SET
					`Manager_Id` = null
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objUser->Id) . ' AND
					`Manager_Id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all UsersAsManagerId
		 * @return void
		*/ 
		public function UnassociateAllUsersAsManagerId() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsManagerId on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`user`
				SET
					`Manager_Id` = null
				WHERE
					`Manager_Id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated UserAsManagerId
		 * @param User $objUser
		 * @return void
		*/ 
		public function DeleteAssociatedUserAsManagerId(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsManagerId on this unsaved User.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsManagerId on this User with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objUser->Id) . ' AND
					`Manager_Id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated UsersAsManagerId
		 * @return void
		*/ 
		public function DeleteAllUsersAsManagerId() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsManagerId on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`
				WHERE
					`Manager_Id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		// Related Many-to-Many Objects' Methods for ParentUserAsAllies
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated ParentUsersAsAllies as an array of User objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		*/ 
		public function GetParentUserAsAlliesArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return User::LoadArrayByUserAsAllies($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated ParentUsersAsAllies
		 * @return int
		*/ 
		public function CountParentUsersAsAllies() {
			if ((is_null($this->intId)))
				return 0;

			return User::CountByUserAsAllies($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific ParentUserAsAllies
		 * @param User $objUser
		 * @return bool
		*/
		public function IsParentUserAsAlliesAssociated(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsParentUserAsAlliesAssociated on this unsaved User.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsParentUserAsAlliesAssociated on this User with an unsaved User.');

			$intRowCount = User::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->Id, $this->intId),
					QQ::Equal(QQN::User()->ParentUserAsAllies->UserAllyId, $objUser->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a ParentUserAsAllies
		 * @param User $objUser
		 * @return void
		*/ 
		public function AssociateParentUserAsAllies(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateParentUserAsAllies on this unsaved User.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateParentUserAsAllies on this User with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `allies_assn` (
					`user_owner_id`,
					`user_ally_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objUser->Id) . '
				)
			');
		}

		/**
		 * Unassociates a ParentUserAsAllies
		 * @param User $objUser
		 * @return void
		*/ 
		public function UnassociateParentUserAsAllies(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateParentUserAsAllies on this unsaved User.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateParentUserAsAllies on this User with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`allies_assn`
				WHERE
					`user_owner_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`user_ally_id` = ' . $objDatabase->SqlVariable($objUser->Id) . '
			');
		}

		/**
		 * Unassociates all ParentUsersAsAllies
		 * @return void
		*/ 
		public function UnassociateAllParentUsersAsAllies() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllParentUserAsAlliesArray on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`allies_assn`
				WHERE
					`user_owner_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}
			
		// Related Many-to-Many Objects' Methods for UserAsAllies
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated UsersAsAllies as an array of User objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		*/ 
		public function GetUserAsAlliesArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return User::LoadArrayByParentUserAsAllies($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated UsersAsAllies
		 * @return int
		*/ 
		public function CountUsersAsAllies() {
			if ((is_null($this->intId)))
				return 0;

			return User::CountByParentUserAsAllies($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific UserAsAllies
		 * @param User $objUser
		 * @return bool
		*/
		public function IsUserAsAlliesAssociated(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsUserAsAlliesAssociated on this unsaved User.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsUserAsAlliesAssociated on this User with an unsaved User.');

			$intRowCount = User::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->Id, $this->intId),
					QQ::Equal(QQN::User()->UserAsAllies->UserOwnerId, $objUser->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a UserAsAllies
		 * @param User $objUser
		 * @return void
		*/ 
		public function AssociateUserAsAllies(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUserAsAllies on this unsaved User.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUserAsAllies on this User with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `allies_assn` (
					`user_ally_id`,
					`user_owner_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objUser->Id) . '
				)
			');
		}

		/**
		 * Unassociates a UserAsAllies
		 * @param User $objUser
		 * @return void
		*/ 
		public function UnassociateUserAsAllies(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsAllies on this unsaved User.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsAllies on this User with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`allies_assn`
				WHERE
					`user_ally_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`user_owner_id` = ' . $objDatabase->SqlVariable($objUser->Id) . '
			');
		}

		/**
		 * Unassociates all UsersAsAllies
		 * @return void
		*/ 
		public function UnassociateAllUsersAsAllies() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllUserAsAlliesArray on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`allies_assn`
				WHERE
					`user_ally_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}
			
		// Related Many-to-Many Objects' Methods for GroupCode
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated GroupCodes as an array of GroupCode objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return GroupCode[]
		*/ 
		public function GetGroupCodeArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return GroupCode::LoadArrayByUser($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated GroupCodes
		 * @return int
		*/ 
		public function CountGroupCodes() {
			if ((is_null($this->intId)))
				return 0;

			return GroupCode::CountByUser($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific GroupCode
		 * @param GroupCode $objGroupCode
		 * @return bool
		*/
		public function IsGroupCodeAssociated(GroupCode $objGroupCode) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsGroupCodeAssociated on this unsaved User.');
			if ((is_null($objGroupCode->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsGroupCodeAssociated on this User with an unsaved GroupCode.');

			$intRowCount = User::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->Id, $this->intId),
					QQ::Equal(QQN::User()->GroupCode->GroupCodeId, $objGroupCode->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a GroupCode
		 * @param GroupCode $objGroupCode
		 * @return void
		*/ 
		public function AssociateGroupCode(GroupCode $objGroupCode) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateGroupCode on this unsaved User.');
			if ((is_null($objGroupCode->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateGroupCode on this User with an unsaved GroupCode.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `user_group_code_assn` (
					`user_id`,
					`group_code_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objGroupCode->Id) . '
				)
			');
		}

		/**
		 * Unassociates a GroupCode
		 * @param GroupCode $objGroupCode
		 * @return void
		*/ 
		public function UnassociateGroupCode(GroupCode $objGroupCode) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateGroupCode on this unsaved User.');
			if ((is_null($objGroupCode->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateGroupCode on this User with an unsaved GroupCode.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user_group_code_assn`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`group_code_id` = ' . $objDatabase->SqlVariable($objGroupCode->Id) . '
			');
		}

		/**
		 * Unassociates all GroupCodes
		 * @return void
		*/ 
		public function UnassociateAllGroupCodes() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllGroupCodeArray on this unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user_group_code_assn`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="User"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Username" type="xsd:string"/>';
			$strToReturn .= '<element name="Password" type="xsd:string"/>';
			$strToReturn .= '<element name="FullName" type="xsd:string"/>';
			$strToReturn .= '<element name="Active" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AccountIdObject" type="xsd1:Account"/>';
			$strToReturn .= '<element name="UserDetail" type="xsd1:UserDetails"/>';
			$strToReturn .= '<element name="ManagerIdObject" type="xsd1:User"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('User', $strComplexTypeArray)) {
				$strComplexTypeArray['User'] = User::GetSoapComplexTypeXml();
				Account::AlterSoapComplexTypeArray($strComplexTypeArray);
				UserDetails::AlterSoapComplexTypeArray($strComplexTypeArray);
				User::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, User::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new User();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Username'))
				$objToReturn->strUsername = $objSoapObject->Username;
			if (property_exists($objSoapObject, 'Password'))
				$objToReturn->strPassword = $objSoapObject->Password;
			if (property_exists($objSoapObject, 'FullName'))
				$objToReturn->strFullName = $objSoapObject->FullName;
			if (property_exists($objSoapObject, 'Active'))
				$objToReturn->blnActive = $objSoapObject->Active;
			if ((property_exists($objSoapObject, 'AccountIdObject')) &&
				($objSoapObject->AccountIdObject))
				$objToReturn->AccountIdObject = Account::GetObjectFromSoapObject($objSoapObject->AccountIdObject);
			if ((property_exists($objSoapObject, 'UserDetail')) &&
				($objSoapObject->UserDetail))
				$objToReturn->UserDetail = UserDetails::GetObjectFromSoapObject($objSoapObject->UserDetail);
			if ((property_exists($objSoapObject, 'ManagerIdObject')) &&
				($objSoapObject->ManagerIdObject))
				$objToReturn->ManagerIdObject = User::GetObjectFromSoapObject($objSoapObject->ManagerIdObject);
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, User::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objAccountIdObject)
				$objObject->objAccountIdObject = Account::GetSoapObjectFromObject($objObject->objAccountIdObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAccountId = null;
			if ($objObject->objUserDetail)
				$objObject->objUserDetail = UserDetails::GetSoapObjectFromObject($objObject->objUserDetail, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUserDetailId = null;
			if ($objObject->objManagerIdObject)
				$objObject->objManagerIdObject = User::GetSoapObjectFromObject($objObject->objManagerIdObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intManagerId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeUserParentUserAsAllies extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'parentuserasallies';

		protected $strTableName = 'allies_assn';
		protected $strPrimaryKey = 'user_owner_id';
		protected $strClassName = 'User';

		public function __get($strName) {
			switch ($strName) {
				case 'UserAllyId':
					return new QQNode('user_ally_id', 'UserAllyId', 'integer', $this);
				case 'User':
					return new QQNodeUser('user_ally_id', 'UserAllyId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeUser('user_ally_id', 'UserAllyId', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

	class QQNodeUserUserAsAllies extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'userasallies';

		protected $strTableName = 'allies_assn';
		protected $strPrimaryKey = 'user_ally_id';
		protected $strClassName = 'User';

		public function __get($strName) {
			switch ($strName) {
				case 'UserOwnerId':
					return new QQNode('user_owner_id', 'UserOwnerId', 'integer', $this);
				case 'User':
					return new QQNodeUser('user_owner_id', 'UserOwnerId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeUser('user_owner_id', 'UserOwnerId', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

	class QQNodeUserGroupCode extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'groupcode';

		protected $strTableName = 'user_group_code_assn';
		protected $strPrimaryKey = 'user_id';
		protected $strClassName = 'GroupCode';

		public function __get($strName) {
			switch ($strName) {
				case 'GroupCodeId':
					return new QQNode('group_code_id', 'GroupCodeId', 'integer', $this);
				case 'GroupCode':
					return new QQNodeGroupCode('group_code_id', 'GroupCodeId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeGroupCode('group_code_id', 'GroupCodeId', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

	class QQNodeUser extends QQNode {
		protected $strTableName = 'user';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'User';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('Id', 'Id', 'integer', $this);
				case 'Username':
					return new QQNode('Username', 'Username', 'string', $this);
				case 'Password':
					return new QQNode('Password', 'Password', 'string', $this);
				case 'FullName':
					return new QQNode('FullName', 'FullName', 'string', $this);
				case 'Active':
					return new QQNode('Active', 'Active', 'boolean', $this);
				case 'AccountId':
					return new QQNode('Account_Id', 'AccountId', 'integer', $this);
				case 'AccountIdObject':
					return new QQNodeAccount('Account_Id', 'AccountIdObject', 'integer', $this);
				case 'UserDetailId':
					return new QQNode('User_detail_id', 'UserDetailId', 'integer', $this);
				case 'UserDetail':
					return new QQNodeUserDetails('User_detail_id', 'UserDetail', 'integer', $this);
				case 'ManagerId':
					return new QQNode('Manager_Id', 'ManagerId', 'integer', $this);
				case 'ManagerIdObject':
					return new QQNodeUser('Manager_Id', 'ManagerIdObject', 'integer', $this);
				case 'Code':
					return new QQNode('Code', 'Code', 'string', $this);
				case 'ParentUserAsAllies':
					return new QQNodeUserParentUserAsAllies($this);
				case 'UserAsAllies':
					return new QQNodeUserUserAsAllies($this);
				case 'GroupCode':
					return new QQNodeUserGroupCode($this);
				case 'MessageAsFrom':
					return new QQReverseReferenceNodeMessage($this, 'messageasfrom', 'reverse_reference', 'from_user_id');
				case 'MessageAsTo':
					return new QQReverseReferenceNodeMessage($this, 'messageasto', 'reverse_reference', 'to_user_id');
				case 'OfferAsOwner':
					return new QQReverseReferenceNodeOffer($this, 'offerasowner', 'reverse_reference', 'user_owner_id');
				case 'TargetAsUser':
					return new QQReverseReferenceNodeTarget($this, 'targetasuser', 'reverse_reference', 'User_id');
				case 'ThreadAsLast':
					return new QQReverseReferenceNodeThread($this, 'threadaslast', 'reverse_reference', 'last_user_id');
				case 'ThreadAsReceiver':
					return new QQReverseReferenceNodeThread($this, 'threadasreceiver', 'reverse_reference', 'receiver_user_id');
				case 'ThreadAsSender':
					return new QQReverseReferenceNodeThread($this, 'threadassender', 'reverse_reference', 'sender_user_id');
				case 'UserAsManagerId':
					return new QQReverseReferenceNodeUser($this, 'userasmanagerid', 'reverse_reference', 'Manager_Id');

				case '_PrimaryKeyNode':
					return new QQNode('Id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

	class QQReverseReferenceNodeUser extends QQReverseReferenceNode {
		protected $strTableName = 'user';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'User';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('Id', 'Id', 'integer', $this);
				case 'Username':
					return new QQNode('Username', 'Username', 'string', $this);
				case 'Password':
					return new QQNode('Password', 'Password', 'string', $this);
				case 'FullName':
					return new QQNode('FullName', 'FullName', 'string', $this);
				case 'Active':
					return new QQNode('Active', 'Active', 'boolean', $this);
				case 'AccountId':
					return new QQNode('Account_Id', 'AccountId', 'integer', $this);
				case 'AccountIdObject':
					return new QQNodeAccount('Account_Id', 'AccountIdObject', 'integer', $this);
				case 'UserDetailId':
					return new QQNode('User_detail_id', 'UserDetailId', 'integer', $this);
				case 'UserDetail':
					return new QQNodeUserDetails('User_detail_id', 'UserDetail', 'integer', $this);
				case 'ManagerId':
					return new QQNode('Manager_Id', 'ManagerId', 'integer', $this);
				case 'ManagerIdObject':
					return new QQNodeUser('Manager_Id', 'ManagerIdObject', 'integer', $this);
				case 'Code':
					return new QQNode('Code', 'Code', 'string', $this);
				case 'ParentUserAsAllies':
					return new QQNodeUserParentUserAsAllies($this);
				case 'UserAsAllies':
					return new QQNodeUserUserAsAllies($this);
				case 'GroupCode':
					return new QQNodeUserGroupCode($this);
				case 'MessageAsFrom':
					return new QQReverseReferenceNodeMessage($this, 'messageasfrom', 'reverse_reference', 'from_user_id');
				case 'MessageAsTo':
					return new QQReverseReferenceNodeMessage($this, 'messageasto', 'reverse_reference', 'to_user_id');
				case 'OfferAsOwner':
					return new QQReverseReferenceNodeOffer($this, 'offerasowner', 'reverse_reference', 'user_owner_id');
				case 'TargetAsUser':
					return new QQReverseReferenceNodeTarget($this, 'targetasuser', 'reverse_reference', 'User_id');
				case 'ThreadAsLast':
					return new QQReverseReferenceNodeThread($this, 'threadaslast', 'reverse_reference', 'last_user_id');
				case 'ThreadAsReceiver':
					return new QQReverseReferenceNodeThread($this, 'threadasreceiver', 'reverse_reference', 'receiver_user_id');
				case 'ThreadAsSender':
					return new QQReverseReferenceNodeThread($this, 'threadassender', 'reverse_reference', 'sender_user_id');
				case 'UserAsManagerId':
					return new QQReverseReferenceNodeUser($this, 'userasmanagerid', 'reverse_reference', 'Manager_Id');

				case '_PrimaryKeyNode':
					return new QQNode('Id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>