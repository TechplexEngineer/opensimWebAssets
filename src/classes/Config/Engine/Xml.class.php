<?php
/**
 * @file Xml.class.php
 * @brief Config_Engine_Xml class implementation
 */

/** @addtogroup Config */
/** @{ */

/**
 * @brief XML config loader
 * @details Simple xml-config accessor
 */
class Config_Engine_Xml extends Config_Engine {
	
	function __destruct() {

	}

	protected function init() {

	}

	public static function instance() {
		if (!self::$_instance)
			self::$_instance = new Config_Engine_Xml();
		return (self::$_instance);
	}

	/** @todo implement this */
	public function load($cfg_identifier) {

	}

	/** @todo implement this */
	public function save() {

	}

	/** @todo implement this */
	public function getkey($group, $key) {

	}

	/** @todo implement this */
	public function setkey($group, $key, $val) {

	}

	/** @todo implement this */
	public function get() {

	}

	/** @todo implement this */
	public function getGroup($group) {

	}

}

/** @} */

?>
