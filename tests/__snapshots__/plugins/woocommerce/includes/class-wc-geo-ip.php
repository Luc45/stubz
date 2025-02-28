<?php

/**
 * WC_Geo_IP Class.
 *
 * @deprecated 3.4.0
 */
class WC_Geo_IP
{
    const GEOIP_COUNTRY_BEGIN = 16776960;

    const GEOIP_STATE_BEGIN_REV0 = 16700000;

    const GEOIP_STATE_BEGIN_REV1 = 16000000;

    const GEOIP_MEMORY_CACHE = 1;

    const GEOIP_SHARED_MEMORY = 2;

    const STRUCTURE_INFO_MAX_SIZE = 20;

    const GEOIP_COUNTRY_EDITION = 1;

    const GEOIP_PROXY_EDITION = 8;

    const GEOIP_ASNUM_EDITION = 9;

    const GEOIP_NETSPEED_EDITION = 10;

    const GEOIP_REGION_EDITION_REV0 = 7;

    const GEOIP_REGION_EDITION_REV1 = 3;

    const GEOIP_CITY_EDITION_REV0 = 6;

    const GEOIP_CITY_EDITION_REV1 = 2;

    const GEOIP_ORG_EDITION = 5;

    const GEOIP_ISP_EDITION = 4;

    const SEGMENT_RECORD_LENGTH = 3;

    const STANDARD_RECORD_LENGTH = 3;

    const ORG_RECORD_LENGTH = 4;

    const GEOIP_SHM_KEY = 1329681409;

    const GEOIP_DOMAIN_EDITION = 11;

    const GEOIP_COUNTRY_EDITION_V6 = 12;

    const GEOIP_LOCATIONA_EDITION = 13;

    const GEOIP_ACCURACYRADIUS_EDITION = 14;

    const GEOIP_CITY_EDITION_REV1_V6 = 30;

    const GEOIP_CITY_EDITION_REV0_V6 = 31;

    const GEOIP_NETSPEED_EDITION_REV1 = 32;

    const GEOIP_NETSPEED_EDITION_REV1_V6 = 33;

    const GEOIP_USERTYPE_EDITION = 28;

    const GEOIP_USERTYPE_EDITION_V6 = 29;

    const GEOIP_ASNUM_EDITION_V6 = 21;

    const GEOIP_ISP_EDITION_V6 = 22;

    const GEOIP_ORG_EDITION_V6 = 23;

    const GEOIP_DOMAIN_EDITION_V6 = 24;

    /**
     * Flags.
     *
     * @var int
     */
    public $flags = null;

    /**
     * File handler.
     *
     * @var resource
     */
    public $filehandle = null;

    /**
     * Memory buffer.
     *
     * @var string
     */
    public $memory_buffer = null;

    /**
     * Database type.
     *
     * @var int
     */
    public $databaseType = null;

    /**
     * Database segments.
     *
     * @var int
     */
    public $databaseSegments = null;

    /**
     * Record length.
     *
     * @var int
     */
    public $record_length = null;

    /**
     * Shmid.
     *
     * @var string
     */
    public $shmid = null;

