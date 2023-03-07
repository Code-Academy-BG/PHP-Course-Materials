<?php

/*
Modulo and Divide

Convert Integer number 5 to Binary

5 : 2 = 2 -> 2 : 2 = 1 -> 1 : 2 = 0
4            2            0
--           --           --
1            0            1 
                               <--- read backwards -> 0b101

*/

$number = 5;
while($number > 0) {
	$mod = $number % 2;
	$number = floor($number / 2);
	echo $mod;
}
echo "<--- read backwards\n";

?>