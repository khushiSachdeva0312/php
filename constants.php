<?php
/*A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.*/
//Syntax : define(name, value, case-insensitive)
define("Greeting","Welcome");
echo Greeting;

//constant array
define("cars",["Alfa Romeo","BMW","Toyota"]);
echo cars[0];

//Constants are automatically global and can be used across the entire script
define("Hello","Hello World");
function myTest(){
    echo Hello;
}
myTest();
?>