<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ImageAttachmentSchema class.
 */
class ImageAttachmentSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'image';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'image';
    /**
     * Product schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a WooCommerce product into an object suitable for the response.
     *
     * @param int $attachment_id Image attachment ID.
     * @return object|null
     */
    public function get_item_response($attachment_id)
    {
    }
}