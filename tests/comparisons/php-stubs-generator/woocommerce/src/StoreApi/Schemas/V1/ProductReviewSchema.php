<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ProductReviewSchema class.
 */
class ProductReviewSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product_review';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'product-review';
    /**
     * Image attachment schema instance.
     *
     * @var ImageAttachmentSchema
     */
    protected $image_attachment_schema;
    /**
     * Constructor.
     *
     * @param ExtendSchema     $extend Rest Extending instance.
     * @param SchemaController $controller Schema Controller instance.
     */
    public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
    {
    }
    /**
     * Product review schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a WooCommerce product into an object suitable for the response.
     *
     * @param \WP_Comment $review Product review object.
     * @return array
     */
    public function get_item_response($review)
    {
    }
}