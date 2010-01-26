<?php
	/**
	 * The abstract UserDetailsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the UserDetails subclass which
	 * extends this UserDetailsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the UserDetails class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $CodeName the value for strCodeName 
	 * @property string $FName the value for strFName 
	 * @property string $LName the value for strLName (Not Null)
	 * @property string $Title the value for strTitle 
	 * @property string $City the value for strCity 
	 * @property string $Region the value for strRegion 
	 * @property string $ZipCode the value for strZipCode 
	 * @property string $Solutions the value for strSolutions 
	 * @property string $Territory the value for strTerritory 
	 * @property string $Picture the value for strPicture 
	 * @property string $BackupEmail the value for strBackupEmail 
	 * @property string $Reseller the value for strReseller 
	 * @property-read User $_UserAsUserDetail the value for the private _objUserAsUserDetail (Read-Only) if set due to an expansion on the user.User_detail_id reverse relationship
	 * @property-read User[] $_UserAsUserDetailArray the value for the private _objUserAsUserDetailArray (Read-Only) if set due to an ExpandAsArray on the user.User_detail_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class UserDetailsGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column user_details.Id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.code_name
		 * @var string strCodeName
		 */
		protected $strCodeName;
		const CodeNameMaxLength = 45;
		const CodeNameDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.f_name
		 * @var string strFName
		 */
		protected $strFName;
		const FNameMaxLength = 45;
		const FNameDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.l_name
		 * @var string strLName
		 */
		protected $strLName;
		const LNameMaxLength = 45;
		const LNameDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.title
		 * @var string strTitle
		 */
		protected $strTitle;
		const TitleMaxLength = 40;
		const TitleDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.city
		 * @var string strCity
		 */
		protected $strCity;
		const CityMaxLength = 40;
		const CityDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.region
		 * @var string strRegion
		 */
		protected $strRegion;
		const RegionMaxLength = 60;
		const RegionDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.zip_code
		 * @var string strZipCode
		 */
		protected $strZipCode;
		const ZipCodeMaxLength = 45;
		const ZipCodeDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.Solutions
		 * @var string strSolutions
		 */
		protected $strSolutions;
		const SolutionsDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.Territory
		 * @var string strTerritory
		 */
		protected $strTerritory;
		const TerritoryDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.Picture
		 * @var string strPicture
		 */
		protected $strPicture;
		const PictureMaxLength = 64;
		const PictureDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.Backup_Email
		 * @var string strBackupEmail
		 */
		protected $strBackupEmail;
		const BackupEmailMaxLength = 45;
		const BackupEmailDefault = null;


		/**
		 * Protected member variable that maps to the database column user_details.Reseller
		 * @var string strReseller
		 */
		protected $strReseller;
		const ResellerMaxLength = 1;
		const ResellerDefault = null;


		/**
		 * Private member variable that stores a reference to a single UserAsUserDetail object
		 * (of type User), if this UserDetails object was restored with
		 * an expansion on the user association table.
		 * @var User _objUserAsUserDetail;
		 */
		private $_objUserAsUserDetail;

		/**
		 * Private member variable that stores a reference to an array of UserAsUserDetail objects
		 * (of type User[]), if this UserDetails object was restored with
		 * an ExpandAsArray on the user association table.
		 * @var User[] _objUserAsUserDetailArray;
		 */
		private $_objUserAsUserDetailArray = array();

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
		 * Load a UserDetails from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return UserDetails
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return UserDetails::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::UserDetails()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all UserDetailses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return UserDetails[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call UserDetails::QueryArray to perform the LoadAll query
			try {
				return UserDetails::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all UserDetailses
		 * @return int
		 */
		public static function CountAll() {
			// Call UserDetails::QueryCount to perform the CountAll query
			return UserDetails::QueryCount(QQ::All());
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
			$objDatabase = UserDetails::GetDatabase();

			// Create/Build out the QueryBuilder object with UserDetails-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'user_details');
			UserDetails::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('user_details');

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
		 * Static Qcubed Query method to query for a single UserDetails object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return UserDetails the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = UserDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new UserDetails object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = UserDetails::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return UserDetails::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of UserDetails objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return UserDetails[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = UserDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return UserDetails::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of UserDetails objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = UserDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = UserDetails::GetDatabase();

			$strQuery = UserDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/userdetails', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = UserDetails::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this UserDetails
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'user_details';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'Id', $strAliasPrefix . 'Id');
			$objBuilder->AddSelectItem($strTableName, 'code_name', $strAliasPrefix . 'code_name');
			$objBuilder->AddSelectItem($strTableName, 'f_name', $strAliasPrefix . 'f_name');
			$objBuilder->AddSelectItem($strTableName, 'l_name', $strAliasPrefix . 'l_name');
			$objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
			$objBuilder->AddSelectItem($strTableName, 'city', $strAliasPrefix . 'city');
			$objBuilder->AddSelectItem($strTableName, 'region', $strAliasPrefix . 'region');
			$objBuilder->AddSelectItem($strTableName, 'zip_code', $strAliasPrefix . 'zip_code');
			$objBuilder->AddSelectItem($strTableName, 'Solutions', $strAliasPrefix . 'Solutions');
			$objBuilder->AddSelectItem($strTableName, 'Territory', $strAliasPrefix . 'Territory');
			$objBuilder->AddSelectItem($strTableName, 'Picture', $strAliasPrefix . 'Picture');
			$objBuilder->AddSelectItem($strTableName, 'Backup_Email', $strAliasPrefix . 'Backup_Email');
			$objBuilder->AddSelectItem($strTableName, 'Reseller', $strAliasPrefix . 'Reseller');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a UserDetails from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this UserDetails::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return UserDetails
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
							$strAliasPrefix = 'user_details__';


						// Expanding reverse references: UserAsUserDetail
						$strAlias = $strAliasPrefix . 'userasuserdetail__Id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objUserAsUserDetailArray)) {
								$objPreviousChildItems = $objPreviousItem->_objUserAsUserDetailArray;
								$objChildItem = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasuserdetail__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objUserAsUserDetailArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objUserAsUserDetailArray[] = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasuserdetail__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'user_details__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the UserDetails object
			$objToReturn = new UserDetails();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'Id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Id'] : $strAliasPrefix . 'Id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'code_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'code_name'] : $strAliasPrefix . 'code_name';
			$objToReturn->strCodeName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'f_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'f_name'] : $strAliasPrefix . 'f_name';
			$objToReturn->strFName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'l_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'l_name'] : $strAliasPrefix . 'l_name';
			$objToReturn->strLName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'title'] : $strAliasPrefix . 'title';
			$objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'city', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'city'] : $strAliasPrefix . 'city';
			$objToReturn->strCity = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'region', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'region'] : $strAliasPrefix . 'region';
			$objToReturn->strRegion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'zip_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'zip_code'] : $strAliasPrefix . 'zip_code';
			$objToReturn->strZipCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Solutions', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Solutions'] : $strAliasPrefix . 'Solutions';
			$objToReturn->strSolutions = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'Territory', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Territory'] : $strAliasPrefix . 'Territory';
			$objToReturn->strTerritory = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'Picture', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Picture'] : $strAliasPrefix . 'Picture';
			$objToReturn->strPicture = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Backup_Email', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Backup_Email'] : $strAliasPrefix . 'Backup_Email';
			$objToReturn->strBackupEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Reseller', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Reseller'] : $strAliasPrefix . 'Reseller';
			$objToReturn->strReseller = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					if (array_diff($objPreviousItem->_objUserAsUserDetailArray, $objToReturn->_objUserAsUserDetailArray) != null) {
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
				$strAliasPrefix = 'user_details__';




			// Check for UserAsUserDetail Virtual Binding
			$strAlias = $strAliasPrefix . 'userasuserdetail__Id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objUserAsUserDetailArray[] = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasuserdetail__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objUserAsUserDetail = User::InstantiateDbRow($objDbRow, $strAliasPrefix . 'userasuserdetail__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of UserDetailses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return UserDetails[]
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
					$objItem = UserDetails::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = UserDetails::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single UserDetails object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return UserDetails
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return UserDetails::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::UserDetails()->Id, $intId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of UserDetails objects,
		 * by Region Index(es)
		 * @param string $strRegion
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return UserDetails[]
		*/
		public static function LoadArrayByRegion($strRegion, $objOptionalClauses = null) {
			// Call UserDetails::QueryArray to perform the LoadArrayByRegion query
			try {
				return UserDetails::QueryArray(
					QQ::Equal(QQN::UserDetails()->Region, $strRegion),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count UserDetailses
		 * by Region Index(es)
		 * @param string $strRegion
		 * @return int
		*/
		public static function CountByRegion($strRegion) {
			// Call UserDetails::QueryCount to perform the CountByRegion query
			return UserDetails::QueryCount(
				QQ::Equal(QQN::UserDetails()->Region, $strRegion)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this UserDetails
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = UserDetails::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `user_details` (
							`code_name`,
							`f_name`,
							`l_name`,
							`title`,
							`city`,
							`region`,
							`zip_code`,
							`Solutions`,
							`Territory`,
							`Picture`,
							`Backup_Email`,
							`Reseller`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strCodeName) . ',
							' . $objDatabase->SqlVariable($this->strFName) . ',
							' . $objDatabase->SqlVariable($this->strLName) . ',
							' . $objDatabase->SqlVariable($this->strTitle) . ',
							' . $objDatabase->SqlVariable($this->strCity) . ',
							' . $objDatabase->SqlVariable($this->strRegion) . ',
							' . $objDatabase->SqlVariable($this->strZipCode) . ',
							' . $objDatabase->SqlVariable($this->strSolutions) . ',
							' . $objDatabase->SqlVariable($this->strTerritory) . ',
							' . $objDatabase->SqlVariable($this->strPicture) . ',
							' . $objDatabase->SqlVariable($this->strBackupEmail) . ',
							' . $objDatabase->SqlVariable($this->strReseller) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('user_details', 'Id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`user_details`
						SET
							`code_name` = ' . $objDatabase->SqlVariable($this->strCodeName) . ',
							`f_name` = ' . $objDatabase->SqlVariable($this->strFName) . ',
							`l_name` = ' . $objDatabase->SqlVariable($this->strLName) . ',
							`title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
							`city` = ' . $objDatabase->SqlVariable($this->strCity) . ',
							`region` = ' . $objDatabase->SqlVariable($this->strRegion) . ',
							`zip_code` = ' . $objDatabase->SqlVariable($this->strZipCode) . ',
							`Solutions` = ' . $objDatabase->SqlVariable($this->strSolutions) . ',
							`Territory` = ' . $objDatabase->SqlVariable($this->strTerritory) . ',
							`Picture` = ' . $objDatabase->SqlVariable($this->strPicture) . ',
							`Backup_Email` = ' . $objDatabase->SqlVariable($this->strBackupEmail) . ',
							`Reseller` = ' . $objDatabase->SqlVariable($this->strReseller) . '
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
		 * Delete this UserDetails
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this UserDetails with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = UserDetails::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user_details`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($this->intId) . '');
		}

		/**
		 * Delete all UserDetailses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = UserDetails::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user_details`');
		}

		/**
		 * Truncate user_details table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = UserDetails::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `user_details`');
		}

		/**
		 * Reload this UserDetails from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved UserDetails object.');

			// Reload the Object
			$objReloaded = UserDetails::Load($this->intId);

			// Update $this's local variables to match
			$this->strCodeName = $objReloaded->strCodeName;
			$this->strFName = $objReloaded->strFName;
			$this->strLName = $objReloaded->strLName;
			$this->strTitle = $objReloaded->strTitle;
			$this->strCity = $objReloaded->strCity;
			$this->strRegion = $objReloaded->strRegion;
			$this->strZipCode = $objReloaded->strZipCode;
			$this->strSolutions = $objReloaded->strSolutions;
			$this->strTerritory = $objReloaded->strTerritory;
			$this->strPicture = $objReloaded->strPicture;
			$this->strBackupEmail = $objReloaded->strBackupEmail;
			$this->strReseller = $objReloaded->strReseller;
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

				case 'CodeName':
					/**
					 * Gets the value for strCodeName 
					 * @return string
					 */
					return $this->strCodeName;

				case 'FName':
					/**
					 * Gets the value for strFName 
					 * @return string
					 */
					return $this->strFName;

				case 'LName':
					/**
					 * Gets the value for strLName (Not Null)
					 * @return string
					 */
					return $this->strLName;

				case 'Title':
					/**
					 * Gets the value for strTitle 
					 * @return string
					 */
					return $this->strTitle;

				case 'City':
					/**
					 * Gets the value for strCity 
					 * @return string
					 */
					return $this->strCity;

				case 'Region':
					/**
					 * Gets the value for strRegion 
					 * @return string
					 */
					return $this->strRegion;

				case 'ZipCode':
					/**
					 * Gets the value for strZipCode 
					 * @return string
					 */
					return $this->strZipCode;

				case 'Solutions':
					/**
					 * Gets the value for strSolutions 
					 * @return string
					 */
					return $this->strSolutions;

				case 'Territory':
					/**
					 * Gets the value for strTerritory 
					 * @return string
					 */
					return $this->strTerritory;

				case 'Picture':
					/**
					 * Gets the value for strPicture 
					 * @return string
					 */
					return $this->strPicture;

				case 'BackupEmail':
					/**
					 * Gets the value for strBackupEmail 
					 * @return string
					 */
					return $this->strBackupEmail;

				case 'Reseller':
					/**
					 * Gets the value for strReseller 
					 * @return string
					 */
					return $this->strReseller;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_UserAsUserDetail':
					/**
					 * Gets the value for the private _objUserAsUserDetail (Read-Only)
					 * if set due to an expansion on the user.User_detail_id reverse relationship
					 * @return User
					 */
					return $this->_objUserAsUserDetail;

				case '_UserAsUserDetailArray':
					/**
					 * Gets the value for the private _objUserAsUserDetailArray (Read-Only)
					 * if set due to an ExpandAsArray on the user.User_detail_id reverse relationship
					 * @return User[]
					 */
					return (array) $this->_objUserAsUserDetailArray;


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
				case 'CodeName':
					/**
					 * Sets the value for strCodeName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCodeName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FName':
					/**
					 * Sets the value for strFName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LName':
					/**
					 * Sets the value for strLName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Title':
					/**
					 * Sets the value for strTitle 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTitle = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'City':
					/**
					 * Sets the value for strCity 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCity = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Region':
					/**
					 * Sets the value for strRegion 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRegion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ZipCode':
					/**
					 * Sets the value for strZipCode 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strZipCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Solutions':
					/**
					 * Sets the value for strSolutions 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSolutions = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Territory':
					/**
					 * Sets the value for strTerritory 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTerritory = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Picture':
					/**
					 * Sets the value for strPicture 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPicture = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BackupEmail':
					/**
					 * Sets the value for strBackupEmail 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBackupEmail = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Reseller':
					/**
					 * Sets the value for strReseller 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strReseller = QType::Cast($mixValue, QType::String));
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

			
		
		// Related Objects' Methods for UserAsUserDetail
		//-------------------------------------------------------------------

		/**
		 * Gets all associated UsersAsUserDetail as an array of User objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		*/ 
		public function GetUserAsUserDetailArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return User::LoadArrayByUserDetailId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated UsersAsUserDetail
		 * @return int
		*/ 
		public function CountUsersAsUserDetail() {
			if ((is_null($this->intId)))
				return 0;

			return User::CountByUserDetailId($this->intId);
		}

		/**
		 * Associates a UserAsUserDetail
		 * @param User $objUser
		 * @return void
		*/ 
		public function AssociateUserAsUserDetail(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUserAsUserDetail on this unsaved UserDetails.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUserAsUserDetail on this UserDetails with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = UserDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`user`
				SET
					`User_detail_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objUser->Id) . '
			');
		}

		/**
		 * Unassociates a UserAsUserDetail
		 * @param User $objUser
		 * @return void
		*/ 
		public function UnassociateUserAsUserDetail(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsUserDetail on this unsaved UserDetails.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsUserDetail on this UserDetails with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = UserDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`user`
				SET
					`User_detail_id` = null
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objUser->Id) . ' AND
					`User_detail_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all UsersAsUserDetail
		 * @return void
		*/ 
		public function UnassociateAllUsersAsUserDetail() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsUserDetail on this unsaved UserDetails.');

			// Get the Database Object for this Class
			$objDatabase = UserDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`user`
				SET
					`User_detail_id` = null
				WHERE
					`User_detail_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated UserAsUserDetail
		 * @param User $objUser
		 * @return void
		*/ 
		public function DeleteAssociatedUserAsUserDetail(User $objUser) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsUserDetail on this unsaved UserDetails.');
			if ((is_null($objUser->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsUserDetail on this UserDetails with an unsaved User.');

			// Get the Database Object for this Class
			$objDatabase = UserDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`
				WHERE
					`Id` = ' . $objDatabase->SqlVariable($objUser->Id) . ' AND
					`User_detail_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated UsersAsUserDetail
		 * @return void
		*/ 
		public function DeleteAllUsersAsUserDetail() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUserAsUserDetail on this unsaved UserDetails.');

			// Get the Database Object for this Class
			$objDatabase = UserDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`
				WHERE
					`User_detail_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="UserDetails"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="CodeName" type="xsd:string"/>';
			$strToReturn .= '<element name="FName" type="xsd:string"/>';
			$strToReturn .= '<element name="LName" type="xsd:string"/>';
			$strToReturn .= '<element name="Title" type="xsd:string"/>';
			$strToReturn .= '<element name="City" type="xsd:string"/>';
			$strToReturn .= '<element name="Region" type="xsd:string"/>';
			$strToReturn .= '<element name="ZipCode" type="xsd:string"/>';
			$strToReturn .= '<element name="Solutions" type="xsd:string"/>';
			$strToReturn .= '<element name="Territory" type="xsd:string"/>';
			$strToReturn .= '<element name="Picture" type="xsd:string"/>';
			$strToReturn .= '<element name="BackupEmail" type="xsd:string"/>';
			$strToReturn .= '<element name="Reseller" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('UserDetails', $strComplexTypeArray)) {
				$strComplexTypeArray['UserDetails'] = UserDetails::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, UserDetails::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new UserDetails();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'CodeName'))
				$objToReturn->strCodeName = $objSoapObject->CodeName;
			if (property_exists($objSoapObject, 'FName'))
				$objToReturn->strFName = $objSoapObject->FName;
			if (property_exists($objSoapObject, 'LName'))
				$objToReturn->strLName = $objSoapObject->LName;
			if (property_exists($objSoapObject, 'Title'))
				$objToReturn->strTitle = $objSoapObject->Title;
			if (property_exists($objSoapObject, 'City'))
				$objToReturn->strCity = $objSoapObject->City;
			if (property_exists($objSoapObject, 'Region'))
				$objToReturn->strRegion = $objSoapObject->Region;
			if (property_exists($objSoapObject, 'ZipCode'))
				$objToReturn->strZipCode = $objSoapObject->ZipCode;
			if (property_exists($objSoapObject, 'Solutions'))
				$objToReturn->strSolutions = $objSoapObject->Solutions;
			if (property_exists($objSoapObject, 'Territory'))
				$objToReturn->strTerritory = $objSoapObject->Territory;
			if (property_exists($objSoapObject, 'Picture'))
				$objToReturn->strPicture = $objSoapObject->Picture;
			if (property_exists($objSoapObject, 'BackupEmail'))
				$objToReturn->strBackupEmail = $objSoapObject->BackupEmail;
			if (property_exists($objSoapObject, 'Reseller'))
				$objToReturn->strReseller = $objSoapObject->Reseller;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, UserDetails::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeUserDetails extends QQNode {
		protected $strTableName = 'user_details';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'UserDetails';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('Id', 'Id', 'integer', $this);
				case 'CodeName':
					return new QQNode('code_name', 'CodeName', 'string', $this);
				case 'FName':
					return new QQNode('f_name', 'FName', 'string', $this);
				case 'LName':
					return new QQNode('l_name', 'LName', 'string', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'string', $this);
				case 'City':
					return new QQNode('city', 'City', 'string', $this);
				case 'Region':
					return new QQNode('region', 'Region', 'string', $this);
				case 'ZipCode':
					return new QQNode('zip_code', 'ZipCode', 'string', $this);
				case 'Solutions':
					return new QQNode('Solutions', 'Solutions', 'string', $this);
				case 'Territory':
					return new QQNode('Territory', 'Territory', 'string', $this);
				case 'Picture':
					return new QQNode('Picture', 'Picture', 'string', $this);
				case 'BackupEmail':
					return new QQNode('Backup_Email', 'BackupEmail', 'string', $this);
				case 'Reseller':
					return new QQNode('Reseller', 'Reseller', 'string', $this);
				case 'UserAsUserDetail':
					return new QQReverseReferenceNodeUser($this, 'userasuserdetail', 'reverse_reference', 'User_detail_id');

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

	class QQReverseReferenceNodeUserDetails extends QQReverseReferenceNode {
		protected $strTableName = 'user_details';
		protected $strPrimaryKey = 'Id';
		protected $strClassName = 'UserDetails';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('Id', 'Id', 'integer', $this);
				case 'CodeName':
					return new QQNode('code_name', 'CodeName', 'string', $this);
				case 'FName':
					return new QQNode('f_name', 'FName', 'string', $this);
				case 'LName':
					return new QQNode('l_name', 'LName', 'string', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'string', $this);
				case 'City':
					return new QQNode('city', 'City', 'string', $this);
				case 'Region':
					return new QQNode('region', 'Region', 'string', $this);
				case 'ZipCode':
					return new QQNode('zip_code', 'ZipCode', 'string', $this);
				case 'Solutions':
					return new QQNode('Solutions', 'Solutions', 'string', $this);
				case 'Territory':
					return new QQNode('Territory', 'Territory', 'string', $this);
				case 'Picture':
					return new QQNode('Picture', 'Picture', 'string', $this);
				case 'BackupEmail':
					return new QQNode('Backup_Email', 'BackupEmail', 'string', $this);
				case 'Reseller':
					return new QQNode('Reseller', 'Reseller', 'string', $this);
				case 'UserAsUserDetail':
					return new QQReverseReferenceNodeUser($this, 'userasuserdetail', 'reverse_reference', 'User_detail_id');

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