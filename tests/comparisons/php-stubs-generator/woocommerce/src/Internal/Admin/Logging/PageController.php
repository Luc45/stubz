<?php

namespace Automattic\WooCommerce\Internal\Admin\Logging;

/**
 * PageController class.
 */
class PageController
{
    /**
     * Initialize dependencies.
     *
     * @internal
     *
     * @param FileController $file_controller Instance of FileController.
     * @param Settings       $settings        Instance of Settings.
     *
     * @return void
     */
    final public function init(\Automattic\WooCommerce\Internal\Admin\Logging\FileV2\FileController $file_controller, \Automattic\WooCommerce\Internal\Admin\Logging\Settings $settings): void
    {
    }
    /**
     * Determine if the current tab on the Status page is Logs, and if so, fire an action.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function maybe_do_logs_tab_action(): void
    {
    }
    /**
     * Notices to display on Logs screens.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function notices()
    {
    }
    /**
     * Get the canonical URL for the Logs tab of the Status admin page.
     *
     * @return string
     */
    public function get_logs_tab_url(): string
    {
    }
    /**
     * Render the "Logs" tab, depending on the current default log handler.
     *
     * @return void
     */
    public function render(): void
    {
    }
    /**
     * Get the default values for URL query params for FileV2 views.
     *
     * @return string[]
     */
    public function get_query_param_defaults(): array
    {
    }
    /**
     * Get and validate URL query params for FileV2 views.
     *
     * @param array $param_keys Optional. The names of the params you want to get.
     *
     * @return array
     */
    public function get_query_params(array $param_keys = array()): array
    {
    }
    /**
     * Register screen options for the logging views.
     *
     * @param string $view The current view within the Logs tab.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function setup_screen_options(string $view): void
    {
    }
    /**
     * Process bulk actions initiated from the log file list table.
     *
     * @param string $view The current view within the Logs tab.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_list_table_bulk_actions(string $view): void
    {
    }
}
