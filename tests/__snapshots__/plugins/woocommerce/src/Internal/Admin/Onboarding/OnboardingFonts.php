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
    public const FONT_FAMILIES_TO_INSTALL = array (
  'inter' => 
  array (
    'fontFamily' => 'Inter',
    'fontWeights' => 
    array (
      0 => '400',
      1 => '500',
      2 => '600',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
  'bodoni-moda' => 
  array (
    'fontFamily' => 'Bodoni Moda',
    'fontWeights' => 
    array (
      0 => '400',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
  'overpass' => 
  array (
    'fontFamily' => 'Overpass',
    'fontWeights' => 
    array (
      0 => '300',
      1 => '400',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
  'albert-sans' => 
  array (
    'fontFamily' => 'Albert Sans',
    'fontWeights' => 
    array (
      0 => '700',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
  'lora' => 
  array (
    'fontFamily' => 'Lora',
    'fontWeights' => 
    array (
      0 => '400',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
  'montserrat' => 
  array (
    'fontFamily' => 'Montserrat',
    'fontWeights' => 
    array (
      0 => '500',
      1 => '700',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
  'arvo' => 
  array (
    'fontFamily' => 'Arvo',
    'fontWeights' => 
    array (
      0 => '400',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
  'rubik' => 
  array (
    'fontFamily' => 'Rubik',
    'fontWeights' => 
    array (
      0 => '400',
      1 => '800',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
  'newsreader' => 
  array (
    'fontFamily' => 'Newsreader',
    'fontWeights' => 
    array (
      0 => '400',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
  'cormorant' => 
  array (
    'fontFamily' => 'Cormorant',
    'fontWeights' => 
    array (
      0 => '400',
      1 => '500',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
  'work-sans' => 
  array (
    'fontFamily' => 'Work Sans',
    'fontWeights' => 
    array (
      0 => '400',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
  'raleway' => 
  array (
    'fontFamily' => 'Raleway',
    'fontWeights' => 
    array (
      0 => '700',
    ),
    'fontStyles' => 
    array (
      0 => 'normal',
    ),
  ),
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