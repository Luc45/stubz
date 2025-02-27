<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers;

/**
 * Flatten nested array.
 *
 * @package Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers
 */
class ArrayFlatten
{
    /**
     * Search a given value in the array.
     *
     * @param mixed         $value a value to transform.
     * @param stdClass|null $arguments arguments.
     * @param string|null   $default_value default value.
     *
     * @return mixed|null
     */
    public function transform($value, stdClass|null $arguments = null, $default_value = array (
))
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