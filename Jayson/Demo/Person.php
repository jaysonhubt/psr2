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
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return null
     */
    public function getAge()
    {
        return $this->age;
    }
}