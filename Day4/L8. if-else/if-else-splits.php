<?php

$inputValue = '123';
//$inputValue = 123;
//$inputValue = 456;
//$inputValue = '456';

// Check for both types with common value types
if ($inputValue === 123 || $inputValue === '123') {
    var_dump('Do processing for both (int and string) values of 123...');
} else {
    var_dump('No (int or string) of 123 found.');
}

if ($inputValue === 123) {
    var_dump('Do processing for int value of 123...');
} else {
    var_dump('No int value of 123 found.');
}
if ($inputValue === '123') {
    var_dump('Do processing for string value of \'123\'...');
} else {
    var_dump('No string value of \'123\' found.');
}