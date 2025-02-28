<?php
/**
 * Class WC_Plugin_Api_Updater
 */
class WC_Plugin_Api_Updater
{
    /**
     * Loads the class, runs on init.
     */
    public static function load()
{
}
    /**
     * Plugin information callback for Woo extensions.
     *
     * @param object $response The response core needs to display the modal.
     * @param string $action The requested plugins_api() action.
     * @param object $args Arguments passed to plugins_api().
     *
     * @return object An updated $response.
     */
    public static function plugins_api($response, $action, $args)
{
}
    /**
     * Theme information callback for Woo themes.
     *
     * @param object $response The response core needs to display the modal.
     * @param string $action The requested themes_api() action.
     * @param object $args Arguments passed to themes_api().
     */
    public static function themes_api($response, $action, $args)
{
}
    /**
     * Override the products API to fetch data from the Helper API if it's a Woo product.
     *
     * @param object $response The response core needs to display the modal.
     * @param string $action The requested action.
     * @param object $args Arguments passed to the API.
     */
    public static function override_products_api_response($response, $action, $args)
{
}
}
