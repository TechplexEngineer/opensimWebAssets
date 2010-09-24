<?php

interface IAssetCache {

    /**
     * @brief checks wether given asset is locally cached in given format.
     * @details an asset fetched and converted to given format is 
     * locally cached for configured max_age seconds (see config/default.ini).
     * @param format (string) previously converted format to lookup in cache.
     * @return (boolean) true if asset is available in cache, false otherwise.
     */
    function isFormatCached($assetUUID, $format);

    /**
     * @brief checks wether given asset is locally cached in raw format.
     * @details assets are locally cached in their opensim-format for max_age seconds
     * @return (boolean) true if datas are locally cached (and not expired).
     */
    function isCached($assetUUID);

    /**
     * @brief reads and returns given asset from local cache, in given format.
     * @param $assetUUID (string) asset's UUID as stored within asset server.
     * @param $format (string) previously converted format to lookup in cache.
     * @return (binary) raw asset datas (in given format).
     */
    function retrieveFormat($assetUUID, $format);

    /**
     * @brief reads and returns raw asset datas from local cache.
     * @param assetUUID (string) asset's UUID to read from local cache.
     * @return (binary) raw asset datas, in opensim native format.
     */
    function retrieve($assetUUID);

    /**
     * @brief writes given asset datas, in given format, to local cache.
     * @param assetUUID (string) asset's UUID to save to cache.
     * @param format (string) format of datas to cache (eg: "JPEG")
     * @param datas (binary) asset binary datas, in given format.
     */
    function storeFormat($assetUUID, $format, $datas);

    /**
     * @brief writes given asset datas, in opensim native format, to local cache.
     * @param assetUUID (string) asset's UUID to save to cache.
     * @param datas (binary) asset binary datas, in opensim native format.
     */
    function store($assetUUID, $datas);
}

?>
