<?php

Namespace Jayson\Demo;

/**
 * Class Person
 * @package Jayson\Demo
 */
class Person
{
    /**
     * @var null
     */
    public $name = null;
    /**
     * @var null
     */
    public $age = null;

    /**
     * @var null
     */
    public $business = null;

    /**
     * @param $property
     * @param $value
     */
    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    /**
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        return $this->$property;
    }
}
