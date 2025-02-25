<?php 
$a=[
    'id'=>1234,
    'first_name'=>'Perter',
    'last_name'=>'Griffin',
];
$test=[];
foreach($a as $key=>$value){
    $test[$value]=$key;
}
print_r($test);
?>