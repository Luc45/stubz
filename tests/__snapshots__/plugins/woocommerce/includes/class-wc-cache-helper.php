<?php

/**
 * WC_Cache_Helper.
 */
class WC_Cache_Helper
{
    /**
     * Transients to delete on shutdown.
     *
     * @var array Array of transient keys.
     */
    private static $delete_transients = array();

    /**
     * Hook in methods.
     */
    public static function init()
{
}
    /**
     * Set additional nocache headers.
     *
     * @param array $headers Header names and field values.
     * @since 3.6.0
     */
    public static function additional_nocache_headers($headers)
{
}
    /**
     * Add a transient to delete on shutdown.
     *
     * @since 3.6.0
     * @param string|array $keys Transient key or keys.
     */
    public static function queue_delete_transient($keys)
{
}
    /**
     * Transients that don't need to be cleaned right away can be deleted on shutdown to avoid repetition.
     *
     * @since 3.6.0
     */
    public static function delete_transients_on_shutdown()
{
}
    /**
     * Used to clear layered nav counts based on passed attribute names.
     *
     * @since 3.6.0
     * @param array $attribute_keys Attribute keys.
     */
    public static function invalidate_attribute_count($attribute_keys)
{
}
    /**
     * Get a hash of the customer location.
     *
     * @return string
     */
    public static function geolocation_ajax_get_location_hash()
{
}
    /**
     * Prevent caching on certain pages
     */
    public static function prevent_caching()
{
}
    /**
     * When using geolocation via ajax, to bust cache, redirect if the location hash does not equal the querystring.
     *
     * This prevents caching of the wrong data for this request.
     */
    public static function geolocation_ajax_redirect()
{
}
    /**
     * Updates the `woocommerce_geo_hash` cookie, which is used to help ensure we display
     * the correct pricing etc to customers, according to their billing country.
     *
     * Note that:
     *
     * A) This only sets the cookie if the default customer address is set to "Geolocate (with
     *    Page Caching Support)".
     *
     * B) It is hooked into the `wc_ajax_update_order_review` action, which has the benefit of
     *    ensuring we update the cookie any time the billing country is changed.
     */
    public static function update_geolocation_hash()
{
}
    /**
     * Get transient version.
     *
     * When using transients with unpredictable names, e.g. those containing an md5
     * hash in the name, we need a way to invalidate them all at once.
     *
     * When using default WP transients we're able to do this with a DB query to
     * delete transients manually.
     *
     * With external cache however, this isn't possible. Instead, this function is used
     * to append a unique string (based on time()) to each transient. When transients
     * are invalidated, the transient version will increment and data will be regenerated.
     *
     * Raised in issue https://github.com/woocommerce/woocommerce/issues/5777.
     * Adapted from ideas in http://tollmanz.com/invalidation-schemes/.
     *
     * @param  string  $group   Name for the group of transients we need to invalidate.
     * @param  boolean $refresh true to force a new version.
     * @return string transient version based on time(), 10 digits.
     */
    public static function get_transient_version($group, $refresh = false)
{
}
    /**
     * Set constants to prevent caching by some plugins.
     *
     * @param  mixed $return Value to return. Previously hooked into a filter.
     * @return mixed
     */
    public static function set_nocache_constants($return = true)
{
}
    /**
     * Notices function.
     */
    public static function notices()
{
}
    /**
     * Clean term caches added by WooCommerce.
     *
     * @since 3.3.4
     * @param array|int $ids Array of ids or single ID to clear cache for.
     * @param string    $taxonomy Taxonomy name.
     */
    public static function clean_term_cache($ids, $taxonomy)
{
}
    /**
     * When the transient version increases, this is used to remove all past transients to avoid filling the DB.
     *
     * Note; this only works on transients appended with the transient version, and when object caching is not being used.
     *
     * @deprecated 3.6.0 Adjusted transient usage to include versions within the transient values, making this cleanup obsolete.
     * @since  2.3.10
     * @param string $version Version of the transient to remove.
     */
    public static function delete_version_transients($version = '')
{
}
}
