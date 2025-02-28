<?php

/**
 * Validation class.
 */
class WC_Validation
{
    /**
     * Validates an email using WordPress native is_email function.
     *
     * @param  string $email Email address to validate.
     * @return bool
     */
    public static function is_email($email)
    {
    }
    /**
     * Validates a phone number using a regular expression.
     *
     * @param  string $phone Phone number to validate.
     * @return bool
     */
    public static function is_phone($phone)
    {
    }
    /**
     * Checks for a valid postcode.
     *
     * @param  string $postcode Postcode to validate.
     * @param  string $country Country to validate the postcode for.
     * @return bool
     */
    public static function is_postcode($postcode, $country)
    {
    }
    /**
     * Check if is a GB postcode.
     *
     * @param  string $to_check A postcode.
     * @return bool
     */
    public static function is_gb_postcode($to_check)
    {
    }
    /**
     * Format the postcode according to the country and length of the postcode.
     *
     * @param  string $postcode Postcode to format.
     * @param  string $country Country to format the postcode for.
     * @return string  Formatted postcode.
     */
    public static function format_postcode($postcode, $country)
    {
    }
    /**
     * Format a given phone number.
     *
     * @param  mixed $tel Phone number to format.
     * @return string
     */
    public static function format_phone($tel)
    {
    }
}
