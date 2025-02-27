<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers;

/**
 * Count elements in Array or Countable object.
 *
 * @package Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers
 */
class Count
{
    /**
     *  Count elements in Array or Countable object.
     *
     * @param array|Countable $value an array to count.
     * @param stdClass|null   $arguments arguments.
     * @param string|null     $default_value default value.
     *
     * @return number
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