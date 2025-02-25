<?php
$x = 0;
echo "break example"."<br>";
while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
echo "<br>";
$y = 0;
echo "continue example"."<br>";
while($y < 10) {
  if ($y == 4) {
    $y++;
    continue;
  }
  echo "The number is: $x <br>";
  $y++;
}
?>