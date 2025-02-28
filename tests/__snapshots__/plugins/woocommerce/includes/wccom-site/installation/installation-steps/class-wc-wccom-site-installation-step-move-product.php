<?php

/**
 * WC_WCCOM_Site_Installation_Step_Move_Product class
 */
class WC_WCCOM_Site_Installation_Step_Move_Product
{
    /**
     * The current installation state.
     *
     * @var WC_WCCOM_Site_Installation_State
     */
    protected $state = null;

    /**
     * Constructor.
     *
     * @param array $state The current installation state.
     */
    public function __construct($state)
{
}
    /**
     * Run the step installation process.
     */
    public function run()
{
}
    /**
     * Connect to wccom if installing a theme
     *
     * @return void
     */
    protected function maybe_connect_theme()
{
}
}
