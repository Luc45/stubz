<?php

/**
 * Abstract WC Data Class
 *
 * Implemented by classes using the same CRUD(s) pattern.
 *
 * @version  2.6.0
 * @package  WooCommerce\Abstracts
 */
abstract class WC_Data
{
    /**
     * ID for this object.
     *
     * @since 3.0.0
     * @var int
     */
    protected $id = 0;
    /**
     * Core data for this object. Name value pairs (name + default value).
     *
     * @since 3.0.0
     * @var array
     */
    protected $data = array();
    /**
     * Core data changes for this object.
     *
     * @since 3.0.0
     * @var array
     */
    protected $changes = array();
    /**
     * This is false until the object is read from the DB.
     *
     * @since 3.0.0
     * @var bool
     */
    protected $object_read = \false;
    /**
     * This is the name of this object type.
     *
     * @since 3.0.0
     * @var string
     */
    protected $object_type = 'data';
    /**
     * Extra data for this object. Name value pairs (name + default value).
     * Used as a standard way for sub classes (like product types) to add
     * additional information to an inherited class.
     *
     * @since 3.0.0
     * @var array
     */
    protected $extra_data = array();
    /**
     * Set to _data on construct so we can track and reset data if needed.
     *
     * @since 3.0.0
     * @var array
     */
    protected $default_data = array();
    /**
     * Contains a reference to the data store for this class.
     *
     * @since 3.0.0
     * @var object
     */
    protected $data_store;
    /**
     * Stores meta in cache for future reads.
     * A group must be set to to enable caching.
     *
     * @since 3.0.0
     * @var string
     */
    protected $cache_group = '';
    /**
     * Stores additional meta data.
     *
     * @since 3.0.0
     * @var array
     */
    protected $meta_data = \null;
    /**
     * List of properties that were earlier managed by data store. However, since DataStore is a not a stored entity in itself, they used to store data in metadata of the data object.
     * With custom tables, some of these are moved from metadata to their own columns, but existing code will still try to add them to metadata. This array is used to keep track of such properties.
     *
     * Only reason to add a property here is that you are moving properties from DataStore instance to data object. If you are adding a new property, consider adding it to to $data array instead.
     *
     * @var array
     */
    protected $legacy_datastore_props = array();
    /**
     * Default constructor.
     *
     * @param int|object|array $read ID to load from the DB (optional) or already queried data.
     */
    public function __construct($read = 0)
    {
    }
    /**
     * Only store the object ID to avoid serializing the data object instance.
     *
     * @return array
     */
    public function __sleep()
    {
    }
    /**
     * Re-run the constructor with the object ID.
     *
     * If the object no longer exists, remove the ID.
     */
    public function __wakeup()
    {
    }
    /**
     * When the object is cloned, make sure meta is duplicated correctly.
     *
     * @since 3.0.2
     */
    public function __clone()
    {
    }
    /**
     * Get the data store.
     *
     * @since  3.0.0
     * @return object
     */
    public function get_data_store()
    {
    }
    /**
     * Returns the unique ID for this object.
     *
     * @since  2.6.0
     * @return int
     */
    public function get_id()
    {
    }
    /**
     * Delete an object, set the ID to 0, and return result.
     *
     * @since  2.6.0
     * @param  bool $force_delete Should the date be deleted permanently.
     * @return bool result
     */
    public function delete($force_delete = \false)
    {
    }
    /**
     * Save should create or update based on object existence.
     *
     * @since  2.6.0
     * @return int
     */
    public function save()
    {
    }
    /**
     * Change data to JSON format.
     *
     * @since  2.6.0
     * @return string Data in JSON format.
     */
    public function __toString()
    {
    }
    /**
     * Returns all data for this object.
     *
     * @since  2.6.0
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Returns array of expected data keys for this object.
     *
     * @since   3.0.0
     * @return array
     */
    public function get_data_keys()
    {
    }
    /**
     * Returns all "extra" data keys for an object (for sub objects like product types).
     *
     * @since  3.0.0
     * @return array
     */
    public function get_extra_data_keys()
    {
    }
    /**
     * Filter null meta values from array.
     *
     * @since  3.0.0
     * @param mixed $meta Meta value to check.
     * @return bool
     */
    protected function filter_null_meta($meta)
    {
    }
    /**
     * Get All Meta Data.
     *
     * @since 2.6.0
     * @return array of objects.
     */
    public function get_meta_data()
    {
    }
    /**
     * Check if the key is an internal one.
     *
     * @since  3.2.0
     * @param  string $key Key to check.
     * @return bool   true if it's an internal key, false otherwise
     */
    protected function is_internal_meta_key($key)
    {
    }
    /**
     * Get Meta Data by Key.
     *
     * @since  2.6.0
     * @param  string $key Meta Key.
     * @param  bool   $single return first found meta with key, or all with $key.
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return mixed
     */
    public function get_meta($key = '', $single = \true, $context = 'view')
    {
    }
    /**
     * See if meta data exists, since get_meta always returns a '' or array().
     *
     * @since  3.0.0
     * @param  string $key Meta Key.
     * @return boolean
     */
    public function meta_exists($key = '')
    {
    }
    /**
     * Set all meta data from array.
     *
     * @since 2.6.0
     * @param array $data Key/Value pairs.
     */
    public function set_meta_data($data)
    {
    }
    /**
     * Add meta data.
     *
     * @since 2.6.0
     *
     * @param string       $key Meta key.
     * @param string|array $value Meta value.
     * @param bool         $unique Should this be a unique key?.
     */
    public function add_meta_data($key, $value, $unique = \false)
    {
    }
    /**
     * Update meta data by key or ID, if provided.
     *
     * @since  2.6.0
     *
     * @param  string       $key Meta key.
     * @param  string|array $value Meta value.
     * @param  int          $meta_id Meta ID.
     */
    public function update_meta_data($key, $value, $meta_id = 0)
    {
    }
    /**
     * Delete meta data.
     *
     * @since 2.6.0
     * @param string $key Meta key.
     */
    public function delete_meta_data($key)
    {
    }
    /**
     * Delete meta data with a matching value.
     *
     * @since 7.7.0
     * @param string $key   Meta key.
     * @param mixed  $value Meta value. Entries will only be removed that match the value.
     */
    public function delete_meta_data_value($key, $value)
    {
    }
    /**
     * Delete meta data.
     *
     * @since 2.6.0
     * @param int $mid Meta ID.
     */
    public function delete_meta_data_by_mid($mid)
    {
    }
    /**
     * Read meta data if null.
     *
     * @since 3.0.0
     */
    protected function maybe_read_meta_data()
    {
    }
    /**
     * Helper method to compute meta cache key. Different from WP Meta cache key in that meta data cached using this key also contains meta_id column.
     *
     * @since 4.7.0
     *
     * @return string
     */
    public function get_meta_cache_key()
    {
    }
    /**
     * Generate cache key from id and group.
     *
     * @since 4.7.0
     *
     * @param int|string $id          Object ID.
     * @param string     $cache_group Group name use to store cache. Whole group cache can be invalidated in one go.
     *
     * @return string Meta cache key.
     */
    public static function generate_meta_cache_key($id, $cache_group)
    {
    }
    /**
     * Prime caches for raw meta data. This includes meta_id column as well, which is not included by default in WP meta data.
     *
     * @since 4.7.0
     *
     * @param array  $raw_meta_data_collection Array of objects of { object_id => array( meta_row_1, meta_row_2, ... }.
     * @param string $cache_group              Name of cache group.
     */
    public static function prime_raw_meta_data_cache($raw_meta_data_collection, $cache_group)
    {
    }
    /**
     * Read Meta Data from the database. Ignore any internal properties.
     * Uses it's own caches because get_metadata does not provide meta_ids.
     *
     * @since 2.6.0
     * @param bool $force_read True to force a new DB read (and update cache).
     */
    public function read_meta_data($force_read = \false)
    {
    }
    /**
     * Helper function to initialize metadata entries from filtered raw meta data.
     *
     * @param array $filtered_meta_data Filtered metadata fetched from DB.
     */
    public function init_meta_data(array $filtered_meta_data = array())
    {
    }
    /**
     * Update Meta Data in the database.
     *
     * @since 2.6.0
     */
    public function save_meta_data()
    {
    }
    /**
     * Set ID.
     *
     * @since 3.0.0
     * @param int $id ID.
     */
    public function set_id($id)
    {
    }
    /**
     * Set all props to default values.
     *
     * @since 3.0.0
     */
    public function set_defaults()
    {
    }
    /**
     * Set object read property.
     *
     * @since 3.0.0
     * @param boolean $read Should read?.
     */
    public function set_object_read($read = \true)
    {
    }
    /**
     * Get object read property.
     *
     * @since  3.0.0
     * @return boolean
     */
    public function get_object_read()
    {
    }
    /**
     * Set a collection of props in one go, collect any errors, and return the result.
     * Only sets using public methods.
     *
     * @since  3.0.0
     *
     * @param array  $props Key value pairs to set. Key is the prop and should map to a setter function name.
     * @param string $context In what context to run this.
     *
     * @return bool|WP_Error
     */
    public function set_props($props, $context = 'set')
    {
    }
    /**
     * Sets a prop for a setter method.
     *
     * This stores changes in a special array so we can track what needs saving
     * the DB later.
     *
     * @since 3.0.0
     * @param string $prop Name of prop to set.
     * @param mixed  $value Value of the prop.
     */
    protected function set_prop($prop, $value)
    {
    }
    /**
     * Return data changes only.
     *
     * @since 3.0.0
     * @return array
     */
    public function get_changes()
    {
    }
    /**
     * Merge changes with data and clear.
     *
     * @since 3.0.0
     */
    public function apply_changes()
    {
    }
    /**
     * Prefix for action and filter hooks on data.
     *
     * @since  3.0.0
     * @return string
     */
    protected function get_hook_prefix()
    {
    }
    /**
     * Gets a prop for a getter method.
     *
     * Gets the value from either current pending changes, or the data itself.
     * Context controls what happens to the value before it's returned.
     *
     * @since  3.0.0
     * @param  string $prop Name of prop to get.
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return mixed
     */
    protected function get_prop($prop, $context = 'view')
    {
    }
    /**
     * Sets a date prop whilst handling formatting and datetime objects.
     *
     * @since 3.0.0
     * @param string         $prop Name of prop to set.
     * @param string|integer $value Value of the prop.
     */
    protected function set_date_prop($prop, $value)
    {
    }
    /**
     * When invalid data is found, throw an exception unless reading from the DB.
     *
     * @throws WC_Data_Exception Data Exception.
     * @since 3.0.0
     * @param string $code             Error code.
     * @param string $message          Error message.
     * @param int    $http_status_code HTTP status code.
     * @param array  $data             Extra error data.
     */
    protected function error($code, $message, $http_status_code = 400, $data = array())
    {
    }
}