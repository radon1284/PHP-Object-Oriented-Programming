<?php

require 'person.php';

$person = new Person;

$person->$name = 'Gab';

$person->$age = 2;


echo 'My name is'. $person->$name . ' and Im' . $person->$age;