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
 * @todo implement this :p
 */
class WebAsset_Viewer implements IAssetViewer {
    private static $_instance; /**< pointer to current instance */

    /** 
     * @brief simple singleton mechanism 
     * @return (WebAsset_Viewer) newly_created or current instance
     */
    public static function instance() {
        if (!self::$_instance) {
            self::$_instance = new WebAsset_Viewer();
        }

        return (self::$_instance);
    }

    public function load($assetUUID) {

    }

    public function loadSuccessful() {

    }

    public function renderImage($toFormat) {

    }

    public function getImageDatas($toFormat) {

    }

    public function renderSound() {

    }

    public function renderAnimation() {

    }
}

?>
