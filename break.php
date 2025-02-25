<?php
/* break was used to "jump out" of a switch statement.

The break statement can also be used to jump out of a loop.*/
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }
?>