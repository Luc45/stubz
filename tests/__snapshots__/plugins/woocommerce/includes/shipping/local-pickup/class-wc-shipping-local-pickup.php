<?php

/**
 * Local Pickup Shipping Method.
 *
 * A simple shipping method allowing free pickup as a shipping method.
 *
 * @class       WC_Shipping_Local_Pickup
 * @version     2.6.0
 * @package     WooCommerce\Classes\Shipping
 */
class WC_Shipping_Local_Pickup
{
    /**
     * Shipping method cost.
     *
     * @var string
     */
    public $cost = null;

    /**
     * Constructor.
     *
     * @param int $instance_id Instance ID.
     */
    public function __construct($instance_id = 0)
    {
        // stub
    }

    /**
     * Initialize local pickup.
     */
    public function init()
    {
        // stub
    }

    /**
     * Calculate local pickup shipping.
     *
     * @param array $package Package information.
     */
    public function calculate_shipping($package = array (
))
    {
        // stub
    }

    /**
     * Sanitize the cost field.
     *
     * @since 8.3.0
     * @param string $value Unsanitized value.
     * @throws Exception Last error triggered.
     * @return string
     */
    public function sanitize_cost($value)
    {
        // stub
    }

    /**
     * Init form fields.
     */
    public function init_form_fields()
    {
        // stub
    }

}
