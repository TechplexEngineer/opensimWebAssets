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

    private $_asset;

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

    public function load($asset) {
        // if (fetch timeout) throw new WaException_Timeout("asset fetch timed out");
        // if (connect failed) throw new WaException_Fetch("unable to connect...");
        // if (cache or read failed) throw new WaException_Cache("write permission denied");
        // if (conversion failed) throw new WaException_Convert("Imagick error msg..")

        $this->_asset = $asset;

        $cache = WebAsset_Cache::instance();
        if ($cache->isCached($asset)) {
            // available in cache, no need to fetch asset
            // FIXME : if cache expires between load() and renderImage() | getImageDatas(), read fails
            return;
        }

        $fetcher = WebAsset_Fetcher::instance();
        $cache->store($asset, $fetcher->fetch($asset));
    }

    public function renderImage($toFormat) {

    }

    public function getImageDatas($toFormat) {
        $cache = WebAsset_Cache::instance();

        $is_cached = $cache->isFormatCached($this->_asset, $toFormat);
        if ($is_cached) {
            return ($cache->retrieveFormat($this->_asset, $toFormat));
        }

        // convert to requested format:
        $converter = WebAsset_Converter::instance();
        $datas = $converter->convert($this->_asset, $toFormat);

        // store converted asset to cache:
        $cache->storeFormat($this->_asset, $toFormat, $datas);

        return ($datas);
    }

    public function renderSound() {

    }

    public function renderAnimation() {

    }
}

?>
