<?php 
$a=['khushi','tanu','antra','diya','tanya','sarah'];
$b=[];
print_r($a);
for($i=0,$j=3;$i<3&&$j<6;$i++,$j++)
{
    $b[$a[$i]]=$a[$j];
    // echo $b[$a[$i]];
}
echo "<br>";
print_r($b);
//read array matrix
?>