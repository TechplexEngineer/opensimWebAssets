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
 * @file bootstrap.php
 * @brief simple autoloader initialization.
 * @details our autoloader lookups interfaces under 'interfaces/Ifoo.interface.php' (IFoo interface)
 * and classes under 'classes/FirstWord/SecondWord.class.php' ('FirstWord_SecondWord' class)
 */

define('SEP', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('CLASSES', ROOT . SEP . 'classes' . SEP);
define('INTERFACES', ROOT . SEP . 'interfaces' . SEP);

define('CONFIG_INI', ROOT . SEP . 'config' . SEP . 'default.ini');

/**
 * @brief simple autoloader, for our classes and interfaces.
 * @details lookups interfaces under 'interfaces/Ifoo.interface.php' (IFoo interface)
 * and classes under 'classes/FirstWord/SecondWord.class.php' ('FirstWord_SecondWord' class)
 * @throws RuntimeException when requested class/interface is not found.
 */
function __autoload($className) {
    // looking for classes :
    $classFile = CLASSES . str_replace('_', SEP, $className.'.class.php');
    if (file_exists($classFile)) {
        require_once($classFile);
        return;
    }

    // looking for interfaces :
    $interfaceFile = INTERFACES . str_replace('_', SEP, $className.'.interface.php');
    if (file_exists($interfaceFile)) {
        require_once($interfaceFile);
        return;
    }

    throw new RuntimeException('unable to load '.$class_name);
}

?>
