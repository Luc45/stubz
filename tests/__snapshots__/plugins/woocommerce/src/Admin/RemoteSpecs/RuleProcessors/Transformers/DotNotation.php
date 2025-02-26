<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers;

/**
 * Find an array value by dot notation.
 *
 * @package Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers
 */
class DotNotation extends \
{
    /**
     * Find given path from the given value.
     *
     * @param mixed         $value a value to transform.
     * @param stdClass|null $arguments required argument 'path'.
     * @param string|null   $default_value default value.
     *
     * @throws InvalidArgumentException Throws when the required 'path' is missing.
     *
     * @return mixed
     */
    public function transform($value, stdClass|null $arguments = null, $default_value = null)
    {
        // stub
    }

    /**
     * Find the given $path in $array_to_search by dot notation.
     *
     * @param array  $array_to_search an array to search in.
     * @param string $path a path in the given array.
     * @param null   $default_value default value to return if $path was not found.
     *
     * @return mixed|null
     */
    public function get($array_to_search, $path, $default_value = null)
    {
        // stub
    }

    /**
     * Validate Transformer arguments.
     *
     * @param stdClass|null $arguments arguments to validate.
     *
     * @return mixed
     */
    public function validate(stdClass|null $arguments = null)
    {
        // stub
    }

}

