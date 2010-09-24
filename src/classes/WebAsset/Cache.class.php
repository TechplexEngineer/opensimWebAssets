<?php

class WebAsset_Cache implements IAssetCache {
    private static $_instance;

    public static function instance() {
        if (!self::$_instance) {
            self::$_instance = new WebAsset_Cache();
        }

        return (self::$_instance);
    }

    public function isFormatCached($assetUUID, $format) {

    }

    public function isCached($assetUUID) {

    }

    public function retrieveFormat($assetUUID, $format) {

    }

    public function retrieve($assetUUID) {

    }

    public function storeFormat($assetUUID, $format, $datas) {

    }

    public function store($assetUUID, $datas) {

    }

}

?>
