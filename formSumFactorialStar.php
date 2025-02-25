<?php

$a=$_POST['num1'];

$b=$_POST['num2'];

echo"sum ".$a+$b;

function factorial($n){
    if ($n == 0){
        return 1;
    }else{
        echo ($n * factorial ($n- 1));
    }
}
factorial($_POST['factorial']);
?>