<?php

$x = 8 - 6.4;  // ~1.6  -> 1.59999999999996
$y = 1.6;
var_dump($x);
var_dump($y);
var_dump($x == $y); // Unrecommended comparison of floats
var_dump(abs($x - $y) < 0.0001); // Recommended comparison of floats (0.0001 is the acceptable tolerance)

?>