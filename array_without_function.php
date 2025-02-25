<?php
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$string = 'program';
// echo $string[2];
$a = 0;
$b = [];
while($string[$a] != ''){
    $b[] = $string[$a];
    $a++;
}
echo $a;
print_r($b);
// print_r(str_split($string,5));
// print_r($string);
// echo(strlen($string));
/* first method
for($i=0;$i<strlen($string);$i++)
{
    $arr[]=$string[$i];
}
print_r($arr);
*/
?>