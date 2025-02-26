<?php

namespace Automattic\WooCommerce\Admin\Marketing;

/**
 * Price class
 *
 * @since x.x.x
 */
class Price extends \
{
    /**
     * The price.
     *
     * @var string
     */
    protected $value = null;

    /**
     * The currency of the price.
     *
     * @var string
     */
    protected $currency = null;

    /**
     * Price constructor.
     *
     * @param string $value    The value of the price.
     * @param string $currency The currency of the price.
     */
    public function __construct(string $value, string $currency)
    {
        // stub
    }

    /**
     * Get value of the price.
     *
     * @return string
     */
    public function get_value(): string
    {
        // stub
    }

    /**
     * Get the currency of the price.
     *
     * @return string
     */
    public function get_currency(): string
    {
        // stub
    }

}

