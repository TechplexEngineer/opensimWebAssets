<?php

class WebAsset_Converter {
    private static $_instance;

    public static function instance() {
        if (!self::$_instance) {
            self::$_instance = new WebAsset_Converter();
        }

        return (self::$_instance);
    }

    /** @todo implement this */
    public function convert($asset, $toFormat) {

    }
}

?>
