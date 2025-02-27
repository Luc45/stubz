<?php

namespace Automattic\WooCommerce\Internal\CostOfGoodsSold;

/**
 * Trait with Cost of Goods Sold related functionality shared by the REST products and variations controllers.
 */
trait CogsAwareRestControllerTrait
{
    /**
     * Add Cost of Goods Sold related information for a given product to the array of data that will become the REST response.
     *
     * @param array      $data Array of response data.
     * @param WC_Product $product Product to get the information from.
     */
    private function add_cogs_info_to_returned_product_data(array &$data, $product): void
    {
        // stub
    }

    /**
     * Apply Cost of Goods Sold related information received in the request body to a product object.
     *
     * @param WP_Rest_Request $request Request data.
     * @param WC_Product      $product The product to apply the data to.
     */
    private function set_cogs_info_in_product_object($request, $product): void
    {
        // stub
    }

    /**
     * Add Cost of Goods Sold related schema information to a given REST endpoint schema.
     *
     * @param array $schema The schema data set to add the information to.
     * @param bool  $for_variations_controller True if the information is for an endpoint in the variations controller.
     * @return array Updated schema information.
     */
    private function add_cogs_related_product_schema(array $schema, bool $for_variations_controller): array
    {
        // stub
    }

}