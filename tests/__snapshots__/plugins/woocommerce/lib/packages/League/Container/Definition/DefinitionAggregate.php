<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Definition;

class DefinitionAggregate
{
    /**
     * @var DefinitionInterface[]
     */
    protected $definitions = array();

    /**
     * Construct.
     *
     * @param DefinitionInterface[] $definitions
     */
    public function __construct(array $definitions = array())
{
}
    /**
     * {@inheritdoc}
     */
    public function add(string $id, $definition, bool $shared = false): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function has(string $id): bool
{
}
    /**
     * {@inheritdoc}
     */
    public function hasTag(string $tag): bool
{
}
    /**
     * {@inheritdoc}
     */
    public function getDefinition(string $id): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function resolve(string $id, bool $new = false)
{
}
    /**
     * {@inheritdoc}
     */
    public function resolveTagged(string $tag, bool $new = false): array
{
}
    /**
     * {@inheritdoc}
     */
    public function getIterator(): Generator
{
}
}