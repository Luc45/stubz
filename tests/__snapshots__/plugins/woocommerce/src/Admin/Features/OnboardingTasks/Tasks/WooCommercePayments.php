<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * WooCommercePayments Task
 */
class WooCommercePayments extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
{
    /**
     * Used to cache is_complete() method result.
     *
     * @var null
     */
    private $is_complete_result = null;

    /**
     * ID.
     *
     * @return string
     */
    public function get_id()
    {
        // stub
    }

    /**
     * Title.
     *
     * @return string
     */
    public function get_title()
    {
        // stub
    }

    /**
     * Badge.
     *
     * @return string
     */
    public function get_badge()
    {
        // stub
    }

    /**
     * Content.
     *
     * @return string
     */
    public function get_content()
    {
        // stub
    }

    /**
     * Additional data.
     *
     * @return mixed
     */
    public function get_additional_data()
    {
        // stub
    }

    /**
     * Time.
     *
     * @return string
     */
    public function get_time()
    {
        // stub
    }

    /**
     * Action label.
     *
     * @return string
     */
    public function get_action_label()
    {
        // stub
    }

    /**
     * Task completion.
     *
     * @return bool
     */
    public function is_complete()
    {
        // stub
    }

    /**
     * Task visibility.
     *
     * @return bool
     */
    public function can_view()
    {
        // stub
    }

    /**
     * Check if the WooPayments plugin was requested during onboarding.
     *
     * @return bool
     */
    public static function is_requested()
    {
        // stub
    }

    /**
     * Check if the WooPayments plugin is installed.
     *
     * @return bool
     */
    public static function is_installed()
    {
        // stub
    }

    /**
     * Check if the WooPayments plugin is active.
     *
     * @return bool
     */
    public static function is_wcpay_active()
    {
        // stub
    }

    /**
     * Check if WooPayments is connected.
     *
     * @return bool
     */
    public static function is_connected()
    {
        // stub
    }

    /**
     * Check if WooPayments needs setup.
     * Errored data or payments not enabled.
     *
     * @return bool
     */
    public static function is_account_partially_onboarded()
    {
        // stub
    }

    /**
     * Get the WooPayments payment gateway suggestion.
     *
     * @return object|null The WooPayments suggestion, or null if none found.
     */
    public static function get_suggestion()
    {
        // stub
    }

    /**
     * Check if the store location is in a WooPayments supported country.
     *
     * We infer this from the availability of a WooPayments payment gateways suggestion.
     *
     * @return bool True if the store location is in a WooPayments supported country, false otherwise.
     */
    public static function is_supported()
    {
        // stub
    }

    /**
     * Get the WooPayments gateway.
     *
     * @return \WC_Payments|null
     */
    private static function get_gateway()
    {
        // stub
    }

    /**
     * Check if the store has any enabled ecommerce gateways, other than WooPayments.
     *
     * We exclude offline payment methods from this check.
     *
     * @return bool
     */
    public static function has_other_ecommerce_gateways(): bool
    {
        // stub
    }

    /**
     * The task action URL.
     *
     * @return string
     */
    public function get_action_url()
    {
        // stub
    }

}

