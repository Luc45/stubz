<?php

/**
 * REST API Report Top Sellers controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Report_Top_Sellers_V1_Controller
 */
class WC_REST_Report_Top_Sellers_V2_Controller extends \WC_REST_Report_Top_Sellers_V1_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';
}