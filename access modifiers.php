<?php
class A{
    public $name="Khushi";
    protected $profile="HR";
    private $salary=5000000;
    public function show(){
        echo "Welcome:".$this->name."<br>";
        echo "Profile:".$this->profile."<br>";
        echo "Salary:".$this->salary."<br>";
    }
}
class B extends A{
    public function show1(){
        echo "Welcome:".$this->name."<br>";
        echo "Profile:".$this->profile."<br>";
        echo "Salary:".$this->salary."<br>";
    }
}
$obj=new B;
$obj->show1();
?>