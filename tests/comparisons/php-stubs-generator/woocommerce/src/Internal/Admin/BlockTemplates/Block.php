<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Generic block with container properties to be used in BlockTemplate.
 */
class Block extends \Automattic\WooCommerce\Internal\Admin\BlockTemplates\AbstractBlock implements \Automattic\WooCommerce\Admin\BlockTemplates\BlockContainerInterface
{
    use \Automattic\WooCommerce\Internal\Admin\BlockTemplates\BlockContainerTrait;
    /**
     * Add an inner block to this block.
     *
     * @param array $block_config The block data.
     */
    public function &add_block(array $block_config) : \Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface
    {
    }
}