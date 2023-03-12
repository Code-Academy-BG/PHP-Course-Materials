<?php


$carsNumber = 11;
if ($carsNumber = 5) { // Common mistake will be masked
    var_dump("Cars number is: " . $carsNumber . " ( expected 5 )");
} else {
    var_dump("Cars number not 5. Actual: " . $carsNumber);
}


$carsNumber = 11;
// Constants and scalars first
if (5 === $carsNumber) {
    var_dump("Cars number is: " . $carsNumber . " ( expected 5 )");
} else {
    var_dump("Cars number not 5. Actual: " . $carsNumber);
}
// Common mistake will trigger a run-time error (also IDE will show you the error before you run the script);
/*
if (5 = $carsNumber) {
    var_dump("Cars number is: " . $carsNumber . " ( expected 5 )");
} else {
    var_dump("Cars number not 5. Actual: " . $carsNumber);
}
*/

