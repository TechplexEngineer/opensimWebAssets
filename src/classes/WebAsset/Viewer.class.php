<?php

class WebAsset_Viewer {
    private static $_instance;

    public static function instance() {
        if (!self::$_instance) {
            self::$_instance = new WebAsset_Viewer();
        }

        return (self::$_instance);
    }
}

?>
