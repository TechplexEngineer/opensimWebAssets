<?
/**
 * @file Engine.class.php
 * @brief Config Engine abstract class declaration
 */

/** @addtogroup Config */
/** @{ */

/**
 * @brief Config Engine class abstract
 * @details Our Config engine class signature
 * @abstract
 */
abstract class Config_Engine implements IConfigEngine {

	/** @brief pointer to current instance */
	protected static $_instance;

	/** @brief singleton mechanism */
	abstract public static function instance();

	/** @brief per-extending class custom initialization */
	abstract protected function init();

	function __construct() {
		$this->init();
	}

}

/** @} */

?>
