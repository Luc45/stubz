<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Specs data source poller class.
 * This handles polling specs from JSON endpoints, and
 * stores the specs in to the database as an option.
 *
 * @deprecated since 8.8.0
 */
abstract class DataSourcePoller extends \Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller
{
    /**
     * Constructor.
     *
     * @param string $id id of DataSourcePoller.
     * @param array  $data_sources urls for data sources.
     * @param array  $args Options for DataSourcePoller.
     */
    public function __construct($id, $data_sources = array(), $args = array())
{
}
    /**
     * Reads the data sources for specs and persists those specs.
     *
     * @deprecated 8.8.0
     * @return array list of specs.
     */
    public function get_specs_from_data_sources()
{
}
    /**
     * Reads the data sources for specs and persists those specs.
     *
     * @deprecated 8.8.0
     * @return bool Whether any specs were read.
     */
    public function read_specs_from_data_sources()
{
}
    /**
     * Delete the specs transient.
     *
     * @deprecated 8.8.0
     * @return bool success of failure of transient deletion.
     */
    public function delete_specs_transient()
{
}
    /**
     * Set the specs transient.
     *
     * @param array $specs The specs to set in the transient.
     * @param int   $expiration The expiration time for the transient.
     *
     * @deprecated 8.8.0
     */
    public function set_specs_transient($specs, $expiration = 0)
{
}
}