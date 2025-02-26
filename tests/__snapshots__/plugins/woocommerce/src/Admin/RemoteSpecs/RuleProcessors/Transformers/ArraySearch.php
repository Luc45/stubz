<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers;

/**
 * Searches a given a given value in the array.
 *
 * @package Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers
 */
class ArraySearch extends \
{
    /**
     * Search a given value in the array.
     *
     * @param mixed         $value a value to transform.
     * @param stdClass|null $arguments required argument 'value'.
     * @param string|null   $default_value default value.
     *
     * @throws InvalidArgumentException Throws when the required 'value' is missing.
     *
     * @return mixed|null
     */
    public function transform($value, stdClass|null $arguments = null, $default_value = null)
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

