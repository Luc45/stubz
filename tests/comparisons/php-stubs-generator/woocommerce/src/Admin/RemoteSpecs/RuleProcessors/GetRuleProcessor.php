<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Class encapsulating getting the processor for a given rule type.
 */
class GetRuleProcessor
{
    /**
     * Get the processor for the specified rule type.
     *
     * @param string $rule_type The rule type.
     *
     * @return RuleProcessorInterface The matching processor for the specified rule type, or a FailRuleProcessor if no matching processor is found.
     */
    public static function get_processor($rule_type)
    {
    }
}
