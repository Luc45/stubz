<?php

/**
 * Integrations class.
 */
class WC_Integrations
{
    /**
     * Array of integrations.
     *
     * @var array
     */
    public $integrations = array();

    /**
     * Initialize integrations.
     */
    public function __construct()
{
}
    /**
     * Return loaded integrations.
     *
     * @return array
     */
    public function get_integrations()
{
}
    /**
     * Return a desired integration.
     *
     * @since 3.9.0
     * @param string $id The id of the integration to get.
     * @return mixed|null The integration if one is found, otherwise null.
     */
    public function get_integration($id)
{
}
}
