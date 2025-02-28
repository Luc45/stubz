<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs;

/**
 * Specs data source poller class.
 * This handles polling specs from JSON endpoints, and
 * stores the specs in to the database as an option.
 */
abstract class DataSourcePoller
{
    /**
     * Get class instance.
     */
    abstract public static function get_instance();
    /**
     * Name of data sources filter.
     */
    public const FILTER_NAME = 'data_source_poller_data_sources';
    /**
     * Name of data source specs filter.
     */
    public const FILTER_NAME_SPECS = 'data_source_poller_specs';
    /**
     * Id of DataSourcePoller.
     *
     * @var string
     */
    protected $id = array();
    /**
     * Default data sources array.
     *
     * @var array
     */
    protected $data_sources = array();
    /**
     * Default args.
     *
     * @var array
     */
    protected $args = array();
    /**
     * The logger instance.
     *
     * @var WC_Logger|null
     */
    protected static $logger = null;
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
     * Get the logger instance.
     *
     * @return WC_Logger
     */
    protected static function get_logger()
    {
    }
    /**
     * Returns the key identifier of spec, this can easily be overwritten. Defaults to id.
     *
     * @param mixed $spec a JSON parsed spec coming from the JSON feed.
     * @return string|boolean
     */
    protected function get_spec_key($spec)
    {
    }
    /**
     * Reads the data sources for specs and persists those specs.
     *
     * @return array list of specs.
     */
    public function get_specs_from_data_sources()
    {
    }
    /**
     * Gets specs from cache if it exists.
     *
     * @return array list of specs.
     */
    public function get_cached_specs()
    {
    }
    /**
     * Reads the data sources for specs and persists those specs.
     *
     * @return bool Whether any specs were read.
     */
    public function read_specs_from_data_sources()
    {
    }
    /**
     * Delete the specs transient.
     *
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
     */
    public function set_specs_transient($specs, $expiration = 0)
    {
    }
    /**
     * Read a single data source and return the read specs
     *
     * @param string $url The URL to read the specs from.
     *
     * @return array The specs that have been read from the data source.
     */
    protected static function read_data_source($url)
    {
    }
    /**
     * Merge the specs.
     *
     * @param Array  $specs_to_merge_in The specs to merge in to $specs.
     * @param Array  $specs             The list of specs being merged into.
     * @param string $url               The url of the feed being merged in (for error reporting).
     */
    protected function merge_specs($specs_to_merge_in, &$specs, $url)
    {
    }
    /**
     * Validate the spec.
     *
     * @param object $spec The spec to validate.
     * @param string $url  The url of the feed that provided the spec.
     *
     * @return bool The result of the validation.
     */
    protected function validate_spec($spec, $url)
    {
    }
}
