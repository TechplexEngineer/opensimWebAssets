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
 * @brief interface describing a ConfigEngine
 */
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
