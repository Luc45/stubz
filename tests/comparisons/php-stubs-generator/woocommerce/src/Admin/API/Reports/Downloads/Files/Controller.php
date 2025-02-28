<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Downloads\Files;

/**
 * REST API Reports downloads files controller class.
 *
 * @internal
 * @extends WC_REST_Reports_Controller
 */
class Controller extends \WC_REST_Reports_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/downloads/files';
}