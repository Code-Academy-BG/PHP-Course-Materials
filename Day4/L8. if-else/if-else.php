<?php

$a = 5;

if ($a == 5) {
	$result = "True";
} else {
    $result = "False";
}
var_dump($result);


if (($a == 5) === True) { // i.e. result of expression a==5 is True and interpreter checks True === True
    $result = "True"; // ... to enter in this block-statement
} else {
    $result = "False";
}
var_dump($result);


$a = 1;
if ($a == 5) {
    $result = "True";
} else {
    $result = "False";
}
var_dump($result);


$a = 1;
if (($a != 5) === False) {  // i.e. expression=(a != 5) => True === False // Could be shortened to !expression
    $result = "5";
} else {
    $result = "Not 5 -> " . $a;
}
var_dump($result);


$a = 1;
if (!($a != 5)) {  // i.e. expression=(a != 5) => True === False // Could be shortened to !expression
    $result = "5";
} else {
    $result = "Not 5 -> " . $a;
}
var_dump($result);

