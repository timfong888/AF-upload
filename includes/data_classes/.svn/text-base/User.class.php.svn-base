<?php
	require(__DATAGEN_CLASSES__ . '/UserGen.class.php');

	/**
	 * The User class defined here contains any
	 * customized code for the User class in the
	 * Object Relational Model.  It represents the "user" table 
	 * in the database, and extends from the code generated abstract UserGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package My Application
	 * @subpackage DataObjects
	 * 
	 */
	class User extends UserGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objUser->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('User Object %s',  $this->intId);
		}


		
		
		
		
		
		
		
		
		
		
		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of User objects
			return User::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->Param1, $strParam1),
					QQ::GreaterThan(QQN::User()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single User object
			return User::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->Param1, $strParam1),
					QQ::GreaterThan(QQN::User()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of User objects
			return User::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->Param1, $strParam1),
					QQ::Equal(QQN::User()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using Qcodo Query)

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`user`.*
				FROM
					`user` AS `user`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return User::InstantiateDbResult($objDbResult);
		}
*/




		// Override or Create New Properties and Variables
		// For performance reasons, these variables and __set and __get override methods
		// are commented out.  But if you wish to implement or override any
		// of the data generated properties, please feel free to uncomment them.
/*
		protected $strSomeNewProperty;

		public function __get($strName) {
			switch ($strName) {
				case 'SomeNewProperty': return $this->strSomeNewProperty;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'SomeNewProperty':
					try {
						return ($this->strSomeNewProperty = QType::Cast($mixValue, QType::String));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
*/


		public function  GetGivenContacts($userId) {
			
			  	$alliesArray = $this->LoadArrayByUserAsAllies($userId);
			    $temp=array();
			   	foreach ($alliesArray as $ally) {
					$temp[] = $ally->Id;
			   	}
			   
		    	$count = Message::QueryCount(
			        QQ::AndCondition(
			        	QQ::Equal(QQN::Message()->FromUserId,$userId),
			            QQ::In(QQN::Message()->ToUserId,$temp),
			            QQ::Equal(QQN::Message()->MessageTypeId,2),
			            QQ::IsNotNull(QQN::Message()->ContactId)
			       	)
		    	);
		    	return $count; 
		}
		
		
		public function  GetAddedTargets($userId) {
			
				$avg_sql="SELECT AVG(b.cnt) avg FROM (SELECT DISTINCT(a.`User_id`),(SELECT COUNT(`User_id`) FROM `target` WHERE `User_id`=a.`User_id`) cnt FROM `target` a ) b";
				$std_sql="SELECT STD(b.cnt) std FROM (SELECT DISTINCT(a.`User_id`),(SELECT COUNT(`User_id`) FROM `target` WHERE `User_id`=a.`User_id`) cnt FROM `target` a ) b";
				
			 	$objDatabase = QApplication::$Database[1];
    			$Result = $objDatabase->Query($avg_sql);
			   	if ($Row = $Result->FetchRow()) {
			       $avg=$Row[0];
			    }
			    
			    $Result = $objDatabase->Query($std_sql);
			    if ($Row = $Result->FetchRow()) {
			       $std=$Row[0];
			    }
			    
			    $high = $avg + $std;
				$low  = $avg - $std;
			    
		    	$count = Target::CountByUserId($userId);
		    	$rating=0;
		    	
		    	if($count > $high) $rating = 1;
		    	elseif ($count < $low) $rating = -1;
		    	else $rating = 0;
		    	
		    	return array($count,$rating); 
		}
		
		public function  GetAddedAlliesCount($userId) {
		    	$count = UserGen::CountByUserAsAllies($userId);
		    	return $count; 
		}
		
		public function  GetTotalRequestsCount($userId) {
			$count = Thread::QueryCount(
				QQ::AndCondition(
				 	QQ::Equal(QQN::Thread()->SenderUserId,$userId),
				 	QQ::Equal(QQN::Thread()->MessageTypeId,1)
				)
			);
			return $count; 
		}
		
	}
?>