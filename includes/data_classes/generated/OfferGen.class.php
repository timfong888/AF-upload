<?php
	/**
	 * The abstract OfferGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Offer subclass which
	 * extends this OfferGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Offer class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property integer $UserOwnerId the value for intUserOwnerId (Not Null)
	 * @property integer $AccountId the value for intAccountId (Not Null)
	 * @property-read string $Timestamp the value for strTimestamp (Read-Only Timestamp)
	 * @property User $UserOwner the value for the User object referenced by intUserOwnerId (Not Null)
	 * @property Account $Account the value for the Account object referenced by intAccountId (Not Null)
	 * @property-read Contact $_Contact the value for the private _objContact (Read-Only) if set due to an expansion on the contact.offer_id reverse relationship
	 * @property-read Contact[] $_ContactArray the value for the private _objContactArray (Read-Only) if set due to an ExpandAsArray on the contact.offer_id reverse relationship
	 * @property-read Message $_Message the value for the private _objMessage (Read-Only) if set due to an expansion on the message.offer_id reverse relationship
	 * @property-read Message[] $_MessageArray the value for the private _objMessageArray (Read-Only) if set due to an ExpandAsArray on the message.offer_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class OfferGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column offer.Id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column offer.user_owner_id
		 * @var integer intUserOwnerId
		 */
		protected $intUserOwnerId;
		const UserOwnerIdDefault = null;


		/**
		 * Protected member variable that maps to the database column offer.account_id
		 * @var integer intAccountId
		 */
		protected $intAccountId;
		const AccountIdDefault = null;


		/**
		 * Protected member variable that maps to the database column offer.timestamp
		 * @var string strTimestamp
		 */
		protected $strTimestamp;
		const TimestampDefault = null;


		/**
		 * Private member variable that stores a reference to a single Contact object
		 * (of type Contact), if this Offer object was restored with
		 * an expansion on the contact association table.
		 * @var Contact _objContact;
		 */
		private $_objContact;

		/**
		 * Private member variable that stores a reference to an array of Contact objects
		 * (of type Contact[]), if this Offer object was restored with
		 * an ExpandAsArray on the contact association table.
		 * @var Contact[] _objContactArray;
		 */
		private $_objContactArray = array();

		/**
		 * Private member variable that stores a reference to a single Message object
		 * (of type Message), if this Offer object was restored with
		 * an expansion on the message association table.
		 * @var Message _objMessage;
		 */
		private $_objMessage;

		/**
		 * Private member variable that stores a reference to an array of Message objects
		 * (of type Message[]), if this Offer object was restored with
		 * an ExpandAsArray on the message association table.
		 * @var Message[] _objMessageArray;
		 */
		private $_objMessageArray = array();

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
		 * in the database column offer.user_owner_id.
		 *
		 * NOTE: Always use the UserOwner property getter to correctly retrieve this User object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var User objUserOwner
		 */
		protected $objUserOwner;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column offer.account_id.
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
		 * Load a Offer from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Offer::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Offer()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Offers
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Offer::QueryArray to perform the LoadAll query
			try {
				return Offer::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Offers
		 * @return int
		 */
		public static function CountAll() {
			// Call Offer::QueryCount to perform the CountAll query
			return Offer::QueryCount(QQ::All());
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
			$objDatabase = Offer::GetDatabase();

			// Create/Build out the QueryBuilder object with Offer-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'offer');
			Offer::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('offer');

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
		 * Static Qcubed Query method to query for a single Offer object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Offer the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Offer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Offer object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Offer::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Offer::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Offer objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Offer[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Offer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Offer::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Offer objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Offer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Offer::GetDatabase();

			$strQuery = Offer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/offer', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Offer::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Offer
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'offer';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'Id', $strAliasPrefix . 'Id');
			$objBuilder->AddSelectItem($strTableName, 'user_owner_id', $strAliasPrefix . 'user_owner_id');
			$objBuilder->AddSelectItem($strTableName, 'account_id', $strAliasPrefix . 'account_id');
			$objBuilder->AddSelectItem($strTableName, 'timestamp', $strAliasPrefix . 'timestamp');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Offer from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Offer::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Offer
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
							$strAliasPrefix = 'offer__';


						// Expanding reverse references: Contact
						$strAlias = $strAliasPrefix . 'contact__Id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objContactArray)) {
								$objPreviousChildItems = $objPreviousItem->_objContactArray;
								$objChildItem = Contact::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contact__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objContactArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objContactArray[] = Contact::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contact__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Message
						$strAlias = $strAliasPrefix . 'message__Id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMessageArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMessageArray;
								$objChildItem = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'message__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMessageArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMessageArray[] = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'message__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'offer__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Offer object
			$objToReturn = new Offer();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'Id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Id'] : $strAliasPrefix . 'Id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'user_owner_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'user_owner_id'] : $strAliasPrefix . 'user_owner_id';
			$objToReturn->intUserOwnerId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'account_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'account_id'] : $strAliasPrefix . 'account_id';
			$objToReturn->intAccountId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'timestamp', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'timestamp'] : $strAliasPrefix . 'timestamp';
			$objToReturn->strTimestamp = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					if (array_diff($objPreviousItem->_objContactArray, $objToReturn->_objContactArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objMessageArray, $objToReturn->_objMessageArray) != null) {
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
				$strAliasPrefix = 'offer__';

			// Check for UserOwner Early Binding
			$strAlias = $strAliasPrefix . 'user_owner_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUserOwner = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'user_owner_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Account Early Binding
			$strAlias = $strAliasPrefix . 'account_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAccount = Account::InstantiateDbRow($objDbRow, $strAliasPrefix . 'account_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for Contact Virtual Binding
			$strAlias = $strAliasPrefix . 'contact__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objContactArray[] = Contact::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contact__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objContact = Contact::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contact__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Message Virtual Binding
			$strAlias = $strAliasPrefix . 'message__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objMessageArray[] = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'message__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMessage = Message::InstantiateDbRow($objDbRow, $strAliasPrefix . 'message__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Offers from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Offer[]
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
					$objItem = Offer::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Offer::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Offer object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Offer::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Offer()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single Offer object,
		 * by UserOwnerId, AccountId Index(es)
		 * @param integer $intUserOwnerId
		 * @param integer $intAccountId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer
		*/
		public static function LoadByUserOwnerIdAccountId($intUserOwnerId, $intAccountId, $objOptionalClauses = null) {
			return Offer::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Offer()->UserOwnerId, $intUserOwnerId),
					QQ::Equal(QQN::Offer()->AccountId, $intAccountId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Offer objects,
		 * by AccountId Index(es)
		 * @param integer $intAccountId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer[]
		*/
		public static function LoadArrayByAccountId($intAccountId, $objOptionalClauses = null) {
			// Call Offer::QueryArray to perform the LoadArrayByAccountId query
			try {
				return Offer::QueryArray(
					QQ::Equal(QQN::Offer()->AccountId, $intAccountId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Offers
		 * by AccountId Index(es)
		 * @param integer $intAccountId
		 * @return int
		*/
		public static function CountByAccountId($intAccountId) {
			// Call Offer::QueryCount to perform the CountByAccountId query
			return Offer::QueryCount(
				QQ::Equal(QQN::Offer()->AccountId, $intAccountId)
			);
		}
			
		/**
		 * Load an array of Offer objects,
		 * by UserOwnerId Index(es)
		 * @param integer $intUserOwnerId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Offer[]
		*/
		public static function LoadArrayByUserOwnerId($intUserOwnerId, $objOptionalClauses = null) {
			// Call Offer::QueryArray to perform the LoadArrayByUserOwnerId query
			try {
				return Offer::QueryArray(
					QQ::Equal(QQN::Offer()->UserOwnerId, $intUserOwnerId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Offers
		 * by UserOwnerId Index(es)
		 * @param integer $intUserOwnerId
		 * @return int
		*/
		public static function CountByUserOwnerId($intUserOwnerId) {
			// Call Offer::QueryCount to perform the CountByUserOwnerId query
			return Offer::QueryCount(
				QQ::Equal(QQN::Offer()->UserOwnerId, $intUserOwnerId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Offer
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `offer` (
							`user_owner_id`,
							`account_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intUserOwnerId) . ',
							' . $objDatabase->SqlVariable($this->intAccountId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('offer', 'Id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)
					if (!$blnForceUpdate) {
						// Perform the Optimistic Locking check
						$objResult = $objDatabase->Query('
							SELECT
								`timestamp`
							FROM
								`offer`
							WHERE
								`Id` = ' . $objDatabase->SqlVariable($this->intId) . '
						');
						
						$objRow = $objResult->FetchArray();
						if ($objRow[0] != $this->strTimestamp)
							throw new QOptimisticLockingException('Offer');
					}

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`offer`
						SET
							`user_owner_id` = ' . $objDatabase->SqlVariable($this->intUserOwnerId) . ',
							`account_id` = ' . $objDatabase->SqlVariable($this->intAccountId) . '
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

			// Update Local Timestamp
			$objResult = $objDatabase->Query('
				SELECT
					`timestamp`
				FROM
					`offer`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
						
			$objRow = $objResult->FetchArray();
			$this->strTimestamp = $objRow[0];

			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this Offer
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Offer with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`offer`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Offers
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`offer`');
		}

		/**
		 * Truncate offer table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `offer`');
		}

		/**
		 * Reload this Offer from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Offer object.');

			// Reload the Object
			$objReloaded = Offer::Load($this->intId);

			// Update $this's local variables to match
			$this->UserOwnerId = $objReloaded->UserOwnerId;
			$this->AccountId = $objReloaded->AccountId;
			$this->strTimestamp = $objReloaded->strTimestamp;
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

				case 'UserOwnerId':
					/**
					 * Gets the value for intUserOwnerId (Not Null)
					 * @return integer
					 */
					return $this->intUserOwnerId;

				case 'AccountId':
					/**
					 * Gets the value for intAccountId (Not Null)
					 * @return integer
					 */
					return $this->intAccountId;

				case 'Timestamp':
					/**
					 * Gets the value for strTimestamp (Read-Only Timestamp)
					 * @return string
					 */
					return $this->strTimestamp;


				///////////////////
				// Member Objects
				///////////////////
				case 'UserOwner':
					/**
					 * Gets the value for the User object referenced by intUserOwnerId (Not Null)
					 * @return User
					 */
					try {
						if ((!$this->objUserOwner) && (!is_null($this->intUserOwnerId)))
							$this->objUserOwner = User::Load($this->intUserOwnerId);
						return $this->objUserOwner;
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

				case '_Contact':
					/**
					 * Gets the value for the private _objContact (Read-Only)
					 * if set due to an expansion on the contact.offer_id reverse relationship
					 * @return Contact
					 */
					return $this->_objContact;

				case '_ContactArray':
					/**
					 * Gets the value for the private _objContactArray (Read-Only)
					 * if set due to an ExpandAsArray on the contact.offer_id reverse relationship
					 * @return Contact[]
					 */
					return (array) $this->_objContactArray;

				case '_Message':
					/**
					 * Gets the value for the private _objMessage (Read-Only)
					 * if set due to an expansion on the message.offer_id reverse relationship
					 * @return Message
					 */
					return $this->_objMessage;

				case '_MessageArray':
					/**
					 * Gets the value for the private _objMessageArray (Read-Only)
					 * if set due to an ExpandAsArray on the message.offer_id reverse relationship
					 * @return Message[]
					 */
					return (array) $this->_objMessageArray;


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
				case 'UserOwnerId':
					/**
					 * Sets the value for intUserOwnerId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objUserOwner = null;
						return ($this->intUserOwnerId = QType::Cast($mixValue, QType::Integer));
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


				///////////////////
				// Member Objects
				///////////////////
				case 'UserOwner':
					/**
					 * Sets the value for the User object referenced by intUserOwnerId (Not Null)
					 * @param User $mixValue
					 * @return User
					 */
					if (is_null($mixValue)) {
						$this->intUserOwnerId = null;
						$this->objUserOwner = null;
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
							throw new QCallerException('Unable to set an unsaved UserOwner for this Offer');

						// Update Local Member Variables
						$this->objUserOwner = $mixValue;
						$this->intUserOwnerId = $mixValue->Id;

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
							throw new QCallerException('Unable to set an unsaved Account for this Offer');

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

			
		
		// Related Objects' Methods for Contact
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Contacts as an array of Contact objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Contact[]
		*/ 
		public function GetContactArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Contact::LoadArrayByOfferId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Contacts
		 * @return int
		*/ 
		public function CountContacts() {
			if ((is_null($this->intId)))
				return 0;

			return Contact::CountByOfferId($this->intId);
		}

		/**
		 * Associates a Contact
		 * @param Contact $objContact
		 * @return void
		*/ 
		public function AssociateContact(Contact $objContact) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateContact on this unsaved Offer.');
			if ((is_null($objContact->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateContact on this Offer with an unsaved Contact.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`contact`
				SET
					`offer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objContact->Id) . '
			');
		}

		/**
		 * Unassociates a Contact
		 * @param Contact $objContact
		 * @return void
		*/ 
		public function UnassociateContact(Contact $objContact) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContact on this unsaved Offer.');
			if ((is_null($objContact->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContact on this Offer with an unsaved Contact.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`contact`
				SET
					`offer_id` = null
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objContact->Id) . ' AND
					`offer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all Contacts
		 * @return void
		*/ 
		public function UnassociateAllContacts() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContact on this unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`contact`
				SET
					`offer_id` = null
				WHERE
					`offer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated Contact
		 * @param Contact $objContact
		 * @return void
		*/ 
		public function DeleteAssociatedContact(Contact $objContact) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContact on this unsaved Offer.');
			if ((is_null($objContact->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContact on this Offer with an unsaved Contact.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`contact`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objContact->Id) . ' AND
					`offer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated Contacts
		 * @return void
		*/ 
		public function DeleteAllContacts() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContact on this unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`contact`
				WHERE
					`offer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for Message
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Messages as an array of Message objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message[]
		*/ 
		public function GetMessageArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Message::LoadArrayByOfferId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Messages
		 * @return int
		*/ 
		public function CountMessages() {
			if ((is_null($this->intId)))
				return 0;

			return Message::CountByOfferId($this->intId);
		}

		/**
		 * Associates a Message
		 * @param Message $objMessage
		 * @return void
		*/ 
		public function AssociateMessage(Message $objMessage) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMessage on this unsaved Offer.');
			if ((is_null($objMessage->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMessage on this Offer with an unsaved Message.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`message`
				SET
					`offer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objMessage->Id) . '
			');
		}

		/**
		 * Unassociates a Message
		 * @param Message $objMessage
		 * @return void
		*/ 
		public function UnassociateMessage(Message $objMessage) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessage on this unsaved Offer.');
			if ((is_null($objMessage->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessage on this Offer with an unsaved Message.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`message`
				SET
					`offer_id` = null
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objMessage->Id) . ' AND
					`offer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all Messages
		 * @return void
		*/ 
		public function UnassociateAllMessages() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessage on this unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`message`
				SET
					`offer_id` = null
				WHERE
					`offer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated Message
		 * @param Message $objMessage
		 * @return void
		*/ 
		public function DeleteAssociatedMessage(Message $objMessage) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessage on this unsaved Offer.');
			if ((is_null($objMessage->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessage on this Offer with an unsaved Message.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`message`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objMessage->Id) . ' AND
					`offer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated Messages
		 * @return void
		*/ 
		public function DeleteAllMessages() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMessage on this unsaved Offer.');

			// Get the Database Object for this Class
			$objDatabase = Offer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`message`
				WHERE
					`offer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Offer"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="UserOwner" type="xsd1:User"/>';
			$strToReturn .= '<element name="Account" type="xsd1:Account"/>';
			$strToReturn .= '<element name="Timestamp" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Offer', $strComplexTypeArray)) {
				$strComplexTypeArray['Offer'] = Offer::GetSoapComplexTypeXml();
				User::AlterSoapComplexTypeArray($strComplexTypeArray);
				Account::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Offer::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Offer();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'UserOwner')) &&
				($objSoapObject->UserOwner))
				$objToReturn->UserOwner = User::GetObjectFromSoapObject($objSoapObject->UserOwner);
			if ((property_exists($objSoapObject, 'Account')) &&
				($objSoapObject->Account))
				$objToReturn->Account = Account::GetObjectFromSoapObject($objSoapObject->Account);
			if (property_exists($objSoapObject, 'Timestamp'))
				$objToReturn->strTimestamp = $objSoapObject->Timestamp;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Offer::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objUserOwner)
				$objObject->objUserOwner = User::GetSoapObjectFromObject($objObject->objUserOwner, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUserOwnerId = null;
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

	class QQNodeOffer extends QQNode {
		protected $strTableName = 'offer';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'Offer';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('Id', 'Id', 'integer', $this);
				case 'UserOwnerId':
					return new QQNode('user_owner_id', 'UserOwnerId', 'integer', $this);
				case 'UserOwner':
					return new QQNodeUser('user_owner_id', 'UserOwner', 'integer', $this);
				case 'AccountId':
					return new QQNode('account_id', 'AccountId', 'integer', $this);
				case 'Account':
					return new QQNodeAccount('account_id', 'Account', 'integer', $this);
				case 'Timestamp':
					return new QQNode('timestamp', 'Timestamp', 'string', $this);
				case 'Contact':
					return new QQReverseReferenceNodeContact($this, 'contact', 'reverse_reference', 'offer_id');
				case 'Message':
					return new QQReverseReferenceNodeMessage($this, 'message', 'reverse_reference', 'offer_id');

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

	class QQReverseReferenceNodeOffer extends QQReverseReferenceNode {
		protected $strTableName = 'offer';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'Offer';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('Id', 'Id', 'integer', $this);
				case 'UserOwnerId':
					return new QQNode('user_owner_id', 'UserOwnerId', 'integer', $this);
				case 'UserOwner':
					return new QQNodeUser('user_owner_id', 'UserOwner', 'integer', $this);
				case 'AccountId':
					return new QQNode('account_id', 'AccountId', 'integer', $this);
				case 'Account':
					return new QQNodeAccount('account_id', 'Account', 'integer', $this);
				case 'Timestamp':
					return new QQNode('timestamp', 'Timestamp', 'string', $this);
				case 'Contact':
					return new QQReverseReferenceNodeContact($this, 'contact', 'reverse_reference', 'offer_id');
				case 'Message':
					return new QQReverseReferenceNodeMessage($this, 'message', 'reverse_reference', 'offer_id');

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