    /**
     * Two letters country codes.
     *
     * @var array
     */
    public $GEOIP_COUNTRY_CODES = array (
  0 => '',
  1 => 'AP',
  2 => 'EU',
  3 => 'AD',
  4 => 'AE',
  5 => 'AF',
  6 => 'AG',
  7 => 'AI',
  8 => 'AL',
  9 => 'AM',
  10 => 'CW',
  11 => 'AO',
  12 => 'AQ',
  13 => 'AR',
  14 => 'AS',
  15 => 'AT',
  16 => 'AU',
  17 => 'AW',
  18 => 'AZ',
  19 => 'BA',
  20 => 'BB',
  21 => 'BD',
  22 => 'BE',
  23 => 'BF',
  24 => 'BG',
  25 => 'BH',
  26 => 'BI',
  27 => 'BJ',
  28 => 'BM',
  29 => 'BN',
  30 => 'BO',
  31 => 'BR',
  32 => 'BS',
  33 => 'BT',
  34 => 'BV',
  35 => 'BW',
  36 => 'BY',
  37 => 'BZ',
  38 => 'CA',
  39 => 'CC',
  40 => 'CD',
  41 => 'CF',
  42 => 'CG',
  43 => 'CH',
  44 => 'CI',
  45 => 'CK',
  46 => 'CL',
  47 => 'CM',
  48 => 'CN',
  49 => 'CO',
  50 => 'CR',
  51 => 'CU',
  52 => 'CV',
  53 => 'CX',
  54 => 'CY',
  55 => 'CZ',
  56 => 'DE',
  57 => 'DJ',
  58 => 'DK',
  59 => 'DM',
  60 => 'DO',
  61 => 'DZ',
  62 => 'EC',
  63 => 'EE',
  64 => 'EG',
  65 => 'EH',
  66 => 'ER',
  67 => 'ES',
  68 => 'ET',
  69 => 'FI',
  70 => 'FJ',
  71 => 'FK',
  72 => 'FM',
  73 => 'FO',
  74 => 'FR',
  75 => 'SX',
  76 => 'GA',
  77 => 'GB',
  78 => 'GD',
  79 => 'GE',
  80 => 'GF',
  81 => 'GH',
  82 => 'GI',
  83 => 'GL',
  84 => 'GM',
  85 => 'GN',
  86 => 'GP',
  87 => 'GQ',
  88 => 'GR',
  89 => 'GS',
  90 => 'GT',
  91 => 'GU',
  92 => 'GW',
  93 => 'GY',
  94 => 'HK',
  95 => 'HM',
  96 => 'HN',
  97 => 'HR',
  98 => 'HT',
  99 => 'HU',
  100 => 'ID',
  101 => 'IE',
  102 => 'IL',
  103 => 'IN',
  104 => 'IO',
  105 => 'IQ',
  106 => 'IR',
  107 => 'IS',
  108 => 'IT',
  109 => 'JM',
  110 => 'JO',
  111 => 'JP',
  112 => 'KE',
  113 => 'KG',
  114 => 'KH',
  115 => 'KI',
  116 => 'KM',
  117 => 'KN',
  118 => 'KP',
  119 => 'KR',
  120 => 'KW',
  121 => 'KY',
  122 => 'KZ',
  123 => 'LA',
  124 => 'LB',
  125 => 'LC',
  126 => 'LI',
  127 => 'LK',
  128 => 'LR',
  129 => 'LS',
  130 => 'LT',
  131 => 'LU',
  132 => 'LV',
  133 => 'LY',
  134 => 'MA',
  135 => 'MC',
  136 => 'MD',
  137 => 'MG',
  138 => 'MH',
  139 => 'MK',
  140 => 'ML',
  141 => 'MM',
  142 => 'MN',
  143 => 'MO',
  144 => 'MP',
  145 => 'MQ',
  146 => 'MR',
  147 => 'MS',
  148 => 'MT',
  149 => 'MU',
  150 => 'MV',
  151 => 'MW',
  152 => 'MX',
  153 => 'MY',
  154 => 'MZ',
  155 => 'NA',
  156 => 'NC',
  157 => 'NE',
  158 => 'NF',
  159 => 'NG',
  160 => 'NI',
  161 => 'NL',
  162 => 'NO',
  163 => 'NP',
  164 => 'NR',
  165 => 'NU',
  166 => 'NZ',
  167 => 'OM',
  168 => 'PA',
  169 => 'PE',
  170 => 'PF',
  171 => 'PG',
  172 => 'PH',
  173 => 'PK',
  174 => 'PL',
  175 => 'PM',
  176 => 'PN',
  177 => 'PR',
  178 => 'PS',
  179 => 'PT',
  180 => 'PW',
  181 => 'PY',
  182 => 'QA',
  183 => 'RE',
  184 => 'RO',
  185 => 'RU',
  186 => 'RW',
  187 => 'SA',
  188 => 'SB',
  189 => 'SC',
  190 => 'SD',
  191 => 'SE',
  192 => 'SG',
  193 => 'SH',
  194 => 'SI',
  195 => 'SJ',
  196 => 'SK',
  197 => 'SL',
  198 => 'SM',
  199 => 'SN',
  200 => 'SO',
  201 => 'SR',
  202 => 'ST',
  203 => 'SV',
  204 => 'SY',
  205 => 'SZ',
  206 => 'TC',
  207 => 'TD',
  208 => 'TF',
  209 => 'TG',
  210 => 'TH',
  211 => 'TJ',
  212 => 'TK',
  213 => 'TM',
  214 => 'TN',
  215 => 'TO',
  216 => 'TL',
  217 => 'TR',
  218 => 'TT',
  219 => 'TV',
  220 => 'TW',
  221 => 'TZ',
  222 => 'UA',
  223 => 'UG',
  224 => 'UM',
  225 => 'US',
  226 => 'UY',
  227 => 'UZ',
  228 => 'VA',
  229 => 'VC',
  230 => 'VE',
  231 => 'VG',
  232 => 'VI',
  233 => 'VN',
  234 => 'VU',
  235 => 'WF',
  236 => 'WS',
  237 => 'YE',
  238 => 'YT',
  239 => 'RS',
  240 => 'ZA',
  241 => 'ZM',
  242 => 'ME',
  243 => 'ZW',
  244 => 'A1',
  245 => 'A2',
  246 => 'O1',
  247 => 'AX',
  248 => 'GG',
  249 => 'IM',
  250 => 'JE',
  251 => 'BL',
  252 => 'MF',
  253 => 'BQ',
  254 => 'SS',
  255 => 'O1',
);

