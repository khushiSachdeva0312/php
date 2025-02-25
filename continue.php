<?php
/*The continue statement breaks one iteration(in a loop),if a specified condition occurs,and 
continues with the next iteration in the loop*/
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
?>