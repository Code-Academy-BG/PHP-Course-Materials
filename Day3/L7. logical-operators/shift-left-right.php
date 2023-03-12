<?php

printf("0b000001101 << 2\n0b%08b\n\n", 0b000001101 << 2);
printf("0b000110100 >> 2\n0b%08b\n\n", 0b000110100 >> 2);


$screen_width = 1024;
$dialog_width = 399;
$dialog_x_position = floor(($screen_width - $dialog_width) / 2); // floor(312.5) = 312
var_dump($dialog_x_position); // computer works slower with floats


$screen_width = 1024;
$dialog_width = 399;
$dialog_x_position = ($screen_width - $dialog_width) >> 1; // i.e divide by 2 -> 2^1
var_dump($dialog_x_position); // computer works much faster with integers