<?php
	/**
	 * The MessageType class defined here contains
	 * code for the MessageType enumerated type.  It represents
	 * the enumerated values found in the "message_type" table
	 * in the database.
	 * 
	 * To use, you should use the MessageType subclass which
	 * extends this MessageTypeGen class.
	 * 
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the MessageType class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 */
	abstract class MessageTypeGen extends QBaseClass {
		const Request = 1;
		const Send = 2;
		const Reply = 3;

		const MaxId = 3;

		public static $NameArray = array(
			1 => 'Request',
			2 => 'Send',
			3 => 'Reply');

		public static $TokenArray = array(
			1 => 'Request',
			2 => 'Send',
			3 => 'Reply');

		public static function ToString($intMessageTypeId) {
			switch ($intMessageTypeId) {
				case 1: return 'Request';
				case 2: return 'Send';
				case 3: return 'Reply';
				default:
					throw new QCallerException(sprintf('Invalid intMessageTypeId: %s', $intMessageTypeId));
			}
		}

		public static function ToToken($intMessageTypeId) {
			switch ($intMessageTypeId) {
				case 1: return 'Request';
				case 2: return 'Send';
				case 3: return 'Reply';
				default:
					throw new QCallerException(sprintf('Invalid intMessageTypeId: %s', $intMessageTypeId));
			}
		}

	}
?>