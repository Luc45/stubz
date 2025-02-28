<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * CustomAttributeTraits class.
 *
 * @internal
 */
trait CustomAttributeTraits
{
    /**
     * Get a single attribute by its slug.
     *
     * @internal
     * @param string $slug The attribute slug.
     * @return WP_Error|object The matching attribute object or WP_Error if not found.
     */
    public function get_custom_attribute_by_slug($slug)
    {
    }
    /**
     * Query custom attributes by name or slug.
     *
     * @param string $args Search arguments, either name or slug.
     * @return array Matching attributes, formatted for response.
     */
    protected function get_custom_attributes($args)
    {
    }
}