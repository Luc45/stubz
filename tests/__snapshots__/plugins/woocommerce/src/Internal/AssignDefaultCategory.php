<?php

namespace Automattic\WooCommerce\Internal;

/**
 * Class to assign default category to products.
 */
class AssignDefaultCategory
{
    /**
     * Class initialization, to be executed when the class is resolved by the container.
     *
     * @internal
     */
    final public function init()
{
}
    /**
     * When a product category is deleted, we need to check
     * if the product has no categories assigned. Then assign
     * it a default category. We delay this with a scheduled
     * action job to not block the response.
     *
     * @return void
     */
    public function schedule_action()
{
}
    /**
     * Assigns default product category for products
     * that have no categories.
     *
     * @return void
     */
    public function maybe_assign_default_product_cat()
{
}
}