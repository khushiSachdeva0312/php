<?php
    //parent class
    abstract class car{
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
        abstract public function intro():string;
    }
    //child class
    class audi extends car{
        public function intro():string{
            return "Choose german quality! I'm an $this->name";
        }
    }
    class volvo extends car{
        public function intro():string{
            return "Proud to be Swedish! I'm an $this->name";
        }
    }
    class citroen extends car{
        public function intro():string{
            return "French extravagance! I'm an $this->name";
        }
    }
    //create object from child classes
    $audi= new audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo= new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $citroen= new citroen("Citroen");
    echo $citroen->intro();
    echo "<br>";
?>