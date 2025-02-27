<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Trait to call filters on `get_data` methods for data stores.
 *
 * It calls the filters `woocommerce_analytics_{$this->context}_query_args` and
 * `woocommerce_analytics_{$this->context}_select_query` on the `get_data` method.
 *
 * Example:
 * <pre><code class="language-php">class MyStatsDataStore extends DataStore implements DataStoreInterface {
 *     // Use the trait.
 *     use FilteredGetDataTrait;
 *     // Provide all the necessary properties and methods for a regular DataStore.
 *     // ...
 * }
 * </code></pre>
 *
 * @see DataStore
 */
trait FilteredGetDataTrait
{
    /**
     * Get the data based on args.
     *
     * Filters query args, calls DataStore::get_data, and returns the filtered data.
     *
     * @override ReportsDataStore::get_data()
     *
     * @param array $query_args Query parameters.
     * @return stdClass|WP_Error
     */
    public function get_data($query_args)
    {
        // stub
    }

}