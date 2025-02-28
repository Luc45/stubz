<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Class EvaluationLogger
 *
 * @package Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors
 */
class EvaluationLogger
{
    /**
     * Slug of the spec.
     *
     * @var string
     */
    private $slug = null;
    /**
     * Results of rules in the given spec.
     *
     * @var array
     */
    private $results = array();
    /**
     * Logger class to use.
     *
     * @var \WC_Logger_Interface|null
     */
    private $logger = null;
    /**
     * Logger source.
     *
     * @var string Logger source.
     */
    private $source = '';
    /**
     * EvaluationLogger constructor.
     *
     * @param string                    $slug   Slug/ID of a spec that is being evaluated.
     * @param string|null               $source Logger source.
     * @param \WC_Logger_Interface|null $logger Logger class to use. Default to using the WC logger.
     */
    public function __construct($slug, $source = null, WC_Logger_Interface|null $logger = null)
{
}
    /**
     * Add evaluation result of a rule.
     *
     * @param string  $rule_type Name of the rule being tested.
     * @param boolean $result    Result of a given rule.
     */
    public function add_result($rule_type, $result)
{
}
    /**
     * Log the results.
     */
    public function log()
{
}
}