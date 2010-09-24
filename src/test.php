<?php
/**
 * @file test.php
 * @brief bare test script.
 * @details local testing of our classes.
 */
require_once('bootstrap.php');

$cfg = Config_Engine_Ini::instance();
// ...

$viewer = WebAsset_Viewer::instance();
// ...

$asset = new WebAsset("cb2052ae-d161-43e9-b11b-c834217823cd");
// ...

?>
