<?php
/* Variables are containers for storing information.
A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).
*/
//Creating(Declaring) a php variable
$txt="Hello World";
$x=5;
$y=10.5;
/* A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables) 
*/

#Output Variables
$z="Italy";
echo "I love $z . <br>";

$text="London";
echo "I Love".$text."! <br>";

#Sum of two variables
$a=5;
$b=4;
echo $a + $b . "<br>";
?>