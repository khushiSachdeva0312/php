<?php
function increment($var){
    $var++;
    return $var;
}
$a=5;
$b=increment($a);
echo $a;//output: 5
echo "<br>";
echo $b;//output:6
?>