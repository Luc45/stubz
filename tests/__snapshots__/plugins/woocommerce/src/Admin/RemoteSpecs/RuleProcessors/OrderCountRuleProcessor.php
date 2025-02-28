<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor for publishing based on the number of orders.
 */
class OrderCountRuleProcessor
{
    /**
     * The orders provider.
     *
     * @var OrdersProvider
     */
    protected $orders_provider = null;

    /**
     * Constructor.
     *
     * @param object $orders_provider The orders provider.
     */
    public function __construct($orders_provider = null)
{
}
    /**
     * Process the rule.
     *
     * @param object $rule         The rule to process.
     * @param object $stored_state Stored state.
     *
     * @return bool Whether the rule passes or not.
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