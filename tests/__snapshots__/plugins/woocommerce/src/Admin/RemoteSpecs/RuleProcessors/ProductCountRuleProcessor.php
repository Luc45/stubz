<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor that performs a comparison operation against the number of
 * products.
 */
class ProductCountRuleProcessor extends \
{
    /**
     * The product query.
     *
     * @var WC_Product_Query
     */
    protected $product_query = null;

    /**
     * Constructor.
     *
     * @param object $product_query The product query.
     */
    public function __construct($product_query = null)
    {
        // stub
    }

    /**
     * Performs a comparison operation against the number of products.
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

