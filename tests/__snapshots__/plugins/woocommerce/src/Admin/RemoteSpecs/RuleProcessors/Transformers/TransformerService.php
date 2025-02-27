<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers;

/**
 * A simple service class for the Transformer classes.
 *
 * Class TransformerService
 *
 * @package Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers
 */
class TransformerService
{
    /**
     * Create a transformer object by name.
     *
     * @param string $name name of the transformer.
     *
     * @return TransformerInterface|null
     */
    public static function create_transformer($name)
    {
        // stub
    }

    /**
     * Apply transformers to the given value.
     *
     * @param mixed  $target_value a value to transform.
     * @param array  $transformer_configs transform configuration.
     * @param bool   $is_default_set flag on is default value set.
     * @param string $default_value default value.
     *
     * @throws InvalidArgumentException Throws when one of the required arguments is missing.
     * @return mixed|null
     */
    public static function apply($target_value, array $transformer_configs, $is_default_set, $default_value)
    {
        // stub
    }

}