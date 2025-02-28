<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor for sending when the provided plugin is activated and
 * matches the specified version.
 */
class PluginVersionRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\RuleProcessorInterface
{
    /**
     * Plugins provider instance.
     *
     * @var PluginsProviderInterface
     */
    private $plugins_provider = null;
    /**
     * Constructor.
     *
     * @param PluginsProviderInterface $plugins_provider The plugins provider.
     */
    public function __construct($plugins_provider = null)
{
}
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