<?php

namespace Automattic\WooCommerce\Internal\Features;

/**
 * Class to define the WooCommerce features that can be enabled and disabled by admin users,
 * provides also a mechanism for WooCommerce plugins to declare that they are compatible
 * (or incompatible) with a given feature.
 *
 * Features should not be enabled, or disabled, before init.
 */
class FeaturesController
{
    const FEATURE_ENABLED_CHANGED_ACTION = 'woocommerce_feature_enabled_changed';
    const PLUGINS_COMPATIBLE_BY_DEFAULT_OPTION = 'woocommerce_plugins_are_compatible_with_features_by_default';
    /**
     * The existing feature definitions.
     *
     * @var array[]
     */
    private $features = array();
    /**
     * The registered compatibility info for WooCommerce plugins, with plugin names as keys.
     *
     * @var array
     */
    private $compatibility_info_by_plugin = array();
    /**
     * The registered compatibility info for WooCommerce plugins, with feature ids as keys.
     *
     * @var array
     */
    private $compatibility_info_by_feature = array();
    /**
     * The LegacyProxy instance to use.
     *
     * @var LegacyProxy
     */
    private $proxy = null;
    /**
     * The PluginUtil instance to use.
     *
     * @var PluginUtil
     */
    private $plugin_util = null;
    /**
     * Flag indicating that features will be enableable from the settings page
     * even when they are incompatible with active plugins.
     *
     * @var bool
     */
    private $force_allow_enabling_features = false;
    /**
     * Flag indicating that plugins will be activable from the plugins page
     * even when they are incompatible with enabled features.
     *
     * @var bool
     */
    private $force_allow_enabling_plugins = false;
    /**
     * List of plugins excluded from feature compatibility warnings in UI.
     *
     * @var string[]
     */
    private $plugins_excluded_from_compatibility_ui = null;
    /**
     * Creates a new instance of the class.
     */
    public function __construct()
{
}
    /**
     * Register a feature.
     *
     * This should be called during the `woocommerce_register_feature_definitions` action hook.
     *
     * @param string $slug The ID slug of the feature.
     * @param string $name The name of the feature that will appear on the Features screen and elsewhere.
     * @param array  $args {
     *     Optional. Properties that make up the feature definition. Each of these properties can also be set as a
     *     callback function, as long as that function returns the specified type.
     *
     *     @type array[] $additional_settings An array of definitions for additional settings controls related to
     *                                        the feature that will display on the Features screen. See the Settings API
     *                                        for the schema of these props.
     *     @type string  $description         A brief description of the feature, used as an input label if the feature
     *                                        setting is a checkbox.
     *     @type bool    $disabled            True to disable the setting field for this feature on the Features screen,
     *                                        so it can't be changed.
     *     @type bool    $disable_ui          Set to true to hide the setting field for this feature on the
     *                                        Features screen. Defaults to false.
     *     @type bool    $enabled_by_default  Set to true to have this feature by opt-out instead of opt-in.
     *                                        Defaults to false.
     *     @type bool    $is_experimental     Set to true to display this feature under the "Experimental" heading on
     *                                        the Features screen. Features set to experimental are also omitted from
     *                                        the features list in some cases. Defaults to true.
     *     @type bool    $is_legacy           Set to true if this feature existed before the FeaturesController class
     *                                        was introduced. Features set to legacy also do not produce warnings about
     *                                        incompatible plugins. Defaults to false.
     *     @type string  $option_key          The key name for the option that enables/disables the feature.
     *     @type int     $order               The order that the feature will appear in the list on the Features screen.
     *                                        Higher number = higher in the list. Defaults to 10.
     *     @type array   $setting             The properties used by the Settings API to render the setting control on
     *                                        the Features screen. See the Settings API for the schema of these props.
     * }
     *
     * @return void
     */
    public function add_feature_definition($slug, $name, array $args = array())
{
}
    /**
     * Generate and cache the feature definitions.
     *
     * @return array[]
     */
    private function get_feature_definitions()
{
}
    /**
     * Initialize the class instance.
     *
     * @internal
     *
     * @param LegacyProxy $proxy The instance of LegacyProxy to use.
     * @param PluginUtil  $plugin_util The instance of PluginUtil to use.
     */
    final public function init(Automattic\WooCommerce\Proxies\LegacyProxy $proxy, Automattic\WooCommerce\Utilities\PluginUtil $plugin_util)
{
}
    /**
     * Get all the existing WooCommerce features.
     *
     * Returns an associative array where keys are unique feature ids
     * and values are arrays with these keys:
     *
     * - name (string)
     * - description (string)
     * - is_experimental (bool)
     * - is_enabled (bool) (only if $include_enabled_info is passed as true)
     *
     * @param bool $include_experimental Include also experimental/work in progress features in the list.
     * @param bool $include_enabled_info True to include the 'is_enabled' field in the returned features info.
     * @returns array An array of information about existing features.
     */
    public function get_features(bool $include_experimental = false, bool $include_enabled_info = false): array
{
}
    /**
     * Check if plugins that don't declare compatibility nor incompatibility with a given feature
     * are to be considered incompatible with that feature.
     *
     * @param string $feature_id Feature id to check.
     * @return bool True if plugins that don't declare compatibility nor incompatibility with the feature will be considered incompatible with the feature.
     * @throws \InvalidArgumentException The feature doesn't exist.
     */
    public function get_plugins_are_incompatible_by_default(string $feature_id): bool
{
}
    /**
     * Check if a given feature is currently enabled.
     *
     * @param  string $feature_id Unique feature id.
     * @return bool True if the feature is enabled, false if not or if the feature doesn't exist.
     */
    public function feature_is_enabled(string $feature_id): bool
{
}
    /**
     * Check if a given feature is enabled by default.
     *
     * @param string $feature_id Unique feature id.
     * @return boolean TRUE if the feature is enabled by default, FALSE otherwise.
     */
    private function feature_is_enabled_by_default(string $feature_id): bool
{
}
    /**
     * Change the enabled/disabled status of a feature.
     *
     * @param string $feature_id Unique feature id.
     * @param bool   $enable True to enable the feature, false to disable it.
     * @return bool True on success, false if feature doesn't exist or the new value is the same as the old value.
     */
    public function change_feature_enable(string $feature_id, bool $enable): bool
{
}
    /**
     * Declare (in)compatibility with a given feature for a given plugin.
     *
     * This method MUST be executed from inside a handler for the 'before_woocommerce_init' hook.
     *
     * The plugin name is expected to be in the form 'directory/file.php' and be one of the keys
     * of the array returned by 'get_plugins', but this won't be checked. Plugins are expected to use
     * FeaturesUtil::declare_compatibility instead, passing the full plugin file path instead of the plugin name.
     *
     * @param string $feature_id Unique feature id.
     * @param string $plugin_name Plugin name, in the form 'directory/file.php'.
     * @param bool   $positive_compatibility True if the plugin declares being compatible with the feature, false if it declares being incompatible.
     * @return bool True on success, false on error (feature doesn't exist or not inside the required hook).
     * @throws \Exception A plugin attempted to declare itself as compatible and incompatible with a given feature at the same time.
     */
    public function declare_compatibility(string $feature_id, string $plugin_name, bool $positive_compatibility = true): bool
{
}
    /**
     * Check whether a feature exists with a given id.
     *
     * @param string $feature_id The feature id to check.
     * @return bool True if the feature exists.
     */
    private function feature_exists(string $feature_id): bool
{
}
    /**
     * Get the ids of the features that a certain plugin has declared compatibility for.
     *
     * This method can't be called before the 'woocommerce_init' hook is fired.
     *
     * @param string $plugin_name Plugin name, in the form 'directory/file.php'.
     * @param bool   $enabled_features_only True to return only names of enabled plugins.
     * @return array An array having a 'compatible' and an 'incompatible' key, each holding an array of feature ids.
     */
    public function get_compatible_features_for_plugin(string $plugin_name, bool $enabled_features_only = false): array
{
}
    /**
     * Get the names of the plugins that have been declared compatible or incompatible with a given feature.
     *
     * @param string $feature_id Feature id.
     * @param bool   $active_only True to return only active plugins.
     * @return array An array having a 'compatible', an 'incompatible' and an 'uncertain' key, each holding an array of plugin names.
     */
    public function get_compatible_plugins_for_feature(string $feature_id, bool $active_only = false): array
{
}
    /**
     * Check if the 'woocommerce_init' has run or is running, do a 'wc_doing_it_wrong' if not.
     *
     * @param string|null $function_name Name of the invoking method, if not null, 'wc_doing_it_wrong' will be invoked if 'woocommerce_init' has not run and is not running.
     *
     * @return bool True if 'woocommerce_init' has run or is running, false otherwise.
     */
    private function verify_did_woocommerce_init(string|null $function_name = null): bool
{
}
    /**
     * Get the name of the option that enables/disables a given feature.
     *
     * Note that it doesn't check if the feature actually exists. Instead it
     * defaults to "woocommerce_feature_{$feature_id}_enabled" if a different
     * name isn't specified in the feature registration.
     *
     * @param  string $feature_id The id of the feature.
     * @return string The option that enables or disables the feature.
     */
    public function feature_enable_option_name(string $feature_id): string
{
}
    /**
     * Checks whether a feature id corresponds to a legacy feature
     * (a feature that existed prior to the implementation of the features engine).
     *
     * @param string $feature_id The feature id to check.
     * @return bool True if the id corresponds to a legacy feature.
     */
    public function is_legacy_feature(string $feature_id): bool
{
}
    /**
     * Sets a flag indicating that it's allowed to enable features for which incompatible plugins are active
     * from the WooCommerce feature settings page.
     */
    public function allow_enabling_features_with_incompatible_plugins(): void
{
}
    /**
     * Sets a flag indicating that it's allowed to activate plugins for which incompatible features are enabled
     * from the WordPress plugins page.
     */
    public function allow_activating_plugins_with_incompatible_features(): void
{
}
    /**
     * Adds our callbacks for the `updated_option` and `added_option` filter hooks.
     *
     * We delay adding these hooks until `init`, because both callbacks need to load our list of feature definitions,
     * and building that list requires translating various strings (which should not be done earlier than `init`).
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function start_listening_for_option_changes(): void
{
}
    /**
     * Handler for the 'added_option' hook.
     *
     * It fires FEATURE_ENABLED_CHANGED_ACTION when a feature is enabled or disabled.
     *
     * @param string $option The option that has been created.
     * @param mixed  $value The value of the option.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function process_added_option(string $option, $value)
{
}
    /**
     * Handler for the 'updated_option' hook.
     *
     * It fires FEATURE_ENABLED_CHANGED_ACTION when a feature is enabled or disabled.
     *
     * @param string $option    The option that has been modified.
     * @param mixed  $old_value The old value of the option.
     * @param mixed  $value     The new value of the option.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function process_updated_option(string $option, $old_value, $value)
{
}
    /**
     * Handler for the 'woocommerce_get_sections_advanced' hook,
     * it adds the "Features" section to the advanced settings page.
     *
     * @param array $sections The original sections array.
     * @return array The updated sections array.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_features_section($sections)
{
}
    /**
     * Handler for the 'woocommerce_get_settings_advanced' hook,
     * it adds the settings UI for all the existing features.
     *
     * Note that the settings added via the 'woocommerce_settings_features' hook will be
     * displayed in the non-experimental features section.
     *
     * @param array  $settings The existing settings for the corresponding settings section.
     * @param string $current_section The section to get the settings for.
     * @return array The updated settings array.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_feature_settings($settings, $current_section): array
{
}
    /**
     * Get the parameters to display the setting enable/disable UI for a given feature.
     *
     * @param string $feature_id The feature id.
     * @param array  $feature The feature parameters, as returned by get_features.
     * @return array The parameters to add to the settings array.
     */
    private function get_setting_for_feature(string $feature_id, array $feature): array
{
}
    /**
     * Handle the plugin deactivation hook.
     *
     * @param string $plugin_name Name of the plugin that has been deactivated.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_plugin_deactivation($plugin_name): void
{
}
    /**
     * Handler for the all_plugins filter.
     *
     * Returns the list of plugins incompatible with a given plugin
     * if we are in the plugins page and the query string of the current request
     * looks like '?plugin_status=incompatible_with_feature&feature_id=<feature id>'.
     *
     * @param array $plugin_list The original list of plugins.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function filter_plugins_list($plugin_list): array
{
}
    /**
     * Returns the list of plugins incompatible with a given feature.
     *
     * @param string $feature_id ID of the feature. Can also be `all` to denote all features.
     * @param array  $plugin_list       List of plugins to filter.
     *
     * @return array List of plugins incompatible with the given feature.
     */
    public function get_incompatible_plugins($feature_id, $plugin_list)
{
}
    /**
     * Handler for the admin_notices action.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function display_notices_in_plugins_page(): void
{
}
    /**
     * Shows a warning when there are any incompatibility between active plugins and enabled features.
     * The warning is shown in on any admin screen except the plugins screen itself, since
     * there's already a "You are viewing plugins that are incompatible" notice.
     */
    private function maybe_display_feature_incompatibility_warning(): void
{
}
    /**
     * Shows a "You are viewing the plugins that are incompatible with the X feature"
     * if we are in the plugins page and the query string of the current request
     * looks like '?plugin_status=incompatible_with_feature&feature_id=<feature id>'.
     */
    private function maybe_display_current_feature_filter_description(): bool
{
}
    /**
     * If the 'incompatible with features' plugin list is being rendered, invalidate existing cached plugin data.
     *
     * This heads off a problem in which WordPress's `get_plugins()` function may be called much earlier in the request
     * (by third party code, for example), the results of which are cached, and before WooCommerce can modify the list
     * to inject useful information of its own.
     *
     * @see https://github.com/woocommerce/woocommerce/issues/37343
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function maybe_invalidate_cached_plugin_data(): void
{
}
    /**
     * Handler for the 'after_plugin_row' action.
     * Displays a "This plugin is incompatible with X features" notice if necessary.
     *
     * @param string $plugin_file The id of the plugin for which a row has been rendered in the plugins page.
     * @param array  $plugin_data Plugin data, as returned by 'get_plugins'.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_plugin_list_rows($plugin_file, $plugin_data)
{
}
    /**
     * Get the URL of the features settings page.
     *
     * @return string
     */
    public function get_features_page_url(): string
{
}
    /**
     * Fix for the HTML of the plugins list when there are feature-plugin incompatibility warnings.
     *
     * WordPress renders the plugin information rows in the plugins page in <tr> elements as follows:
     *
     * - If the plugin needs update, the <tr> will have an "update" class. This will prevent the lower
     *   border line to be drawn. Later an additional <tr> with an "update available" warning will be rendered,
     *   it will have a "plugin-update-tr" class which will draw the missing lower border line.
     * - Otherwise, the <tr> will be already drawn with the lower border line.
     *
     * This is a problem for our rendering of the "plugin is incompatible with X features" warning:
     *
     * - If the plugin info <tr> has "update", our <tr> will render nicely right after it; but then
     *   our own "plugin-update-tr" class will draw an additional line before the "needs update" warning.
     * - If not, the plugin info <tr> will render its lower border line right before our compatibility info <tr>.
     *
     * This small script fixes this by adding the "update" class to the plugin info <tr> if it doesn't have it
     * (so no extra line before our <tr>), or removing 'plugin-update-tr' from our <tr> otherwise
     * (and then some extra manual tweaking of margins is needed).
     *
     * @param string $current_screen The current screen object.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function enqueue_script_to_fix_plugin_list_html($current_screen): void
{
}
    /**
     * Handler for the 'views_plugins' hook that shows the links to the different views in the plugins page.
     * If we come from a "Manage incompatible plugins" in the features page we'll show just two views:
     * "All" (so that it's easy to go back to a known state) and "Incompatible with X".
     * We'll skip the rest of the views since the counts are wrong anyway, as we are modifying
     * the plugins list via the 'all_plugins' filter.
     *
     * @param array $views An array of view ids => view links.
     * @return string[] The actual views array to use.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_plugins_page_views_list($views): array
{
}
    /**
     * Set the feature nonce to be sent from client side.
     *
     * @param array $settings Component settings.
     *
     * @return array
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function set_change_feature_enable_nonce($settings)
{
}
    /**
     * Changes the feature given it's id, a toggle value and nonce as a query param.
     *
     * `/wp-admin/post.php?product_block_editor=1&_feature_nonce=1234`, 1 for on
     * `/wp-admin/post.php?product_block_editor=0&_feature_nonce=1234`, 0 for off
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function change_feature_enable_from_query_params(): void
{
}
}