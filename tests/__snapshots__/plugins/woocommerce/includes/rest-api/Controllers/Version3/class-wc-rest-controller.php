<?php
/**
 * Abstract Rest Controller Class
 *
 * @package WooCommerce\RestApi
 * @extends  WP_REST_Controller
 * @version  2.6.0
 */
abstract class WC_REST_Controller extends \WP_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v1';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = '';
    /**
     * Used to cache computed return fields.
     *
     * @var null|array
     */
    private $_fields = null;
    /**
     * Used to verify if cached fields are for correct request object.
     *
     * @var null|WP_REST_Request
     */
    private $_request = null;
    /**
     * Add the schema from additional fields to an schema array.
     *
     * The type of object is inferred from the passed schema.
     *
     * @param array $schema Schema array.
     *
     * @return array
     */
    protected function add_additional_fields_schema($schema)
{
}
    /**
     * Compatibility functions for WP 5.5, since custom types are not supported anymore.
     * See @link https://core.trac.wordpress.org/changeset/48306
     *
     * @param string $method Optional. HTTP method of the request.
     *
     * @return array Endpoint arguments.
     */
    public function get_endpoint_args_for_item_schema($method)
{
}
    /**
     * Change datatypes `date-time` to string, and `mixed` to composite of all built in types. This is required for maintaining forward compatibility with WP 5.5 since custom post types are not supported anymore.
     *
     * See @link https://core.trac.wordpress.org/changeset/48306
     *
     * We still use the 'mixed' type, since if we convert to composite type everywhere, it won't work in 5.4 anymore because they require to define the full schema.
     *
     * @param array $endpoint_args Schema with datatypes to convert.
     * @return mixed Schema with converted datatype.
     */
    protected function adjust_wp_5_5_datatype_compatibility($endpoint_args)
{
}
    /**
     * Get normalized rest base.
     *
     * @return string
     */
    protected function get_normalized_rest_base()
{
}
    /**
     * Check batch limit.
     *
     * @param array $items Request items.
     * @return bool|WP_Error
     */
    protected function check_batch_limit($items)
{
}
    /**
     * Bulk create, update and delete items.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return array Of WP_Error or WP_REST_Response.
     */
    public function batch_items($request)
{
}
    /**
     * Validate a text value for a text based setting.
     *
     * @since 3.0.0
     * @param string $value Value.
     * @param array  $setting Setting.
     * @return string
     */
    public function validate_setting_text_field($value, $setting)
{
}
    /**
     * Validate select based settings.
     *
     * @since 3.0.0
     * @param string $value Value.
     * @param array  $setting Setting.
     * @return string|WP_Error
     */
    public function validate_setting_select_field($value, $setting)
{
}
    /**
     * Validate multiselect based settings.
     *
     * @since 3.0.0
     * @param array $values Values.
     * @param array $setting Setting.
     * @return array|WP_Error
     */
    public function validate_setting_multiselect_field($values, $setting)
{
}
    /**
     * Validate image_width based settings.
     *
     * @since 3.0.0
     * @param array $values Values.
     * @param array $setting Setting.
     * @return string|WP_Error
     */
    public function validate_setting_image_width_field($values, $setting)
{
}
    /**
     * Validate radio based settings.
     *
     * @since 3.0.0
     * @param string $value Value.
     * @param array  $setting Setting.
     * @return string|WP_Error
     */
    public function validate_setting_radio_field($value, $setting)
{
}
    /**
     * Validate checkbox based settings.
     *
     * @since 3.0.0
     * @param string $value Value.
     * @param array  $setting Setting.
     * @return string|WP_Error
     */
    public function validate_setting_checkbox_field($value, $setting)
{
}
    /**
     * Validate textarea based settings.
     *
     * @since 3.0.0
     * @since 9.0.0 No longer allows storing IFRAME, which was allowed for "ShareThis" integration no longer found in core.
     * @param string $value Value.
     * @param array  $setting Setting.
     * @return string
     */
    public function validate_setting_textarea_field($value, $setting)
{
}
    /**
     * Add meta query.
     *
     * @since 3.0.0
     * @param array $args       Query args.
     * @param array $meta_query Meta query.
     * @return array
     */
    protected function add_meta_query($args, $meta_query)
{
}
    /**
     * Get the batch schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_public_batch_schema()
{
}
    /**
     * Gets an array of fields to be included on the response.
     *
     * Included fields are based on item schema and `_fields=` request argument.
     * Updated from WordPress 5.3, included into this class to support old versions.
     *
     * @since 3.5.0
     * @param WP_REST_Request $request Full details about the request.
     * @return array Fields to be included in the response.
     */
    public function get_fields_for_response($request)
{
}
    /**
     * Limit the contents of the meta_data property based on certain request parameters.
     *
     * Note that if both `include_meta` and `exclude_meta` are present in the request,
     * `include_meta` will take precedence.
     *
     * @param \WP_REST_Request $request   The request.
     * @param array            $meta_data All of the meta data for an object.
     *
     * @return array
     */
    protected function get_meta_data_for_response($request, $meta_data)
{
}
}
