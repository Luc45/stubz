<?php

/**
 * Autoloader class.
 */
class WC_Autoloader
{
    /**
     * Path to the includes directory.
     *
     * @var string
     */
    private $include_path = '';

    /**
     * The Constructor.
     */
    public function __construct()
{
}
    /**
     * Take a class name and turn it into a file name.
     *
     * @param  string $class Class name.
     * @return string
     */
    private function get_file_name_from_class($class)
{
}
    /**
     * Include a class file.
     *
     * @param  string $path File path.
     * @return bool Successful or not.
     */
    private function load_file($path)
{
}
    /**
     * Auto-load WC classes on demand to reduce memory consumption.
     *
     * @param string $class Class name.
     */
    public function autoload($class)
{
}
}
