<?php
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
 * @file Ini.class.php
 * @brief Config_Engine_Ini class implementation
 */

/** @addtogroup Config */
/** @{ */

/**
 * @brief INI file configuration class
 * @details Simple ini-file accessor
 */
class Config_Engine_Ini extends Config_Engine {
	/** @brief currently loaded ini file */
	private $_filename;

	/** @brief currently loaded config array */
	private $_config;
	
	function __destruct() {

	}

	protected function init() {
		$this->_config = array();
		$this->_filename = "";
		if (defined('CONFIG_INI'))
			$this->load(CONFIG_INI);
	}

	public static function instance() {
		if (!self::$_instance)
			self::$_instance = new Config_Engine_Ini();
		return (self::$_instance);
	}

	public function load($cfg_identifier) {
		if (!is_file($cfg_identifier))
			throw new RuntimeException('invalid config identifier');
		$process_sections = true;
		$this->_config = parse_ini_file($cfg_identifier, $process_sections);
		$this->_filename = $cfg_identifier;
	}

	/**
	 * @todo implement this
	 */
	public function save() {

	}

	/**
	 * @brief returns given key within given section
	 * @param group - ini section where to load given key
	 * @param key - key to retrieve
	 * @return mixed - given key value within given section
	 */
	public function getkey($group, $key) {
		if (!array_key_exists($group, $this->_config))
			return ("");
		if (!array_key_exists($key, $this->_config[$group]))
			return ("");
		return ($this->_config[$group][$key]);
	}

	/**
	 * @todo implement this
	 */
	public function setkey($group, $key, $val) {

	}

	/**
	 * @brief returns currently loaded config as an array
	 * @return array - associative array representing loaded ini file
	 */
	public function get() {
		return ($this->_config);
	}

	/**
	 * @brief get given ini section, as an array
	 * @param $group string - ini section to load
	 * @return array - loaded section as an associative array
	 */
	public function getGroup($group) {
		if (!array_key_exists($group, $this->_config))
			return (array());
		return ($this->_config[$group]);
	}

}

/** @} */

?>
