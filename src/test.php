<?php
/**
 * @file test.php
 * @brief bare test script.
 * @details local testing of our classes.
 */
require_once('bootstrap.php');

$viewer = WebAsset_Viewer::instance();
$viewer->load(new WebAsset("cb2052ae-d161-43e9-b11b-c834217823cd"));

// $rawImage = $viewer->getImageDatas("JPEG");
// ...

// $cache = WebAsset_Cache::instance();

?>
