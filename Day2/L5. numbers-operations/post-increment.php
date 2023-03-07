<?php

$x = 3;
var_dump("x=$x");
if ($x++ > 3) {
	var_dump("x=$x is greater than 3!");
}
var_dump("post-incremented x=$x");

?>