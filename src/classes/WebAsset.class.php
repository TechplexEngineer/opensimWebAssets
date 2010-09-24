<?php
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
        return ($uuid);
    }
}

?>
