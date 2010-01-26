<?php
	/**
	 * The abstract ThreadGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Thread subclass which
	 * extends this ThreadGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Thread class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property integer $SenderUserId the value for intSenderUserId (Not Null)
	 * @property integer $ReceiverUserId the value for intReceiverUserId (Not Null)
	 * @property string $Subject the value for strSubject (Not Null)
	 * @property QDateTime $DateTime the value for dttDateTime 
	 * @property integer $LastUserId the value for intLastUserId (Not Null)
	 * @property integer $AccountId the value for intAccountId (Not Null)
	 * @property string $MessageTypeId the value for strMessageTypeId (Not Null)
	 * @property User $SenderUser the value for the User object referenced by intSenderUserId (Not Null)
	 * @property User $ReceiverUser the value for the User object referenced by intReceiverUserId (Not Null)
	 * @property User $LastUser the value for the User object referenced by intLastUserId (Not Null)
	 * @property Account $Account the value for the Account object referenced by intAccountId (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ThreadGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column thread.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column thread.sender_user_id
		 * @var integer intSenderUserId
		 */
		protected $intSenderUserId;
		const SenderUserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column thread.receiver_user_id
		 * @var integer intReceiverUserId
		 */
		protected $intReceiverUserId;
		const ReceiverUserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column thread.subject
		 * @var string strSubject
		 */
		protected $strSubject;
		const SubjectMaxLength = 255;
		const SubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column thread.date_time
		 * @var QDateTime dttDateTime
		 */
		protected $dttDateTime;
		const DateTimeDefault = null;


		/**
		 * Protected member variable that maps to the database column thread.last_user_id
		 * @var integer intLastUserId
		 */
		protected $intLastUserId;
		const LastUserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column thread.account_id
		 * @var integer intAccountId
		 */
		protected $intAccountId;
		const AccountIdDefault = null;


		/**
		 * Protected member variable that maps to the database column thread.message_type_id
		 * @var string strMessageTypeId
		 */
		protected $strMessageTypeId;
		const MessageTypeIdMaxLength = 1;
		const MessageTypeIdDefault = null;


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
		 * in the database column thread.sender_user_id.
		 *
		 * NOTE: Always use the SenderUser property getter to correctly retrieve this User object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var User objSenderUser
		 */
		protected $objSenderUser;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column thread.receiver_user_id.
		 *
		 * NOTE: Always use the ReceiverUser property getter to correctly retrieve this User object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var User objReceiverUser
		 */
		protected $objReceiverUser;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column thread.last_user_id.
		 *
		 * NOTE: Always use the LastUser property getter to correctly retrieve this User object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var User objLastUser
		 */
		protected $objLastUser;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column thread.account_id.
		 *
		 * NOTE: Always use the Account property getter to correctly retrieve this Account object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Account objAccount
		 */
		protected $objAccount;





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
		 * Load a Thread from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Thread::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Thread()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Threads
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Thread::QueryArray to perform the LoadAll query
			try {
				return Thread::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Threads
		 * @return int
		 */
		public static function CountAll() {
			// Call Thread::QueryCount to perform the CountAll query
			return Thread::QueryCount(QQ::All());
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
			$objDatabase = Thread::GetDatabase();

			// Create/Build out the QueryBuilder object with Thread-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'thread');
			Thread::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('thread');

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
		 * Static Qcubed Query method to query for a single Thread object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Thread the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Thread::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Thread object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Thread::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Thread::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Thread objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Thread[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Thread::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Thread::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Thread objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Thread::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Thread::GetDatabase();

			$strQuery = Thread::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/thread', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Thread::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Thread
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'thread';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'sender_user_id', $strAliasPrefix . 'sender_user_id');
			$objBuilder->AddSelectItem($strTableName, 'receiver_user_id', $strAliasPrefix . 'receiver_user_id');
			$objBuilder->AddSelectItem($strTableName, 'subject', $strAliasPrefix . 'subject');
			$objBuilder->AddSelectItem($strTableName, 'date_time', $strAliasPrefix . 'date_time');
			$objBuilder->AddSelectItem($strTableName, 'last_user_id', $strAliasPrefix . 'last_user_id');
			$objBuilder->AddSelectItem($strTableName, 'account_id', $strAliasPrefix . 'account_id');
			$objBuilder->AddSelectItem($strTableName, 'message_type_id', $strAliasPrefix . 'message_type_id');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Thread from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Thread::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Thread
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Thread object
			$objToReturn = new Thread();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'sender_user_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'sender_user_id'] : $strAliasPrefix . 'sender_user_id';
			$objToReturn->intSenderUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'receiver_user_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'receiver_user_id'] : $strAliasPrefix . 'receiver_user_id';
			$objToReturn->intReceiverUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'subject', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'subject'] : $strAliasPrefix . 'subject';
			$objToReturn->strSubject = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'date_time', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'date_time'] : $strAliasPrefix . 'date_time';
			$objToReturn->dttDateTime = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'last_user_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'last_user_id'] : $strAliasPrefix . 'last_user_id';
			$objToReturn->intLastUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'account_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'account_id'] : $strAliasPrefix . 'account_id';
			$objToReturn->intAccountId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'message_type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'message_type_id'] : $strAliasPrefix . 'message_type_id';
			$objToReturn->strMessageTypeId = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
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
				$strAliasPrefix = 'thread__';

			// Check for SenderUser Early Binding
			$strAlias = $strAliasPrefix . 'sender_user_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSenderUser = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'sender_user_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ReceiverUser Early Binding
			$strAlias = $strAliasPrefix . 'receiver_user_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReceiverUser = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'receiver_user_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for LastUser Early Binding
			$strAlias = $strAliasPrefix . 'last_user_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLastUser = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'last_user_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Account Early Binding
			$strAlias = $strAliasPrefix . 'account_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAccount = Account::InstantiateDbRow($objDbRow, $strAliasPrefix . 'account_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Threads from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Thread[]
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
					$objItem = Thread::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Thread::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Thread object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Thread::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Thread()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single Thread object,
		 * by SenderUserId, ReceiverUserId, AccountId Index(es)
		 * @param integer $intSenderUserId
		 * @param integer $intReceiverUserId
		 * @param integer $intAccountId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread
		*/
		public static function LoadBySenderUserIdReceiverUserIdAccountId($intSenderUserId, $intReceiverUserId, $intAccountId, $objOptionalClauses = null) {
			return Thread::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Thread()->SenderUserId, $intSenderUserId),
					QQ::Equal(QQN::Thread()->ReceiverUserId, $intReceiverUserId),
					QQ::Equal(QQN::Thread()->AccountId, $intAccountId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Thread objects,
		 * by LastUserId Index(es)
		 * @param integer $intLastUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread[]
		*/
		public static function LoadArrayByLastUserId($intLastUserId, $objOptionalClauses = null) {
			// Call Thread::QueryArray to perform the LoadArrayByLastUserId query
			try {
				return Thread::QueryArray(
					QQ::Equal(QQN::Thread()->LastUserId, $intLastUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Threads
		 * by LastUserId Index(es)
		 * @param integer $intLastUserId
		 * @return int
		*/
		public static function CountByLastUserId($intLastUserId) {
			// Call Thread::QueryCount to perform the CountByLastUserId query
			return Thread::QueryCount(
				QQ::Equal(QQN::Thread()->LastUserId, $intLastUserId)
			);
		}
			
		/**
		 * Load an array of Thread objects,
		 * by DateTime Index(es)
		 * @param QDateTime $dttDateTime
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread[]
		*/
		public static function LoadArrayByDateTime($dttDateTime, $objOptionalClauses = null) {
			// Call Thread::QueryArray to perform the LoadArrayByDateTime query
			try {
				return Thread::QueryArray(
					QQ::Equal(QQN::Thread()->DateTime, $dttDateTime),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Threads
		 * by DateTime Index(es)
		 * @param QDateTime $dttDateTime
		 * @return int
		*/
		public static function CountByDateTime($dttDateTime) {
			// Call Thread::QueryCount to perform the CountByDateTime query
			return Thread::QueryCount(
				QQ::Equal(QQN::Thread()->DateTime, $dttDateTime)
			);
		}
			
		/**
		 * Load an array of Thread objects,
		 * by SenderUserId Index(es)
		 * @param integer $intSenderUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread[]
		*/
		public static function LoadArrayBySenderUserId($intSenderUserId, $objOptionalClauses = null) {
			// Call Thread::QueryArray to perform the LoadArrayBySenderUserId query
			try {
				return Thread::QueryArray(
					QQ::Equal(QQN::Thread()->SenderUserId, $intSenderUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Threads
		 * by SenderUserId Index(es)
		 * @param integer $intSenderUserId
		 * @return int
		*/
		public static function CountBySenderUserId($intSenderUserId) {
			// Call Thread::QueryCount to perform the CountBySenderUserId query
			return Thread::QueryCount(
				QQ::Equal(QQN::Thread()->SenderUserId, $intSenderUserId)
			);
		}
			
		/**
		 * Load an array of Thread objects,
		 * by ReceiverUserId Index(es)
		 * @param integer $intReceiverUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread[]
		*/
		public static function LoadArrayByReceiverUserId($intReceiverUserId, $objOptionalClauses = null) {
			// Call Thread::QueryArray to perform the LoadArrayByReceiverUserId query
			try {
				return Thread::QueryArray(
					QQ::Equal(QQN::Thread()->ReceiverUserId, $intReceiverUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Threads
		 * by ReceiverUserId Index(es)
		 * @param integer $intReceiverUserId
		 * @return int
		*/
		public static function CountByReceiverUserId($intReceiverUserId) {
			// Call Thread::QueryCount to perform the CountByReceiverUserId query
			return Thread::QueryCount(
				QQ::Equal(QQN::Thread()->ReceiverUserId, $intReceiverUserId)
			);
		}
			
		/**
		 * Load an array of Thread objects,
		 * by AccountId Index(es)
		 * @param integer $intAccountId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread[]
		*/
		public static function LoadArrayByAccountId($intAccountId, $objOptionalClauses = null) {
			// Call Thread::QueryArray to perform the LoadArrayByAccountId query
			try {
				return Thread::QueryArray(
					QQ::Equal(QQN::Thread()->AccountId, $intAccountId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Threads
		 * by AccountId Index(es)
		 * @param integer $intAccountId
		 * @return int
		*/
		public static function CountByAccountId($intAccountId) {
			// Call Thread::QueryCount to perform the CountByAccountId query
			return Thread::QueryCount(
				QQ::Equal(QQN::Thread()->AccountId, $intAccountId)
			);
		}
			
		/**
		 * Load an array of Thread objects,
		 * by AccountId, DateTime Index(es)
		 * @param integer $intAccountId
		 * @param QDateTime $dttDateTime
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread[]
		*/
		public static function LoadArrayByAccountIdDateTime($intAccountId, $dttDateTime, $objOptionalClauses = null) {
			// Call Thread::QueryArray to perform the LoadArrayByAccountIdDateTime query
			try {
				return Thread::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::Thread()->AccountId, $intAccountId),
					QQ::Equal(QQN::Thread()->DateTime, $dttDateTime)
					),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Threads
		 * by AccountId, DateTime Index(es)
		 * @param integer $intAccountId
		 * @param QDateTime $dttDateTime
		 * @return int
		*/
		public static function CountByAccountIdDateTime($intAccountId, $dttDateTime) {
			// Call Thread::QueryCount to perform the CountByAccountIdDateTime query
			return Thread::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::Thread()->AccountId, $intAccountId),
				QQ::Equal(QQN::Thread()->DateTime, $dttDateTime)
				)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Thread
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Thread::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `thread` (
							`sender_user_id`,
							`receiver_user_id`,
							`subject`,
							`date_time`,
							`last_user_id`,
							`account_id`,
							`message_type_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intSenderUserId) . ',
							' . $objDatabase->SqlVariable($this->intReceiverUserId) . ',
							' . $objDatabase->SqlVariable($this->strSubject) . ',
							' . $objDatabase->SqlVariable($this->dttDateTime) . ',
							' . $objDatabase->SqlVariable($this->intLastUserId) . ',
							' . $objDatabase->SqlVariable($this->intAccountId) . ',
							' . $objDatabase->SqlVariable($this->strMessageTypeId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('thread', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`thread`
						SET
							`sender_user_id` = ' . $objDatabase->SqlVariable($this->intSenderUserId) . ',
							`receiver_user_id` = ' . $objDatabase->SqlVariable($this->intReceiverUserId) . ',
							`subject` = ' . $objDatabase->SqlVariable($this->strSubject) . ',
							`date_time` = ' . $objDatabase->SqlVariable($this->dttDateTime) . ',
							`last_user_id` = ' . $objDatabase->SqlVariable($this->intLastUserId) . ',
							`account_id` = ' . $objDatabase->SqlVariable($this->intAccountId) . ',
							`message_type_id` = ' . $objDatabase->SqlVariable($this->strMessageTypeId) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
		 * Delete this Thread
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Thread with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Thread::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`thread`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Threads
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Thread::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`thread`');
		}

		/**
		 * Truncate thread table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Thread::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `thread`');
		}

		/**
		 * Reload this Thread from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Thread object.');

			// Reload the Object
			$objReloaded = Thread::Load($this->intId);

			// Update $this's local variables to match
			$this->SenderUserId = $objReloaded->SenderUserId;
			$this->ReceiverUserId = $objReloaded->ReceiverUserId;
			$this->strSubject = $objReloaded->strSubject;
			$this->dttDateTime = $objReloaded->dttDateTime;
			$this->LastUserId = $objReloaded->LastUserId;
			$this->AccountId = $objReloaded->AccountId;
			$this->strMessageTypeId = $objReloaded->strMessageTypeId;
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

				case 'SenderUserId':
					/**
					 * Gets the value for intSenderUserId (Not Null)
					 * @return integer
					 */
					return $this->intSenderUserId;

				case 'ReceiverUserId':
					/**
					 * Gets the value for intReceiverUserId (Not Null)
					 * @return integer
					 */
					return $this->intReceiverUserId;

				case 'Subject':
					/**
					 * Gets the value for strSubject (Not Null)
					 * @return string
					 */
					return $this->strSubject;

				case 'DateTime':
					/**
					 * Gets the value for dttDateTime 
					 * @return QDateTime
					 */
					return $this->dttDateTime;

				case 'LastUserId':
					/**
					 * Gets the value for intLastUserId (Not Null)
					 * @return integer
					 */
					return $this->intLastUserId;

				case 'AccountId':
					/**
					 * Gets the value for intAccountId (Not Null)
					 * @return integer
					 */
					return $this->intAccountId;

				case 'MessageTypeId':
					/**
					 * Gets the value for strMessageTypeId (Not Null)
					 * @return string
					 */
					return $this->strMessageTypeId;


				///////////////////
				// Member Objects
				///////////////////
				case 'SenderUser':
					/**
					 * Gets the value for the User object referenced by intSenderUserId (Not Null)
					 * @return User
					 */
					try {
						if ((!$this->objSenderUser) && (!is_null($this->intSenderUserId)))
							$this->objSenderUser = User::Load($this->intSenderUserId);
						return $this->objSenderUser;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReceiverUser':
					/**
					 * Gets the value for the User object referenced by intReceiverUserId (Not Null)
					 * @return User
					 */
					try {
						if ((!$this->objReceiverUser) && (!is_null($this->intReceiverUserId)))
							$this->objReceiverUser = User::Load($this->intReceiverUserId);
						return $this->objReceiverUser;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LastUser':
					/**
					 * Gets the value for the User object referenced by intLastUserId (Not Null)
					 * @return User
					 */
					try {
						if ((!$this->objLastUser) && (!is_null($this->intLastUserId)))
							$this->objLastUser = User::Load($this->intLastUserId);
						return $this->objLastUser;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Account':
					/**
					 * Gets the value for the Account object referenced by intAccountId (Not Null)
					 * @return Account
					 */
					try {
						if ((!$this->objAccount) && (!is_null($this->intAccountId)))
							$this->objAccount = Account::Load($this->intAccountId);
						return $this->objAccount;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


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
				case 'SenderUserId':
					/**
					 * Sets the value for intSenderUserId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSenderUser = null;
						return ($this->intSenderUserId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReceiverUserId':
					/**
					 * Sets the value for intReceiverUserId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objReceiverUser = null;
						return ($this->intReceiverUserId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Subject':
					/**
					 * Sets the value for strSubject (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSubject = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DateTime':
					/**
					 * Sets the value for dttDateTime 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDateTime = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LastUserId':
					/**
					 * Sets the value for intLastUserId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objLastUser = null;
						return ($this->intLastUserId = QType::Cast($mixValue, QType::Integer));
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
						$this->objAccount = null;
						return ($this->intAccountId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MessageTypeId':
					/**
					 * Sets the value for strMessageTypeId (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMessageTypeId = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'SenderUser':
					/**
					 * Sets the value for the User object referenced by intSenderUserId (Not Null)
					 * @param User $mixValue
					 * @return User
					 */
					if (is_null($mixValue)) {
						$this->intSenderUserId = null;
						$this->objSenderUser = null;
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
							throw new QCallerException('Unable to set an unsaved SenderUser for this Thread');

						// Update Local Member Variables
						$this->objSenderUser = $mixValue;
						$this->intSenderUserId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ReceiverUser':
					/**
					 * Sets the value for the User object referenced by intReceiverUserId (Not Null)
					 * @param User $mixValue
					 * @return User
					 */
					if (is_null($mixValue)) {
						$this->intReceiverUserId = null;
						$this->objReceiverUser = null;
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
							throw new QCallerException('Unable to set an unsaved ReceiverUser for this Thread');

						// Update Local Member Variables
						$this->objReceiverUser = $mixValue;
						$this->intReceiverUserId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'LastUser':
					/**
					 * Sets the value for the User object referenced by intLastUserId (Not Null)
					 * @param User $mixValue
					 * @return User
					 */
					if (is_null($mixValue)) {
						$this->intLastUserId = null;
						$this->objLastUser = null;
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
							throw new QCallerException('Unable to set an unsaved LastUser for this Thread');

						// Update Local Member Variables
						$this->objLastUser = $mixValue;
						$this->intLastUserId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Account':
					/**
					 * Sets the value for the Account object referenced by intAccountId (Not Null)
					 * @param Account $mixValue
					 * @return Account
					 */
					if (is_null($mixValue)) {
						$this->intAccountId = null;
						$this->objAccount = null;
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
							throw new QCallerException('Unable to set an unsaved Account for this Thread');

						// Update Local Member Variables
						$this->objAccount = $mixValue;
						$this->intAccountId = $mixValue->Id;

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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Thread"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="SenderUser" type="xsd1:User"/>';
			$strToReturn .= '<element name="ReceiverUser" type="xsd1:User"/>';
			$strToReturn .= '<element name="Subject" type="xsd:string"/>';
			$strToReturn .= '<element name="DateTime" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="LastUser" type="xsd1:User"/>';
			$strToReturn .= '<element name="Account" type="xsd1:Account"/>';
			$strToReturn .= '<element name="MessageTypeId" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Thread', $strComplexTypeArray)) {
				$strComplexTypeArray['Thread'] = Thread::GetSoapComplexTypeXml();
				User::AlterSoapComplexTypeArray($strComplexTypeArray);
				User::AlterSoapComplexTypeArray($strComplexTypeArray);
				User::AlterSoapComplexTypeArray($strComplexTypeArray);
				Account::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Thread::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Thread();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'SenderUser')) &&
				($objSoapObject->SenderUser))
				$objToReturn->SenderUser = User::GetObjectFromSoapObject($objSoapObject->SenderUser);
			if ((property_exists($objSoapObject, 'ReceiverUser')) &&
				($objSoapObject->ReceiverUser))
				$objToReturn->ReceiverUser = User::GetObjectFromSoapObject($objSoapObject->ReceiverUser);
			if (property_exists($objSoapObject, 'Subject'))
				$objToReturn->strSubject = $objSoapObject->Subject;
			if (property_exists($objSoapObject, 'DateTime'))
				$objToReturn->dttDateTime = new QDateTime($objSoapObject->DateTime);
			if ((property_exists($objSoapObject, 'LastUser')) &&
				($objSoapObject->LastUser))
				$objToReturn->LastUser = User::GetObjectFromSoapObject($objSoapObject->LastUser);
			if ((property_exists($objSoapObject, 'Account')) &&
				($objSoapObject->Account))
				$objToReturn->Account = Account::GetObjectFromSoapObject($objSoapObject->Account);
			if (property_exists($objSoapObject, 'MessageTypeId'))
				$objToReturn->strMessageTypeId = $objSoapObject->MessageTypeId;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Thread::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objSenderUser)
				$objObject->objSenderUser = User::GetSoapObjectFromObject($objObject->objSenderUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSenderUserId = null;
			if ($objObject->objReceiverUser)
				$objObject->objReceiverUser = User::GetSoapObjectFromObject($objObject->objReceiverUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReceiverUserId = null;
			if ($objObject->dttDateTime)
				$objObject->dttDateTime = $objObject->dttDateTime->qFormat(QDateTime::FormatSoap);
			if ($objObject->objLastUser)
				$objObject->objLastUser = User::GetSoapObjectFromObject($objObject->objLastUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLastUserId = null;
			if ($objObject->objAccount)
				$objObject->objAccount = Account::GetSoapObjectFromObject($objObject->objAccount, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAccountId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeThread extends QQNode {
		protected $strTableName = 'thread';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Thread';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'SenderUserId':
					return new QQNode('sender_user_id', 'SenderUserId', 'integer', $this);
				case 'SenderUser':
					return new QQNodeUser('sender_user_id', 'SenderUser', 'integer', $this);
				case 'ReceiverUserId':
					return new QQNode('receiver_user_id', 'ReceiverUserId', 'integer', $this);
				case 'ReceiverUser':
					return new QQNodeUser('receiver_user_id', 'ReceiverUser', 'integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'string', $this);
				case 'DateTime':
					return new QQNode('date_time', 'DateTime', 'QDateTime', $this);
				case 'LastUserId':
					return new QQNode('last_user_id', 'LastUserId', 'integer', $this);
				case 'LastUser':
					return new QQNodeUser('last_user_id', 'LastUser', 'integer', $this);
				case 'AccountId':
					return new QQNode('account_id', 'AccountId', 'integer', $this);
				case 'Account':
					return new QQNodeAccount('account_id', 'Account', 'integer', $this);
				case 'MessageTypeId':
					return new QQNode('message_type_id', 'MessageTypeId', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
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

	class QQReverseReferenceNodeThread extends QQReverseReferenceNode {
		protected $strTableName = 'thread';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Thread';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'SenderUserId':
					return new QQNode('sender_user_id', 'SenderUserId', 'integer', $this);
				case 'SenderUser':
					return new QQNodeUser('sender_user_id', 'SenderUser', 'integer', $this);
				case 'ReceiverUserId':
					return new QQNode('receiver_user_id', 'ReceiverUserId', 'integer', $this);
				case 'ReceiverUser':
					return new QQNodeUser('receiver_user_id', 'ReceiverUser', 'integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'string', $this);
				case 'DateTime':
					return new QQNode('date_time', 'DateTime', 'QDateTime', $this);
				case 'LastUserId':
					return new QQNode('last_user_id', 'LastUserId', 'integer', $this);
				case 'LastUser':
					return new QQNodeUser('last_user_id', 'LastUser', 'integer', $this);
				case 'AccountId':
					return new QQNode('account_id', 'AccountId', 'integer', $this);
				case 'Account':
					return new QQNodeAccount('account_id', 'Account', 'integer', $this);
				case 'MessageTypeId':
					return new QQNode('message_type_id', 'MessageTypeId', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
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