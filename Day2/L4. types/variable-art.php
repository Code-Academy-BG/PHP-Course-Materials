<?php

// $911_equivalent_in_bg = 112; // Ooops! Wrong! Vars cannot start with a digit! 

// They starts only a letter or underscore

$my_variable = 3;

$_______hello_variable______ = 12345;

$_mostlyPrivate = $_orMostlyProtected = null;

$tmp1 = 56; // not descriptive (unrecommended)
$p = 'something powerful maybe'; // less descriptive (strongly unrecommended)
$i = 1; // maybe allowed for loops. thank you, but no thanks!

$NiceHuh = 7;

$heavytoreadvariableOo0lI1B84A = 1.13954768e-34;

$pi = 3.14;
$PI = 3.141627;
var_dump($pi, $PI); // Look! Case-sensitive variables!

// Also possible but not acceptable. Official code language is English. (incl. Comments)
$здравей = 5;
$Über = 'Is kinda taxi';

// Vars can be defined in different styles:

$camelCase = "Used mostly for variables, (functions, methods but without $ sign at the beginning)";
$PascalCase = /* a.k.a. */ $CamelBackCase = "Usually for class names / interfaces and etc.";
$SCREAMING_SNAKE_CASE = "Could be used for constants or immutable values"; 
$snake_case = "Could be used also for variables (depends on team aggreements)";

?>