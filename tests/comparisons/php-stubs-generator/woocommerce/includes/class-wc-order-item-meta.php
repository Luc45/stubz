<?php

/**
 * Order item meta class.
 */
class WC_Order_Item_Meta
{
    /**
     * Post meta data
     *
     * @var array|null
     */
    public $meta = \null;
    /**
     * Product object.
     *
     * @var WC_Product|null
     */
    public $product = \null;
    /**
     * Constructor.
     *
     * @param array       $item defaults to array().
     * @param \WC_Product $product defaults to null.
     */
    public function __construct($item = array(), $product = \null)
    {
    }
    /**
     * Display meta in a formatted list.
     *
     * @param bool   $flat       Flat (default: false).
     * @param bool   $return     Return (default: false).
     * @param string $hideprefix Hide prefix (default: _).
     * @param  string $delimiter Delimiter used to separate items when $flat is true.
     * @return string|void
     */
    public function display($flat = \false, $return = \false, $hideprefix = '_', $delimiter = ", \n")
    {
    }
    /**
     * Return an array of formatted item meta in format e.g.
     *
     * Returns: array(
     *   'pa_size' => array(
     *     'label' => 'Size',
     *     'value' => 'Medium',
     *   )
     * )
     *
     * @since 2.4
     * @param string $hideprefix exclude meta when key is prefixed with this, defaults to '_'.
     * @return array
     */
    public function get_formatted($hideprefix = '_')
    {
    }
    /**
     * Return an array of formatted item meta in format e.g.
     * Handles @deprecated args.
     *
     * @param string $hideprefix Hide prefix.
     *
     * @return array
     */
    public function get_formatted_legacy($hideprefix = '_')
    {
    }
}