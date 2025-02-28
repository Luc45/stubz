<?php

namespace Automattic\WooCommerce\Internal\Admin\Onboarding;

/**
 * Class to install fonts for the Assembler.
 *
 * @internal
 */
class OnboardingFonts
{
    public const SOURCE_LOGGER = 'font_loader';
    public const FONT_FAMILIES_TO_INSTALL = array(
'inter' => array(
'fontFamily' => 'Inter',
'fontWeights' => array(
'400',
'500',
'600'
),
'fontStyles' => array(
'normal'
)
),
'bodoni-moda' => array(
'fontFamily' => 'Bodoni Moda',
'fontWeights' => array(
'400'
),
'fontStyles' => array(
'normal'
)
),
'overpass' => array(
'fontFamily' => 'Overpass',
'fontWeights' => array(
'300',
'400'
),
'fontStyles' => array(
'normal'
)
),
'albert-sans' => array(
'fontFamily' => 'Albert Sans',
'fontWeights' => array(
'700'
),
'fontStyles' => array(
'normal'
)
),
'lora' => array(
'fontFamily' => 'Lora',
'fontWeights' => array(
'400'
),
'fontStyles' => array(
'normal'
)
),
'montserrat' => array(
'fontFamily' => 'Montserrat',
'fontWeights' => array(
'500',
'700'
),
'fontStyles' => array(
'normal'
)
),
'arvo' => array(
'fontFamily' => 'Arvo',
'fontWeights' => array(
'400'
),
'fontStyles' => array(
'normal'
)
),
'rubik' => array(
'fontFamily' => 'Rubik',
'fontWeights' => array(
'400',
'800'
),
'fontStyles' => array(
'normal'
)
),
'newsreader' => array(
'fontFamily' => 'Newsreader',
'fontWeights' => array(
'400'
),
'fontStyles' => array(
'normal'
)
),
'cormorant' => array(
'fontFamily' => 'Cormorant',
'fontWeights' => array(
'400',
'500'
),
'fontStyles' => array(
'normal'
)
),
'work-sans' => array(
'fontFamily' => 'Work Sans',
'fontWeights' => array(
'400'
),
'fontStyles' => array(
'normal'
)
),
'raleway' => array(
'fontFamily' => 'Raleway',
'fontWeights' => array(
'700'
),
'fontStyles' => array(
'normal'
)
)
);
    /**
     * Initialize the class.
     *
     * @internal This method is for internal purposes only.
     */
    final public static function init()
{
}
    /**
     * Start install fonts async job.
     *
     * @param string $old_value Old option value.
     * @param string $value Option value.
     * @return string
     */
    public static function start_install_fonts_async_job($old_value, $value)
{
}
    /**
     * Create Font Families and Font Faces.
     *
     * @return void
     */
    public static function install_fonts()
{
}
}