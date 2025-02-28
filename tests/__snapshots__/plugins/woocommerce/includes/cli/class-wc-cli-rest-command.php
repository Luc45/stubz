<?php
/**
 * Main Command for WooCommerce CLI.
 *
 * Since a lot of WC operations can be handled via the REST API, we base our CLI
 * off of Restful to generate commands for each WooCommerce REST API endpoint
 * so most of the logic is shared.
 *
 * Forked from wp-cli/restful (by Daniel Bachhuber, released under the MIT license https://opensource.org/licenses/MIT).
 * https://github.com/wp-cli/restful
 *
 * @version 3.0.0
 * @package WooCommerce
 */
class WC_CLI_REST_Command
{
    /**
     * Endpoints that have a parent ID.
     * Ex: Product reviews, which has a product ID and a review ID.
     *
     * @var array
     */
    protected $routes_with_parent_id = array (
  0 => 'customer_download',
  1 => 'product_review',
  2 => 'order_note',
  3 => 'shop_order_refund',
);
    /**
     * Name of command/endpoint object.
     *
     * @var string
     */
    private $name = null;
    /**
     * Endpoint route.
     *
     * @var string
     */
    private $route = null;
    /**
     * Main resource ID.
     *
     * @var int
     */
    private $resource_identifier = null;
    /**
     * Schema for command.
     *
     * @var array
     */
    private $schema = null;
    /**
     * List of supported IDs and their description (name => desc).
     *
     * @var array
     */
    private $supported_ids = array();
    /**
     * Sets up REST Command.
     *
     * @param string $name   Name of endpoint object (comes from schema).
     * @param string $route  Path to route of this endpoint.
     * @param array  $schema Schema object.
     */
    public function __construct($name, $route, $schema)
{
}
    /**
     * Passes supported ID arguments (things like product_id, order_id, etc) that we should look for in addition to id.
     *
     * @param array $supported_ids List of supported IDs.
     */
    public function set_supported_ids($supported_ids = array())
{
}
    /**
     * Returns an ID of supported ID arguments (things like product_id, order_id, etc) that we should look for in addition to id.
     *
     * @return array
     */
    public function get_supported_ids()
{
}
    /**
     * Create a new item.
     *
     * @subcommand create
     *
     * @param array $args WP-CLI positional arguments.
     * @param array $assoc_args WP-CLI associative arguments.
     */
    public function create_item($args, $assoc_args)
{
}
    /**
     * Delete an existing item.
     *
     * @subcommand delete
     *
     * @param array $args WP-CLI positional arguments.
     * @param array $assoc_args WP-CLI associative arguments.
     */
    public function delete_item($args, $assoc_args)
{
}
    /**
     * Get a single item.
     *
     * @subcommand get
     *
     * @param array $args WP-CLI positional arguments.
     * @param array $assoc_args WP-CLI associative arguments.
     */
    public function get_item($args, $assoc_args)
{
}
    /**
     * List all items.
     *
     * @subcommand list
     *
     * @param array $args WP-CLI positional arguments.
     * @param array $assoc_args WP-CLI associative arguments.
     */
    public function list_items($args, $assoc_args)
{
}
    /**
     * Update an existing item.
     *
     * @subcommand update
     *
     * @param array $args WP-CLI positional arguments.
     * @param array $assoc_args WP-CLI associative arguments.
     */
    public function update_item($args, $assoc_args)
{
}
    /**
     * Do a REST Request
     *
     * @param string $method Request method. Examples: 'POST', 'PUT', 'DELETE' or 'GET'.
     * @param string $route Resource route.
     * @param array  $assoc_args Associative arguments passed to the originating WP-CLI command.
     *
     * @return array
     */
    private function do_request($method, $route, $assoc_args)
{
}
    /**
     * Get Formatter object based on supplied parameters.
     *
     * @param array $assoc_args Parameters passed to command. Determines formatting.
     * @return \WP_CLI\Formatter
     */
    protected function get_formatter(&$assoc_args)
{
}
    /**
     * Get a list of fields present in a given context
     *
     * @param string $context Scope under which the request is made. Determines fields present in response.
     * @return array
     */
    private function get_context_fields($context)
{
}
    /**
     * Get the route for this resource
     *
     * @param  array $args Positional arguments passed to the originating WP-CLI command.
     * @return string
     */
    private function get_filled_route($args = array())
{
}
    /**
     * Reduce an item to specific fields.
     *
     * @param  array $item Item to reduce.
     * @param  array $fields Fields to keep.
     * @return array
     */
    private static function limit_item_to_fields($item, $fields)
{
}
    /**
     * JSON can be passed in some more complicated objects, like the payment gateway settings array.
     * This function decodes the json (if present) and tries to get it's value.
     *
     * @param array $arr Array that will be scanned for JSON encoded values.
     *
     * @return array
     */
    protected function decode_json($arr)
{
}
}
