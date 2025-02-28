<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * Class CartExtensionsSchema
 */
class CartExtensionsSchema
{
    const IDENTIFIER = 'cart-extensions';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart-extensions';

    /**
     * Cart schema instance.
     *
     * @var CartSchema
     */
    public $cart_schema = null;

    /**
     * Constructor.
     *
     * @param ExtendSchema     $extend Rest Extending instance.
     * @param SchemaController $controller Schema Controller instance.
     */
    public function __construct(Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, Automattic\WooCommerce\StoreApi\SchemaController $controller)
{
}
    /**
     * Cart extensions schema properties.
     *
     * @return array
     */
    public function get_properties()
{
}
    /**
     * Handle the request and return a valid response for this endpoint.
     *
     * @param \WP_REST_Request $request Request containing data for the extension callback.
     * @throws RouteException When callback is not callable or parameters are incorrect.
     *
     * @return array
     */
    public function get_item_response($request = null)
{
}
}