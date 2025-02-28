<?php

/**
 * REST API Taxes controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Taxes_V1_Controller
 */
class WC_REST_Taxes_V2_Controller extends \WC_REST_Taxes_V1_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';
}
