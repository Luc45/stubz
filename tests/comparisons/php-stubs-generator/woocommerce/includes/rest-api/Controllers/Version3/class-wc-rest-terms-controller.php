<?php

/**
 * Terms controller class.
 */
abstract class WC_REST_Terms_Controller extends \WC_REST_Controller
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = '';
    /**
     * Taxonomy.
     *
     * @var string
     */
    protected $taxonomy = '';
    /**
     * Cached taxonomies by attribute id.
     *
     * @var array
     */
    protected $taxonomies_by_id = array();
    /**
     * Register the routes for terms.
     */
    public function register_routes()
    {
    }
    /**
     * Check if a given request has access to read the terms.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to create a term.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to read a term.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to update a term.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to delete a term.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access batch create, update and delete items.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return boolean|WP_Error
     */
    public function batch_items_permissions_check($request)
    {
    }
    /**
     * Check permissions.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @param string          $context Request context.
     * @return bool|WP_Error
     */
    protected function check_permissions($request, $context = 'read')
    {
    }
    /**
     * Get terms associated with a taxonomy.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Create a single term for a taxonomy.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function create_item($request)
    {
    }
    /**
     * Get a single term from a taxonomy.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function get_item($request)
    {
    }
    /**
     * Update a single term from a taxonomy.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function update_item($request)
    {
    }
    /**
     * Delete a single term from a taxonomy.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param object          $term   Term object.
     * @param WP_REST_Request $request Full details about the request.
     * @return array Links for the given term.
     */
    protected function prepare_links($term, $request)
    {
    }
    /**
     * Update term meta fields.
     *
     * @param WP_Term         $term    Term object.
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error
     */
    protected function update_term_meta_fields($term, $request)
    {
    }
    /**
     * Get the terms attached to a product.
     *
     * This is an alternative to `get_terms()` that uses `get_the_terms()`
     * instead, which hits the object cache. There are a few things not
     * supported, notably `include`, `exclude`. In `self::get_items()` these
     * are instead treated as a full query.
     *
     * @param array           $prepared_args Arguments for `get_terms()`.
     * @param WP_REST_Request $request       Full details about the request.
     * @return array List of term objects. (Total count in `$this->total_terms`).
     */
    protected function get_terms_for_product($prepared_args, $request)
    {
    }
    /**
     * Comparison function for sorting terms by a column.
     *
     * Uses `$this->sort_column` to determine field to sort by.
     *
     * @param stdClass $left Term object.
     * @param stdClass $right Term object.
     * @return int <0 if left is higher "priority" than right, 0 if equal, >0 if right is higher "priority" than left.
     */
    protected function compare_terms($left, $right)
    {
    }
    /**
     * Get the query params for collections
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Get taxonomy.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return int|WP_Error
     */
    protected function get_taxonomy($request)
    {
    }
}