    /**
     * 3 letters country codes.
     *
     * @var array
     */
    public $GEOIP_COUNTRY_CODES3 = array (
  0 => '',
  1 => 'AP',
  2 => 'EU',
  3 => 'AND',
  4 => 'ARE',
  5 => 'AFG',
  6 => 'ATG',
  7 => 'AIA',
  8 => 'ALB',
  9 => 'ARM',
  10 => 'CUW',
  11 => 'AGO',
  12 => 'ATA',
  13 => 'ARG',
  14 => 'ASM',
  15 => 'AUT',
  16 => 'AUS',
  17 => 'ABW',
  18 => 'AZE',
  19 => 'BIH',
  20 => 'BRB',
  21 => 'BGD',
  22 => 'BEL',
  23 => 'BFA',
  24 => 'BGR',
  25 => 'BHR',
  26 => 'BDI',
  27 => 'BEN',
  28 => 'BMU',
  29 => 'BRN',
  30 => 'BOL',
  31 => 'BRA',
  32 => 'BHS',
  33 => 'BTN',
  34 => 'BVT',
  35 => 'BWA',
  36 => 'BLR',
  37 => 'BLZ',
  38 => 'CAN',
  39 => 'CCK',
  40 => 'COD',
  41 => 'CAF',
  42 => 'COG',
  43 => 'CHE',
  44 => 'CIV',
  45 => 'COK',
  46 => 'CHL',
  47 => 'CMR',
  48 => 'CHN',
  49 => 'COL',
  50 => 'CRI',
  51 => 'CUB',
  52 => 'CPV',
  53 => 'CXR',
  54 => 'CYP',
  55 => 'CZE',
  56 => 'DEU',
  57 => 'DJI',
  58 => 'DNK',
  59 => 'DMA',
  60 => 'DOM',
  61 => 'DZA',
  62 => 'ECU',
  63 => 'EST',
  64 => 'EGY',
  65 => 'ESH',
  66 => 'ERI',
  67 => 'ESP',
  68 => 'ETH',
  69 => 'FIN',
  70 => 'FJI',
  71 => 'FLK',
  72 => 'FSM',
  73 => 'FRO',
  74 => 'FRA',
  75 => 'SXM',
  76 => 'GAB',
  77 => 'GBR',
  78 => 'GRD',
  79 => 'GEO',
  80 => 'GUF',
  81 => 'GHA',
  82 => 'GIB',
  83 => 'GRL',
  84 => 'GMB',
  85 => 'GIN',
  86 => 'GLP',
  87 => 'GNQ',
  88 => 'GRC',
  89 => 'SGS',
  90 => 'GTM',
  91 => 'GUM',
  92 => 'GNB',
  93 => 'GUY',
  94 => 'HKG',
  95 => 'HMD',
  96 => 'HND',
  97 => 'HRV',
  98 => 'HTI',
  99 => 'HUN',
  100 => 'IDN',
  101 => 'IRL',
  102 => 'ISR',
  103 => 'IND',
  104 => 'IOT',
  105 => 'IRQ',
  106 => 'IRN',
  107 => 'ISL',
  108 => 'ITA',
  109 => 'JAM',
  110 => 'JOR',
  111 => 'JPN',
  112 => 'KEN',
  113 => 'KGZ',
  114 => 'KHM',
  115 => 'KIR',
  116 => 'COM',
  117 => 'KNA',
  118 => 'PRK',
  119 => 'KOR',
  120 => 'KWT',
  121 => 'CYM',
  122 => 'KAZ',
  123 => 'LAO',
  124 => 'LBN',
  125 => 'LCA',
  126 => 'LIE',
  127 => 'LKA',
  128 => 'LBR',
  129 => 'LSO',
  130 => 'LTU',
  131 => 'LUX',
  132 => 'LVA',
  133 => 'LBY',
  134 => 'MAR',
  135 => 'MCO',
  136 => 'MDA',
  137 => 'MDG',
  138 => 'MHL',
  139 => 'MKD',
  140 => 'MLI',
  141 => 'MMR',
  142 => 'MNG',
  143 => 'MAC',
  144 => 'MNP',
  145 => 'MTQ',
  146 => 'MRT',
  147 => 'MSR',
  148 => 'MLT',
  149 => 'MUS',
  150 => 'MDV',
  151 => 'MWI',
  152 => 'MEX',
  153 => 'MYS',
  154 => 'MOZ',
  155 => 'NAM',
  156 => 'NCL',
  157 => 'NER',
  158 => 'NFK',
  159 => 'NGA',
  160 => 'NIC',
  161 => 'NLD',
  162 => 'NOR',
  163 => 'NPL',
  164 => 'NRU',
  165 => 'NIU',
  166 => 'NZL',
  167 => 'OMN',
  168 => 'PAN',
  169 => 'PER',
  170 => 'PYF',
  171 => 'PNG',
  172 => 'PHL',
  173 => 'PAK',
  174 => 'POL',
  175 => 'SPM',
  176 => 'PCN',
  177 => 'PRI',
  178 => 'PSE',
  179 => 'PRT',
  180 => 'PLW',
  181 => 'PRY',
  182 => 'QAT',
  183 => 'REU',
  184 => 'ROU',
  185 => 'RUS',
  186 => 'RWA',
  187 => 'SAU',
  188 => 'SLB',
  189 => 'SYC',
  190 => 'SDN',
  191 => 'SWE',
  192 => 'SGP',
  193 => 'SHN',
  194 => 'SVN',
  195 => 'SJM',
  196 => 'SVK',
  197 => 'SLE',
  198 => 'SMR',
  199 => 'SEN',
  200 => 'SOM',
  201 => 'SUR',
  202 => 'STP',
  203 => 'SLV',
  204 => 'SYR',
  205 => 'SWZ',
  206 => 'TCA',
  207 => 'TCD',
  208 => 'ATF',
  209 => 'TGO',
  210 => 'THA',
  211 => 'TJK',
  212 => 'TKL',
  213 => 'TKM',
  214 => 'TUN',
  215 => 'TON',
  216 => 'TLS',
  217 => 'TUR',
  218 => 'TTO',
  219 => 'TUV',
  220 => 'TWN',
  221 => 'TZA',
  222 => 'UKR',
  223 => 'UGA',
  224 => 'UMI',
  225 => 'USA',
  226 => 'URY',
  227 => 'UZB',
  228 => 'VAT',
  229 => 'VCT',
  230 => 'VEN',
  231 => 'VGB',
  232 => 'VIR',
  233 => 'VNM',
  234 => 'VUT',
  235 => 'WLF',
  236 => 'WSM',
  237 => 'YEM',
  238 => 'MYT',
  239 => 'SRB',
  240 => 'ZAF',
  241 => 'ZMB',
  242 => 'MNE',
  243 => 'ZWE',
  244 => 'A1',
  245 => 'A2',
  246 => 'O1',
  247 => 'ALA',
  248 => 'GGY',
  249 => 'IMN',
  250 => 'JEY',
  251 => 'BLM',
  252 => 'MAF',
  253 => 'BES',
  254 => 'SSD',
  255 => 'O1',
);

