<?php

namespace Automattic\WooCommerce\Internal\Admin\Onboarding;

/**
 * Contains logic around Jetpack setup during onboarding.
 */
class OnboardingJetpack
{
    /**
     * Class instance.
     *
     * @var OnboardingJetpack instance
     */
    private static $instance = null;

    /**
     * Get class instance.
     */
    final public static function instance()
{
}
    /**
     * Init.
     */
    public function init()
{
}
    /**
     * Sets the woocommerce_setup_jetpack_opted_in to true when Jetpack connects to WPCOM.
     */
    public function set_woocommerce_setup_jetpack_opted_in()
{
}
    /**
     * Ensure that Jetpack gets installed and activated ahead of WooCommerce Payments
     * if both are being installed/activated at the same time.
     *
     * See: https://github.com/Automattic/woocommerce-payments/issues/1663
     * See: https://github.com/Automattic/jetpack/issues/19624
     *
     * @param array $plugins A list of plugins to install or activate.
     *
     * @return array
     */
    public function activate_and_install_jetpack_ahead_of_wcpay($plugins)
{
}
}