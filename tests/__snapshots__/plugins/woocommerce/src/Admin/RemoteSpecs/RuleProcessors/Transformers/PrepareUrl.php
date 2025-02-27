<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers;

/**
 * Prepare site URL for comparison.
 *
 * @package Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\Transformers
 */
class PrepareUrl
{
    /**
     * Prepares the site URL by removing the protocol and trailing slash.
     *
     * @param string        $value a value to transform.
     * @param stdClass|null $arguments arguments.
     * @param string|null   $default_value default value.
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