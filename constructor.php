<?php
// class House{
//     private $color;
//     public function __constructor($initialcolor){
//         $this->color=$initialcolor;
//         echo "A new house has been constructed.It is $initialcolor in color.";
//     }
//     public function getcolor(){
//         return $this->color;
//     }
// }
// $myHouse=new House("blue");
// echo $myHouse->getcolor();//Output:blue
?>


<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
?>