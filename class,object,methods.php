<?php
class calculation{
    public $a, $b, $c;
    
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculation();
$c1->a = 20;
$c1->b = 10;
$c1_sum = $c1->sum(); // Call the sum() method and store the result in $c1_sum
$c1_sub = $c1->sub(); // Call the sub() method and store the result in $c1_sub

$c2 = new calculation();
$c2->a = 50;
$c2->b = 35;
$c2_sum = $c2->sum(); // Call the sum() method and store the result in $c2_sum
$c2_sub = $c2->sub(); // Call the sub() method and store the result in $c2_sub

echo "c1_sum: " . $c1_sum . "<br>";
echo "c1_sub: " . $c1_sub . "<br>";
echo "c2_sum: " . $c2_sum . "<br>";
echo "c2_sub: " . $c2_sub . "<br>";
?>
