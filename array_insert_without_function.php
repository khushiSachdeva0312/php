<?php 
$a=[
    'id'=>1234,
    'first_name'=>'Perter',
    'last_name'=>'Griffin',
];
foreach($a as $key=>$value){
    if($key=="last_name"){
        echo $value;
    }
}
?>