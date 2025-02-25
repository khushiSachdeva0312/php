<?php
//The foreach loop- loops through a block of code for each element in an array
//The foreach loop works only on arrays, and is used to loop through each key/value pair in an array
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>