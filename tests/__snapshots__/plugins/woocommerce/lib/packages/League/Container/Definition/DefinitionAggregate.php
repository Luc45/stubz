<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Definition;

class DefinitionAggregate
{
    /**
     * @var DefinitionInterface[]
     */
    protected $definitions = array (
);

    /**
     * Construct.
     *
     * @param DefinitionInterface[] $definitions
     */
    public function __construct(array $definitions = array (
))
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function add(string $id, $definition, bool $shared = false): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function has(string $id): bool
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function hasTag(string $tag): bool
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function getDefinition(string $id): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(string $id, bool $new = false)
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function resolveTagged(string $tag, bool $new = false): array
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator(): Generator
    {
        // stub
    }

}

