<?php
class Test{

    protected function __construct()
    {
        echo "parent";
    }
}

class Test1 extends Test{
    public function __construct(){
        echo "bye";
    }
    public function test(){
        $test= new Test1();
    }
}

$obj= new Test1();
$obj->Test();
?>