<?php
interface WC_WCCOM_Site_Installation_Step
{
    /**
     * Constructor.
     *
     * @param array $state The current installation state.
     */
    public function __construct($state);
    /**
     * Run the step installation process.
     */
    public function run();
}
