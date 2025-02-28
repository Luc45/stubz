<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * AbstractTemplatePart class.
 *
 * Shared logic for templates parts.
 *
 * @internal
 */
abstract class AbstractTemplatePart extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplate
{
    /**
     * The template part area where the template part belongs.
     *
     * @var string
     */
    public $template_area = null;
}