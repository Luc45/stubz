<?php

namespace Automattic\WooCommerce\Internal\Features\ProductBlockEditor\ProductTemplates;

/**
 * Class for Product block.
 */
class ProductBlock extends \Automattic\WooCommerce\Internal\Admin\BlockTemplates\AbstractBlock implements \Automattic\WooCommerce\Admin\BlockTemplates\ContainerInterface
{
    use \Automattic\WooCommerce\Internal\Admin\BlockTemplates\BlockContainerTrait;
    /**
     * Adds block to the section block.
     *
     * @param array $block_config The block data.
     */
    public function &add_block(array $block_config) : \Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface
    {
    }
}