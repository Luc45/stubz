<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor that passes (or fails) when the site is on the eCommerce
 * plan.
 */
class IsEcommerceRuleProcessor
{
    /**
     * Passes (or fails) based on whether the site is on the eCommerce plan or
     * not.
     *
     * @param object $rule         The rule being processed by this rule processor.
     * @param object $stored_state Stored state.
     *
     * @return bool The result of the operation.
     */
    public function process($rule, $stored_state)
    {
        // stub
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
        // stub
    }

}