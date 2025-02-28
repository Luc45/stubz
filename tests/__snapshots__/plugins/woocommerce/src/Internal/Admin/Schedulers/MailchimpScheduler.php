<?php

namespace Automattic\WooCommerce\Internal\Admin\Schedulers;

/**
 * Class MailchimpScheduler
 *
 * @package Automattic\WooCommerce\Admin\Schedulers
 */
class MailchimpScheduler
{
    public const SUBSCRIBE_ENDPOINT = 'https://woocommerce.com/wp-json/wccom/v1/subscribe';
    public const SUBSCRIBE_ENDPOINT_DEV = 'http://woocommerce.test/wp-json/wccom/v1/subscribe';
    public const SUBSCRIBED_OPTION_NAME = 'woocommerce_onboarding_subscribed_to_mailchimp';
    public const SUBSCRIBED_ERROR_COUNT_OPTION_NAME = 'woocommerce_onboarding_subscribed_to_mailchimp_error_count';
    public const MAX_ERROR_THRESHOLD = 3;
    public const LOGGER_CONTEXT = 'mailchimp_scheduler';
    /**
     * MailchimpScheduler constructor.
     *
     * @internal
     * @param \WC_Logger_Interface|null $logger Logger instance.
     */
    public function __construct(WC_Logger_Interface|null $logger = null)
{
}
    /**
     * Attempt to subscribe store_email to MailChimp.
     *
     * @internal
     */
    public function run()
{
}
    /**
     * Make an HTTP request to the API.
     *
     * @internal
     * @param string $store_email Email address to subscribe.
     * @param array  $address     Store address.
     *
     * @return mixed
     */
    public function make_request($store_email, $address)
{
}
    /**
     * Reset options.
     *
     * @internal
     */
    public static function reset()
{
}
}