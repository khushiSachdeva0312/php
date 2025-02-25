<?php 
class a{
    public static function hello(){
        echo "Hello class a";
    }
}
class b extends a{
    public static function hello(){
        // echo "Hello class b";
        a::hello();
    }
}
$obj=new b();
$obj->hello();
?>