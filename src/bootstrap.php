<?php
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
