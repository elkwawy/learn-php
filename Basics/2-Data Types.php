<?php

// String
$name = "John Doe";
$letter = "a";
print $letter;
echo $name;
echo "<br>";

// Integer
$age = 30;
echo $age;
echo "<br>";

// Float
$height = 1.85;
echo $height;
echo "<br>";

// Boolean
$isMale = true;
$isFemale = false;
print $isFemale;
echo "<br>";

// Array
$colors = array("Red", "Green", "Blue");
var_dump($colors);
echo "<br>";

// Object 
$person = new stdClass();
$person->name = "John Doe";
$person->age = 30;Dumps information about a variable
var_dump($person);
echo "<br>";

// Null
$car = null;
var_dump($car);
echo "<br>";

?>
