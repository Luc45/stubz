<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * AbstractTemplate class.
 *
 * Shared logic for templates.
 *
 * @internal
 */
abstract class AbstractTemplate
{
    const SLUG = '';

    /**
     * Initialization method.
     */
    public abstract function init();

    /**
     * Should return the title of the template.
     *
     * @return string
     */
    public abstract function get_template_title();

    /**
     * Should return the description of the template.
     *
     * @return string
     */
    public abstract function get_template_description();

}