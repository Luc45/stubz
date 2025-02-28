<?php

/**
 * Product external class.
 */
class WC_Product_External extends \WC_Product
{
    /**
     * Stores product data.
     *
     * @var array
     */
    protected $extra_data = array('product_url' => '', 'button_text' => '');
    /**
     * Get internal type.
     *
     * @return string
     */
    public function get_type()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    |
    | Methods for getting data from the product object.
    */
    /**
     * Get product url.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_product_url($context = 'view')
    {
    }
    /**
     * Get button text.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_button_text($context = 'view')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    |
    | Functions for setting product data. These should not update anything in the
    | database itself and should only change what is stored in the class
    | object.
    */
    /**
     * Set product URL.
     *
     * @since 3.0.0
     * @param string $product_url Product URL.
     */
    public function set_product_url($product_url)
    {
    }
    /**
     * Set button text.
     *
     * @since 3.0.0
     * @param string $button_text Button text.
     */
    public function set_button_text($button_text)
    {
    }
    /**
     * External products cannot be stock managed.
     *
     * @since 3.0.0
     * @param bool $manage_stock If manage stock.
     */
    public function set_manage_stock($manage_stock)
    {
    }
    /**
     * External products cannot be stock managed.
     *
     * @since 3.0.0
     *
     * @param string $stock_status Stock status.
     */
    public function set_stock_status($stock_status = '')
    {
    }
    /**
     * External products cannot be backordered.
     *
     * @since 3.0.0
     * @param string $backorders Options: 'yes', 'no' or 'notify'.
     */
    public function set_backorders($backorders)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Other Actions
    |--------------------------------------------------------------------------
    */
    /**
     * Returns false if the product cannot be bought.
     *
     * @access public
     * @return bool
     */
    public function is_purchasable()
    {
    }
    /**
     * Get the add to url used mainly in loops.
     *
     * @access public
     * @return string
     */
    public function add_to_cart_url()
    {
    }
    /**
     * Get the add to cart button text for the single page.
     *
     * @access public
     * @return string
     */
    public function single_add_to_cart_text()
    {
    }
    /**
     * Get the add to cart button text.
     *
     * @access public
     * @return string
     */
    public function add_to_cart_text()
    {
    }
    /**
     * Get the add to cart button text description - used in aria tags.
     *
     * @since 3.3.0
     * @return string
     */
    public function add_to_cart_description()
    {
    }
}
