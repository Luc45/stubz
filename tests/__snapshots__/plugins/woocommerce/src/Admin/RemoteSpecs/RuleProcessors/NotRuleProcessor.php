<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor that negates the rules in the rule's operand.
 */
class NotRuleProcessor
{
    /**
     * The rule evaluator to use.
     *
     * @var RuleEvaluator
     */
    protected $rule_evaluator = null;

    /**
     * Constructor.
     *
     * @param RuleEvaluator $rule_evaluator The rule evaluator to use.
     */
    public function __construct($rule_evaluator = null)
    {
        // stub
    }

    /**
     * Evaluates the rules in the operand and negates the result.
     *
     * @param object $rule         The specific rule being processed by this rule processor.
     * @param object $stored_state Stored state.
     *
     * @return bool The result of the operation.
     */
    public function process($rule, $stored_state)
    {
        // stub
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
        // stub
    }

}

