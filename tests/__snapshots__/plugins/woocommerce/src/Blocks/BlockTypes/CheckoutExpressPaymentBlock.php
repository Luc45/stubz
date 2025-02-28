<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CheckoutExpressPaymentBlock class.
 */
class CheckoutExpressPaymentBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'checkout-express-payment-block';

    /**
     * Default styles for the express payment buttons
     *
     * @var boolean
     */
    protected $default_styles = null;

    /**
     * Current styles for the express payment buttons
     *
     * @var boolean
     */
    protected $current_styles = null;

    /**
     * Initialise the block
     */
    protected function initialize()
{
}
    /**
     * Synchorize the express payment attributes between the Cart and Checkout pages.
     *
     * @param int     $post_id Post ID.
     * @param WP_Post $post Post object.
     */
    public function sync_express_payment_attrs($post_id, $post)
{
}
    /**
     * Update the express payment attributes in the other page (Cart or Checkout).
     *
     * @param string $cart_or_checkout The page to update.
     * @param array  $updated_attrs     The updated attributes.
     */
    private function update_other_page_with_express_payment_attrs($cart_or_checkout, $updated_attrs)
{
}
}