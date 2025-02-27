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
     * JWT header type.
     *
     * @var string
     */
    private static $type = 'JWT';

    /**
     * JWT algorithm to generate signature.
     *
     * @var string
     */
    private static $algorithm = 'HS256';

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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Generates the json formatted header for our HS256 JWT token.
     *
     * @return string|bool
     */
    private static function generate_header()
    {
        // stub
    }

    /**
     * Generates a sha256 signature for the provided string using the provided secret.
     *
     * @param string $string Header + Payload token substring.
     * @param string $secret The secret used to generate the signature.
     *
     * @return false|string
     */
    private static function generate_signature(string $string, string $secret)
    {
        // stub
    }

    /**
     * Generates the payload in json formatted string.
     *
     * @param array $payload Payload data.
     *
     * @return string|bool
     */
    private static function generate_payload(array $payload)
    {
        // stub
    }

    /**
     * Encodes a string to url safe base64.
     *
     * @param string $string The string to be encoded.
     *
     * @return string
     */
    private static function to_base_64_url(string $string)
    {
        // stub
    }

    /**
     * Decodes a string encoded using url safe base64, supporting auto padding.
     *
     * @param string $string the string to be decoded.
     *
     * @return string
     */
    private static function from_base_64_url(string $string)
    {
        // stub
    }

}