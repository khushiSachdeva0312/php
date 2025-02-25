<?php
//The if statement executes some code if one condition is true.
$t = 15;

if ($t < "20") {
  echo "The input is less than 20";
}
echo "<br>";

/*The if-else statement executes some code if a condition is true and another code
 if that condition is false.*/
$a = 21;

if ($a <= "20") {
  echo "The input $a is less than 20";
} else {
  echo "The input $a is greater than 20";
}
echo "<br>";
/*The if...else statement executes some code if a condition is true and another code 
if that condition is false.*/

$t = date("H");

if ($t < "10") {
  echo "Good morning!";
} elseif ($t <="14") {
  echo "Good evening!";
} else {
  echo "Good night!";
}
?>