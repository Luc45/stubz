<?php

namespace Automattic\WooCommerce\Internal\Admin\Suggestions;

/**
 * Partner payment extensions provider class.
 */
class PaymentExtensionSuggestions
{
    const AIRWALLEX = 'airwallex';

    const ANTOM = 'antom';

    const MERCADO_PAGO = 'mercado_pago';

    const MOLLIE = 'mollie';

    const PAYFAST = 'payfast';

    const PAYMOB = 'paymob';

    const PAYPAL_FULL_STACK = 'paypal_full_stack';

    const PAYPAL_WALLET = 'paypal_wallet';

    const PAYONEER = 'payoneer';

    const PAYSTACK = 'paystack';

    const PAYU_INDIA = 'payu_india';

    const RAZORPAY = 'razorpay';

    const SQUARE_IN_PERSON = 'square_in_person';

    const STRIPE = 'stripe';

    const TILOPAY = 'tilopay';

    const VIVA_WALLET = 'viva_wallet';

    const WOOPAYMENTS = 'woopayments';

    const AMAZON_PAY = 'amazon_pay';

    const AFFIRM = 'affirm';

    const AFTERPAY = 'afterpay';

    const CLEARPAY = 'clearpay';

    const KLARNA = 'klarna';

    const HELIOPAY = 'heliopay';

    const TYPE_PSP = 'psp';

    const TYPE_APM = 'apm';

    const TYPE_EXPRESS_CHECKOUT = 'express_checkout';

    const TYPE_BNPL = 'bnpl';

    const TYPE_CRYPTO = 'crypto';

    const PLUGIN_TYPE_WPORG = 'wporg';

    const LINK_TYPE_PRICING = 'pricing';

    const LINK_TYPE_ABOUT = 'about';

    const LINK_TYPE_TERMS = 'terms';

    const LINK_TYPE_DOCS = 'documentation';

    const LINK_TYPE_SUPPORT = 'support';

    const TAG_PREFERRED = 'preferred';

    const TAG_MADE_IN_WOO = 'made_in_woo';

    const TAG_RECOMMENDED = 'recommended';

