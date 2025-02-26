<?php

namespace ;

/**
 * Breadcrumb class.
 */
class WC_Breadcrumb extends \
{
    /**
     * Breadcrumb trail.
     *
     * @var array
     */
    protected $crumbs = array(
);

    /**
     * Add a crumb so we don't get lost.
     *
     * @param string $name Name.
     * @param string $link Link.
     */
    public function add_crumb($name, $link = '')
    {
        // stub
    }

    /**
     * Reset crumbs.
     */
    public function reset()
    {
        // stub
    }

    /**
     * Get the breadcrumb.
     *
     * @return array
     */
    public function get_breadcrumb()
    {
        // stub
    }

    /**
     * Generate breadcrumb trail.
     *
     * @return array of breadcrumbs
     */
    public function generate()
    {
        // stub
    }

    /**
     * Prepend the shop page to shop breadcrumbs.
     */
    protected function prepend_shop_page()
    {
        // stub
    }

    /**
     * Is home trail..
     */
    protected function add_crumbs_home()
    {
        // stub
    }

    /**
     * 404 trail.
     */
    protected function add_crumbs_404()
    {
        // stub
    }

    /**
     * Attachment trail.
     */
    protected function add_crumbs_attachment()
    {
        // stub
    }

    /**
     * Single post trail.
     *
     * @param int    $post_id   Post ID.
     * @param string $permalink Post permalink.
     */
    protected function add_crumbs_single($post_id = 0, $permalink = '')
    {
        // stub
    }

    /**
     * Page trail.
     */
    protected function add_crumbs_page()
    {
        // stub
    }

    /**
     * Product category trail.
     */
    protected function add_crumbs_product_category()
    {
        // stub
    }

    /**
     * Product tag trail.
     */
    protected function add_crumbs_product_tag()
    {
        // stub
    }

    /**
     * Shop breadcrumb.
     */
    protected function add_crumbs_shop()
    {
        // stub
    }

    /**
     * Post type archive trail.
     */
    protected function add_crumbs_post_type_archive()
    {
        // stub
    }

    /**
     * Category trail.
     */
    protected function add_crumbs_category()
    {
        // stub
    }

    /**
     * Tag trail.
     */
    protected function add_crumbs_tag()
    {
        // stub
    }

    /**
     * Add crumbs for date based archives.
     */
    protected function add_crumbs_date()
    {
        // stub
    }

    /**
     * Add crumbs for taxonomies
     */
    protected function add_crumbs_tax()
    {
        // stub
    }

    /**
     * Add a breadcrumb for author archives.
     */
    protected function add_crumbs_author()
    {
        // stub
    }

    /**
     * Add crumbs for a term.
     *
     * @param int    $term_id  Term ID.
     * @param string $taxonomy Taxonomy.
     */
    protected function term_ancestors($term_id, $taxonomy)
    {
        // stub
    }

    /**
     * Endpoints.
     */
    protected function endpoint_trail()
    {
        // stub
    }

    /**
     * Add a breadcrumb for search results.
     */
    protected function search_trail()
    {
        // stub
    }

    /**
     * Add a breadcrumb for pagination.
     */
    protected function paged_trail()
    {
        // stub
    }

}

