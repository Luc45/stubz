<?php

namespace Automattic\WooCommerce\Internal\Features\ProductBlockEditor\ProductTemplates;

/**
 * Class for Subsection block.
 */
class Subsection
{
    /**
     * Subsection Block constructor.
     *
     * @param array                   $config The block configuration.
     * @param BlockTemplateInterface  $root_template The block template that this block belongs to.
     * @param ContainerInterface|null $parent The parent block container.
     *
     * @throws \ValueError If the block configuration is invalid.
     * @throws \ValueError If the parent block container does not belong to the same template as the block.
     * @throws \InvalidArgumentException If blockName key and value are passed into block configuration.
     */
    public function __construct(array $config, Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface &$root_template, Automattic\WooCommerce\Admin\BlockTemplates\ContainerInterface|null &$parent = null)
    {
        // stub
    }

}