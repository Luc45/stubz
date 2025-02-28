<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Class WCPayWelcomePage
 *
 * @package Automattic\WooCommerce\Admin\Features
 */
class WcPayWelcomePage
{
    /**
     * The incentive type for the WooPayments welcome page.
     */
    public const INCENTIVE_TYPE = 'welcome_page';
    /**
     * Class instance.
     *
     * @var ?WcPayWelcomePage
     */
    protected static Automattic\WooCommerce\Internal\Admin\WcPayWelcomePage|null $instance = null;
    /**
     * Get class instance.
     *
     * @return ?WcPayWelcomePage
     */
    public static function instance(): Automattic\WooCommerce\Internal\Admin\WcPayWelcomePage|null
{
}
    /**
     * WCPayWelcomePage constructor.
     */
    public function __construct()
{
}
    /**
     * Register hooks.
     */
    public function register()
{
}
    /**
     * Delayed hook registration.
     */
    public function delayed_register()
{
}
    /**
     * Registers the WooPayments welcome page.
     */
    public function register_menu_and_page()
{
}
    /**
     * Adds shared settings for the WooPayments incentive.
     *
     * @param array $settings Shared settings.
     * @return array The updated shared settings.
     */
    public function shared_settings(array $settings): array
{
}
    /**
     * Adds allowed promo notes for the WooPayments incentives.
     *
     * @param array $promo_notes Allowed promo notes.
     *
     * @return array
     */
    public function allowed_promo_notes(array $promo_notes = array()): array
{
}
    /**
     * Adds the WooPayments incentive badge to the onboarding task.
     *
     * @param string $badge Current badge.
     *
     * @return string
     */
    public function onboarding_task_badge(string $badge): string
{
}
    /**
     * Filter the onboarding task additional data to add the WooPayments incentive data to it.
     *
     * @param ?array $additional_data The current task additional data.
     *
     * @return ?array The filtered task additional data.
     */
    public function onboarding_task_additional_data(array|null $additional_data): array|null
{
}
    /**
     * Check if we have an incentive available to show.
     *
     * @param bool $skip_wcpay_active Whether to skip the check for the WooPayments plugin being active.
     *
     * @return bool Whether we have an incentive available to show.
     */
    public function has_incentive(bool $skip_wcpay_active = false): bool
{
}
}