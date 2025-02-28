<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor that passes (or fails) when the site is on a Woo Express plan.
 * You may optionally pass a plan name to target a specific Woo Express plan.
 */
class IsWooExpressRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\RuleProcessorInterface
{
    /**
     * Passes (or fails) based on whether the site is a Woo Express plan.
     *
     * @param object $rule         The rule being processed by this rule processor.
     * @param object $stored_state Stored state.
     *
     * @return bool The result of the operation.
     */
    public function process($rule, $stored_state)
    {
    }
    /**
     * Validate the rule.
     *
     * @param object $rule The rule to validate.
     *
     * @return bool Pass/fail.
     */
    public function validate($rule)
    {
    }
}