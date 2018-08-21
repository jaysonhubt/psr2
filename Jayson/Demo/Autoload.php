<?php

namespace Jayson\Demo;

/**
 * Class Autoload
 * @package Jayson\Demo
 */
class Autoload
{
    /**
     * Autoload constructor.
     */
    public function __construct()
    {
        spl_autoload_register(array($this, 'autoload'));
    }

    /**
     * @param $file
     */
    protected function autoload($file)
    {
        $file = str_replace("\\", "/", trim($file, "\\")) . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }
}
