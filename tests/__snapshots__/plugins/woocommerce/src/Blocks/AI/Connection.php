<?php

namespace Automattic\WooCommerce\Blocks\AI;

/**
 * Class Connection
 *
 * @internal
 */
class Connection
{
    const TEXT_COMPLETION_API_URL = 'https://public-api.wordpress.com/wpcom/v2/text-completion';

    const MODEL = 'gpt-3.5-turbo-1106';

    /**
     * The post request.
     *
     * @param string $token The JWT token.
     * @param string $prompt The prompt to send to the API.
     * @param int    $timeout The timeout for the request.
     * @param string $response_format The response format.
     *
     * @return mixed
     */
    public function fetch_ai_response($token, $prompt, $timeout = 15, $response_format = null)
    {
        // stub
    }

    /**
     * Fetch the AI responses in parallel using the given token and prompts.
     *
     * @param string $token The JWT token.
     * @param array  $prompts The prompts to send to the API.
     * @param int    $timeout The timeout for the request.
     * @param string $response_format The response format.
     *
     * @return array|WP_Error The responses or a WP_Error object.
     */
    public function fetch_ai_responses($token, array $prompts, $timeout = 15, $response_format = null)
    {
        // stub
    }

    /**
     * Return the site ID.
     *
     * @return integer|\WP_Error The site ID or a WP_Error object.
     */
    public function get_site_id()
    {
        // stub
    }

    /**
     * Fetch the JWT token.
     *
     * @param integer $site_id The site ID.
     *
     * @return string|\WP_Error The JWT token or a WP_Error object.
     */
    public function get_jwt_token($site_id)
    {
        // stub
    }

}