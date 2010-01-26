<?php
	/**
	 * The abstract TargetGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Target subclass which
	 * extends this TargetGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Target class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $UserId the value for intUserId (PK)
	 * @property integer $AccountId the value for intAccountId (PK)
	 * @property-read string $Datetimestamp the value for strDatetimestamp (Read-Only Timestamp)
	 * @property User $User the value for the User object referenced by intUserId (PK)
	 * @property Account $Account the value for the Account object referenced by intAccountId (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TargetGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column target.User_id
		 * @var integer intUserId
		 */
		protected $intUserId;
		const UserIdDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intUserId;
		 */
		protected $__intUserId;

		/**
		 * Protected member variable that maps to the database PK column target.Account_id
		 * @var integer intAccountId
		 */
		protected $intAccountId;
		const AccountIdDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intAccountId;
		 */
		protected $__intAccountId;

		/**
		 * Protected member variable that maps to the database column target.datetimestamp
		 * @var string strDatetimestamp
		 */
		protected $strDatetimestamp;
		const DatetimestampDefault = null;


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
		 * in the database column target.User_id.
		 *
		 * NOTE: Always use the User property getter to correctly retrieve this User object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var User objUser
		 */
		protected $objUser;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column target.Account_id.
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
		 * Load a Target from PK Info
		 * @param integer $intUserId
		 * @param integer $intAccountId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Target
		 */
		public static function Load($intUserId, $intAccountId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Target::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Target()->UserId, $intUserId),
					QQ::Equal(QQN::Target()->AccountId, $intAccountId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Targets
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Target[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Target::QueryArray to perform the LoadAll query
			try {
				return Target::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Targets
		 * @return int
		 */
		public static function CountAll() {
			// Call Target::QueryCount to perform the CountAll query
			return Target::QueryCount(QQ::All());
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
			$objDatabase = Target::GetDatabase();

			// Create/Build out the QueryBuilder object with Target-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'target');
			Target::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('target');

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
		 * Static Qcubed Query method to query for a single Target object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Target the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Target::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Target object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Target::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Target::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Target objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Target[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Target::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Target::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Target objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Target::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Target::GetDatabase();

			$strQuery = Target::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/target', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Target::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Target
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'target';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'User_id', $strAliasPrefix . 'User_id');
			$objBuilder->AddSelectItem($strTableName, 'Account_id', $strAliasPrefix . 'Account_id');
			$objBuilder->AddSelectItem($strTableName, 'datetimestamp', $strAliasPrefix . 'datetimestamp');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Target from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Target::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Target
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Target object
			$objToReturn = new Target();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'User_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'User_id'] : $strAliasPrefix . 'User_id';
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'Account_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Account_id'] : $strAliasPrefix . 'Account_id';
			$objToReturn->intAccountId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intAccountId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'datetimestamp', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'datetimestamp'] : $strAliasPrefix . 'datetimestamp';
			$objToReturn->strDatetimestamp = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->UserId != $objPreviousItem->UserId) {
						continue;
					}
					if ($objToReturn->AccountId != $objPreviousItem->AccountId) {
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
				$strAliasPrefix = 'target__';

			// Check for User Early Binding
			$strAlias = $strAliasPrefix . 'User_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUser = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'User_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Account Early Binding
			$strAlias = $strAliasPrefix . 'Account_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAccount = Account::InstantiateDbRow($objDbRow, $strAliasPrefix . 'Account_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Targets from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Target[]
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
					$objItem = Target::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Target::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Target object,
		 * by UserId, AccountId Index(es)
		 * @param integer $intUserId
		 * @param integer $intAccountId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Target
		*/
		public static function LoadByUserIdAccountId($intUserId, $intAccountId, $objOptionalClauses = null) {
			return Target::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Target()->UserId, $intUserId),
					QQ::Equal(QQN::Target()->AccountId, $intAccountId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Target objects,
		 * by AccountId Index(es)
		 * @param integer $intAccountId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Target[]
		*/
		public static function LoadArrayByAccountId($intAccountId, $objOptionalClauses = null) {
			// Call Target::QueryArray to perform the LoadArrayByAccountId query
			try {
				return Target::QueryArray(
					QQ::Equal(QQN::Target()->AccountId, $intAccountId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Targets
		 * by AccountId Index(es)
		 * @param integer $intAccountId
		 * @return int
		*/
		public static function CountByAccountId($intAccountId) {
			// Call Target::QueryCount to perform the CountByAccountId query
			return Target::QueryCount(
				QQ::Equal(QQN::Target()->AccountId, $intAccountId)
			);
		}
			
		/**
		 * Load an array of Target objects,
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Target[]
		*/
		public static function LoadArrayByUserId($intUserId, $objOptionalClauses = null) {
			// Call Target::QueryArray to perform the LoadArrayByUserId query
			try {
				return Target::QueryArray(
					QQ::Equal(QQN::Target()->UserId, $intUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Targets
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @return int
		*/
		public static function CountByUserId($intUserId) {
			// Call Target::QueryCount to perform the CountByUserId query
			return Target::QueryCount(
				QQ::Equal(QQN::Target()->UserId, $intUserId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Target
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Target::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `target` (
							`User_id`,
							`Account_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intUserId) . ',
							' . $objDatabase->SqlVariable($this->intAccountId) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)
					if (!$blnForceUpdate) {
						// Perform the Optimistic Locking check
						$objResult = $objDatabase->Query('
							SELECT
								`datetimestamp`
							FROM
								`target`
							WHERE
								`User_id` = ' . $objDatabase->SqlVariable($this->__intUserId) . ' AND
								`Account_id` = ' . $objDatabase->SqlVariable($this->__intAccountId) . '
						');
						
						$objRow = $objResult->FetchArray();
						if ($objRow[0] != $this->strDatetimestamp)
							throw new QOptimisticLockingException('Target');
					}

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`target`
						SET
							`User_id` = ' . $objDatabase->SqlVariable($this->intUserId) . ',
							`Account_id` = ' . $objDatabase->SqlVariable($this->intAccountId) . '
						WHERE
							`User_id` = ' . $objDatabase->SqlVariable($this->__intUserId) . ' AND
							`Account_id` = ' . $objDatabase->SqlVariable($this->__intAccountId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intUserId = $this->intUserId;
			$this->__intAccountId = $this->intAccountId;

			// Update Local Timestamp
			$objResult = $objDatabase->Query('
				SELECT
					`datetimestamp`
				FROM
					`target`
				WHERE
					`User_id` = ' . $objDatabase->SqlVariable($this->__intUserId) . ' AND
					`Account_id` = ' . $objDatabase->SqlVariable($this->__intAccountId) . '
			');
						
			$objRow = $objResult->FetchArray();
			$this->strDatetimestamp = $objRow[0];

			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this Target
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intUserId)) || (is_null($this->intAccountId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Target with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Target::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`target`
				WHERE
					`User_id` = ' . $objDatabase->SqlVariable($this->intUserId) . ' AND
					`Account_id` = ' . $objDatabase->SqlVariable($this->intAccountId) . '');
		}

		/**
		 * Delete all Targets
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Target::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`target`');
		}

		/**
		 * Truncate target table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Target::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `target`');
		}

		/**
		 * Reload this Target from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Target object.');

			// Reload the Object
			$objReloaded = Target::Load($this->intUserId, $this->intAccountId);

			// Update $this's local variables to match
			$this->UserId = $objReloaded->UserId;
			$this->__intUserId = $this->intUserId;
			$this->AccountId = $objReloaded->AccountId;
			$this->__intAccountId = $this->intAccountId;
			$this->strDatetimestamp = $objReloaded->strDatetimestamp;
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
				case 'UserId':
					/**
					 * Gets the value for intUserId (PK)
					 * @return integer
					 */
					return $this->intUserId;

				case 'AccountId':
					/**
					 * Gets the value for intAccountId (PK)
					 * @return integer
					 */
					return $this->intAccountId;

				case 'Datetimestamp':
					/**
					 * Gets the value for strDatetimestamp (Read-Only Timestamp)
					 * @return string
					 */
					return $this->strDatetimestamp;


				///////////////////
				// Member Objects
				///////////////////
				case 'User':
					/**
					 * Gets the value for the User object referenced by intUserId (PK)
					 * @return User
					 */
					try {
						if ((!$this->objUser) && (!is_null($this->intUserId)))
							$this->objUser = User::Load($this->intUserId);
						return $this->objUser;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Account':
					/**
					 * Gets the value for the Account object referenced by intAccountId (PK)
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
				case 'UserId':
					/**
					 * Sets the value for intUserId (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objUser = null;
						return ($this->intUserId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AccountId':
					/**
					 * Sets the value for intAccountId (PK)
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


				///////////////////
				// Member Objects
				///////////////////
				case 'User':
					/**
					 * Sets the value for the User object referenced by intUserId (PK)
					 * @param User $mixValue
					 * @return User
					 */
					if (is_null($mixValue)) {
						$this->intUserId = null;
						$this->objUser = null;
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
							throw new QCallerException('Unable to set an unsaved User for this Target');

						// Update Local Member Variables
						$this->objUser = $mixValue;
						$this->intUserId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Account':
					/**
					 * Sets the value for the Account object referenced by intAccountId (PK)
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
							throw new QCallerException('Unable to set an unsaved Account for this Target');

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
			$strToReturn = '<complexType name="Target"><sequence>';
			$strToReturn .= '<element name="User" type="xsd1:User"/>';
			$strToReturn .= '<element name="Account" type="xsd1:Account"/>';
			$strToReturn .= '<element name="Datetimestamp" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Target', $strComplexTypeArray)) {
				$strComplexTypeArray['Target'] = Target::GetSoapComplexTypeXml();
				User::AlterSoapComplexTypeArray($strComplexTypeArray);
				Account::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Target::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Target();
			if ((property_exists($objSoapObject, 'User')) &&
				($objSoapObject->User))
				$objToReturn->User = User::GetObjectFromSoapObject($objSoapObject->User);
			if ((property_exists($objSoapObject, 'Account')) &&
				($objSoapObject->Account))
				$objToReturn->Account = Account::GetObjectFromSoapObject($objSoapObject->Account);
			if (property_exists($objSoapObject, 'Datetimestamp'))
				$objToReturn->strDatetimestamp = $objSoapObject->Datetimestamp;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Target::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objUser)
				$objObject->objUser = User::GetSoapObjectFromObject($objObject->objUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUserId = null;
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

	class QQNodeTarget extends QQNode {
		protected $strTableName = 'target';
		protected $strPrimaryKey = 'User_id';
		protected $strClassName = 'Target';
		public function __get($strName) {
			switch ($strName) {
				case 'UserId':
					return new QQNode('User_id', 'UserId', 'integer', $this);
				case 'User':
					return new QQNodeUser('User_id', 'User', 'integer', $this);
				case 'AccountId':
					return new QQNode('Account_id', 'AccountId', 'integer', $this);
				case 'Account':
					return new QQNodeAccount('Account_id', 'Account', 'integer', $this);
				case 'Datetimestamp':
					return new QQNode('datetimestamp', 'Datetimestamp', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNodeUser('User_id', 'UserId', 'integer', $this);
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

	class QQReverseReferenceNodeTarget extends QQReverseReferenceNode {
		protected $strTableName = 'target';
		protected $strPrimaryKey = 'User_id';
		protected $strClassName = 'Target';
		public function __get($strName) {
			switch ($strName) {
				case 'UserId':
					return new QQNode('User_id', 'UserId', 'integer', $this);
				case 'User':
					return new QQNodeUser('User_id', 'User', 'integer', $this);
				case 'AccountId':
					return new QQNode('Account_id', 'AccountId', 'integer', $this);
				case 'Account':
					return new QQNodeAccount('Account_id', 'Account', 'integer', $this);
				case 'Datetimestamp':
					return new QQNode('datetimestamp', 'Datetimestamp', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNodeUser('User_id', 'UserId', 'integer', $this);
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