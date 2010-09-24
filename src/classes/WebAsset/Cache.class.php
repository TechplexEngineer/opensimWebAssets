<?php

class WebAsset_Cache implements IAssetCache {
    private static $_instance;

    public static function instance() {
        if (!self::$_instance) {
            self::$_instance = new WebAsset_Cache();
        }

        return (self::$_instance);
    }

    public function isFormatCached($asset, $format) {

    }

    public function isCached($asset) {
        return (false);
    }

    public function retrieveFormat($asset, $format) {

    }

    public function retrieve($asset) {
        // if (read fails) throw new WaException_Cache("fopen / fread error msg");
    }

    public function storeFormat($asset, $format, $datas) {

    }

    public function store($asset, $datas) {

    }

}

?>
