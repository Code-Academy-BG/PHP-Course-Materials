<?php

var_dump(3 <=> 4); // 3 < 4 => so move it on left -1
var_dump(3 <=> 3); // 3 = 4 => so stay on same position (move with 0)
var_dump(3 <=> 2); // 3 > 4 => so move it on right +1


// How it could be used in sort. (Step forward)
$array = ["10+text", "1+text", "2+text", 7, 2, 3, 5]; // Wanna sort to => 1, 2, 3, 5, 7, 10
function my_str_sort_old($a, $b) {
    if ($a === $b) {
        return 0;
    }
    return $a > $b ? 1 : -1;
}
function my_str_sort_php7($a, $b) {
    return $a <=> $b;
}
function my_num_sort_php7($a, $b) {
    $a = intval($a); // additional processing to get only leading numbers from array values
    $b = intval($b);
    return $a <=> $b;
}

echo "Array: ";
print_r($array);

echo "Sorted (Old way str sort): "; // 1, 10, 2, 7, 3, 5
usort($array, "my_str_sort_old");
print_r($array);

echo "Sorted (alphabetic-sort with spaceship operator): "; // 1, 10, 2, 7, 3, 5
usort($array, "my_str_sort_php7");
print_r($array);

echo "Sorted (numeric-sort with spaceship operator): "; // 1, 2, 3, 5, 7, 10
usort($array, "my_num_sort_php7");
print_r($array);
