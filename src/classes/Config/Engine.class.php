<?
/*
 * This file is part of WebAssets for OpenSimulator.
 *
 * WebAssets for OpenSimulator is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation.
 *
 * WebAssets for OpenSimulator is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WebAssets for OpenSimulator.  If not, see <http://www.gnu.org/licenses/>.
 */

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
