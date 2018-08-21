<?php

require_once 'Jayson/Demo/Autoload.php';

new Jayson\Demo\Autoload;

$person = new Jayson\Demo\Person;

$name = 'Jayson';
$age = 23;
$business = 'Scuti';
$person->name = $name;
$person->age = $age;
$person->business = $business;

echo 'Name: ' . $person->name;
echo '<br/>';
echo 'Age: ' . $person->age;
echo '<br/>';
echo 'Business: ' . $person->business;