    /**
     * The payment extension list for each country.
     *
     * The order is important as it will be used to determine the priority of the suggestions.
     *
     * Each entry is keyed by the two-letter country code and consists of a list of payment extensions.
     * Each payment extension can be identified by its ID (the shorthand version) or by an array with the following format:
     * array(
     *   'id' => 'woopayments', // This is required.
     *   '_type' => 'provider', // Overrides the '_type' key.
     *   // Special entry that instructs the system to append the given items to a list-type entry.
     *   // If the original entry is not a list, we will throw an exception.
     *   // If the original entry does not exist, we will create it.
     *   // This is useful when you want to add tags to a suggestion's default list of tags.
     *   '_append' => array(
     *       'tags' => array( self::TAG_PREFERRED ),
     *   ),
     *   // Special entry that instructs the system to remove the given items from a list-type entry.
     *   // If the original entry is not a list, we will throw an exception.
     *   // If the original entry does not exist, we will ignore the instruction.
     *   // This is useful when you want to remove tags from a suggestion's default list of tags.
     *   '_remove' => array(
     *       'tags' => array( self::TAG_PREFERRED ),
     *   ),
     *   // Special entry that instructs the system to merge a list of items based on their _type key value,
     *   // overriding the original entry with the provided one.
     *   // If the original entry is not a list of arrays each with a _type entry, we will throw an exception.
     *   // If the provided entry is not a list of arrays each with a _type entry, we will throw an exception.
     *   // If the original entry does not exist, we will create it.
     *   // This is useful when you want to override certain default details for a particular country.
     *   '_merge_on_type' => array(
     *       'links' => array(
     *           array(
     *               _type' => self::LINK_TYPE_PRICING,
     *               'url'  => 'https://www.example.com/pricing',
     *           ),
     *       ),
     *   ),
     * )
     * Use the extended format when you need to override the extension's default details for a particular country.
     *
     * @see plugins/woocommerce/i18n/countries.php for the list of supported country codes and their names.
     *
     * @var array
     */
    private array $country_extensions = array (
  'CA' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    'square_in_person' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://squareup.com/ca/en/pricing',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://squareup.com/ca/en/legal/general/ua',
          ),
        ),
      ),
    ),
    3 => 'paypal_wallet',
    4 => 'affirm',
    5 => 'afterpay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/ca/business/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/ca/legal/',
          ),
        ),
      ),
    ),
  ),
  'US' => 
  array (
    'woopayments' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'woopay_eligible',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'stripe',
    2 => 'airwallex',
    3 => 'square_in_person',
    4 => 'paypal_wallet',
    5 => 'amazon_pay',
    6 => 'affirm',
    7 => 'afterpay',
    8 => 'klarna',
  ),
  'GB' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'airwallex',
    5 => 'viva_wallet',
    'square_in_person' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://squareup.com/gb/en/pricing',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://squareup.com/gb/en/legal/general/ua',
          ),
        ),
      ),
    ),
    6 => 'paypal_wallet',
    7 => 'amazon_pay',
    8 => 'clearpay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/uk/business/payment-methods/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/uk/terms-and-conditions/',
          ),
        ),
      ),
    ),
  ),
  'AL' => 
  array (
    'paypal_wallet' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'AD' => 
  array (
    'paypal_wallet' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'AT' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'airwallex',
    5 => 'viva_wallet',
    6 => 'paypal_wallet',
    7 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/at/verkaeufer/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/at/agb/',
          ),
        ),
      ),
    ),
  ),
  'BE' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'airwallex',
    5 => 'viva_wallet',
    6 => 'paypal_wallet',
    7 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/be/fr/entreprise/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/be/fr/conditions-generales/',
          ),
        ),
      ),
    ),
  ),
  'BA' => 
  array (
    'paypal_wallet' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'BG' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
  ),
  'HR' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
  ),
  'CY' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
    6 => 'amazon_pay',
  ),
  'CZ' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/cz/firmy/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/cz/obchodni-podminky/',
          ),
        ),
      ),
    ),
  ),
  'DK' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
    6 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/dk/erhverv/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/dk/vilkar/',
          ),
        ),
      ),
    ),
  ),
  'EE' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'paypal_wallet',
  ),
  'FI' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/fi/yritys/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/fi/ehdot/',
          ),
        ),
      ),
    ),
  ),
  'FO' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'FR' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'airwallex',
    5 => 'viva_wallet',
    'square_in_person' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://squareup.com/fr/fr/pricing',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://squareup.com/fr/fr/legal/general/ua',
          ),
        ),
      ),
    ),
    6 => 'paypal_wallet',
    7 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/fr/entreprise/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/fr/legal/',
          ),
        ),
      ),
    ),
  ),
  'PF' => 
  array (
    'paypal_wallet' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'GI' => 
  array (
    'stripe' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'DE' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'airwallex',
    5 => 'viva_wallet',
    6 => 'paypal_wallet',
    7 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/de/verkaeufer/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/de/agb/',
          ),
        ),
      ),
    ),
  ),
  'GR' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/gr/business/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/gr/oroi-kai-proypotheseis/',
          ),
        ),
      ),
    ),
  ),
  'GL' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'HU' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
    6 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/hu/uzlet/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/hu/jogi-informaciok/',
          ),
        ),
      ),
    ),
  ),
  'IS' => 
  array (
    'mollie' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    'paypal_wallet' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'IE' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'airwallex',
    5 => 'viva_wallet',
    'square_in_person' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://squareup.com/ie/en/pricing',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://squareup.com/ie/en/legal/general/ua',
          ),
        ),
      ),
    ),
    6 => 'paypal_wallet',
    7 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/ie/business/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/ie/terms-and-conditions/',
          ),
        ),
      ),
    ),
  ),
  'IT' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'airwallex',
    5 => 'viva_wallet',
    6 => 'paypal_wallet',
    7 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/it/aziende/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/it/legal/',
          ),
        ),
      ),
    ),
  ),
  'LV' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'paypal_wallet',
  ),
  'LI' => 
  array (
    'stripe' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'mollie',
    2 => 'paypal_wallet',
  ),
  'LT' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'airwallex',
    5 => 'paypal_wallet',
  ),
  'LU' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
    6 => 'amazon_pay',
  ),
  'MT' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
  ),
  'MD' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'MC' => 
  array (
    'paypal_wallet' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'NL' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
    6 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/nl/zakelijk/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/nl/voorwaarden/',
          ),
        ),
      ),
    ),
  ),
  'NO' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'paypal_wallet',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/no/bedrift/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/no/vilkar/',
          ),
        ),
      ),
    ),
  ),
  'PL' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'airwallex',
    5 => 'viva_wallet',
    6 => 'paypal_wallet',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/pl/biznes/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/pl/zasady-i-warunki/',
          ),
        ),
      ),
    ),
  ),
  'PT' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'airwallex',
    5 => 'viva_wallet',
    6 => 'paypal_wallet',
    7 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/pt/empresa/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/pt/termos-e-condicoes/',
          ),
        ),
      ),
    ),
  ),
  'RO' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/ro/companii/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/ro/aspecte-juridice/',
          ),
        ),
      ),
    ),
  ),
  'SM' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'RS' => 
  array (
    'paypal_wallet' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'SK' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'paypal_wallet',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/sk/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/sk/zmluvne-podmienky/',
          ),
        ),
      ),
    ),
  ),
  'SI' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'paypal_wallet',
  ),
  'ES' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'airwallex',
    5 => 'viva_wallet',
    'square_in_person' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://squareup.com/es/es/pricing',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://squareup.com/es/es/legal/general/ua',
          ),
        ),
      ),
    ),
    6 => 'paypal_wallet',
    7 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/es/empresa/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/es/legal/',
          ),
        ),
      ),
    ),
  ),
  'SE' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'viva_wallet',
    5 => 'paypal_wallet',
    6 => 'amazon_pay',
  ),
  'CH' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'mollie',
    4 => 'paypal_wallet',
    5 => 'amazon_pay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/ch/fr/entreprise/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/ch/fr/conditions-generales-de-vente/',
          ),
        ),
      ),
    ),
  ),
  'AG' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'AI' => 
  array (
    0 => 'tilopay',
    1 => 'heliopay',
  ),
  'AR' => 
  array (
    'mercado_pago' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.mercadopago.com.ar/costs-section',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.mercadopago.com.ar/ayuda/terminos-y-politicas_194',
          ),
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
    2 => 'heliopay',
  ),
  'AW' => 
  array (
    0 => 'tilopay',
    1 => 'heliopay',
  ),
  'BS' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'BB' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'BZ' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'BM' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'BO' => 
  array (
    0 => 'heliopay',
  ),
  'BQ' => 
  array (
    0 => 'tilopay',
    1 => 'heliopay',
  ),
  'BR' => 
  array (
    'stripe' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    'mercado_pago' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.mercadopago.com.br/costs-section',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.mercadopago.com.br/ajuda/termos-e-politicas_194',
          ),
        ),
      ),
      '_remove' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    1 => 'paypal_wallet',
    2 => 'heliopay',
  ),
  'VG' => 
  array (
    0 => 'tilopay',
    1 => 'heliopay',
  ),
  'KY' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'CL' => 
  array (
    'mercado_pago' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.mercadopago.cl/costs-section',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.mercadopago.cl/ayuda/terminos-y-politicas_194',
          ),
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
    2 => 'heliopay',
  ),
  'CO' => 
  array (
    'mercado_pago' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.mercadopago.com.co/costs-section',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.mercadopago.com.co/ayuda/terminos-y-politicas_194',
          ),
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
    2 => 'heliopay',
  ),
  'CR' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'CW' => 
  array (
    0 => 'tilopay',
    1 => 'heliopay',
  ),
  'DM' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'DO' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'EC' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
    2 => 'heliopay',
  ),
  'SV' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'FK' => 
  array (
    0 => 'heliopay',
  ),
  'GF' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
    2 => 'heliopay',
  ),
  'GD' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'GP' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
    2 => 'heliopay',
  ),
  'GT' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'GY' => 
  array (
    0 => 'tilopay',
    1 => 'heliopay',
  ),
  'HN' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'JM' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'MQ' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
    2 => 'heliopay',
  ),
  'MX' => 
  array (
    'stripe' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    'mercado_pago' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.mercadopago.com.mx/costs-section',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.mercadopago.com.mx/ayuda/terminos-y-politicas_194',
          ),
        ),
      ),
      '_remove' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    1 => 'paypal_wallet',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/mx/negocios/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/mx/terminos-y-condiciones/',
          ),
        ),
      ),
    ),
    2 => 'heliopay',
  ),
  'NI' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'PA' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'PY' => 
  array (
    0 => 'heliopay',
  ),
  'PE' => 
  array (
    'mercado_pago' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.mercadopago.com.pe/costs-section',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.mercadopago.com.pe/ayuda/terminos-y-politicas_194',
          ),
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
    2 => 'heliopay',
  ),
  'KN' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'LC' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'SX' => 
  array (
    0 => 'tilopay',
    1 => 'heliopay',
  ),
  'VC' => 
  array (
    0 => 'tilopay',
    1 => 'heliopay',
  ),
  'SR' => 
  array (
    0 => 'tilopay',
    1 => 'heliopay',
  ),
  'TT' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'TC' => 
  array (
    0 => 'tilopay',
    1 => 'paypal_full_stack',
    2 => 'paypal_wallet',
    3 => 'heliopay',
  ),
  'UY' => 
  array (
    'mercado_pago' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.mercadopago.com.uy/costs-section',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.mercadopago.com.uy/ayuda/terminos-y-politicas_194',
          ),
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
    2 => 'heliopay',
  ),
  'VI' => 
  array (
    0 => 'tilopay',
    1 => 'heliopay',
  ),
  'VE' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
    2 => 'heliopay',
  ),
  'AU' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'airwallex',
    4 => 'antom',
    'square_in_person' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://squareup.com/au/en/pricing',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://squareup.com/au/en/legal/general/ua',
          ),
        ),
      ),
    ),
    5 => 'paypal_wallet',
    6 => 'afterpay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/au/business/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/au/legal/',
          ),
        ),
      ),
    ),
  ),
  'BD' => 
  array (
    'payoneer' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'CN' => 
  array (
    'paypal_full_stack' => 
    array (
      '_type' => 'psp',
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'antom',
    1 => 'airwallex',
    2 => 'payoneer',
  ),
  'FJ' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'GU' => 
  array (
  ),
  'HK' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'antom',
    4 => 'airwallex',
    5 => 'payoneer',
    6 => 'paypal_full_stack',
  ),
  'IN' => 
  array (
    'stripe' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'razorpay',
    2 => 'payu_india',
    3 => 'payoneer',
    4 => 'paypal_wallet',
  ),
  'ID' => 
  array (
    'antom' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'payoneer',
    2 => 'paypal_wallet',
  ),
  'JP' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'antom',
    'square_in_person' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://squareup.com/jp/ja/pricing',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://squareup.com/jp/ja/legal/general/ua',
          ),
        ),
      ),
    ),
    4 => 'paypal_wallet',
    5 => 'amazon_pay',
  ),
  'MY' => 
  array (
    'stripe' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'antom',
    2 => 'payoneer',
    3 => 'paypal_wallet',
  ),
  'NC' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'NZ' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'airwallex',
    4 => 'paypal_wallet',
    5 => 'afterpay',
    'klarna' => 
    array (
      '_merge_on_type' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            '_type' => 'pricing',
            'url' => 'https://www.klarna.com/nz/business/',
          ),
          1 => 
          array (
            '_type' => 'terms',
            'url' => 'https://www.klarna.com/nz/legal/',
          ),
        ),
      ),
    ),
  ),
  'PW' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'PH' => 
  array (
    'antom' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'payoneer',
    2 => 'paypal_wallet',
  ),
  'SG' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'antom',
    4 => 'airwallex',
    5 => 'paypal_wallet',
  ),
  'LK' => 
  array (
    'payoneer' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'KR' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'TW' => 
  array (
    'paypal_wallet' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'TH' => 
  array (
    'stripe' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'antom',
    2 => 'payoneer',
    3 => 'paypal_wallet',
  ),
  'VN' => 
  array (
    'antom' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'payoneer',
    2 => 'paypal_wallet',
  ),
  'DZ' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'AO' => 
  array (
  ),
  'BJ' => 
  array (
  ),
  'BW' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'BF' => 
  array (
  ),
  'BI' => 
  array (
  ),
  'CM' => 
  array (
  ),
  'CV' => 
  array (
  ),
  'CF' => 
  array (
  ),
  'TD' => 
  array (
  ),
  'KM' => 
  array (
  ),
  'CG' => 
  array (
  ),
  'CI' => 
  array (
  ),
  'EG' => 
  array (
    'paymob' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'CD' => 
  array (
  ),
  'DJ' => 
  array (
  ),
  'GQ' => 
  array (
  ),
  'ER' => 
  array (
  ),
  'SZ' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'ET' => 
  array (
  ),
  'GA' => 
  array (
  ),
  'GH' => 
  array (
    'paystack' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'GM' => 
  array (
  ),
  'GN' => 
  array (
  ),
  'GW' => 
  array (
  ),
  'KE' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'LS' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'LR' => 
  array (
  ),
  'LY' => 
  array (
  ),
  'MG' => 
  array (
  ),
  'MW' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'ML' => 
  array (
  ),
  'MR' => 
  array (
  ),
  'MU' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'MA' => 
  array (
    'payoneer' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'MZ' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'NA' => 
  array (
  ),
  'NE' => 
  array (
  ),
  'NG' => 
  array (
    'paystack' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'RE' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'RW' => 
  array (
  ),
  'ST' => 
  array (
  ),
  'SN' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'SC' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'SL' => 
  array (
  ),
  'SO' => 
  array (
  ),
  'ZA' => 
  array (
    'payfast' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'paystack',
    2 => 'paypal_wallet',
  ),
  'SS' => 
  array (
  ),
  'TZ' => 
  array (
  ),
  'TG' => 
  array (
  ),
  'TN' => 
  array (
  ),
  'UG' => 
  array (
  ),
  'EH' => 
  array (
  ),
  'ZM' => 
  array (
  ),
  'ZW' => 
  array (
  ),
  'AF' => 
  array (
  ),
  'BH' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'GE' => 
  array (
    'paypal_wallet' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'IQ' => 
  array (
  ),
  'IL' => 
  array (
    'airwallex' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'JO' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'KZ' => 
  array (
    'paypal_wallet' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
  ),
  'KW' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'LB' => 
  array (
  ),
  'OM' => 
  array (
    'paymob' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'PK' => 
  array (
    'payoneer' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paymob',
  ),
  'QA' => 
  array (
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'SA' => 
  array (
    'paymob' => 
    array (
      '_append' => 
      array (
        'tags' => 
        array (
          0 => 'preferred',
        ),
      ),
    ),
    0 => 'paypal_full_stack',
    1 => 'paypal_wallet',
  ),
  'AE' => 
  array (
    0 => 'woopayments',
    1 => 'paypal_full_stack',
    2 => 'stripe',
    3 => 'payoneer',
    4 => 'paymob',
    5 => 'paypal_wallet',
  ),
  'YE' => 
  array (
  ),
);

    /**
     * The context to incentive type map.
     *
     * @var array|string[]
     */
    private array $context_to_incentive_type_map;

    /**
     * The suggestion incentives provider.
     *
     * @var PaymentExtensionSuggestionIncentives
     */
    private Automattic\WooCommerce\Internal\Admin\Suggestions\PaymentExtensionSuggestionIncentives $suggestion_incentives;

    /**
     * Initialize the class instance.
     *
     * @param PaymentExtensionSuggestionIncentives $suggestion_incentives The suggestion incentives provider.
     *
     * @internal
     */
    public final function init(Automattic\WooCommerce\Internal\Admin\Suggestions\PaymentExtensionSuggestionIncentives $suggestion_incentives)
    {
        // stub
    }

    /**
     * Get the list of payment extensions details for a specific country.
     *
     * @param string $country_code The two-letter country code.
     * @param string $context      Optional. The context ID of where these extensions are being used.
     *
     * @return array The list of payment extensions (their full details) for the given country.
     *               Empty array if no extensions are available for the country or the country is not supported.
     * @throws \Exception If there were malformed or invalid extension details.
     */
    public function get_country_extensions(string $country_code, string $context = ''): array
    {
        // stub
    }

    /**
     * Get the base details of a payment extension by its ID.
     *
     * @param string $extension_id The extension id.
     *
     * @return array|null The extension details for the given ID. Null if not found.
     */
    public function get_by_id(string $extension_id): array|null
    {
        // stub
    }

    /**
     * Get the base details of a payment extension by its plugin slug.
     *
     * If there are multiple extensions with the same plugin slug, the first one found will be returned.
     *
     * @param string $plugin_slug  The plugin slug.
     * @param string $country_code Optional. The two-letter country code for which the extension suggestion should be retrieved.
     * @param string $context      Optional. The context ID of where this extension suggestion is being used.
     *
     * @return array|null The extension details for the given plugin slug. Null if not found.
     */
    public function get_by_plugin_slug(string $plugin_slug, string $country_code = '', string $context = ''): array|null
    {
        // stub
    }

    /**
     * Dismiss an incentive for a specific payment extension suggestion.
     *
     * @param string $incentive_id  The incentive ID.
     * @param string $suggestion_id The suggestion ID.
     * @param string $context       Optional. The context ID for which the incentive should be dismissed.
     *                              If not provided, the incentive will be dismissed for all contexts.
     *
     * @return bool True if the incentive was not previously dismissed and now it is.
     *              False if the incentive was already dismissed or could not be dismissed.
     * @throws \Exception If the incentive could not be dismissed due to an error.
     */
    public function dismiss_incentive(string $incentive_id, string $suggestion_id, string $context = 'all'): bool
    {
        // stub
    }

    /**
     * Determine if a payment extension is allowed to be suggested.
     *
     * @param string $extension_id The extension ID.
     * @param string $country_code The two-letter country code.
     * @param string $context      Optional. The context ID of where the extension is being used.
     *
     * @return bool True if the extension is allowed, false otherwise.
     *              Defaults to true if there is no specific logic for the extension.
     */
    private function is_extension_allowed(string $extension_id, string $country_code, string $context = ''): bool
    {
        // stub
    }

    /**
     * Based on the WC onboarding profile, determine if the merchant is selling online.
     *
     * If the user skipped the profiler (no data points provided), we assume they are selling online.
     *
     * @return bool True if the merchant is selling online, false otherwise.
     */
    private function is_merchant_selling_online(): bool
    {
        // stub
    }

    /**
     * Based on the WC onboarding profile, determine if the merchant is selling offline.
     *
     * If the user skipped the profiler (no data points provided), we assume they are NOT selling offline.
     *
     * @return bool True if the merchant is selling offline, false otherwise.
     */
    private function is_merchant_selling_offline(): bool
    {
        // stub
    }

    /**
     * Merges country-specific details into the base details of a payment extension.
     *
     * This function processes special `_append`, `_remove`, and `_merge_on_type` instructions to modify
     * list-type entries within the base details.
     *
     * @param array $base_details    The base details of the payment extension.
     * @param array $country_details The country-specific details, which may include
     *                               special `_append` and `_remove` instructions.
     *
     * @return array The merged details, with country-specific modifications applied.
     *
     * @throws \Exception If the country extension details are malformed or invalid.
     */
    private function with_country_details(array $base_details, array $country_details): array
    {
        // stub
    }

    /**
     * Get the incentive details for a given extension and country, if any.
     *
     * @param string $extension_id The extension ID.
     * @param string $country_code The two-letter country code.
     * @param string $context      Optional. The context ID of where the extension incentive is being used.
     *
     * @return array|null The incentive details for the given extension and country. Null if not found.
     */
    private function get_extension_incentive(string $extension_id, string $country_code, string $context = ''): array|null
    {
        // stub
    }

    /**
     * Sanitize the incentive details for a payment extension.
     *
     * @param array $incentive The incentive details.
     *
     * @return array The sanitized incentive details.
     */
    private function sanitize_extension_incentive(array $incentive): array
    {
        // stub
    }

    /**
     * Get the base details of all extensions.
     *
     * @return array[] The base details of all extensions.
     */
    private function get_all_extensions_base_details(): array
    {
        // stub
    }

    /**
     * Get the base details for a specific extension.
     *
     * @see self::standardize_extension_details() for the supported entries.
     *
     * @param string $extension_id The extension ID.
     *
     * @return ?array The extension base details.
     *                Null if the extension is not one we have details for.
     */
    private function get_extension_base_details(string $extension_id): array|null
    {
        // stub
    }

    /**
     * Standardize the details for an extension.
     *
     * Ensures that the details array has all the required fields, and fills in any missing optional fields with defaults.
     * We also enforce a consistent order for the fields.
     *
     * @param array $extension_details The extension details.
     *
     * @return array The standardized extension details.
     */
    private function standardize_extension_details(array $extension_details): array
    {
        // stub
    }

}

