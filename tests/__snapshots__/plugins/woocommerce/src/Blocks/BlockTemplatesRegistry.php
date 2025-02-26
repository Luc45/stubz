<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * BlockTemplatesRegistry class.
 *
 * @internal
 */
class BlockTemplatesRegistry extends \
{
    /**
     * The array of registered templates.
     *
     * @var AbstractTemplate[]|AbstractTemplatePart[]
     */
    private $templates = array(
);

    /**
     * Initialization method.
     */
    public function init()
    {
        // stub
    }

    /**
     * Returns the template matching the slug
     *
     * @param string $template_slug Slug of the template to retrieve.
     *
     * @return AbstractTemplate|AbstractTemplatePart|null
     */
    public function get_template($template_slug)
    {
        // stub
    }

}

