<?php 
$array=array(1,6,23,10,3,2,15,7);
echo "<br>";
echo "<br>";
$large=$array[0];
$small=$array[0];
for($i=0;$i<8;$i++){
    if($large<=$array[$i]){
        $large=$array[$i];
    }
    if($small>=$array[$i]){
        $small=$array[$i];
    }
}
echo "Large element in array: $large";
echo "<br>";
echo "Small element in array: $small";
?>