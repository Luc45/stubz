<?php

namespace WooCommerce\Admin;

/**
 * This class provides an interface to the Explat A/B tests.
 *
 * Usage:
 *
 * $anon_id = isset( $_COOKIE['tk_ai'] ) ? sanitize_text_field( wp_unslash( $_COOKIE['tk_ai'] ) ) : '';
 * $allow_tracking = 'yes' === get_option( 'woocommerce_allow_tracking' );
 * $abtest = new \WooCommerce\Admin\Experimental_Abtest(
 *      $anon_id,
 *      'woocommerce',
 *      $allow_tracking
 * );
 *
 * OR use the helper function:
 *
 * WooCommerce\Admin\Experimental_Abtest::in_treatment('experiment_name');
 *
 *
 * $isTreatment = $abtest->get_variation('your-experiment-name') === 'treatment';
 *
 * @internal This class is experimental and should not be used externally due to planned breaking changes.
 */
final class Experimental_Abtest
{
    /**
     * Constructor.
     *
     * @param string $anon_id ExPlat anonymous ID.
     * @param string $platform ExPlat platform name.
     * @param bool   $consent Whether tracking consent is given.
     * @param bool   $as_auth_wpcom_user  Request variation as a auth wp user or not.
     */
    public function __construct(string $anon_id, string $platform, bool $consent, bool $as_auth_wpcom_user = false)
    {
    }
    /**
     * Returns true if the current user is in the treatment group of the given experiment.
     *
     * @param string $experiment_name Name of the experiment.
     * @param bool   $as_auth_wpcom_user Request variation as a auth wp user or not.
     * @return bool
     */
    public static function in_treatment(string $experiment_name, bool $as_auth_wpcom_user = false)
    {
    }
    /**
     * Retrieve the test variation for a provided A/B test.
     *
     * @param string $test_name Name of the A/B test.
     * @return mixed|null A/B test variation, or null on failure.
     * @throws \Exception If there is an error retrieving the variation and the environment is not production.
     */
    public function get_variation($test_name)
    {
    }
    /**
     * Perform the request for a experiment assignment of a provided A/B test from WP.com.
     *
     * @param array $args Arguments to pass to the request for A/B test.
     * @return array|\WP_Error A/B test variation error on failure.
     */
    public function request_assignment($args)
    {
    }
}
