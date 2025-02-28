<?php

/**
 * Product query class.
 */
class WC_Product_Query extends \WC_Object_Query
{
    /**
     * Valid query vars for products.
     *
     * @return array
     */
    protected function get_default_query_vars()
{
}
    /**
     * Get products matching the current query vars.
     *
     * @return array|object of WC_Product objects
     */
    public function get_products()
{
}
}
