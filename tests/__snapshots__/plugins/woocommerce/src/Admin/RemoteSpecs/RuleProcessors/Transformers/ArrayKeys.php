<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers;

/**
 * Search array value by one of its key.
 *
 * @package Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers
 */
class ArrayKeys
{
    /**
     * Search array value by one of its key.
     *
     * @param mixed         $value a value to transform.
     * @param stdClass|null $arguments arguments.
     * @param string|null   $default_value default value.
     *
     * @return mixed
     */
    public function transform($value, stdClass|null $arguments = null, $default_value = array())
{
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
}
}