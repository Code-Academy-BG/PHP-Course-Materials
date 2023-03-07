<?php

// Ternary operator: $expression = condition ? expression-when-true : expression-when-false;
$a = null;
var_dump(is_null($a) ? "N/A" : $a);

$a = "test";
var_dump(is_null($a) ? "N/A" : $a);

?>