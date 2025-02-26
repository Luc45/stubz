<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor for sending when WooCommerce Admin has been updated.
 */
class WooCommerceAdminUpdatedRuleProcessor extends \
{
    /**
     * Process the rule.
     *
     * @param object $rule         The specific rule being processed by this rule processor.
     * @param object $stored_state Stored state.
     *
     * @return bool Whether the rule passes or not.
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

