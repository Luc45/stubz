<?php

namespace Automattic\WooCommerce\Blocks\Patterns;

/**
 * PatternsToolkit class.
 *
 * @internal
 */
class PTKClient
{
    const PATTERNS_TOOLKIT_URL = 'https://public-api.wordpress.com/rest/v1/ptk/patterns/';

    /**
     * Fetch the WooCommerce patterns from the Patterns Toolkit (PTK) API.
     *
     * @param array $options Options for fetching patterns.
     * @return array|WP_Error
     */
    public function fetch_patterns(array $options = array (
))
    {
        // stub
    }

}