<?php
	require(__DATAGEN_CLASSES__ . '/MessageTypeGen.class.php');

	/**
	 * The MessageType class defined here contains any
	 * customized code for the MessageType enumerated type. 
	 * 
	 * It represents the enumerated values found in the "message_type" table in the database,
	 * and extends from the code generated abstract MessageTypeGen
	 * class, which contains all the values extracted from the database.
	 * 
	 * Type classes which are generally used to attach a type to data object.
	 * However, they may be used as simple database indepedant enumerated type.
	 * 
	 * @package My Application
	 * @subpackage DataObjects
	 */
	abstract class MessageType extends MessageTypeGen {
	}
?>