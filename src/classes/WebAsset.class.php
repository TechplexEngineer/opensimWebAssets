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
 * @file WebAsset.class.php
 * @brief WebAsset class implementation.
 */

/**
 * @brief An opensim asset, suitable for opensimWebAsset usage.
 * @details Represents an opensim asset suitable for opensimWebAssets usage.
 */
class WebAsset implements IOpensimAsset {
    protected $uuid; /**< asset's UUID, internally assigned by Opensimulator */

    function __construct($id) {
        $this->uuid = $id;
    }

    /**
     * @brief sets current WebAsset's UUID
     * @param id (string) opensim UUID for asset. ex: "00000000-0000-0000-0000-000000000000"
     * @return void
     */
    public function setUUID($id) {
        $this->uuid = $id;
    }

    /**
     * @brief returns UUID associated to current asset.
     * @return (string) asset's UUID.
     */
    public function getUUID() {
        return ($this->uuid);
    }
}

?>
