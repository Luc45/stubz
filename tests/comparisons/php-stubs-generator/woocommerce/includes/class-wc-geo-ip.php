<?php

/**
 * WC_Geo_IP Class.
 *
 * @deprecated 3.4.0
 */
class WC_Geo_IP
{
    public const GEOIP_COUNTRY_BEGIN = 16776960;
    public const GEOIP_STATE_BEGIN_REV0 = 16700000;
    public const GEOIP_STATE_BEGIN_REV1 = 16000000;
    public const GEOIP_MEMORY_CACHE = 1;
    public const GEOIP_SHARED_MEMORY = 2;
    public const STRUCTURE_INFO_MAX_SIZE = 20;
    public const GEOIP_COUNTRY_EDITION = 1;
    public const GEOIP_PROXY_EDITION = 8;
    public const GEOIP_ASNUM_EDITION = 9;
    public const GEOIP_NETSPEED_EDITION = 10;
    public const GEOIP_REGION_EDITION_REV0 = 7;
    public const GEOIP_REGION_EDITION_REV1 = 3;
    public const GEOIP_CITY_EDITION_REV0 = 6;
    public const GEOIP_CITY_EDITION_REV1 = 2;
    public const GEOIP_ORG_EDITION = 5;
    public const GEOIP_ISP_EDITION = 4;
    public const SEGMENT_RECORD_LENGTH = 3;
    public const STANDARD_RECORD_LENGTH = 3;
    public const ORG_RECORD_LENGTH = 4;
    public const GEOIP_SHM_KEY = 0x4f415401;
    public const GEOIP_DOMAIN_EDITION = 11;
    public const GEOIP_COUNTRY_EDITION_V6 = 12;
    public const GEOIP_LOCATIONA_EDITION = 13;
    public const GEOIP_ACCURACYRADIUS_EDITION = 14;
    public const GEOIP_CITY_EDITION_REV1_V6 = 30;
    public const GEOIP_CITY_EDITION_REV0_V6 = 31;
    public const GEOIP_NETSPEED_EDITION_REV1 = 32;
    public const GEOIP_NETSPEED_EDITION_REV1_V6 = 33;
    public const GEOIP_USERTYPE_EDITION = 28;
    public const GEOIP_USERTYPE_EDITION_V6 = 29;
    public const GEOIP_ASNUM_EDITION_V6 = 21;
    public const GEOIP_ISP_EDITION_V6 = 22;
    public const GEOIP_ORG_EDITION_V6 = 23;
    public const GEOIP_DOMAIN_EDITION_V6 = 24;
    /**
     * Flags.
     *
     * @var int
     */
    public $flags;
    /**
     * File handler.
     *
     * @var resource
     */
    public $filehandle;
    /**
     * Memory buffer.
     *
     * @var string
     */
    public $memory_buffer;
    /**
     * Database type.
     *
     * @var int
     */
    public $databaseType;
    /**
     * Database segments.
     *
     * @var int
     */
    public $databaseSegments;
    /**
     * Record length.
     *
     * @var int
     */
    public $record_length;
    /**
     * Shmid.
     *
     * @var string
     */
    public $shmid;
    /**
     * Two letters country codes.
     *
     * @var array
     */
    public $GEOIP_COUNTRY_CODES = array('', 'AP', 'EU', 'AD', 'AE', 'AF', 'AG', 'AI', 'AL', 'AM', 'CW', 'AO', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AW', 'AZ', 'BA', 'BB', 'BD', 'BE', 'BF', 'BG', 'BH', 'BI', 'BJ', 'BM', 'BN', 'BO', 'BR', 'BS', 'BT', 'BV', 'BW', 'BY', 'BZ', 'CA', 'CC', 'CD', 'CF', 'CG', 'CH', 'CI', 'CK', 'CL', 'CM', 'CN', 'CO', 'CR', 'CU', 'CV', 'CX', 'CY', 'CZ', 'DE', 'DJ', 'DK', 'DM', 'DO', 'DZ', 'EC', 'EE', 'EG', 'EH', 'ER', 'ES', 'ET', 'FI', 'FJ', 'FK', 'FM', 'FO', 'FR', 'SX', 'GA', 'GB', 'GD', 'GE', 'GF', 'GH', 'GI', 'GL', 'GM', 'GN', 'GP', 'GQ', 'GR', 'GS', 'GT', 'GU', 'GW', 'GY', 'HK', 'HM', 'HN', 'HR', 'HT', 'HU', 'ID', 'IE', 'IL', 'IN', 'IO', 'IQ', 'IR', 'IS', 'IT', 'JM', 'JO', 'JP', 'KE', 'KG', 'KH', 'KI', 'KM', 'KN', 'KP', 'KR', 'KW', 'KY', 'KZ', 'LA', 'LB', 'LC', 'LI', 'LK', 'LR', 'LS', 'LT', 'LU', 'LV', 'LY', 'MA', 'MC', 'MD', 'MG', 'MH', 'MK', 'ML', 'MM', 'MN', 'MO', 'MP', 'MQ', 'MR', 'MS', 'MT', 'MU', 'MV', 'MW', 'MX', 'MY', 'MZ', 'NA', 'NC', 'NE', 'NF', 'NG', 'NI', 'NL', 'NO', 'NP', 'NR', 'NU', 'NZ', 'OM', 'PA', 'PE', 'PF', 'PG', 'PH', 'PK', 'PL', 'PM', 'PN', 'PR', 'PS', 'PT', 'PW', 'PY', 'QA', 'RE', 'RO', 'RU', 'RW', 'SA', 'SB', 'SC', 'SD', 'SE', 'SG', 'SH', 'SI', 'SJ', 'SK', 'SL', 'SM', 'SN', 'SO', 'SR', 'ST', 'SV', 'SY', 'SZ', 'TC', 'TD', 'TF', 'TG', 'TH', 'TJ', 'TK', 'TM', 'TN', 'TO', 'TL', 'TR', 'TT', 'TV', 'TW', 'TZ', 'UA', 'UG', 'UM', 'US', 'UY', 'UZ', 'VA', 'VC', 'VE', 'VG', 'VI', 'VN', 'VU', 'WF', 'WS', 'YE', 'YT', 'RS', 'ZA', 'ZM', 'ME', 'ZW', 'A1', 'A2', 'O1', 'AX', 'GG', 'IM', 'JE', 'BL', 'MF', 'BQ', 'SS', 'O1');
    /**
     * 3 letters country codes.
     *
     * @var array
     */
    public $GEOIP_COUNTRY_CODES3 = array('', 'AP', 'EU', 'AND', 'ARE', 'AFG', 'ATG', 'AIA', 'ALB', 'ARM', 'CUW', 'AGO', 'ATA', 'ARG', 'ASM', 'AUT', 'AUS', 'ABW', 'AZE', 'BIH', 'BRB', 'BGD', 'BEL', 'BFA', 'BGR', 'BHR', 'BDI', 'BEN', 'BMU', 'BRN', 'BOL', 'BRA', 'BHS', 'BTN', 'BVT', 'BWA', 'BLR', 'BLZ', 'CAN', 'CCK', 'COD', 'CAF', 'COG', 'CHE', 'CIV', 'COK', 'CHL', 'CMR', 'CHN', 'COL', 'CRI', 'CUB', 'CPV', 'CXR', 'CYP', 'CZE', 'DEU', 'DJI', 'DNK', 'DMA', 'DOM', 'DZA', 'ECU', 'EST', 'EGY', 'ESH', 'ERI', 'ESP', 'ETH', 'FIN', 'FJI', 'FLK', 'FSM', 'FRO', 'FRA', 'SXM', 'GAB', 'GBR', 'GRD', 'GEO', 'GUF', 'GHA', 'GIB', 'GRL', 'GMB', 'GIN', 'GLP', 'GNQ', 'GRC', 'SGS', 'GTM', 'GUM', 'GNB', 'GUY', 'HKG', 'HMD', 'HND', 'HRV', 'HTI', 'HUN', 'IDN', 'IRL', 'ISR', 'IND', 'IOT', 'IRQ', 'IRN', 'ISL', 'ITA', 'JAM', 'JOR', 'JPN', 'KEN', 'KGZ', 'KHM', 'KIR', 'COM', 'KNA', 'PRK', 'KOR', 'KWT', 'CYM', 'KAZ', 'LAO', 'LBN', 'LCA', 'LIE', 'LKA', 'LBR', 'LSO', 'LTU', 'LUX', 'LVA', 'LBY', 'MAR', 'MCO', 'MDA', 'MDG', 'MHL', 'MKD', 'MLI', 'MMR', 'MNG', 'MAC', 'MNP', 'MTQ', 'MRT', 'MSR', 'MLT', 'MUS', 'MDV', 'MWI', 'MEX', 'MYS', 'MOZ', 'NAM', 'NCL', 'NER', 'NFK', 'NGA', 'NIC', 'NLD', 'NOR', 'NPL', 'NRU', 'NIU', 'NZL', 'OMN', 'PAN', 'PER', 'PYF', 'PNG', 'PHL', 'PAK', 'POL', 'SPM', 'PCN', 'PRI', 'PSE', 'PRT', 'PLW', 'PRY', 'QAT', 'REU', 'ROU', 'RUS', 'RWA', 'SAU', 'SLB', 'SYC', 'SDN', 'SWE', 'SGP', 'SHN', 'SVN', 'SJM', 'SVK', 'SLE', 'SMR', 'SEN', 'SOM', 'SUR', 'STP', 'SLV', 'SYR', 'SWZ', 'TCA', 'TCD', 'ATF', 'TGO', 'THA', 'TJK', 'TKL', 'TKM', 'TUN', 'TON', 'TLS', 'TUR', 'TTO', 'TUV', 'TWN', 'TZA', 'UKR', 'UGA', 'UMI', 'USA', 'URY', 'UZB', 'VAT', 'VCT', 'VEN', 'VGB', 'VIR', 'VNM', 'VUT', 'WLF', 'WSM', 'YEM', 'MYT', 'SRB', 'ZAF', 'ZMB', 'MNE', 'ZWE', 'A1', 'A2', 'O1', 'ALA', 'GGY', 'IMN', 'JEY', 'BLM', 'MAF', 'BES', 'SSD', 'O1');
    /**
     * Country names.
     *
     * @var array
     */
    public $GEOIP_COUNTRY_NAMES = array('', 'Asia/Pacific Region', 'Europe', 'Andorra', 'United Arab Emirates', 'Afghanistan', 'Antigua and Barbuda', 'Anguilla', 'Albania', 'Armenia', 'Curacao', 'Angola', 'Antarctica', 'Argentina', 'American Samoa', 'Austria', 'Australia', 'Aruba', 'Azerbaijan', 'Bosnia and Herzegovina', 'Barbados', 'Bangladesh', 'Belgium', 'Burkina Faso', 'Bulgaria', 'Bahrain', 'Burundi', 'Benin', 'Bermuda', 'Brunei Darussalam', 'Bolivia', 'Brazil', 'Bahamas', 'Bhutan', 'Bouvet Island', 'Botswana', 'Belarus', 'Belize', 'Canada', 'Cocos (Keeling) Islands', 'Congo, The Democratic Republic of the', 'Central African Republic', 'Congo', 'Switzerland', "Cote D'Ivoire", 'Cook Islands', 'Chile', 'Cameroon', 'China', 'Colombia', 'Costa Rica', 'Cuba', 'Cape Verde', 'Christmas Island', 'Cyprus', 'Czech Republic', 'Germany', 'Djibouti', 'Denmark', 'Dominica', 'Dominican Republic', 'Algeria', 'Ecuador', 'Estonia', 'Egypt', 'Western Sahara', 'Eritrea', 'Spain', 'Ethiopia', 'Finland', 'Fiji', 'Falkland Islands (Malvinas)', 'Micronesia, Federated States of', 'Faroe Islands', 'France', 'Sint Maarten (Dutch part)', 'Gabon', 'United Kingdom', 'Grenada', 'Georgia', 'French Guiana', 'Ghana', 'Gibraltar', 'Greenland', 'Gambia', 'Guinea', 'Guadeloupe', 'Equatorial Guinea', 'Greece', 'South Georgia and the South Sandwich Islands', 'Guatemala', 'Guam', 'Guinea-Bissau', 'Guyana', 'Hong Kong', 'Heard Island and McDonald Islands', 'Honduras', 'Croatia', 'Haiti', 'Hungary', 'Indonesia', 'Ireland', 'Israel', 'India', 'British Indian Ocean Territory', 'Iraq', 'Iran, Islamic Republic of', 'Iceland', 'Italy', 'Jamaica', 'Jordan', 'Japan', 'Kenya', 'Kyrgyzstan', 'Cambodia', 'Kiribati', 'Comoros', 'Saint Kitts and Nevis', "Korea, Democratic People's Republic of", 'Korea, Republic of', 'Kuwait', 'Cayman Islands', 'Kazakhstan', "Lao People's Democratic Republic", 'Lebanon', 'Saint Lucia', 'Liechtenstein', 'Sri Lanka', 'Liberia', 'Lesotho', 'Lithuania', 'Luxembourg', 'Latvia', 'Libya', 'Morocco', 'Monaco', 'Moldova, Republic of', 'Madagascar', 'Marshall Islands', 'Macedonia', 'Mali', 'Myanmar', 'Mongolia', 'Macau', 'Northern Mariana Islands', 'Martinique', 'Mauritania', 'Montserrat', 'Malta', 'Mauritius', 'Maldives', 'Malawi', 'Mexico', 'Malaysia', 'Mozambique', 'Namibia', 'New Caledonia', 'Niger', 'Norfolk Island', 'Nigeria', 'Nicaragua', 'Netherlands', 'Norway', 'Nepal', 'Nauru', 'Niue', 'New Zealand', 'Oman', 'Panama', 'Peru', 'French Polynesia', 'Papua New Guinea', 'Philippines', 'Pakistan', 'Poland', 'Saint Pierre and Miquelon', 'Pitcairn Islands', 'Puerto Rico', 'Palestinian Territory', 'Portugal', 'Palau', 'Paraguay', 'Qatar', 'Reunion', 'Romania', 'Russian Federation', 'Rwanda', 'Saudi Arabia', 'Solomon Islands', 'Seychelles', 'Sudan', 'Sweden', 'Singapore', 'Saint Helena', 'Slovenia', 'Svalbard and Jan Mayen', 'Slovakia', 'Sierra Leone', 'San Marino', 'Senegal', 'Somalia', 'Suriname', 'Sao Tome and Principe', 'El Salvador', 'Syrian Arab Republic', 'Eswatini', 'Turks and Caicos Islands', 'Chad', 'French Southern Territories', 'Togo', 'Thailand', 'Tajikistan', 'Tokelau', 'Turkmenistan', 'Tunisia', 'Tonga', 'Timor-Leste', 'Turkey', 'Trinidad and Tobago', 'Tuvalu', 'Taiwan', 'Tanzania, United Republic of', 'Ukraine', 'Uganda', 'United States Minor Outlying Islands', 'United States', 'Uruguay', 'Uzbekistan', 'Holy See (Vatican City State)', 'Saint Vincent and the Grenadines', 'Venezuela', 'Virgin Islands, British', 'Virgin Islands, U.S.', 'Vietnam', 'Vanuatu', 'Wallis and Futuna', 'Samoa', 'Yemen', 'Mayotte', 'Serbia', 'South Africa', 'Zambia', 'Montenegro', 'Zimbabwe', 'Anonymous Proxy', 'Satellite Provider', 'Other', 'Aland Islands', 'Guernsey', 'Isle of Man', 'Jersey', 'Saint Barthelemy', 'Saint Martin', 'Bonaire, Saint Eustatius and Saba', 'South Sudan', 'Other');
    /**
     * 2 letters continent codes.
     *
     * @var array
     */
    public $GEOIP_CONTINENT_CODES = array('--', 'AS', 'EU', 'EU', 'AS', 'AS', 'NA', 'NA', 'EU', 'AS', 'NA', 'AF', 'AN', 'SA', 'OC', 'EU', 'OC', 'NA', 'AS', 'EU', 'NA', 'AS', 'EU', 'AF', 'EU', 'AS', 'AF', 'AF', 'NA', 'AS', 'SA', 'SA', 'NA', 'AS', 'AN', 'AF', 'EU', 'NA', 'NA', 'AS', 'AF', 'AF', 'AF', 'EU', 'AF', 'OC', 'SA', 'AF', 'AS', 'SA', 'NA', 'NA', 'AF', 'AS', 'AS', 'EU', 'EU', 'AF', 'EU', 'NA', 'NA', 'AF', 'SA', 'EU', 'AF', 'AF', 'AF', 'EU', 'AF', 'EU', 'OC', 'SA', 'OC', 'EU', 'EU', 'NA', 'AF', 'EU', 'NA', 'AS', 'SA', 'AF', 'EU', 'NA', 'AF', 'AF', 'NA', 'AF', 'EU', 'AN', 'NA', 'OC', 'AF', 'SA', 'AS', 'AN', 'NA', 'EU', 'NA', 'EU', 'AS', 'EU', 'AS', 'AS', 'AS', 'AS', 'AS', 'EU', 'EU', 'NA', 'AS', 'AS', 'AF', 'AS', 'AS', 'OC', 'AF', 'NA', 'AS', 'AS', 'AS', 'NA', 'AS', 'AS', 'AS', 'NA', 'EU', 'AS', 'AF', 'AF', 'EU', 'EU', 'EU', 'AF', 'AF', 'EU', 'EU', 'AF', 'OC', 'EU', 'AF', 'AS', 'AS', 'AS', 'OC', 'NA', 'AF', 'NA', 'EU', 'AF', 'AS', 'AF', 'NA', 'AS', 'AF', 'AF', 'OC', 'AF', 'OC', 'AF', 'NA', 'EU', 'EU', 'AS', 'OC', 'OC', 'OC', 'AS', 'NA', 'SA', 'OC', 'OC', 'AS', 'AS', 'EU', 'NA', 'OC', 'NA', 'AS', 'EU', 'OC', 'SA', 'AS', 'AF', 'EU', 'EU', 'AF', 'AS', 'OC', 'AF', 'AF', 'EU', 'AS', 'AF', 'EU', 'EU', 'EU', 'AF', 'EU', 'AF', 'AF', 'SA', 'AF', 'NA', 'AS', 'AF', 'NA', 'AF', 'AN', 'AF', 'AS', 'AS', 'OC', 'AS', 'AF', 'OC', 'AS', 'EU', 'NA', 'OC', 'AS', 'AF', 'EU', 'AF', 'OC', 'NA', 'SA', 'AS', 'EU', 'NA', 'SA', 'NA', 'NA', 'AS', 'OC', 'OC', 'OC', 'AS', 'AF', 'EU', 'AF', 'AF', 'EU', 'AF', '--', '--', '--', 'EU', 'EU', 'EU', 'EU', 'NA', 'NA', 'NA', 'AF', '--');
    /** @var WC_Logger Logger instance */
    public static $log = \false;
    /**
     * Logging method.
     *
     * @param string $message Log message.
     * @param string $level   Optional. Default 'info'.
     *     emergency|alert|critical|error|warning|notice|info|debug
     */
    public static function log($message, $level = 'info')
    {
    }
    /**
     * Open geoip file.
     *
     * @param string $filename
     * @param int    $flags
     */
    public function geoip_open($filename, $flags)
    {
    }
    /**
     * Close geoip file.
     *
     * @return bool
     */
    public function geoip_close()
    {
    }
    /**
     * Seek country IPv6.
     *
     * @param  int $ipnum
     * @return string
     */
    public function _geoip_seek_country_v6($ipnum)
    {
    }
    /**
     * Record by addr.
     *
     * @param  string $addr
     *
     * @return WC_Geo_IP_Record
     */
    public function geoip_record_by_addr($addr)
    {
    }
    /**
     * Country ID by addr IPv6.
     *
     * @param  string $addr
     * @return int|bool
     */
    public function geoip_country_id_by_addr_v6($addr)
    {
    }
    /**
     * Country ID by addr.
     *
     * @param  string $addr
     * @return int
     */
    public function geoip_country_id_by_addr($addr)
    {
    }
    /**
     * Country code by addr IPv6.
     *
     * @param  string $addr
     * @return string
     */
    public function geoip_country_code_by_addr_v6($addr)
    {
    }
    /**
     * Country code by addr.
     *
     * @param  string $addr
     * @return string
     */
    public function geoip_country_code_by_addr($addr)
    {
    }
}
/**
 * Geo IP Record class.
 */
class WC_Geo_IP_Record
{
    /**
     * Country code.
     *
     * @var string
     */
    public $country_code;
    /**
     * 3 letters country code.
     *
     * @var string
     */
    public $country_code3;
    /**
     * Country name.
     *
     * @var string
     */
    public $country_name;
    /**
     * Region.
     *
     * @var string
     */
    public $region;
    /**
     * City.
     *
     * @var string
     */
    public $city;
    /**
     * Postal code.
     *
     * @var string
     */
    public $postal_code;
    /**
     * Latitude
     *
     * @var int
     */
    public $latitude;
    /**
     * Longitude.
     *
     * @var int
     */
    public $longitude;
    /**
     * Area code.
     *
     * @var int
     */
    public $area_code;
    /**
     * DMA Code.
     *
     * Metro and DMA code are the same.
     * Use metro code instead.
     *
     * @var float
     */
    public $dma_code;
    /**
     * Metro code.
     *
     * @var float
     */
    public $metro_code;
    /**
     * Continent code.
     *
     * @var string
     */
    public $continent_code;
}
