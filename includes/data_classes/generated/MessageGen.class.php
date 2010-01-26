<?php
	/**
	 * The abstract MessageGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Message subclass which
	 * extends this MessageGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Message class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $FromUserId the value for intFromUserId (Not Null)
	 * @property integer $ToUserId the value for intToUserId (Not Null)
	 * @property string $Body the value for strBody (Not Null)
	 * @property integer $MessageTypeId the value for intMessageTypeId (Not Null)
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Subject the value for strSubject (Not Null)
	 * @property integer $OfferId the value for intOfferId (Not Null)
	 * @property QDateTime $DateTime the value for dttDateTime (Not Null)
	 * @property integer $ContactId the value for intContactId 
	 * @property User $FromUser the value for the User object referenced by intFromUserId (Not Null)
	 * @property User $ToUser the value for the User object referenced by intToUserId (Not Null)
	 * @property Offer $Offer the value for the Offer object referenced by intOfferId (Not Null)
	 * @property Contact $Contact the value for the Contact object referenced by intContactId 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MessageGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database column message.from_user_id
		 * @var integer intFromUserId
		 */
		protected $intFromUserId;
		const FromUserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column message.to_user_id
		 * @var integer intToUserId
		 */
		protected $intToUserId;
		const ToUserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column message.body
		 * @var string strBody
		 */
		protected $strBody;
		const BodyDefault = null;


		/**
		 * Protected member variable that maps to the database column message.message_type_id
		 * @var integer intMessageTypeId
		 */
		protected $intMessageTypeId;
		const MessageTypeIdDefault = null;


		/**
		 * Protected member variable that maps to the database PK Identity column message.Id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column message.Subject
		 * @var string strSubject
		 */
		protected $strSubject;
		const SubjectMaxLength = 255;
		const SubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column message.offer_id
		 * @var integer intOfferId
		 */
		protected $intOfferId;
		const OfferIdDefault = null;


		/**
		 * Protected member variable that maps to the database column message.date_time
		 * @var QDateTime dttDateTime
		 */
		protected $dttDateTime;
		const DateTimeDefault = null;


		/**
		 * Protected member variable that maps to the database column message.contact_id
		 * @var integer intContactId
		 */
		protected $intContactId;
		const ContactIdDefault = null;


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
		 * in the database column message.from_user_id.
		 *
		 * NOTE: Always use the FromUser property getter to correctly retrieve this User object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var User objFromUser
		 */
		protected $objFromUser;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column message.to_user_id.
		 *
		 * NOTE: Always use the ToUser property getter to correctly retrieve this User object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var User objToUser
		 */
		protected $objToUser;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column message.offer_id.
		 *
		 * NOTE: Always use the Offer property getter to correctly retrieve this Offer object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Offer objOffer
		 */
		protected $objOffer;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column message.contact_id.
		 *
		 * NOTE: Always use the Contact property getter to correctly retrieve this Contact object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Contact objContact
		 */
		protected $objContact;





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
		 * Load a Message from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Message::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Message()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Messages
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Message::QueryArray to perform the LoadAll query
			try {
				return Message::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Messages
		 * @return int
		 */
		public static function CountAll() {
			// Call Message::QueryCount to perform the CountAll query
			return Message::QueryCount(QQ::All());
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
			$objDatabase = Message::GetDatabase();

			// Create/Build out the QueryBuilder object with Message-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'message');
			Message::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('message');

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
		 * Static Qcubed Query method to query for a single Message object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Message the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Message::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Message object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Message::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Message::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Message objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Message[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Message::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Message::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Message objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Message::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Message::GetDatabase();

			$strQuery = Message::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/message', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Message::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Message
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'message';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'from_user_id', $strAliasPrefix . 'from_user_id');
			$objBuilder->AddSelectItem($strTableName, 'to_user_id', $strAliasPrefix . 'to_user_id');
			$objBuilder->AddSelectItem($strTableName, 'body', $strAliasPrefix . 'body');
			$objBuilder->AddSelectItem($strTableName, 'message_type_id', $strAliasPrefix . 'message_type_id');
			$objBuilder->AddSelectItem($strTableName, 'Id', $strAliasPrefix . 'Id');
			$objBuilder->AddSelectItem($strTableName, 'Subject', $strAliasPrefix . 'Subject');
			$objBuilder->AddSelectItem($strTableName, 'offer_id', $strAliasPrefix . 'offer_id');
			$objBuilder->AddSelectItem($strTableName, 'date_time', $strAliasPrefix . 'date_time');
			$objBuilder->AddSelectItem($strTableName, 'contact_id', $strAliasPrefix . 'contact_id');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Message from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Message::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Message
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Message object
			$objToReturn = new Message();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'from_user_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'from_user_id'] : $strAliasPrefix . 'from_user_id';
			$objToReturn->intFromUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'to_user_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'to_user_id'] : $strAliasPrefix . 'to_user_id';
			$objToReturn->intToUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'body', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'body'] : $strAliasPrefix . 'body';
			$objToReturn->strBody = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'message_type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'message_type_id'] : $strAliasPrefix . 'message_type_id';
			$objToReturn->intMessageTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'Id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Id'] : $strAliasPrefix . 'Id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'Subject', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Subject'] : $strAliasPrefix . 'Subject';
			$objToReturn->strSubject = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'offer_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'offer_id'] : $strAliasPrefix . 'offer_id';
			$objToReturn->intOfferId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'date_time', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'date_time'] : $strAliasPrefix . 'date_time';
			$objToReturn->dttDateTime = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'contact_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'contact_id'] : $strAliasPrefix . 'contact_id';
			$objToReturn->intContactId = $objDbRow->GetColumn($strAliasName, 'Integer');

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
				$strAliasPrefix = 'message__';

			// Check for FromUser Early Binding
			$strAlias = $strAliasPrefix . 'from_user_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFromUser = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'from_user_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ToUser Early Binding
			$strAlias = $strAliasPrefix . 'to_user_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objToUser = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'to_user_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Offer Early Binding
			$strAlias = $strAliasPrefix . 'offer_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objOffer = Offer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'offer_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Contact Early Binding
			$strAlias = $strAliasPrefix . 'contact_id__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objContact = Contact::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contact_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Messages from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Message[]
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
					$objItem = Message::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Message::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Message object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Message::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Message()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Message objects,
		 * by ToUserId Index(es)
		 * @param integer $intToUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message[]
		*/
		public static function LoadArrayByToUserId($intToUserId, $objOptionalClauses = null) {
			// Call Message::QueryArray to perform the LoadArrayByToUserId query
			try {
				return Message::QueryArray(
					QQ::Equal(QQN::Message()->ToUserId, $intToUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Messages
		 * by ToUserId Index(es)
		 * @param integer $intToUserId
		 * @return int
		*/
		public static function CountByToUserId($intToUserId) {
			// Call Message::QueryCount to perform the CountByToUserId query
			return Message::QueryCount(
				QQ::Equal(QQN::Message()->ToUserId, $intToUserId)
			);
		}
			
		/**
		 * Load an array of Message objects,
		 * by MessageTypeId Index(es)
		 * @param integer $intMessageTypeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message[]
		*/
		public static function LoadArrayByMessageTypeId($intMessageTypeId, $objOptionalClauses = null) {
			// Call Message::QueryArray to perform the LoadArrayByMessageTypeId query
			try {
				return Message::QueryArray(
					QQ::Equal(QQN::Message()->MessageTypeId, $intMessageTypeId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Messages
		 * by MessageTypeId Index(es)
		 * @param integer $intMessageTypeId
		 * @return int
		*/
		public static function CountByMessageTypeId($intMessageTypeId) {
			// Call Message::QueryCount to perform the CountByMessageTypeId query
			return Message::QueryCount(
				QQ::Equal(QQN::Message()->MessageTypeId, $intMessageTypeId)
			);
		}
			
		/**
		 * Load an array of Message objects,
		 * by OfferId Index(es)
		 * @param integer $intOfferId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message[]
		*/
		public static function LoadArrayByOfferId($intOfferId, $objOptionalClauses = null) {
			// Call Message::QueryArray to perform the LoadArrayByOfferId query
			try {
				return Message::QueryArray(
					QQ::Equal(QQN::Message()->OfferId, $intOfferId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Messages
		 * by OfferId Index(es)
		 * @param integer $intOfferId
		 * @return int
		*/
		public static function CountByOfferId($intOfferId) {
			// Call Message::QueryCount to perform the CountByOfferId query
			return Message::QueryCount(
				QQ::Equal(QQN::Message()->OfferId, $intOfferId)
			);
		}
			
		/**
		 * Load an array of Message objects,
		 * by FromUserId Index(es)
		 * @param integer $intFromUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message[]
		*/
		public static function LoadArrayByFromUserId($intFromUserId, $objOptionalClauses = null) {
			// Call Message::QueryArray to perform the LoadArrayByFromUserId query
			try {
				return Message::QueryArray(
					QQ::Equal(QQN::Message()->FromUserId, $intFromUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Messages
		 * by FromUserId Index(es)
		 * @param integer $intFromUserId
		 * @return int
		*/
		public static function CountByFromUserId($intFromUserId) {
			// Call Message::QueryCount to perform the CountByFromUserId query
			return Message::QueryCount(
				QQ::Equal(QQN::Message()->FromUserId, $intFromUserId)
			);
		}
			
		/**
		 * Load an array of Message objects,
		 * by OfferId, FromUserId, ToUserId Index(es)
		 * @param integer $intOfferId
		 * @param integer $intFromUserId
		 * @param integer $intToUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message[]
		*/
		public static function LoadArrayByOfferIdFromUserIdToUserId($intOfferId, $intFromUserId, $intToUserId, $objOptionalClauses = null) {
			// Call Message::QueryArray to perform the LoadArrayByOfferIdFromUserIdToUserId query
			try {
				return Message::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::Message()->OfferId, $intOfferId),
					QQ::Equal(QQN::Message()->FromUserId, $intFromUserId),
					QQ::Equal(QQN::Message()->ToUserId, $intToUserId)
					),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Messages
		 * by OfferId, FromUserId, ToUserId Index(es)
		 * @param integer $intOfferId
		 * @param integer $intFromUserId
		 * @param integer $intToUserId
		 * @return int
		*/
		public static function CountByOfferIdFromUserIdToUserId($intOfferId, $intFromUserId, $intToUserId) {
			// Call Message::QueryCount to perform the CountByOfferIdFromUserIdToUserId query
			return Message::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::Message()->OfferId, $intOfferId),
				QQ::Equal(QQN::Message()->FromUserId, $intFromUserId),
				QQ::Equal(QQN::Message()->ToUserId, $intToUserId)
				)
			);
		}
			
		/**
		 * Load an array of Message objects,
		 * by ContactId Index(es)
		 * @param integer $intContactId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Message[]
		*/
		public static function LoadArrayByContactId($intContactId, $objOptionalClauses = null) {
			// Call Message::QueryArray to perform the LoadArrayByContactId query
			try {
				return Message::QueryArray(
					QQ::Equal(QQN::Message()->ContactId, $intContactId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Messages
		 * by ContactId Index(es)
		 * @param integer $intContactId
		 * @return int
		*/
		public static function CountByContactId($intContactId) {
			// Call Message::QueryCount to perform the CountByContactId query
			return Message::QueryCount(
				QQ::Equal(QQN::Message()->ContactId, $intContactId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Message
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Message::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `message` (
							`from_user_id`,
							`to_user_id`,
							`body`,
							`message_type_id`,
							`Subject`,
							`offer_id`,
							`date_time`,
							`contact_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intFromUserId) . ',
							' . $objDatabase->SqlVariable($this->intToUserId) . ',
							' . $objDatabase->SqlVariable($this->strBody) . ',
							' . $objDatabase->SqlVariable($this->intMessageTypeId) . ',
							' . $objDatabase->SqlVariable($this->strSubject) . ',
							' . $objDatabase->SqlVariable($this->intOfferId) . ',
							' . $objDatabase->SqlVariable($this->dttDateTime) . ',
							' . $objDatabase->SqlVariable($this->intContactId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('message', 'Id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`message`
						SET
							`from_user_id` = ' . $objDatabase->SqlVariable($this->intFromUserId) . ',
							`to_user_id` = ' . $objDatabase->SqlVariable($this->intToUserId) . ',
							`body` = ' . $objDatabase->SqlVariable($this->strBody) . ',
							`message_type_id` = ' . $objDatabase->SqlVariable($this->intMessageTypeId) . ',
							`Subject` = ' . $objDatabase->SqlVariable($this->strSubject) . ',
							`offer_id` = ' . $objDatabase->SqlVariable($this->intOfferId) . ',
							`date_time` = ' . $objDatabase->SqlVariable($this->dttDateTime) . ',
							`contact_id` = ' . $objDatabase->SqlVariable($this->intContactId) . '
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
		 * Delete this Message
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Message with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Message::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`message`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all Messages
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Message::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`message`');
		}

		/**
		 * Truncate message table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Message::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `message`');
		}

		/**
		 * Reload this Message from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Message object.');

			// Reload the Object
			$objReloaded = Message::Load($this->intId);

			// Update $this's local variables to match
			$this->FromUserId = $objReloaded->FromUserId;
			$this->ToUserId = $objReloaded->ToUserId;
			$this->strBody = $objReloaded->strBody;
			$this->MessageTypeId = $objReloaded->MessageTypeId;
			$this->strSubject = $objReloaded->strSubject;
			$this->OfferId = $objReloaded->OfferId;
			$this->dttDateTime = $objReloaded->dttDateTime;
			$this->ContactId = $objReloaded->ContactId;
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
				case 'FromUserId':
					/**
					 * Gets the value for intFromUserId (Not Null)
					 * @return integer
					 */
					return $this->intFromUserId;

				case 'ToUserId':
					/**
					 * Gets the value for intToUserId (Not Null)
					 * @return integer
					 */
					return $this->intToUserId;

				case 'Body':
					/**
					 * Gets the value for strBody (Not Null)
					 * @return string
					 */
					return $this->strBody;

				case 'MessageTypeId':
					/**
					 * Gets the value for intMessageTypeId (Not Null)
					 * @return integer
					 */
					return $this->intMessageTypeId;

				case 'Id':
					/**
					 * Gets the value for intId (Read-Only PK)
					 * @return integer
					 */
					return $this->intId;

				case 'Subject':
					/**
					 * Gets the value for strSubject (Not Null)
					 * @return string
					 */
					return $this->strSubject;

				case 'OfferId':
					/**
					 * Gets the value for intOfferId (Not Null)
					 * @return integer
					 */
					return $this->intOfferId;

				case 'DateTime':
					/**
					 * Gets the value for dttDateTime (Not Null)
					 * @return QDateTime
					 */
					return $this->dttDateTime;

				case 'ContactId':
					/**
					 * Gets the value for intContactId 
					 * @return integer
					 */
					return $this->intContactId;


				///////////////////
				// Member Objects
				///////////////////
				case 'FromUser':
					/**
					 * Gets the value for the User object referenced by intFromUserId (Not Null)
					 * @return User
					 */
					try {
						if ((!$this->objFromUser) && (!is_null($this->intFromUserId)))
							$this->objFromUser = User::Load($this->intFromUserId);
						return $this->objFromUser;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ToUser':
					/**
					 * Gets the value for the User object referenced by intToUserId (Not Null)
					 * @return User
					 */
					try {
						if ((!$this->objToUser) && (!is_null($this->intToUserId)))
							$this->objToUser = User::Load($this->intToUserId);
						return $this->objToUser;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Offer':
					/**
					 * Gets the value for the Offer object referenced by intOfferId (Not Null)
					 * @return Offer
					 */
					try {
						if ((!$this->objOffer) && (!is_null($this->intOfferId)))
							$this->objOffer = Offer::Load($this->intOfferId);
						return $this->objOffer;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Contact':
					/**
					 * Gets the value for the Contact object referenced by intContactId 
					 * @return Contact
					 */
					try {
						if ((!$this->objContact) && (!is_null($this->intContactId)))
							$this->objContact = Contact::Load($this->intContactId);
						return $this->objContact;
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
				case 'FromUserId':
					/**
					 * Sets the value for intFromUserId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objFromUser = null;
						return ($this->intFromUserId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ToUserId':
					/**
					 * Sets the value for intToUserId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objToUser = null;
						return ($this->intToUserId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Body':
					/**
					 * Sets the value for strBody (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBody = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MessageTypeId':
					/**
					 * Sets the value for intMessageTypeId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMessageTypeId = QType::Cast($mixValue, QType::Integer));
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

				case 'OfferId':
					/**
					 * Sets the value for intOfferId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objOffer = null;
						return ($this->intOfferId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DateTime':
					/**
					 * Sets the value for dttDateTime (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDateTime = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ContactId':
					/**
					 * Sets the value for intContactId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objContact = null;
						return ($this->intContactId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'FromUser':
					/**
					 * Sets the value for the User object referenced by intFromUserId (Not Null)
					 * @param User $mixValue
					 * @return User
					 */
					if (is_null($mixValue)) {
						$this->intFromUserId = null;
						$this->objFromUser = null;
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
							throw new QCallerException('Unable to set an unsaved FromUser for this Message');

						// Update Local Member Variables
						$this->objFromUser = $mixValue;
						$this->intFromUserId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ToUser':
					/**
					 * Sets the value for the User object referenced by intToUserId (Not Null)
					 * @param User $mixValue
					 * @return User
					 */
					if (is_null($mixValue)) {
						$this->intToUserId = null;
						$this->objToUser = null;
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
							throw new QCallerException('Unable to set an unsaved ToUser for this Message');

						// Update Local Member Variables
						$this->objToUser = $mixValue;
						$this->intToUserId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Offer':
					/**
					 * Sets the value for the Offer object referenced by intOfferId (Not Null)
					 * @param Offer $mixValue
					 * @return Offer
					 */
					if (is_null($mixValue)) {
						$this->intOfferId = null;
						$this->objOffer = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Offer object
						try {
							$mixValue = QType::Cast($mixValue, 'Offer');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Offer object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Offer for this Message');

						// Update Local Member Variables
						$this->objOffer = $mixValue;
						$this->intOfferId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Contact':
					/**
					 * Sets the value for the Contact object referenced by intContactId 
					 * @param Contact $mixValue
					 * @return Contact
					 */
					if (is_null($mixValue)) {
						$this->intContactId = null;
						$this->objContact = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Contact object
						try {
							$mixValue = QType::Cast($mixValue, 'Contact');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Contact object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Contact for this Message');

						// Update Local Member Variables
						$this->objContact = $mixValue;
						$this->intContactId = $mixValue->Id;

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
			$strToReturn = '<complexType name="Message"><sequence>';
			$strToReturn .= '<element name="FromUser" type="xsd1:User"/>';
			$strToReturn .= '<element name="ToUser" type="xsd1:User"/>';
			$strToReturn .= '<element name="Body" type="xsd:string"/>';
			$strToReturn .= '<element name="MessageTypeId" type="xsd:int"/>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Subject" type="xsd:string"/>';
			$strToReturn .= '<element name="Offer" type="xsd1:Offer"/>';
			$strToReturn .= '<element name="DateTime" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Contact" type="xsd1:Contact"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Message', $strComplexTypeArray)) {
				$strComplexTypeArray['Message'] = Message::GetSoapComplexTypeXml();
				User::AlterSoapComplexTypeArray($strComplexTypeArray);
				User::AlterSoapComplexTypeArray($strComplexTypeArray);
				Offer::AlterSoapComplexTypeArray($strComplexTypeArray);
				Contact::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Message::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Message();
			if ((property_exists($objSoapObject, 'FromUser')) &&
				($objSoapObject->FromUser))
				$objToReturn->FromUser = User::GetObjectFromSoapObject($objSoapObject->FromUser);
			if ((property_exists($objSoapObject, 'ToUser')) &&
				($objSoapObject->ToUser))
				$objToReturn->ToUser = User::GetObjectFromSoapObject($objSoapObject->ToUser);
			if (property_exists($objSoapObject, 'Body'))
				$objToReturn->strBody = $objSoapObject->Body;
			if (property_exists($objSoapObject, 'MessageTypeId'))
				$objToReturn->intMessageTypeId = $objSoapObject->MessageTypeId;
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Subject'))
				$objToReturn->strSubject = $objSoapObject->Subject;
			if ((property_exists($objSoapObject, 'Offer')) &&
				($objSoapObject->Offer))
				$objToReturn->Offer = Offer::GetObjectFromSoapObject($objSoapObject->Offer);
			if (property_exists($objSoapObject, 'DateTime'))
				$objToReturn->dttDateTime = new QDateTime($objSoapObject->DateTime);
			if ((property_exists($objSoapObject, 'Contact')) &&
				($objSoapObject->Contact))
				$objToReturn->Contact = Contact::GetObjectFromSoapObject($objSoapObject->Contact);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Message::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objFromUser)
				$objObject->objFromUser = User::GetSoapObjectFromObject($objObject->objFromUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFromUserId = null;
			if ($objObject->objToUser)
				$objObject->objToUser = User::GetSoapObjectFromObject($objObject->objToUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intToUserId = null;
			if ($objObject->objOffer)
				$objObject->objOffer = Offer::GetSoapObjectFromObject($objObject->objOffer, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intOfferId = null;
			if ($objObject->dttDateTime)
				$objObject->dttDateTime = $objObject->dttDateTime->qFormat(QDateTime::FormatSoap);
			if ($objObject->objContact)
				$objObject->objContact = Contact::GetSoapObjectFromObject($objObject->objContact, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intContactId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeMessage extends QQNode {
		protected $strTableName = 'message';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'Message';
		public function __get($strName) {
			switch ($strName) {
				case 'FromUserId':
					return new QQNode('from_user_id', 'FromUserId', 'integer', $this);
				case 'FromUser':
					return new QQNodeUser('from_user_id', 'FromUser', 'integer', $this);
				case 'ToUserId':
					return new QQNode('to_user_id', 'ToUserId', 'integer', $this);
				case 'ToUser':
					return new QQNodeUser('to_user_id', 'ToUser', 'integer', $this);
				case 'Body':
					return new QQNode('body', 'Body', 'string', $this);
				case 'MessageTypeId':
					return new QQNode('message_type_id', 'MessageTypeId', 'integer', $this);
				case 'Id':
					return new QQNode('Id', 'Id', 'integer', $this);
				case 'Subject':
					return new QQNode('Subject', 'Subject', 'string', $this);
				case 'OfferId':
					return new QQNode('offer_id', 'OfferId', 'integer', $this);
				case 'Offer':
					return new QQNodeOffer('offer_id', 'Offer', 'integer', $this);
				case 'DateTime':
					return new QQNode('date_time', 'DateTime', 'QDateTime', $this);
				case 'ContactId':
					return new QQNode('contact_id', 'ContactId', 'integer', $this);
				case 'Contact':
					return new QQNodeContact('contact_id', 'Contact', 'integer', $this);

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

	class QQReverseReferenceNodeMessage extends QQReverseReferenceNode {
		protected $strTableName = 'message';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'Message';
		public function __get($strName) {
			switch ($strName) {
				case 'FromUserId':
					return new QQNode('from_user_id', 'FromUserId', 'integer', $this);
				case 'FromUser':
					return new QQNodeUser('from_user_id', 'FromUser', 'integer', $this);
				case 'ToUserId':
					return new QQNode('to_user_id', 'ToUserId', 'integer', $this);
				case 'ToUser':
					return new QQNodeUser('to_user_id', 'ToUser', 'integer', $this);
				case 'Body':
					return new QQNode('body', 'Body', 'string', $this);
				case 'MessageTypeId':
					return new QQNode('message_type_id', 'MessageTypeId', 'integer', $this);
				case 'Id':
					return new QQNode('Id', 'Id', 'integer', $this);
				case 'Subject':
					return new QQNode('Subject', 'Subject', 'string', $this);
				case 'OfferId':
					return new QQNode('offer_id', 'OfferId', 'integer', $this);
				case 'Offer':
					return new QQNodeOffer('offer_id', 'Offer', 'integer', $this);
				case 'DateTime':
					return new QQNode('date_time', 'DateTime', 'QDateTime', $this);
				case 'ContactId':
					return new QQNode('contact_id', 'ContactId', 'integer', $this);
				case 'Contact':
					return new QQNodeContact('contact_id', 'Contact', 'integer', $this);

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