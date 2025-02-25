<?php
//php inbulit functions

echo "ceil()"."<br>";
echo ceil(4.34)."<br>";
echo "ceil() and round()"."<br>";
$value=66.4;
echo (ceil($value*100/100)."<br>");//67-WRONG
echo ceil((string)($value*100))/100;//66.4-OK  

echo "<br>";
echo "count()"."<br>";
$ele=array("Ryan","Ahana","Ritvik","Amaya");
$no_of_ele=count($ele);
echo "Number of elements present in array:".$no_of_ele;


echo "<br>";
echo "empty()"."<br>";
echo "The empty() function is an inbuilt function in PHP, which is utilized to check
 regardless of whether a variable is unfilled or not";


echo "<br>";
echo "die function ";
$url="https://www.example.com/";
fopen($url,"r")
or die("can't connect");

?>