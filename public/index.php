<?php

// include '../includes/classes/MyFirstClass.php';

// $instanceOfMyFirstClass = new MyFirstClass();

// var_dump($instanceOfMyFirstClass);
// die;

include '../includes/classes/House.php';

$house1 = new House(30, 40, 60);
$house2 = new House(25, 25, 25);

$author = House::getAuthor();

// $house1->paintColor = 'red';
// $house1->width = 30;
// $house1->height = 20;
// $house1->length = 100;

// $house2->paintColor = 'blue';

$house1->paint('green');

// can't access protected properties
// $house1->roofPaintColor = 'orange';

$house1->paintwall('orange');

$house2->paint('purple');

var_dump(House::getAuthor());
var_dump(House::$author);
// var_dump($author);
var_dump($house1);
var_dump($house2);

die;