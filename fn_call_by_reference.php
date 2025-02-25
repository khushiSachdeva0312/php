<?php 
// $a=10;
// echo $a;
// $b=&$a;
// $b=$b*10;
// echo $b;//output:11

// function khushi(&$counter){  
//     $counter++;  
// }  
// $counter = 10;  
// khushi($counter);  
// echo $counter;//output:11
// exit();


// function khushi(&$counters){  
//     $counters++;  
// }  
// $counter = 10;  
// khushi($counter);  
// echo $counter;
// exit();


function increment(&$var){
    $var++;
    return $var;
}
$var=5;
$b=increment($var);
echo $var;//output:6
echo "<br>";
echo $b;//output: 6
?>