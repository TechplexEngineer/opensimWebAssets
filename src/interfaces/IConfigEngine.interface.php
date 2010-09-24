<?php

interface IConfigEngine {

    /** @brief loads given config */
    function load($cfg_identifier);

    /** @brief saves current configuration */
    function save();

    /** @brief retrieve given key, within given group */
    function getkey($group, $key);

    /** @brief assign given val to given group/key */
    function setkey($group, $group, $val);

    /** @brief returns current config as a php array */
    function get();

    /** @brief returns given config group as an array */
    function getGroup($group);
}

?>
