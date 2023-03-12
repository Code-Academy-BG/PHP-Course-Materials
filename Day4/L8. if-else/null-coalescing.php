<?php

// Null coalescing

$name = NULL;
$default_name = "Noname";
var_dump($name ?? $default_name);

// Ternary Equivalent

var_dump(is_null($name) ? $default_name : $name);

// Ternary Similar but not null only

var_dump((boolean)$name ? $name : $default_name); // (boolean) 0; ""; NULL => false



// Cascade null coalescing

$name = NULL;
$default_name = NULL;
var_dump($name ?? $default_name ?? "N/A");


$name = NULL;
$default_name = "Noname";
var_dump($name ?? $default_name ?? "N/A");



//



var_dump(is_null($name) ? is_null($default_name) ? "N/A" : $default_name : $name);
