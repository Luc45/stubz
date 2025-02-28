<?php
/**
 * Main WooCommerce Class.
 *
 * @class WooCommerce
 */
final class WooCommerce
{
    /**
     * WooCommerce version.
     *
     * @var string
     */
    public $version = '9.7.0';
    /**
     * WooCommerce Schema version.
     *
     * @since 4.3 started with version string 430.
     *
     * @var string
     */
    public $db_version = '920';
    /**
     * The single instance of the class.
     *
     * @var WooCommerce
     * @since 2.1
     */
    protected static $_instance = null;
    /**
     * Session instance.
     *
     * @var WC_Session|WC_Session_Handler
     */
    public $session = null;
    /**
     * Query instance.
     *
     * @var WC_Query
     */
    public $query = null;
    /**
     * Product factory instance.
     *
     * @var WC_Product_Factory
     */
    public $product_factory = null;
    /**
     * Countries instance.
     *
     * @var WC_Countries
     */
    public $countries = null;
    /**
     * Integrations instance.
     *
     * @var WC_Integrations
     */
    public $integrations = null;
    /**
     * Cart instance.
     *
     * @var WC_Cart
     */
    public $cart = null;
    /**
     * Customer instance.
     *
     * @var WC_Customer
     */
    public $customer = null;
    /**
     * Order factory instance.
     *
     * @var WC_Order_Factory
     */
    public $order_factory = null;
    /**
     * Structured data instance.
     *
     * @var WC_Structured_Data
     */
    public $structured_data = null;
    /**
     * Array of deprecated hook handlers.
     *
     * @var array of WC_Deprecated_Hooks
     */
    public $deprecated_hook_handlers = array();
    /**
     * Main WooCommerce Instance.
     *
     * Ensures only one instance of WooCommerce is loaded or can be loaded.
     *
     * @since 2.1
     * @static
     * @see WC()
     * @return WooCommerce - Main instance.
     */
    public static function instance()
{
}
    /**
     * Cloning is forbidden.
     *
     * @since 2.1
     */
    public function __clone()
{
}
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 2.1
     */
    public function __wakeup()
{
}
    /**
     * Autoload inaccessible or non-existing properties on demand.
     *
     * @param mixed $key Key name.
     * @return mixed
     */
    public function __get($key)
{
}
    /**
     * Set the value of an inaccessible or non-existing property.
     *
     * @param string $key Property name.
     * @param mixed  $value Property value.
     * @throws Exception Attempt to access a property that's private or protected.
     */
    public function __set(string $key, $value)
{
}
    /**
     * Check if the Legacy REST API plugin is active (and thus the Legacy REST API is available).
     *
     * @return bool
     */
    public function legacy_rest_api_is_available()
{
}
    /**
     * WooCommerce Constructor.
     */
    public function __construct()
{
}
    /**
     * When WP has loaded all plugins, trigger the `woocommerce_loaded` hook.
     *
     * This ensures `woocommerce_loaded` is called only after all other plugins
     * are loaded, to avoid issues caused by plugin directory naming changing
     * the load order. See #21524 for details.
     *
     * @since 3.6.0
     */
    public function on_plugins_loaded()
{
}
    /**
     * Initialize Jetpack Connection Config.
     *
     * @return void
     */
    public function init_jetpack_connection_config()
{
}
    /**
     * Add woocommerce_inbox_variant for the Remote Inbox Notification.
     *
     * P2 post can be found at https://wp.me/paJDYF-1uJ.
     *
     * This will no longer be used. The more flexible add_woocommerce_remote_variant
     * below will be used instead.
     */
    public function add_woocommerce_inbox_variant()
{
}
    /**
     * Add woocommerce_remote_variant_assignment used to determine cohort
     * or group assignment for Remote Spec Engines.
     */
    public function add_woocommerce_remote_variant()
{
}
    /**
     * Ensures fatal errors are logged so they can be picked up in the status report.
     *
     * @since 3.2.0
     */
    public function log_errors()
{
}
    /**
     * Returns true if the request is a non-legacy REST API request.
     *
     * Legacy REST requests should still run some extra code for backwards compatibility.
     *
     * @todo: replace this function once core WP function is available: https://core.trac.wordpress.org/ticket/42061.
     *
     * @return bool
     */
    public function is_rest_api_request()
{
}
    /**
     * Returns true if the request is a store REST API request.
     *
     * @return bool
     */
    public function is_store_api_request()
{
}
    /**
     * Load REST API.
     */
    public function load_rest_api()
{
}
    /**
     * Include required core files used in admin and on the frontend.
     */
    public function includes()
{
}
    /**
     * Include required frontend files.
     */
    public function frontend_includes()
{
}
    /**
     * Function used to Init WooCommerce Template Functions - This makes them pluggable by plugins and themes.
     */
    public function include_template_functions()
{
}
    /**
     * Init WooCommerce when WordPress Initialises.
     */
    public function init()
{
}
    /**
     * Load Localisation files.
     *
     * Note: the first-loaded translation file overrides any following ones if the same translation is present.
     *
     * Locales found in:
     *      - WP_LANG_DIR/woocommerce/woocommerce-LOCALE.mo
     *      - WP_LANG_DIR/plugins/woocommerce-LOCALE.mo
     */
    public function load_plugin_textdomain()
{
}
    /**
     * Ensure theme and server variable compatibility and setup image sizes.
     */
    public function setup_environment()
{
}
    /**
     * Add WC Image sizes to WP.
     *
     * As of 3.3, image sizes can be registered via themes using add_theme_support for woocommerce
     * and defining an array of args. If these are not defined, we will use defaults. This is
     * handled in wc_get_image_size function.
     *
     * 3.3 sizes:
     *
     * woocommerce_thumbnail - Used in product listings. We assume these work for a 3 column grid layout.
     * woocommerce_single - Used on single product pages for the main image.
     *
     * @since 2.3
     */
    public function add_image_sizes()
{
}
    /**
     * Get the plugin url.
     *
     * @return string
     */
    public function plugin_url()
{
}
    /**
     * Get the plugin path.
     *
     * @return string
     */
    public function plugin_path()
{
}
    /**
     * Get the template path.
     *
     * @return string
     */
    public function template_path()
{
}
    /**
     * Get Ajax URL.
     *
     * @return string
     */
    public function ajax_url()
{
}
    /**
     * Return the WC API URL for a given request.
     *
     * @param string    $request Requested endpoint.
     * @param bool|null $ssl     If should use SSL, null if should auto detect. Default: null.
     * @return string
     */
    public function api_request_url($request, $ssl = null)
{
}
    /**
     * Initialize the customer and cart objects and setup customer saving on shutdown.
     *
     * Note, wc()->customer is session based. Changes to customer data via this property are not persisted to the database automatically.
     *
     * @since 3.6.4
     * @return void
     */
    public function initialize_cart()
{
}
    /**
     * Initialize the session class.
     *
     * @since 3.6.4
     * @return void
     */
    public function initialize_session()
{
}
    /**
     * Tell bots not to index some WooCommerce-created directories.
     *
     * We try to detect the default "User-agent: *" added by WordPress and add our rules to that group, because
     * it's possible that some bots will only interpret the first group of rules if there are multiple groups with
     * the same user agent.
     *
     * @param string $output The contents that WordPress will output in a robots.txt file.
     *
     * @return string
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function robots_txt($output)
{
}
    /**
     * Set tablenames inside WPDB object.
     */
    public function wpdb_table_fix()
{
}
    /**
     * Ran when any plugin is activated.
     *
     * @since 3.6.0
     * @param string $filename The filename of the activated plugin.
     */
    public function activated_plugin($filename)
{
}
    /**
     * Ran when any plugin is deactivated.
     *
     * @since 3.6.0
     * @param string $filename The filename of the deactivated plugin.
     */
    public function deactivated_plugin($filename)
{
}
    /**
     * Get queue instance.
     *
     * @return WC_Queue_Interface
     */
    public function queue()
{
}
    /**
     * Get Checkout Class.
     *
     * @return WC_Checkout
     */
    public function checkout()
{
}
    /**
     * Get gateways class.
     *
     * @return WC_Payment_Gateways
     */
    public function payment_gateways()
{
}
    /**
     * Get shipping class.
     *
     * @return WC_Shipping
     */
    public function shipping()
{
}
    /**
     * Email Class.
     *
     * @return WC_Emails
     */
    public function mailer()
{
}
    /**
     * Check if plugin assets are built and minified
     *
     * @return bool
     */
    public function build_dependencies_satisfied()
{
}
    /**
     * Output a admin notice when build dependencies not met.
     *
     * @return void
     */
    public function build_dependencies_notice()
{
}
    /**
     * Is the WooCommerce Admin actively included in the WooCommerce core?
     * Based on presence of a basic WC Admin function.
     *
     * @return boolean
     */
    public function is_wc_admin_active()
{
}
    /**
     * Call a user function. This should be used to execute any non-idempotent function, especially
     * those in the `includes` directory or provided by WordPress.
     *
     * This method can be useful for unit tests, since functions called using this method
     * can be easily mocked by using WC_Unit_Test_Case::register_legacy_proxy_function_mocks.
     *
     * @param string $function_name The function to execute.
     * @param mixed  ...$parameters The parameters to pass to the function.
     *
     * @return mixed The result from the function.
     *
     * @since 4.4
     */
    public function call_function($function_name, ...$parameters)
{
}
    /**
     * Call a static method in a class. This should be used to execute any non-idempotent method in classes
     * from the `includes` directory.
     *
     * This method can be useful for unit tests, since methods called using this method
     * can be easily mocked by using WC_Unit_Test_Case::register_legacy_proxy_static_mocks.
     *
     * @param string $class_name The name of the class containing the method.
     * @param string $method_name The name of the method.
     * @param mixed  ...$parameters The parameters to pass to the method.
     *
     * @return mixed The result from the method.
     *
     * @since 4.4
     */
    public function call_static($class_name, $method_name, ...$parameters)
{
}
    /**
     * Gets an instance of a given legacy class.
     * This must not be used to get instances of classes in the `src` directory.
     *
     * This method can be useful for unit tests, since objects obtained using this method
     * can be easily mocked by using WC_Unit_Test_Case::register_legacy_proxy_class_mocks.
     *
     * @param string $class_name The name of the class to get an instance for.
     * @param mixed  ...$args Parameters to be passed to the class constructor or to the appropriate internal 'get_instance_of_' method.
     *
     * @return object The instance of the class.
     * @throws \Exception The requested class belongs to the `src` directory, or there was an error creating an instance of the class.
     *
     * @since 4.4
     */
    public function get_instance_of(string $class_name, ...$args)
{
}
    /**
     * Gets the value of a global.
     *
     * @param string $global_name The name of the global to get the value for.
     * @return mixed The value of the global.
     */
    public function get_global(string $global_name)
{
}
    /**
     * Register WC settings from WP-API to the REST API.
     *
     * This method used to be part of the now removed Legacy REST API.
     *
     * @since 9.0.0
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function register_wp_admin_settings()
{
}
    /**
     * Converts the WooCommerce slug to the correct slug for the current version.
     * This ensures that when the plugin is installed in a different folder name, the correct slug is used so that dependent plugins can be installed/activated.
     *
     * @since 9.0.0
     * @param string $slug The plugin slug to convert.
     *
     * @return string
     */
    public function convert_woocommerce_slug($slug)
{
}
    /**
     * Register the remote log handler.
     *
     * @param \WC_Log_Handler[] $handlers The handlers to register.
     *
     * @return \WC_Log_Handler[]
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function register_remote_log_handler($handlers)
{
}
    /**
     * Tracks the history WooCommerce Allow Tracking option.
     * - When the field was first set to allow tracking
     * - Last time the option was changed
     *
     * @param string $old_value The old value for the woocommerce_allow_tracking option.
     * @param string $value The current value for the woocommerce_allow_tracking option.
     * @since x.x.x
     *
     * @return void
     */
    public function get_tracking_history($old_value, $value)
{
}
}
