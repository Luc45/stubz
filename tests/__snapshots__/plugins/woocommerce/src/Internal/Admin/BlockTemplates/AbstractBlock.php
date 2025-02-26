<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Block configuration used to specify blocks in BlockTemplate.
 */
class AbstractBlock extends \
{
    /**
     * The block name.
     *
     * @var string
     */
    private $name = null;

    /**
     * The block ID.
     *
     * @var string
     */
    private $id = null;

    /**
     * The block order.
     *
     * @var int
     */
    private $order = 10000;

    /**
     * The block attributes.
     *
     * @var array
     */
    private $attributes = array(
);

    /**
     * The block hide conditions.
     *
     * @var array
     */
    private $hide_conditions = array(
);

    /**
     * The block hide conditions counter.
     *
     * @var int
     */
    private $hide_conditions_counter = 0;

    /**
     * The block disable conditions.
     *
     * @var array
     */
    private $disable_conditions = array(
);

    /**
     * The block disable conditions counter.
     *
     * @var int
     */
    private $disable_conditions_counter = 0;

    /**
     * The block template that this block belongs to.
     *
     * @var BlockTemplate
     */
    private $root_template = null;

    /**
     * The parent container.
     *
     * @var ContainerInterface
     */
    private $parent = null;

    /**
     * Block constructor.
     *
     * @param array                        $config The block configuration.
     * @param BlockTemplateInterface       $root_template The block template that this block belongs to.
     * @param BlockContainerInterface|null $parent The parent block container.
     *
     * @throws \ValueError If the block configuration is invalid.
     * @throws \ValueError If the parent block container does not belong to the same template as the block.
     */
    public function __construct(array $config, Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface &$root_template, Automattic\WooCommerce\Admin\BlockTemplates\ContainerInterface|null &$parent = null)
    {
        // stub
    }

    /**
     * Validate block configuration.
     *
     * @param array                   $config The block configuration.
     * @param BlockTemplateInterface  $root_template The block template that this block belongs to.
     * @param ContainerInterface|null $parent The parent block container.
     *
     * @throws \ValueError If the block configuration is invalid.
     * @throws \ValueError If the parent block container does not belong to the same template as the block.
     */
    protected function validate(array $config, Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface &$root_template, Automattic\WooCommerce\Admin\BlockTemplates\ContainerInterface|null &$parent = null)
    {
        // stub
    }

    /**
     * Get the block name.
     */
    public function get_name(): string
    {
        // stub
    }

    /**
     * Get the block ID.
     */
    public function get_id(): string
    {
        // stub
    }

    /**
     * Get the block order.
     */
    public function get_order(): int
    {
        // stub
    }

    /**
     * Set the block order.
     *
     * @param int $order The block order.
     */
    public function set_order(int $order)
    {
        // stub
    }

    /**
     * Get the block attributes.
     */
    public function get_attributes(): array
    {
        // stub
    }

    /**
     * Set the block attributes.
     *
     * @param array $attributes The block attributes.
     */
    public function set_attributes(array $attributes)
    {
        // stub
    }

    /**
     * Set a block attribute value without replacing the entire attributes object.
     *
     * @param string $key The attribute key.
     * @param mixed  $value The attribute value.
     */
    public function set_attribute(string $key, $value)
    {
        // stub
    }

    /**
     * Get the template that this block belongs to.
     */
    public function get_root_template(): Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface
    {
        // stub
    }

    /**
     * Get the parent block container.
     */
    public function get_parent(): Automattic\WooCommerce\Admin\BlockTemplates\ContainerInterface
    {
        // stub
    }

    /**
     * Remove the block from its parent.
     */
    public function remove()
    {
        // stub
    }

    /**
     * Check if the block is detached from its parent block container or the template it belongs to.
     *
     * @return bool True if the block is detached from its parent block container or the template it belongs to.
     */
    public function is_detached(): bool
    {
        // stub
    }

    /**
     * Add a hide condition to the block.
     *
     * The hide condition is a JavaScript-like expression that will be evaluated on the client to determine if the block should be hidden.
     * See [@woocommerce/expression-evaluation](https://github.com/woocommerce/woocommerce/blob/trunk/packages/js/expression-evaluation/README.md) for more details.
     *
     * @param string $expression An expression, which if true, will hide the block.
     */
    public function add_hide_condition(string $expression): string
    {
        // stub
    }

    /**
     * Remove a hide condition from the block.
     *
     * @param string $key The key of the hide condition to remove.
     */
    public function remove_hide_condition(string $key)
    {
        // stub
    }

    /**
     * Get the hide conditions of the block.
     */
    public function get_hide_conditions(): array
    {
        // stub
    }

    /**
     * Add a disable condition to the block.
     *
     * The disable condition is a JavaScript-like expression that will be evaluated on the client to determine if the block should be hidden.
     * See [@woocommerce/expression-evaluation](https://github.com/woocommerce/woocommerce/blob/trunk/packages/js/expression-evaluation/README.md) for more details.
     *
     * @param string $expression An expression, which if true, will disable the block.
     */
    public function add_disable_condition(string $expression): string
    {
        // stub
    }

    /**
     * Remove a disable condition from the block.
     *
     * @param string $key The key of the disable condition to remove.
     */
    public function remove_disable_condition(string $key)
    {
        // stub
    }

    /**
     * Get the disable conditions of the block.
     */
    public function get_disable_conditions(): array
    {
        // stub
    }

}

