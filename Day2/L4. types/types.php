<?php

$text = "Hello World!";
var_dump($text);

$integer = 5;
var_dump($integer);

$float = 10.5;
var_dump($float);

$boolean_value = true;
var_dump($boolean_value);

$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

$null_value = null;
var_dump($null_value); // Whoa! null value is just NULL (see? no type descriptor)!

// Next are look forward and will be discussed in upcomming lectures
$personObject = new stdClass();
$personObject->name = "Gandalf";
$personObject->yearOfBirth = "5092 BFA (Before First Age)";
$personObject->approxAgeInYears = 24000;
var_dump($personObject);

$stream_resource = fopen('php://output', 'w');
var_dump($stream_resource);
fclose($stream_resource);

?>