    /**
     * Country names.
     *
     * @var array
     */
    public $GEOIP_COUNTRY_NAMES = array (
  0 => '',
  1 => 'Asia/Pacific Region',
  2 => 'Europe',
  3 => 'Andorra',
  4 => 'United Arab Emirates',
  5 => 'Afghanistan',
  6 => 'Antigua and Barbuda',
  7 => 'Anguilla',
  8 => 'Albania',
  9 => 'Armenia',
  10 => 'Curacao',
  11 => 'Angola',
  12 => 'Antarctica',
  13 => 'Argentina',
  14 => 'American Samoa',
  15 => 'Austria',
  16 => 'Australia',
  17 => 'Aruba',
  18 => 'Azerbaijan',
  19 => 'Bosnia and Herzegovina',
  20 => 'Barbados',
  21 => 'Bangladesh',
  22 => 'Belgium',
  23 => 'Burkina Faso',
  24 => 'Bulgaria',
  25 => 'Bahrain',
  26 => 'Burundi',
  27 => 'Benin',
  28 => 'Bermuda',
  29 => 'Brunei Darussalam',
  30 => 'Bolivia',
  31 => 'Brazil',
  32 => 'Bahamas',
  33 => 'Bhutan',
  34 => 'Bouvet Island',
  35 => 'Botswana',
  36 => 'Belarus',
  37 => 'Belize',
  38 => 'Canada',
  39 => 'Cocos (Keeling) Islands',
  40 => 'Congo, The Democratic Republic of the',
  41 => 'Central African Republic',
  42 => 'Congo',
  43 => 'Switzerland',
  44 => 'Cote D\'Ivoire',
  45 => 'Cook Islands',
  46 => 'Chile',
  47 => 'Cameroon',
  48 => 'China',
  49 => 'Colombia',
  50 => 'Costa Rica',
  51 => 'Cuba',
  52 => 'Cape Verde',
  53 => 'Christmas Island',
  54 => 'Cyprus',
  55 => 'Czech Republic',
  56 => 'Germany',
  57 => 'Djibouti',
  58 => 'Denmark',
  59 => 'Dominica',
  60 => 'Dominican Republic',
  61 => 'Algeria',
  62 => 'Ecuador',
  63 => 'Estonia',
  64 => 'Egypt',
  65 => 'Western Sahara',
  66 => 'Eritrea',
  67 => 'Spain',
  68 => 'Ethiopia',
  69 => 'Finland',
  70 => 'Fiji',
  71 => 'Falkland Islands (Malvinas)',
  72 => 'Micronesia, Federated States of',
  73 => 'Faroe Islands',
  74 => 'France',
  75 => 'Sint Maarten (Dutch part)',
  76 => 'Gabon',
  77 => 'United Kingdom',
  78 => 'Grenada',
  79 => 'Georgia',
  80 => 'French Guiana',
  81 => 'Ghana',
  82 => 'Gibraltar',
  83 => 'Greenland',
  84 => 'Gambia',
  85 => 'Guinea',
  86 => 'Guadeloupe',
  87 => 'Equatorial Guinea',
  88 => 'Greece',
  89 => 'South Georgia and the South Sandwich Islands',
  90 => 'Guatemala',
  91 => 'Guam',
  92 => 'Guinea-Bissau',
  93 => 'Guyana',
  94 => 'Hong Kong',
  95 => 'Heard Island and McDonald Islands',
  96 => 'Honduras',
  97 => 'Croatia',
  98 => 'Haiti',
  99 => 'Hungary',
  100 => 'Indonesia',
  101 => 'Ireland',
  102 => 'Israel',
  103 => 'India',
  104 => 'British Indian Ocean Territory',
  105 => 'Iraq',
  106 => 'Iran, Islamic Republic of',
  107 => 'Iceland',
  108 => 'Italy',
  109 => 'Jamaica',
  110 => 'Jordan',
  111 => 'Japan',
  112 => 'Kenya',
  113 => 'Kyrgyzstan',
  114 => 'Cambodia',
  115 => 'Kiribati',
  116 => 'Comoros',
  117 => 'Saint Kitts and Nevis',
  118 => 'Korea, Democratic People\'s Republic of',
  119 => 'Korea, Republic of',
  120 => 'Kuwait',
  121 => 'Cayman Islands',
  122 => 'Kazakhstan',
  123 => 'Lao People\'s Democratic Republic',
  124 => 'Lebanon',
  125 => 'Saint Lucia',
  126 => 'Liechtenstein',
  127 => 'Sri Lanka',
  128 => 'Liberia',
  129 => 'Lesotho',
  130 => 'Lithuania',
  131 => 'Luxembourg',
  132 => 'Latvia',
  133 => 'Libya',
  134 => 'Morocco',
  135 => 'Monaco',
  136 => 'Moldova, Republic of',
  137 => 'Madagascar',
  138 => 'Marshall Islands',
  139 => 'Macedonia',
  140 => 'Mali',
  141 => 'Myanmar',
  142 => 'Mongolia',
  143 => 'Macau',
  144 => 'Northern Mariana Islands',
  145 => 'Martinique',
  146 => 'Mauritania',
  147 => 'Montserrat',
  148 => 'Malta',
  149 => 'Mauritius',
  150 => 'Maldives',
  151 => 'Malawi',
  152 => 'Mexico',
  153 => 'Malaysia',
  154 => 'Mozambique',
  155 => 'Namibia',
  156 => 'New Caledonia',
  157 => 'Niger',
  158 => 'Norfolk Island',
  159 => 'Nigeria',
  160 => 'Nicaragua',
  161 => 'Netherlands',
  162 => 'Norway',
  163 => 'Nepal',
  164 => 'Nauru',
  165 => 'Niue',
  166 => 'New Zealand',
  167 => 'Oman',
  168 => 'Panama',
  169 => 'Peru',
  170 => 'French Polynesia',
  171 => 'Papua New Guinea',
  172 => 'Philippines',
  173 => 'Pakistan',
  174 => 'Poland',
  175 => 'Saint Pierre and Miquelon',
  176 => 'Pitcairn Islands',
  177 => 'Puerto Rico',
  178 => 'Palestinian Territory',
  179 => 'Portugal',
  180 => 'Palau',
  181 => 'Paraguay',
  182 => 'Qatar',
  183 => 'Reunion',
  184 => 'Romania',
  185 => 'Russian Federation',
  186 => 'Rwanda',
  187 => 'Saudi Arabia',
  188 => 'Solomon Islands',
  189 => 'Seychelles',
  190 => 'Sudan',
  191 => 'Sweden',
  192 => 'Singapore',
  193 => 'Saint Helena',
  194 => 'Slovenia',
  195 => 'Svalbard and Jan Mayen',
  196 => 'Slovakia',
  197 => 'Sierra Leone',
  198 => 'San Marino',
  199 => 'Senegal',
  200 => 'Somalia',
  201 => 'Suriname',
  202 => 'Sao Tome and Principe',
  203 => 'El Salvador',
  204 => 'Syrian Arab Republic',
  205 => 'Eswatini',
  206 => 'Turks and Caicos Islands',
  207 => 'Chad',
  208 => 'French Southern Territories',
  209 => 'Togo',
  210 => 'Thailand',
  211 => 'Tajikistan',
  212 => 'Tokelau',
  213 => 'Turkmenistan',
  214 => 'Tunisia',
  215 => 'Tonga',
  216 => 'Timor-Leste',
  217 => 'Turkey',
  218 => 'Trinidad and Tobago',
  219 => 'Tuvalu',
  220 => 'Taiwan',
  221 => 'Tanzania, United Republic of',
  222 => 'Ukraine',
  223 => 'Uganda',
  224 => 'United States Minor Outlying Islands',
  225 => 'United States',
  226 => 'Uruguay',
  227 => 'Uzbekistan',
  228 => 'Holy See (Vatican City State)',
  229 => 'Saint Vincent and the Grenadines',
  230 => 'Venezuela',
  231 => 'Virgin Islands, British',
  232 => 'Virgin Islands, U.S.',
  233 => 'Vietnam',
  234 => 'Vanuatu',
  235 => 'Wallis and Futuna',
  236 => 'Samoa',
  237 => 'Yemen',
  238 => 'Mayotte',
  239 => 'Serbia',
  240 => 'South Africa',
  241 => 'Zambia',
  242 => 'Montenegro',
  243 => 'Zimbabwe',
  244 => 'Anonymous Proxy',
  245 => 'Satellite Provider',
  246 => 'Other',
  247 => 'Aland Islands',
  248 => 'Guernsey',
  249 => 'Isle of Man',
  250 => 'Jersey',
  251 => 'Saint Barthelemy',
  252 => 'Saint Martin',
  253 => 'Bonaire, Saint Eustatius and Saba',
  254 => 'South Sudan',
  255 => 'Other',
);

