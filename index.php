<?php

require 'Person.php';

$greetings = "Hello, World!";

$persons = [
        'Name' => ' ',
        'Age' => 0,
        'Hair color' => 'black'
];

$person = new Person('Afifi', 22);
$persons['Name'] = $person->getName();
$persons['Age'] = $person->getAge();

require 'view.php';
