<?php 
//find missing number in array

$arr = [1,2,4,5];
for ($i = 1; $i <= sizeof($arr) + 1; $i++) {
    $found = false; 
    foreach ($arr as $val) {
        if ($i == $val) {
            $found = true; 
            break; 
        }
    }
    if (!$found) {
        echo $i; 
    }
}
?>