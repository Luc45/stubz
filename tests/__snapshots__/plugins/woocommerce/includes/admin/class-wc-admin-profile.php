<?php

/**
 * WC_Admin_Profile Class.
 */
class WC_Admin_Profile
{
    /**
     * Hook in tabs.
     */
    public function __construct()
{
}
    /**
     * Get Address Fields for the edit user pages.
     *
     * @return array Fields to display which are filtered through woocommerce_customer_meta_fields before being returned
     */
    public function get_customer_meta_fields()
{
}
    /**
     * Show Address Fields on edit user pages.
     *
     * @param WP_User $user
     */
    public function add_customer_meta_fields($user)
{
}
    /**
     * Save Address Fields on edit user pages.
     *
     * @param int $user_id User ID of the user being saved
     */
    public function save_customer_meta_fields($user_id)
{
}
    /**
     * Get user meta for a given key, with fallbacks to core user info for pre-existing fields.
     *
     * @since 3.1.0
     * @param int    $user_id User ID of the user being edited
     * @param string $key     Key for user meta field
     * @return string
     */
    protected function get_user_meta($user_id, $key)
{
}
}
