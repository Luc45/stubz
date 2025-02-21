<?php

namespace GlobalExample;

// A global constant
const MY_GLOBAL_VERSION = '1.2.3';

// A global function
function my_global_helper(string $input): string
{
    return 'Global says: ' . strtoupper($input);
}

/**
 * A namespaced function (just to show variety).
 */
function my_namespaced_helper(): string
{
    return 'Namespaced helper was here!';
}

