<?php

/**
 * WC_WCCOM_Site_Installation_State_Storage class
 */
class WC_WCCOM_Site_Installation_State_Storage
{
    /**
     * Get state from storage.
     *
     * @param int $product_id The product ID.
     * @return WC_WCCOM_Site_Installation_State|null
     */
    public static function get_state($product_id): WC_WCCOM_Site_Installation_State|null
{
}
    /**
     * Save state to storage.
     *
     * @param WC_WCCOM_Site_Installation_State $state The state to save.
     * @return bool
     */
    public static function save_state(WC_WCCOM_Site_Installation_State $state): bool
{
}
    /**
     * Delete state from storage.
     *
     * @param WC_WCCOM_Site_Installation_State $state The state to delete.
     * @return bool
     */
    public static function delete_state(WC_WCCOM_Site_Installation_State $state): bool
{
}
    /**
     * Get the storage key for a product ID.
     *
     * @param int $product_id The product ID.
     * @return string
     */
    protected static function get_storage_key($product_id): string
{
}
}
