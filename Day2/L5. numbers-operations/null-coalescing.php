<?php

// Null-coalescing operator ?? is used to set a default value if original value is NULL.
// Like a short syntax of ternary (see: ternary.php)
$a = null;
var_dump($a ?? "N/A");

$a = "test";
var_dump($a ?? "N/A");

?>