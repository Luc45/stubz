<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * Mimics a WP metadata (i.e. add_metadata(), get_metadata() and friends) implementation using a custom table.
 */
class OrdersTableDataStoreMeta extends \Automattic\WooCommerce\Internal\DataStores\CustomMetaDataStore
{
    /**
     * Returns the cache group to store cached data in.
     *
     * @return string
     */
    protected function get_cache_group()
    {
    }
    /**
     * Returns the name of the table used for storage.
     *
     * @return string
     */
    protected function get_table_name()
    {
    }
    /**
     * Returns the name of the field/column used for associating meta with objects.
     *
     * @return string
     */
    protected function get_object_id_field()
    {
    }
    // @phpcs:disable Universal.NamingConventions.NoReservedKeywordParameterNames.objectFound
    /**
     * Deletes meta based on meta ID.
     *
     * @param  \WC_Data  $object WC_Data object.
     * @param  \stdClass $meta (containing at least ->id).
     *
     * @return bool
     */
    public function delete_meta(&$object, $meta) : bool
    {
    }
    /**
     * Add new piece of meta.
     *
     * @param  \WC_Data  $object WC_Data object.
     * @param  \stdClass $meta (containing ->key and ->value).
     *
     * @return int|false meta ID
     */
    public function add_meta(&$object, $meta)
    {
    }
    /**
     * Update meta.
     *
     * @param  \WC_Data  $object WC_Data object.
     * @param  \stdClass $meta (containing ->id, ->key and ->value).
     *
     * @return bool
     */
    public function update_meta(&$object, $meta) : bool
    {
    }
    // @phpcs:enable Universal.NamingConventions.NoReservedKeywordParameterNames.objectFound
    /**
     * Return order meta data for multiple IDs. Results are cached.
     *
     * @param array $object_ids List of order IDs.
     *
     * @return \stdClass[][] An array, keyed by the object IDs, containing arrays of raw meta data for each object.
     */
    public function get_meta_data_for_object_ids(array $object_ids) : array
    {
    }
    /**
     * Delete cached meta data for the given object_ids.
     *
     * @internal This method should only be used by internally and in cases where the CRUD operations of this datastore
     *           are bypassed for performance purposes. This interface is not guaranteed.
     *
     * @param array $object_ids The object_ids to delete cache for.
     *
     * @return bool[] Array of return values, grouped by the object_id. Each value is either true on success, or false
     *                if the contents were not deleted.
     */
    public function clear_cached_data(array $object_ids) : array
    {
    }
    /**
     * Invalidate all the cache used by this data store.
     *
     * @internal This method should only be used by internally and in cases where the CRUD operations of this datastore
     *           are bypassed for performance purposes. This interface is not guaranteed.
     *
     * @return bool Whether the cache as fully invalidated.
     */
    public function clear_all_cached_data() : bool
    {
    }
}