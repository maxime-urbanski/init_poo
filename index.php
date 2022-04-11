<?php

require_once "src/Controller/Person.php";

$tintin = new Person('tintin', "milou", "24/09/1960", "France");

var_dump($tintin->getAddress());

$tintin->setAddress("Belgique");

var_dump($tintin->getAddress());

var_dump($tintin->information());

var_dump(Person::getAge("25-05-1989"));
