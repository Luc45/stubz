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
     * A variable to hold the tests we fetched, and their variations for the current user.
     *
     * @var array
     */
    private $tests = array();

    /**
     * ExPlat Anonymous ID.
     *
     * @var string
     */
    private $anon_id = null;

    /**
     * ExPlat Platform name.
     *
     * @var string
     */
    private $platform = 'woocommerce';

    /**
     * Whether trcking consent is given.
     *
     * @var bool
     */
    private $consent = false;

    /**
     * Request variation as a auth wpcom user or not.
     *
     * @var boolean
     */
    private $as_auth_wpcom_user = false;

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
     * @param string $experiment_name    Name of the experiment.
     * @param bool   $as_auth_wpcom_user Request variation as a auth wp user or not.
     *
     * @return bool True if the user is in the treatment group, false otherwise.
     * @throws \Exception If there is an error retrieving the variation.
     */
    public static function in_treatment(string $experiment_name, bool $as_auth_wpcom_user = false)
{
}
    /**
     * Returns true if the current user is in the treatment group of the given experiment.
     *
     * If an exception occurs, it will be handled and false will be returned.
     *
     * @param string $experiment_name Name of the experiment.
     * @param bool   $as_auth_wpcom_user Request variation as an auth wp user or not.
     *
     * @return bool True if the user is in the treatment group, false otherwise (including if an exception is thrown).
     */
    public static function in_treatment_handled_exception(string $experiment_name, bool $as_auth_wpcom_user = false)
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
    /**
     * Fetch and cache the test variation for a provided A/B test from WP.com.
     *
     * ExPlat returns a null value when the assigned variation is control or
     * an assignment has not been set. In these instances, this method returns
     * a value of "control".
     *
     * @param string $test_name Name of the A/B test.
     * @return array|\WP_Error A/B test variation, or error on failure.
     */
    protected function fetch_variation($test_name)
{
}
}