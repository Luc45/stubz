<?php

/**
 * REST API Customers controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Customers_V1_Controller
 */
class WC_REST_Customers_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

    /**
     * Get formatted item data.
     *
     * @since  3.0.0
     * @param  WC_Data $object WC_Data instance.
     * @return array
     */
    protected function get_formatted_item_data($object)
{
}
    /**
     * Get formatted item data, not including orders count nor total spent.
     * This method is needed because v3 API doesn't return those two fields.
     *
     * @internal This method could disappear or have its name or signature changed in future releases.
     *
     * @param  WC_Data $object WC_Data instance.
     * @return array
     */
    protected function get_formatted_item_data_core($object)
{
}
    /**
     * Prepare a single customer output for response.
     *
     * @param  WP_User         $user_data User object.
     * @param  WP_REST_Request $request   Request object.
     * @return WP_REST_Response $response  Response data.
     */
    public function prepare_item_for_response($user_data, $request)
{
}
    /**
     * Update customer meta fields.
     *
     * @param WC_Customer     $customer Customer data.
     * @param WP_REST_Request $request  Request data.
     */
    protected function update_customer_meta_fields($customer, $request)
{
}
    /**
     * Get the Customer's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
}
