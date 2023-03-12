<?php

var_dump((int)"123.456789123456789012345678901234567890-string");
var_dump((float)"123.456789123456789012345678901234567890-string");
var_dump((double)"123.456789123456789012345678901234567890-string");
var_dump((boolean)"123.456789123456789012345678901234567890-string");

$var = "123.456789123456789012345678901234567890-string";
var_dump(intval($var));
var_dump(floatval($var));
var_dump(doubleval($var));
var_dump((string)doubleval($var)); // again string but from double

var_dump((string)(float)"1.15e-4"); // scientific format -> then to float -> therefore to string
