<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers;

/**
 * Count elements in Array or Countable object.
 *
 * @package Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers
 */
class Count implements \Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers\TransformerInterface
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
    public function transform($value, \stdClass $arguments = null, $default_value = null)
    {
    }
    /**
     * Validate Transformer arguments.
     *
     * @param stdClass|null $arguments arguments to validate.
     *
     * @return mixed
     */
    public function validate(\stdClass $arguments = null)
    {
    }
}
