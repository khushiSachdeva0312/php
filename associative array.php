<?php
$age=array(
    "bill"=>25,
    "steve"=>28,
    "elon"=>22,
);
//to print one value
echo $age["steve"];//outputs 28
/*we can also declare array as:
$age=[
    "bill"=>25,
    "steve"=>28,
    "elon"=>22,
];
*/
//printing the array
echo "<pre>";
print_r($age);
echo "</pre>";
//array output with data types
var_dump($age);
//updating array value
$age["elon"]=50;
?>