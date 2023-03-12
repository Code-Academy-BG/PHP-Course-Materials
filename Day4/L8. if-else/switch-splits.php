<?php

$inputValue = 123;
$inputValue = '123';
$inputValue = 456;
$inputValue = '456';

switch($inputValue) {
    case 123:
    case '123':
        var_dump('Do processing for int and string values of 123...');
        break;
    default:
        var_dump('No (int or string) of 123 found.');
}


switch($inputValue) {
    case 123:
        var_dump('Do processing for int value of 123...');
        break;
    case '123':
        var_dump('Do processing for string value of \'123\'...');
        break;
    default:
        var_dump('No (int or string) of 123 found.');
}



/*

// Next one is a bit tricky:
switch (true) {
    case $keyboardKey === " ": // means: ( true === boolean($keyboardKey === " ") )
        ...
}
*/

switch(true) {
    case $inputValue === 123:
        var_dump('Do processing for int value of 123...');
        break;
    case $inputValue === '123':
        var_dump('Do processing for string value of \'123\'...');
        break;
    case $inputValue !== 123:
        var_dump('No int value of 123 found.');
        break;
    case $inputValue !== '123':
        // As you can see we'll never get into this check!
        var_dump('No string value of \'123\' found.');
        break;
    default:
        // Neither this one
        var_dump('No (int or string) of 123 found.');
}

/*
switch (false) {
    case $keyboardKey !== " ": // means: ( false === boolean($keyboardKey !== " ") )
        ...
}
*/
switch(false) { // False - Inverse Cases!!!
    case $inputValue !== 123: // Inversed expressions too!!!
        var_dump('Do processing for int value of 123...');
        break;
    case $inputValue !== '123':
        var_dump('Do processing for string value of \'123\'...');
        break;
    case $inputValue === 123:
        var_dump('No int value of 123 found.');
        break;
    case $inputValue === '123':
        // As you can see we'll never get into this check!
        var_dump('No string value of \'123\' found.');
        break;
    default:
        // Neither this one
        var_dump('No (int or string) of 123 found.');
}