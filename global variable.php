<?php
// a variable declared outside a function has GLOBAL SCOPE and can only be accesed outside a function
$x=5;//Global scope
function myTest(){
    //using x inside this function will generate an error
    "<p>Variable x inside the function is $x</p>";
}
myTest();

echo "<p>Variable x outside the function is : $x </p>";
?>