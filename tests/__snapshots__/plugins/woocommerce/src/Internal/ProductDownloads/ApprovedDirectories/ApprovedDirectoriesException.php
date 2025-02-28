<?php

namespace Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories;

/**
 * Encapsulates a problem encountered while an operation relating to approved directories
 * was performed.
 */
class ApprovedDirectoriesException extends \Exception implements \Stringable, \Throwable
{
    const INVALID_URL = 1;

    const DB_ERROR = 2;

}