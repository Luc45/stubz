<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ProductCategorySchema class.
 */
class ProductCategorySchema
{
    const IDENTIFIER = 'product-category';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product-category';

    /**
     * Image attachment schema instance.
     *
     * @var ImageAttachmentSchema
     */
    protected $image_attachment_schema = null;

    /**
     * Constructor.
     *
     * @param ExtendSchema     $extend Rest Extending instance.
     * @param SchemaController $controller Schema Controller instance.
     */
    public function __construct(Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, Automattic\WooCommerce\StoreApi\SchemaController $controller)
    {
        // stub
    }

    /**
     * Term properties.
     *
     * @return array
     */
    public function get_properties()
    {
        // stub
    }

    /**
     * Convert a term object into an object suitable for the response.
     *
     * @param \WP_Term $term Term object.
     * @return array
     */
    public function get_item_response($term)
    {
        // stub
    }

    /**
     * Get total number of reviews for products in a category.
     *
     * @param \WP_Term $term Term object.
     * @return int
     */
    protected function get_category_review_count($term)
    {
        // stub
    }

}

