<?php 
$a = [
    'name' => 5698,
    'id'=>12,
    'roll_no'=>1,
];
$test=[];
foreach($a as $key=>$value){
    $test[$key]=$value;
    if($key=='id'){
        $test['address']='abc';
    }
}
print_r($test);
?>