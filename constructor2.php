<?php
class person {
    public $name, $age;
    
    function __construct($name = "ND", $age = "ND") {
        $this->name = $name;
        $this->age = $age;
    }
    
    function show() {
        echo $this->name . "-" . $this->age;
    }
}

$p1 = new person();
$p2 = new person("Khushi", 17);
?>