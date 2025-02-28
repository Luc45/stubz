<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * JsonWebToken class.
 *
 * Simple Json Web Token generator & verifier static utility class, currently supporting only HS256 signatures.
 */
final class JsonWebToken
{
    /**
     * Generates a token from provided data and secret.
     *
     * @param array  $payload Payload data.
     * @param string $secret The secret used to generate the signature.
     *
     * @return string
     */
    public static function create(array $payload, string $secret)
    {
    }
    /**
     * Validates a provided token against the provided secret.
     * Checks for format, valid header for our class, expiration claim validity and signature.
     * https://datatracker.ietf.org/doc/html/rfc7519#section-7.2
     *
     * @param string $token Full token string.
     * @param string $secret The secret used to generate the signature.
     *
     * @return bool
     */
    public static function validate(string $token, string $secret)
    {
    }
    /**
     * Returns the decoded/encoded header, payload and signature from a token string.
     *
     * @param string $token Full token string.
     *
     * @return object
     */
    public static function get_parts(string $token)
    {
    }
}