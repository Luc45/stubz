<?php

namespace Automattic\WooCommerce\Internal\DataStores;

/**
 * Implements functions similar to WP's add_metadata(), get_metadata(), and friends using a custom table.
 *
 * @see WC_Data_Store_WP For an implementation using WP's metadata functions and tables.
 */
abstract class CustomMetaDataStore extends \
{
    /**
     * Returns the name of the table used for storage.
     *
     * @return string
     */
    protected abstract function get_table_name();

    /**
     * Returns the name of the field/column used for identifiying metadata entries.
     *
     * @return string
     */
    protected function get_meta_id_field()
    {
        // stub
    }

    /**
     * Returns the name of the field/column used for associating meta with objects.
     *
     * @return string
     */
    protected function get_object_id_field()
    {
        // stub
    }

    /**
     * Describes the structure of the metadata table.
     *
     * @return array Array elements: table, object_id_field, meta_id_field.
     */
    protected function get_db_info()
    {
        // stub
    }

    /**
     * Returns an array of meta for an object.
     *
     * @param  \WC_Data $object WC_Data object.
     * @return array
     */
    public function read_meta(&$object)
    {
        // stub
    }

    /**
     * Deletes meta based on meta ID.
     *
     * @param  \WC_Data  $object WC_Data object.
     * @param  \stdClass $meta (containing at least ->id).
     *
     * @return bool
     */
    public function delete_meta(&$object, $meta): bool
    {
        // stub
    }

    /**
     * Add new piece of meta.
     *
     * @param  WC_Data  $object WC_Data object.
     * @param  stdClass $meta (containing ->key and ->value).
     *
     * @return int|false meta ID
     */
    public function add_meta(&$object, $meta)
    {
        // stub
    }

    /**
     * Update meta.
     *
     * @param  \WC_Data  $object WC_Data object.
     * @param  \stdClass $meta (containing ->id, ->key and ->value).
     *
     * @return bool
     */
    public function update_meta(&$object, $meta): bool
    {
        // stub
    }

    /**
     * Retrieves metadata by meta ID.
     *
     * @param int $meta_id Meta ID.
     * @return object|bool Metadata object or FALSE if not found.
     */
    public function get_metadata_by_id($meta_id)
    {
        // stub
    }

    /**
     * Retrieves metadata by meta key.
     *
     * @param \WC_Abstract_Order $object Object ID.
     * @param string             $meta_key Meta key.
     *
     * @return \stdClass|bool Metadata object or FALSE if not found.
     */
    public function get_metadata_by_key(&$object, string $meta_key)
    {
        // stub
    }

    /**
     * Returns distinct meta keys in use.
     *
     * @since 8.8.0
     *
     * @param int    $limit           Maximum number of meta keys to return. Defaults to 100.
     * @param string $order           Order to use for the results. Either 'ASC' or 'DESC'. Defaults to 'ASC'.
     * @param bool   $include_private Whether to include private meta keys in the results. Defaults to FALSE.
     * @return string[]
     */
    public function get_meta_keys($limit = 100, $order = 'ASC', $include_private = false)
    {
        // stub
    }

    /**
     * Return order meta data for multiple IDs.
     *
     * @param array $object_ids List of object IDs.
     *
     * @return \stdClass[][] An array, keyed by object_ids, containing array of raw meta data records for each object. Objects with no meta data will have an empty array.
     */
    public function get_meta_data_for_object_ids(array $object_ids): array
    {
        // stub
    }

}

