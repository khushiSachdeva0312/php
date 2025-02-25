<?php 
    $arr = [4, 5, 87, 9, 1, 0, 34, 5, 8]; 

    $largest = $arr[0]; 

    for($i = 1; $i < sizeof($arr); $i++) {
       if($arr[$i] > $largest) { 
         $largest = $arr[$i]; 
       }
    }

    echo "Largest element: " . $largest;
?>