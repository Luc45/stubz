<?php

namespace Automattic\WooCommerce\Internal\Admin\Schedulers;

/**
 * Class MailchimpScheduler
 *
 * @package Automattic\WooCommerce\Admin\Schedulers
 */
class MailchimpScheduler extends \
{
    const SUBSCRIBE_ENDPOINT = 'https://woocommerce.com/wp-json/wccom/v1/subscribe';

    const SUBSCRIBE_ENDPOINT_DEV = 'http://woocommerce.test/wp-json/wccom/v1/subscribe';

    const SUBSCRIBED_OPTION_NAME = 'woocommerce_onboarding_subscribed_to_mailchimp';

    const SUBSCRIBED_ERROR_COUNT_OPTION_NAME = 'woocommerce_onboarding_subscribed_to_mailchimp_error_count';

    const MAX_ERROR_THRESHOLD = 3;

    const LOGGER_CONTEXT = 'mailchimp_scheduler';

    /**
     * The logger instance.
     *
     * @var \WC_Logger_Interface|null
     */
    private $logger = null;

    /**
     * MailchimpScheduler constructor.
     *
     * @internal
     * @param \WC_Logger_Interface|null $logger Logger instance.
     */
    public function __construct(WC_Logger_Interface|null $logger = null)
    {
        // stub
    }

    /**
     * Attempt to subscribe store_email to MailChimp.
     *
     * @internal
     */
    public function run()
    {
        // stub
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
        // stub
    }

    /**
     * Reset options.
     *
     * @internal
     */
    public static function reset()
    {
        // stub
    }

    /**
     * Handle subscribe API error.
     *
     * @internal
     * @param string $extra_msg  Extra message to log.
     */
    private function handle_request_error($extra_msg = null)
    {
        // stub
    }

}

