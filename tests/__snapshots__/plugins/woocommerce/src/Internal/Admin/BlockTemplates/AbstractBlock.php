<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Block configuration used to specify blocks in BlockTemplate.
 */
class AbstractBlock implements \Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface
{
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
}
    /**
     * Get the block name.
     */
    public function get_name(): string
{
}
    /**
     * Get the block ID.
     */
    public function get_id(): string
{
}
    /**
     * Get the block order.
     */
    public function get_order(): int
{
}
    /**
     * Set the block order.
     *
     * @param int $order The block order.
     */
    public function set_order(int $order)
{
}
    /**
     * Get the block attributes.
     */
    public function get_attributes(): array
{
}
    /**
     * Set the block attributes.
     *
     * @param array $attributes The block attributes.
     */
    public function set_attributes(array $attributes)
{
}
    /**
     * Set a block attribute value without replacing the entire attributes object.
     *
     * @param string $key The attribute key.
     * @param mixed  $value The attribute value.
     */
    public function set_attribute(string $key, $value)
{
}
    /**
     * Get the template that this block belongs to.
     */
    public function get_root_template(): Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface
{
}
    /**
     * Get the parent block container.
     */
    public function get_parent(): Automattic\WooCommerce\Admin\BlockTemplates\ContainerInterface
{
}
    /**
     * Remove the block from its parent.
     */
    public function remove()
{
}
    /**
     * Check if the block is detached from its parent block container or the template it belongs to.
     *
     * @return bool True if the block is detached from its parent block container or the template it belongs to.
     */
    public function is_detached(): bool
{
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
}
    /**
     * Remove a hide condition from the block.
     *
     * @param string $key The key of the hide condition to remove.
     */
    public function remove_hide_condition(string $key)
{
}
    /**
     * Get the hide conditions of the block.
     */
    public function get_hide_conditions(): array
{
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
}
    /**
     * Remove a disable condition from the block.
     *
     * @param string $key The key of the disable condition to remove.
     */
    public function remove_disable_condition(string $key)
{
}
    /**
     * Get the disable conditions of the block.
     */
    public function get_disable_conditions(): array
{
}
}