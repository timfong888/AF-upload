<?php
	if (!defined('__PREPEND_INCLUDED__')) {
		// Ensure prepend.inc is only executed once
		define('__PREPEND_INCLUDED__', 1);


		///////////////////////////////////
		// Define Server-specific constants
		///////////////////////////////////	
		/*
		 * This assumes that the configuration include file is in the same directory
		 * as this prepend include file.  For security reasons, you can feel free
		 * to move the configuration file anywhere you want.  But be sure to provide
		 * a relative or absolute path to the file.
		 */
		require(dirname(__FILE__) . '/configuration.inc.php');


		//////////////////////////////
		// Include the Qcodo Framework
		//////////////////////////////
		require(__QCODO_CORE__ . '/qcodo.inc.php');


		///////////////////////////////
		// Define the Application Class
		///////////////////////////////
		/**
		 * The Application class is an abstract class that statically provides
		 * information and global utilities for the entire web application.
		 *
		 * Custom constants for this webapp, as well as global variables and global
		 * methods should be declared in this abstract class (declared statically).
		 *
		 * This Application class should extend from the ApplicationBase class in
		 * the framework.
		 */
		abstract class QApplication extends QApplicationBase {
			/**
			 * This is called by the PHP5 Autoloader.  This method overrides the
			 * one in ApplicationBase.
			 *
			 * @return void
			 */
			public static function Autoload($strClassName) {
				// First use the Qcodo Autoloader
				if (!parent::Autoload($strClassName)) {
					if(substr($strClassName,0,2) == "Ic") {
				        $filename = "Library/icontact/" . $strClassName . ".php";
				        require $filename;
				    }
				}
			}


			//Enable Autogerations files to use in I18N
			public static $AutogenI18N = true;			
			
			/**
			 * This is called by in traslation process.  This method find token request in language file, if token doesn't exist
			 * this new word is added to future translation. Is recommended use this funtion in development environments
			 *
			 * @return void
			 */			
			public static function AutogenI18N($strToken)
			{
				$found = false;
				$strFileName = __QCODO__ . '/i18n/' . QApplication::$LanguageCode . '.po';
				
				if(file_exists($strFileName))
				{
				 	$objResource = fopen($strFileName, 'r');
				
					while (!feof($objResource)) 
						{
							$buffer = fgets($objResource);
							if(strlen($buffer) and strlen($strToken))
							{
								if(strpos($buffer,addslashes($strToken)))
								{
									$found = true;
									break; 
								}
							}	
						}
					
					fclose($objResource);
				}	
				
				if(!$found)
				{	
					$objResource = fopen($strFileName, 'a');
					if (!$objResource)
						throw new QCallerException(sprintf('Unable to open file: %s', $strFileName));
					else
					{
						fwrite($objResource,"msgid \"" . addslashes($strToken) . "\"\n");	
						fwrite($objResource,"msgstr \"" . addslashes($strToken) . "\"\n\n");
					}
					
					fclose($objResource);
				}
			}
			////////////////////////////
			// QApplication Customizations (e.g. EncodingType, etc.)
			////////////////////////////
			// public static $EncodingType = 'ISO-8859-1';

			////////////////////////////
			// Additional Static Methods
			////////////////////////////
			// TODO: Define any other custom global WebApplication functions (if any) here...
		}


		//////////////////////////
		// Custom Global Functions
		//////////////////////////	
		// TODO: Define any custom global functions (if any) here...


		////////////////
		// Include Files
		////////////////
		// TODO: Include any other include files (if any) here...


		///////////////////////
		// Setup Error Handling
		///////////////////////
		/*
		 * Set Error/Exception Handling to the default
		 * Qcodo HandleError and HandlException functions
		 * (Only in non CLI mode)
		 *
		 * Feel free to change, if needed, to your own
		 * custom error handling script(s).
		 */
		if (array_key_exists('SERVER_PROTOCOL', $_SERVER)) {
			set_error_handler('QcodoHandleError');
			set_exception_handler('QcodoHandleException');
		}


		////////////////////////////////////////////////
		// Initialize the Application and DB Connections
		////////////////////////////////////////////////
		QApplication::Initialize();
		QApplication::InitializeDatabaseConnections();
		
		QEmailServer::$SmtpServer = "mail.allyforce.com";
		QEmailServer::$SmtpUsername = "noreply@allyforce.com";
		QEmailServer::$SmtpPassword = "nobody1";
		QEmailServer::$AuthLogin = true;		
		

		/////////////////////////////
		// Start Session Handler (if required)
		/////////////////////////////
		session_start();


		//////////////////////////////////////////////
		// Setup Internationalization and Localization (if applicable)
		// Note, this is where you would implement code to do Language Setting discovery, as well, for example:
		// * Checking against $_GET['language_code']
		// * checking against session (example provided below)
		// * Checking the URL
		// * etc.
		// TODO: options to do this are left to the developer
		//////////////////////////////////////////////
		if (isset($_SESSION)) {
			if (array_key_exists('country_code', $_SESSION))
				QApplication::$CountryCode = $_SESSION['country_code'];
			if (array_key_exists('language_code', $_SESSION))
				QApplication::$LanguageCode = $_SESSION['language_code'];
		}

		// Initialize I18n if QApplication::$LanguageCode is set
		if (QApplication::$LanguageCode)
			QI18n::Initialize();
		else {
			 QApplication::$CountryCode = 'sp';
			 QApplication::$LanguageCode = 'sp';
			 QI18n::Initialize();
		}
	}
?>