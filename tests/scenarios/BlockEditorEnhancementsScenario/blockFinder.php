<?php
use Symfony\Component\Finder\Finder;

$finder = Finder::create()
                ->in( __DIR__ . '/blocks' )
                ->depth( 0 );

return $finder;