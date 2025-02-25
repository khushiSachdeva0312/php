<?php
/*
passing arguments by value
function wow($a){
    $a="Hey!";
}
$str="Hello";
wow($str);
echo $str; --outputs hello
*/
function wow(&$a){
    $a="Hey!";
}
$str="Hello";
wow($str);
echo $str;
?>