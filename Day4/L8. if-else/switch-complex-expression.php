<?php

$inputValue = "<-";
$var = "empty";

// WTH. What is this expression?!

switch (($var = $inputValue . "123") && print_r($var)) {
    case True: // True === A && B
        var_dump("Case True: var=" . $var);
        break;
    default:
        var_dump("Case Default: var=" . $var);
}

switch (($var = $inputValue . "123") && print_r($var)) {
    case False: // False === A && B
        var_dump("Case False: var=" . $var);
        break;
    default:
        var_dump("Case Default: var=" . $var);
}

switch (!($var = $inputValue . "123") && print_r($var)) {
    case False: // False === !A && B
        var_dump("Case False: var=" . $var);
        break;
    default:
        var_dump("Case Default: var=" . $var);
}


/*

Explain expression:

E = !($var = $inputValue . "123") && print_r($var)
E = !A && B

A = ($var = $inputValue . "123") -> concats $inputValue and "123" -> asssign it to var and returns (1 as boolean meaning of success - true)
B = print_r($var) -> prints value of $var and returns 1 (true)

So:
E = !A && B = !True && True = False && True = False

*/