<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor that performs an OR operation on the rule's left and right
 * operands.
 */
class OrRuleProcessor
{
    /**
     * Rule evaluator to use.
     *
     * @var RuleEvaluator
     */
    private $rule_evaluator = null;

    /**
     * Constructor.
     *
     * @param RuleEvaluator $rule_evaluator The rule evaluator to use.
     */
    public function __construct($rule_evaluator = null)
{
}
    /**
     * Performs an OR operation on the rule's left and right operands.
     *
     * @param object $rule         The specific rule being processed by this rule processor.
     * @param object $stored_state Stored state.
     *
     * @return bool The result of the operation.
     */
    public function process($rule, $stored_state)
{
}
    /**
     * Validates the rule.
     *
     * @param object $rule The rule to validate.
     *
     * @return bool Pass/fail.
     */
    public function validate($rule)
{
}
}