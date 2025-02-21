<?php

use Symfony\Component\Finder\Finder;

/**
 * This file returns a Finder instance that includes *.php files in this directory
 * but excludes a 'vendor' subfolder (if it exists). Adjust as needed.
 */
$finder = new Finder();
$finder->files()
       ->in(__DIR__)
       ->name('*.php')
       ->exclude('vendor');

// Must return a Finder instance so generate-stubs.php can use it.
return $finder;
