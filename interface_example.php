<?php
//interface defination
interface animal{
    public function makesound();
}
//class definations
class cat implements animal{
    public function makesound()
    {
        echo "Meow ";
    }
}


class dog implements animal{
    public function makesound()
    {
        $a="bark    ";
        echo strlen($a);
        echo "Bark ";
    }
}


class mouse implements animal{
    public function makesound()
    {
        echo "Squeak";
    }
}

//create a list of animals
$cat= new cat();
$dog= new dog();
$mouse= new mouse();
$animals= array($cat, $dog, $mouse);

//Tell the animals to make sound
foreach($animals as $animal){
    $animal->makesound();
}
?>