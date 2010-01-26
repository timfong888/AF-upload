<?php
	/**
	 * The abstract AccountGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Account subclass which
	 * extends this AccountGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Account class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property string $Logo the value for strLogo 
	 * @property string $Url the value for strUrl 
	 * @property-read Offer $_Offer the value for the private _objOffer (Read-Only) if set due to an expansion on the offer.account_id reverse relationship
	 * @property-read Offer[] $_OfferArray the value for the private _objOfferArray (Read-Only) if set due to an ExpandAsArray on the offer.account_id reverse relationship
	 * @property-read Target $_TargetAsAccount the value for the private _objTargetAsAccount (Read-Only) if set due to an expansion on the target.Account_id reverse relationship
	 * @property-read Target[] $_TargetAsAccountArray the value for the private _objTargetAsAccountArray (Read-Only) if set due to an ExpandAsArray on the target.Account_id reverse relationship
	 * @property-read Thread $_Thread the value for the private _objThread (Read-Only) if set due to an expansion on the thread.account_id reverse relationship
	 * @property-read Thread[] $_ThreadArray the value for the private _objThreadArray (Read-Only) if set due to an ExpandAsArray on the thread.account_id reverse relationship
	 * @property-read User $_UserAsAccountId the value for the private _objUserAsAccountId (Read-Only) if set due to an expansion on the user.Account_Id reverse relationship
	 * @property-read User[] $_UserAsAccountIdArray the value for the private _objUserAsAccountIdArray (Read-Only) if set due to an ExpandAsArray on the user.Account_Id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AccountGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column account.Id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column account.Name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column account.Logo
		 * @var string strLogo
		 */
		protected $strLogo;
		const LogoMaxLength = 128;
		const LogoDefault = null;


		/**
		 * Protected member variable that maps to the database column account.Url
		 * @var string strUrl
		 */
		protected $strUrl;
		const UrlMaxLength = 128;
		const UrlDefault = null;


		/**
		 * Private member variable that stores a reference to a single Offer object
		 * (of type Offer), if this Account object was restored with
		 * an expansion on the offer association table.
		 * @var Offer _objOffer;
		 */
		private $_objOffer;

		/**
		 * Private member variable that stores a reference to an array of Offer objects
		 * (of type Offer[]), if this Account object was restored with
		 * an ExpandAsArray on the offer association table.
		 * @var Offer[] _objOfferArray;
		 */
		private $_objOfferArray = array();

		/**
		 * Private member variable that stores a reference to a single TargetAsAccount object
		 * (of type Target), if this Account object was restored with
		 * an expansion on the target association table.
		 * @var Target _objTargetAsAccount;
		 */
		private $_objTargetAsAccount;

		/**
		 * Private member variable that stores a reference to an array of TargetAsAccount objects
		 * (of type Target[]), if this Account object was restored with
		 * an ExpandAsArray on the target association table.
		 * @var Target[] _objTargetAsAccountArray;
		 */
		private $_objTargetAsAccountArray = array();

		/**
		 * Private member variable that stores a reference to a single Thread object
		 * (of type Thread), if this Account object was restored with
		 * an expansion on the thread association table.
		 * @var Thread _objThread;
		 */
		private $_objThread;

		/**
		 * Private member variable that stores a reference to an array of Thread objects
		 * (of type Thread[]), if this Account object was restored with
		 * an ExpandAsArray on the thread association table.
		 * @var Thread[] _objThreadArray;
		 */
		private $_objThreadArray = array();

		/**
		 * Private member variable that stores a reference to a single UserAsAccountId object
		 * (of type User), if this Account object was restored with
		 * an expansion on the user association table.
		 * @var User _objUserAsAccountId;
		 */
		private $_objUserAsAccountId;

		/**
		 * Private member variable that stores a reference to an array of UserAsAccountId objects
		 * (of type User[]), if this Account object was restored with
		 * an ExpandAsArray on the user association table.
		 * @var User[] _objUserAsAccountIdArray;
		 */
		private $_objUserAsAccountIdArray = array();

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
		 * Load a Account from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Account
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Account::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Account()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Accounts
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Account[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Account::QueryArray to perform the LoadAll query
			try {
				return Account::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Accounts
		 * @return int
		 */
		public static function CountAll() {
			// Call Account::QueryCount to perform the CountAll query
			return Account::QueryCount(QQ::All());
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
			$objDatabase = Account::GetDatabase();

			// Create/Build out the QueryBuilder object with Account-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'account');
			Account::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('account');

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
		 * Static Qcubed Query method to query for a single Account object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Account the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Account object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Account::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Account::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Account objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Account[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Account::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Account objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Account::GetDatabase();

			$strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/account', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Account::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Account
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'account';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'Id', $strAliasPrefix . 'Id');
			$objBuilder->AddSelectItem($strTableName, 'Name', $strAliasPrefix . 'Name');
			$objBuilder->AddSelectItem($strTableName, 'Logo', $strAliasPrefix . 'Logo');
			$objBuilder->AddSelectItem($strTableName, 'Url', $strAliasPrefix . 'Url');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Account from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Account::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Account
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
							$strAliasPrefix = 'account__';


						// Expanding reverse references: Offer
						$strAlias = $strAliasPrefix . 'offer__Id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objOfferArray)) {
								$objPreviousChildItems = $objPreviousItem->_objOfferArray;
								$objChildItem = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'offer__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objOfferArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objOfferArray[] = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'offer__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TargetAsAccount
						$strAlias = $strAliasPrefix . 'targetasaccount__User_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTargetAsAccountArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTargetAsAccountArray;
								$objChildItem = Target::InstantiateDbRow($objDbRow, $strAliasPrefix . 'targetasaccount__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTargetAsAccountArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTargetAsAccountArray[] = Target::InstantiateDbRow($objDbRow, $strAliasPrefix . 'targetasaccount__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Thread
						$strAlias = $strAliasPrefix . 'thread__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objThreadArray)) {
								$objPreviousChildItems = $objPreviousItem->_objThreadArray;
								$objChildItem = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'thread__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objThreadArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objThreadArray[] = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'thread__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: UserAsAccountId
						$strAlias = $strAliasPrefix . 'userasaccountid__Id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objUserAsAccountIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objUserAsAccountIdArray;
								$objChildItem = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasaccountid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objUserAsAccountIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objUserAsAccountIdArray[] = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasaccountid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'account__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Account object
			$objToReturn = new Account();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'Id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Id'] : $strAliasPrefix . 'Id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'Name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Name'] : $strAliasPrefix . 'Name';
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Logo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Logo'] : $strAliasPrefix . 'Logo';
			$objToReturn->strLogo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Url', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Url'] : $strAliasPrefix . 'Url';
			$objToReturn->strUrl = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					if (array_diff($objPreviousItem->_objOfferArray, $objToReturn->_objOfferArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objTargetAsAccountArray, $objToReturn->_objTargetAsAccountArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objThreadArray, $objToReturn->_objThreadArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objUserAsAccountIdArray, $objToReturn->_objUserAsAccountIdArray) != null) {
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
				$strAliasPrefix = 'account__';




			// Check for Offer Virtual Binding
			$strAlias = $strAliasPrefix . 'offer__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objOfferArray[] = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'offer__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objOffer = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'offer__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TargetAsAccount Virtual Binding
			$strAlias = $strAliasPrefix . 'targetasaccount__User_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objTargetAsAccountArray[] = Target::InstantiateDbRow($objDbRow, $strAliasPrefix . 'targetasaccount__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTargetAsAccount = Target::InstantiateDbRow($objDbRow, $strAliasPrefix . 'targetasaccount__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Thread Virtual Binding
			$strAlias = $strAliasPrefix . 'thread__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objThreadArray[] = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'thread__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objThread = Thread::InstantiateDbRow($objDbRow, $strAliasPrefix . 'thread__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for UserAsAccountId Virtual Binding
			$strAlias = $strAliasPrefix . 'userasaccountid__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objUserAsAccountIdArray[] = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasaccountid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objUserAsAccountId = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasaccountid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Accounts from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Account[]
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
					$objItem = Account::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Account::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Account object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Account
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Account::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Account()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single Account object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Account
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return Account::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Account()->Name, $strName)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Account
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `account` (
							`Name`,
							`Logo`,
							`Url`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strLogo) . ',
							' . $objDatabase->SqlVariable($this->strUrl) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('account', 'Id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`account`
						SET
							`Name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`Logo` = ' . $objDatabase->SqlVariable($this->strLogo) . ',
							`Url` = ' . $objDatabase->SqlVariable($this->strUrl) . '
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
		 * Delete this Account
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Account with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`account`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Accounts
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`account`');
		}

		/**
		 * Truncate account table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `account`');
		}

		/**
		 * Reload this Account from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Account object.');

			// Reload the Object
			$objReloaded = Account::Load($this->intId);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strLogo = $objReloaded->strLogo;
			$this->strUrl = $objReloaded->strUrl;
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

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;

				case 'Logo':
					/**
					 * Gets the value for strLogo 
					 * @return string
					 */
					return $this->strLogo;

				case 'Url':
					/**
					 * Gets the value for strUrl 
					 * @return string
					 */
					return $this->strUrl;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Offer':
					/**
					 * Gets the value for the private _objOffer (Read-Only)
					 * if set due to an expansion on the offer.account_id reverse relationship
					 * @return Offer
					 */
					return $this->_objOffer;

				case '_OfferArray':
					/**
					 * Gets the value for the private _objOfferArray (Read-Only)
					 * if set due to an ExpandAsArray on the offer.account_id reverse relationship
					 * @return Offer[]
					 */
					return (array) $this->_objOfferArray;

				case '_TargetAsAccount':
					/**
					 * Gets the value for the private _objTargetAsAccount (Read-Only)
					 * if set due to an expansion on the target.Account_id reverse relationship
					 * @return Target
					 */
					return $this->_objTargetAsAccount;

				case '_TargetAsAccountArray':
					/**
					 * Gets the value for the private _objTargetAsAccountArray (Read-Only)
					 * if set due to an ExpandAsArray on the target.Account_id reverse relationship
					 * @return Target[]
					 */
					return (array) $this->_objTargetAsAccountArray;

				case '_Thread':
					/**
					 * Gets the value for the private _objThread (Read-Only)
					 * if set due to an expansion on the thread.account_id reverse relationship
					 * @return Thread
					 */
					return $this->_objThread;

				case '_ThreadArray':
					/**
					 * Gets the value for the private _objThreadArray (Read-Only)
					 * if set due to an ExpandAsArray on the thread.account_id reverse relationship
					 * @return Thread[]
					 */
					return (array) $this->_objThreadArray;

				case '_UserAsAccountId':
					/**
					 * Gets the value for the private _objUserAsAccountId (Read-Only)
					 * if set due to an expansion on the user.Account_Id reverse relationship
					 * @return User
					 */
					return $this->_objUserAsAccountId;

				case '_UserAsAccountIdArray':
					/**
					 * Gets the value for the private _objUserAsAccountIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the user.Account_Id reverse relationship
					 * @return User[]
					 */
					return (array) $this->_objUserAsAccountIdArray;


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
				case 'Name':
					/**
					 * Sets the value for strName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Logo':
					/**
					 * Sets the value for strLogo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLogo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Url':
					/**
					 * Sets the value for strUrl 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUrl = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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

			
		
		// Related Objects' Methods for Offer
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Offers as an array of Offer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer[]
		*/ 
		public function GetOfferArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Offer::LoadArrayByAccountId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Offers
		 * @return int
		*/ 
		public function CountOffers() {
			if ((is_null($this->intId)))
				return 0;

			return Offer::CountByAccountId($this->intId);
		}

		/**
		 * Associates a Offer
		 * @param Offer $objOffer
		 * @return void
		*/ 
		public function AssociateOffer(Offer $objOffer) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOffer on this unsaved Account.');
			if ((is_null($objOffer->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOffer on this Account with an unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`offer`
				SET
					`account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objOffer->Id) . '
			');
		}

		/**
		 * Unassociates a Offer
		 * @param Offer $objOffer
		 * @return void
		*/ 
		public function UnassociateOffer(Offer $objOffer) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOffer on this unsaved Account.');
			if ((is_null($objOffer->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOffer on this Account with an unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`offer`
				SET
					`account_id` = null
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objOffer->Id) . ' AND
					`account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all Offers
		 * @return void
		*/ 
		public function UnassociateAllOffers() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOffer on this unsaved Account.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`offer`
				SET
					`account_id` = null
				WHERE
					`account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated Offer
		 * @param Offer $objOffer
		 * @return void
		*/ 
		public function DeleteAssociatedOffer(Offer $objOffer) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOffer on this unsaved Account.');
			if ((is_null($objOffer->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOffer on this Account with an unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`offer`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objOffer->Id) . ' AND
					`account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated Offers
		 * @return void
		*/ 
		public function DeleteAllOffers() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOffer on this unsaved Account.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`offer`
				WHERE
					`account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for TargetAsAccount
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TargetsAsAccount as an array of Target objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Target[]
		*/ 
		public function GetTargetAsAccountArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Target::LoadArrayByAccountId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TargetsAsAccount
		 * @return int
		*/ 
		public function CountTargetsAsAccount() {
			if ((is_null($this->intId)))
				return 0;

			return Target::CountByAccountId($this->intId);
		}

		/**
		 * Associates a TargetAsAccount
		 * @param Target $objTarget
		 * @return void
		*/ 
		public function AssociateTargetAsAccount(Target $objTarget) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTargetAsAccount on this unsaved Account.');
			if ((is_null($objTarget->UserId)) || (is_null($objTarget->AccountId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTargetAsAccount on this Account with an unsaved Target.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`target`
				SET
					`Account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`User_id` = ' . $objDatabase->SqlVariable($objTarget->UserId) . ' AND
					`Account_id` = ' . $objDatabase->SqlVariable($objTarget->AccountId) . '
			');
		}

		/**
		 * Unassociates a TargetAsAccount
		 * @param Target $objTarget
		 * @return void
		*/ 
		public function UnassociateTargetAsAccount(Target $objTarget) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsAccount on this unsaved Account.');
			if ((is_null($objTarget->UserId)) || (is_null($objTarget->AccountId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsAccount on this Account with an unsaved Target.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`target`
				SET
					`Account_id` = null
				WHERE
					`User_id` = ' . $objDatabase->SqlVariable($objTarget->UserId) . ' AND
					`Account_id` = ' . $objDatabase->SqlVariable($objTarget->AccountId) . ' AND
					`Account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all TargetsAsAccount
		 * @return void
		*/ 
		public function UnassociateAllTargetsAsAccount() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsAccount on this unsaved Account.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`target`
				SET
					`Account_id` = null
				WHERE
					`Account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated TargetAsAccount
		 * @param Target $objTarget
		 * @return void
		*/ 
		public function DeleteAssociatedTargetAsAccount(Target $objTarget) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsAccount on this unsaved Account.');
			if ((is_null($objTarget->UserId)) || (is_null($objTarget->AccountId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsAccount on this Account with an unsaved Target.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`target`
				WHERE
					`User_id` = ' . $objDatabase->SqlVariable($objTarget->UserId) . ' AND
					`Account_id` = ' . $objDatabase->SqlVariable($objTarget->AccountId) . ' AND
					`Account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated TargetsAsAccount
		 * @return void
		*/ 
		public function DeleteAllTargetsAsAccount() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTargetAsAccount on this unsaved Account.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`target`
				WHERE
					`Account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for Thread
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Threads as an array of Thread objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Thread[]
		*/ 
		public function GetThreadArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Thread::LoadArrayByAccountId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Threads
		 * @return int
		*/ 
		public function CountThreads() {
			if ((is_null($this->intId)))
				return 0;

			return Thread::CountByAccountId($this->intId);
		}

		/**
		 * Associates a Thread
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function AssociateThread(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateThread on this unsaved Account.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateThread on this Account with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . '
			');
		}

		/**
		 * Unassociates a Thread
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function UnassociateThread(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThread on this unsaved Account.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThread on this Account with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`account_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . ' AND
					`account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all Threads
		 * @return void
		*/ 
		public function UnassociateAllThreads() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThread on this unsaved Account.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`thread`
				SET
					`account_id` = null
				WHERE
					`account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated Thread
		 * @param Thread $objThread
		 * @return void
		*/ 
		public function DeleteAssociatedThread(Thread $objThread) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThread on this unsaved Account.');
			if ((is_null($objThread->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThread on this Account with an unsaved Thread.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`thread`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objThread->Id) . ' AND
					`account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated Threads
		 * @return void
		*/ 
		public function DeleteAllThreads() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateThread on this unsaved Account.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`thread`
				WHERE
					`account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for UserAsAccountId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated UsersAsAccountId as an array of User objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		*/ 
		public function GetUserAsAccountIdArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return User::LoadArrayByAccountId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated UsersAsAccountId
		 * @return int
		*/ 
		public function CountUsersAsAccountId() {
			if ((is_null($this->intId)))
				return 0;

			return User::CountByAccountId($this->intId);
		}

		/**
		 * Associates a UserAsAccountId
		 * @param User $objUser
		 * @return void
		*/ 
		public function AssociateUserAsAccountId(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUserAsAccountId on this unsaved Account.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUserAsAccountId on this Account with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`user`
				SET
					`Account_Id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objUser->Id) . '
			');
		}

		/**
		 * Unassociates a UserAsAccountId
		 * @param User $objUser
		 * @return void
		*/ 
		public function UnassociateUserAsAccountId(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsAccountId on this unsaved Account.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsAccountId on this Account with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`user`
				SET
					`Account_Id` = null
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objUser->Id) . ' AND
					`Account_Id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all UsersAsAccountId
		 * @return void
		*/ 
		public function UnassociateAllUsersAsAccountId() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsAccountId on this unsaved Account.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`user`
				SET
					`Account_Id` = null
				WHERE
					`Account_Id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated UserAsAccountId
		 * @param User $objUser
		 * @return void
		*/ 
		public function DeleteAssociatedUserAsAccountId(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsAccountId on this unsaved Account.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsAccountId on this Account with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objUser->Id) . ' AND
					`Account_Id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated UsersAsAccountId
		 * @return void
		*/ 
		public function DeleteAllUsersAsAccountId() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsAccountId on this unsaved Account.');

			// Get the Database Object for this Class
			$objDatabase = Account::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`
				WHERE
					`Account_Id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Account"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Logo" type="xsd:string"/>';
			$strToReturn .= '<element name="Url" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Account', $strComplexTypeArray)) {
				$strComplexTypeArray['Account'] = Account::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Account::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Account();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Logo'))
				$objToReturn->strLogo = $objSoapObject->Logo;
			if (property_exists($objSoapObject, 'Url'))
				$objToReturn->strUrl = $objSoapObject->Url;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Account::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeAccount extends QQNode {
		protected $strTableName = 'account';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'Account';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('Id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('Name', 'Name', 'string', $this);
				case 'Logo':
					return new QQNode('Logo', 'Logo', 'string', $this);
				case 'Url':
					return new QQNode('Url', 'Url', 'string', $this);
				case 'Offer':
					return new QQReverseReferenceNodeOffer($this, 'offer', 'reverse_reference', 'account_id');
				case 'TargetAsAccount':
					return new QQReverseReferenceNodeTarget($this, 'targetasaccount', 'reverse_reference', 'Account_id');
				case 'Thread':
					return new QQReverseReferenceNodeThread($this, 'thread', 'reverse_reference', 'account_id');
				case 'UserAsAccountId':
					return new QQReverseReferenceNodeUser($this, 'userasaccountid', 'reverse_reference', 'Account_Id');

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

	class QQReverseReferenceNodeAccount extends QQReverseReferenceNode {
		protected $strTableName = 'account';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'Account';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('Id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('Name', 'Name', 'string', $this);
				case 'Logo':
					return new QQNode('Logo', 'Logo', 'string', $this);
				case 'Url':
					return new QQNode('Url', 'Url', 'string', $this);
				case 'Offer':
					return new QQReverseReferenceNodeOffer($this, 'offer', 'reverse_reference', 'account_id');
				case 'TargetAsAccount':
					return new QQReverseReferenceNodeTarget($this, 'targetasaccount', 'reverse_reference', 'Account_id');
				case 'Thread':
					return new QQReverseReferenceNodeThread($this, 'thread', 'reverse_reference', 'account_id');
				case 'UserAsAccountId':
					return new QQReverseReferenceNodeUser($this, 'userasaccountid', 'reverse_reference', 'Account_Id');

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