    /**
     * 2 letters continent codes.
     *
     * @var array
     */
    public $GEOIP_CONTINENT_CODES = array (
  0 => '--',
  1 => 'AS',
  2 => 'EU',
  3 => 'EU',
  4 => 'AS',
  5 => 'AS',
  6 => 'NA',
  7 => 'NA',
  8 => 'EU',
  9 => 'AS',
  10 => 'NA',
  11 => 'AF',
  12 => 'AN',
  13 => 'SA',
  14 => 'OC',
  15 => 'EU',
  16 => 'OC',
  17 => 'NA',
  18 => 'AS',
  19 => 'EU',
  20 => 'NA',
  21 => 'AS',
  22 => 'EU',
  23 => 'AF',
  24 => 'EU',
  25 => 'AS',
  26 => 'AF',
  27 => 'AF',
  28 => 'NA',
  29 => 'AS',
  30 => 'SA',
  31 => 'SA',
  32 => 'NA',
  33 => 'AS',
  34 => 'AN',
  35 => 'AF',
  36 => 'EU',
  37 => 'NA',
  38 => 'NA',
  39 => 'AS',
  40 => 'AF',
  41 => 'AF',
  42 => 'AF',
  43 => 'EU',
  44 => 'AF',
  45 => 'OC',
  46 => 'SA',
  47 => 'AF',
  48 => 'AS',
  49 => 'SA',
  50 => 'NA',
  51 => 'NA',
  52 => 'AF',
  53 => 'AS',
  54 => 'AS',
  55 => 'EU',
  56 => 'EU',
  57 => 'AF',
  58 => 'EU',
  59 => 'NA',
  60 => 'NA',
  61 => 'AF',
  62 => 'SA',
  63 => 'EU',
  64 => 'AF',
  65 => 'AF',
  66 => 'AF',
  67 => 'EU',
  68 => 'AF',
  69 => 'EU',
  70 => 'OC',
  71 => 'SA',
  72 => 'OC',
  73 => 'EU',
  74 => 'EU',
  75 => 'NA',
  76 => 'AF',
  77 => 'EU',
  78 => 'NA',
  79 => 'AS',
  80 => 'SA',
  81 => 'AF',
  82 => 'EU',
  83 => 'NA',
  84 => 'AF',
  85 => 'AF',
  86 => 'NA',
  87 => 'AF',
  88 => 'EU',
  89 => 'AN',
  90 => 'NA',
  91 => 'OC',
  92 => 'AF',
  93 => 'SA',
  94 => 'AS',
  95 => 'AN',
  96 => 'NA',
  97 => 'EU',
  98 => 'NA',
  99 => 'EU',
  100 => 'AS',
  101 => 'EU',
  102 => 'AS',
  103 => 'AS',
  104 => 'AS',
  105 => 'AS',
  106 => 'AS',
  107 => 'EU',
  108 => 'EU',
  109 => 'NA',
  110 => 'AS',
  111 => 'AS',
  112 => 'AF',
  113 => 'AS',
  114 => 'AS',
  115 => 'OC',
  116 => 'AF',
  117 => 'NA',
  118 => 'AS',
  119 => 'AS',
  120 => 'AS',
  121 => 'NA',
  122 => 'AS',
  123 => 'AS',
  124 => 'AS',
  125 => 'NA',
  126 => 'EU',
  127 => 'AS',
  128 => 'AF',
  129 => 'AF',
  130 => 'EU',
  131 => 'EU',
  132 => 'EU',
  133 => 'AF',
  134 => 'AF',
  135 => 'EU',
  136 => 'EU',
  137 => 'AF',
  138 => 'OC',
  139 => 'EU',
  140 => 'AF',
  141 => 'AS',
  142 => 'AS',
  143 => 'AS',
  144 => 'OC',
  145 => 'NA',
  146 => 'AF',
  147 => 'NA',
  148 => 'EU',
  149 => 'AF',
  150 => 'AS',
  151 => 'AF',
  152 => 'NA',
  153 => 'AS',
  154 => 'AF',
  155 => 'AF',
  156 => 'OC',
  157 => 'AF',
  158 => 'OC',
  159 => 'AF',
  160 => 'NA',
  161 => 'EU',
  162 => 'EU',
  163 => 'AS',
  164 => 'OC',
  165 => 'OC',
  166 => 'OC',
  167 => 'AS',
  168 => 'NA',
  169 => 'SA',
  170 => 'OC',
  171 => 'OC',
  172 => 'AS',
  173 => 'AS',
  174 => 'EU',
  175 => 'NA',
  176 => 'OC',
  177 => 'NA',
  178 => 'AS',
  179 => 'EU',
  180 => 'OC',
  181 => 'SA',
  182 => 'AS',
  183 => 'AF',
  184 => 'EU',
  185 => 'EU',
  186 => 'AF',
  187 => 'AS',
  188 => 'OC',
  189 => 'AF',
  190 => 'AF',
  191 => 'EU',
  192 => 'AS',
  193 => 'AF',
  194 => 'EU',
  195 => 'EU',
  196 => 'EU',
  197 => 'AF',
  198 => 'EU',
  199 => 'AF',
  200 => 'AF',
  201 => 'SA',
  202 => 'AF',
  203 => 'NA',
  204 => 'AS',
  205 => 'AF',
  206 => 'NA',
  207 => 'AF',
  208 => 'AN',
  209 => 'AF',
  210 => 'AS',
  211 => 'AS',
  212 => 'OC',
  213 => 'AS',
  214 => 'AF',
  215 => 'OC',
  216 => 'AS',
  217 => 'EU',
  218 => 'NA',
  219 => 'OC',
  220 => 'AS',
  221 => 'AF',
  222 => 'EU',
  223 => 'AF',
  224 => 'OC',
  225 => 'NA',
  226 => 'SA',
  227 => 'AS',
  228 => 'EU',
  229 => 'NA',
  230 => 'SA',
  231 => 'NA',
  232 => 'NA',
  233 => 'AS',
  234 => 'OC',
  235 => 'OC',
  236 => 'OC',
  237 => 'AS',
  238 => 'AF',
  239 => 'EU',
  240 => 'AF',
  241 => 'AF',
  242 => 'EU',
  243 => 'AF',
  244 => '--',
  245 => '--',
  246 => '--',
  247 => 'EU',
  248 => 'EU',
  249 => 'EU',
  250 => 'EU',
  251 => 'NA',
  252 => 'NA',
  253 => 'NA',
  254 => 'AF',
  255 => '--',
);

