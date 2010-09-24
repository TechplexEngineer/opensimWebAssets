<?php

interface IAssetViewer {
    
    /**
     * @brief loads given asset from configured asset server.
     * @param assetUUID (string) asset's UUID
     * @return void ; call loadSuccessful() for retrieval status.
     */
    function load($assetUUID);

    /**
     * @brief wether last load() call was successful or not.
     * @return (boolean) true on successful loading, false otherwise.
     */
    function loadSuccessful();

    /**
     * @brief renders currently loaded image asset to given format.
     * @param toFormat (string) format identifier to convert image to (eg: "JPEG")
     * @return (mixed) sets http content-type header and outputs raw image datas.
     */
    function renderImage($toFormat);

    /**
     * @brief gets image asset raw datas, after conversion to toFormat.
     * @param toFormat (string) format identifier to convert image to (eg: "JPEG")
     * @return (binary) raw image datas.
     */
    function getImageDatas($toFormat);

    /** @todo find sound assets, experiment and implement this. */
    function renderSound();

    /** @todo find animation assets, experiment and find a way to render anims */
    function renderAnimation();

}

?>
