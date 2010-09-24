<?php

class WebAsset_Fetcher {
    private static $_instance;

    public static function instance() {
        if (!self::$_instance) {
            self::$_instance = new WebAsset_Fetcher();
        }

        return (self::$_instance);
    }

    public function fetch($asset) {
        $config = Config_Engine_Ini::instance();

        $asset_server = "http://" . $config->getkey('assetServer', 'host') . ':'
            . $config->getkey('assetServer', 'port') . "/assets/";
        $asset_url = $asset_server . $asset->getUUID();

        $h = @fopen($asset_url, "rb");
        if (!$h) {
            throw new WaException_Fetch("unable to connect to asset server [".$asset_url."]");
        }

        stream_set_timeout($h, $config->getkey('assetServer', 'timeout'));
        $asset_xmldatas = stream_get_contents($h);
        fclose($h);

        try {
            $xml = new SimpleXMLElement($asset_xmldatas);
        } catch (Exception $e) {
            throw new WaException_Fetch("unable to read asset xml [".$asset->getUUID()."]");
        }

        $datas = base64_decode($xml->Data);

        return ($datas);
    }
}

?>
