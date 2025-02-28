<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Evaluate the given rules as an AND operation - return false early if a
 * rule evaluates to false.
 */
class RuleEvaluator
{
    /**
     * GetRuleProcessor to use.
     *
     * @var GetRuleProcessor
     */
    private $get_rule_processor = null;

    /**
     * Constructor.
     *
     * @param GetRuleProcessor $get_rule_processor The GetRuleProcessor to use.
     */
    public function __construct($get_rule_processor = null)
{
}
    /**
     * Evaluate the given rules as an AND operation - return false early if a
     * rule evaluates to false.
     *
     * @param array|object $rules        The rule or rules being processed.
     * @param object|null  $stored_state Stored state.
     * @param array        $logger_args  Arguments for the rule evaluator logger. `slug` is required.
     *
     * @throws \InvalidArgumentException Thrown when $logger_args is missing slug.
     *
     * @return bool The result of the operation.
     */
    public function evaluate($rules, $stored_state = null, $logger_args = array())
{
}
}