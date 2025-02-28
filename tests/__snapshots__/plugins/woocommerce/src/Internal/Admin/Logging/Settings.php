<?php

namespace Automattic\WooCommerce\Internal\Admin\Logging;

/**
 * Settings class.
 */
class Settings
{
    /**
     * Class Settings.
     */
    public function __construct()
{
}
    /**
     * Get the directory for storing log files.
     *
     * The `wp_upload_dir` function takes into account the possibility of multisite, and handles changing
     * the directory if the context is switched to a different site in the network mid-request.
     *
     * @param bool $create_dir Optional. True to attempt to create the log directory if it doesn't exist. Default true.
     *
     * @return string The full directory path, with trailing slash.
     */
    public static function get_log_directory(bool $create_dir = true): string
{
}
    /**
     * Handle the submission of the settings form and update the settings values.
     *
     * @param string $view The current view within the Logs tab.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function save_settings(string $view): void
{
}
    /**
     * Render the settings page.
     *
     * @return void
     */
    public function render_form(): void
{
}
    /**
     * Determine the current value of the logging_enabled setting.
     *
     * @return bool
     */
    public function logging_is_enabled(): bool
{
}
    /**
     * Determine the current value of the default_handler setting.
     *
     * @return string
     */
    public function get_default_handler(): string
{
}
    /**
     * Determine the current value of the retention_period_days setting.
     *
     * @return int
     */
    public function get_retention_period(): int
{
}
    /**
     * Determine the current value of the level_threshold setting.
     *
     * @return string
     */
    public function get_level_threshold(): string
{
}
}