    /** @var WC_Logger Logger instance */
    public static $log = false;

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
     * Setup segments.
     *
     * @return WC_Geo_IP instance
     */
    private function _setup_segments()
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
     * Common get record.
     *
     * @param  string $seek_country
     * @return WC_Geo_IP_Record instance
     */
    private function _common_get_record($seek_country)
{
}
    /**
     * Get record.
     *
     * @param  int $ipnum
     * @return WC_Geo_IP_Record instance
     */
    private function _get_record($ipnum)
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
     * Seek country.
     *
     * @param  int $ipnum
     * @return string
     */
    private function _geoip_seek_country($ipnum)
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
    /**
     * Encode string.
     *
     * @param  string $string
     * @param  int    $start
     * @param  int    $length
     * @return string
     */
    private function _safe_substr($string, $start, $length)
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
    public $country_code = null;

    /**
     * 3 letters country code.
     *
     * @var string
     */
    public $country_code3 = null;

    /**
     * Country name.
     *
     * @var string
     */
    public $country_name = null;

    /**
     * Region.
     *
     * @var string
     */
    public $region = null;

    /**
     * City.
     *
     * @var string
     */
    public $city = null;

    /**
     * Postal code.
     *
     * @var string
     */
    public $postal_code = null;

    /**
     * Latitude
     *
     * @var int
     */
    public $latitude = null;

    /**
     * Longitude.
     *
     * @var int
     */
    public $longitude = null;

    /**
     * Area code.
     *
     * @var int
     */
    public $area_code = null;

    /**
     * DMA Code.
     *
     * Metro and DMA code are the same.
     * Use metro code instead.
     *
     * @var float
     */
    public $dma_code = null;

    /**
     * Metro code.
     *
     * @var float
     */
    public $metro_code = null;

    /**
     * Continent code.
     *
     * @var string
     */
    public $continent_code = null;

}
