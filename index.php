<?php

require_once 'Jayson/Demo/Autoload.php';

new Jayson\Demo\Autoload;

$person = new Jayson\Demo\Person;

$name = 'Jayson';
$age = 23;
$person->setName($name);
$person->setAge($age);

echo 'Name: ' . $person->getName();
echo '<br/>';
echo 'Age: ' . $person->getAge();