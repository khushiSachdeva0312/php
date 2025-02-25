<?php 
error_reporting(0);
$a=array(
    array(2,3),
    array(4,5),
    
);
$b=array(
    array(1,2),
    array(2,3),

);
 $c=array();
 $d=array();
 echo "subtraction of two matrix:";
 echo "<br>";
 echo "<br>";


for($i=0;$i<2;$i++)
{
    for($j=0;$j<2;$j++)
    {
        $c[$i][$j] =$a[$i][$j]-$b[$i][$j];
          echo $c[$i][$j]."&nbsp";

    }
    echo "<br>";
}
echo "<br>";

echo "addition of two matrix:";
echo "<br>";
echo "<br>";

for($i=0;$i<2;$i++)
{
    for($j=0;$j<2;$j++)
    {
        $c[$i][$j] =$a[$i][$j]-$b[$i][$j];
          echo $c[$i][$j]."&nbsp";

    }
    echo "<br>";
}
echo "<br>";

echo "indexing  matrix:";

echo "<br>";

echo "<br>";
    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo " ($i,$j) ";
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";

echo "multiplication of two matrix:";
    echo "<br>";
    echo "<br>";

    for($i=0;$i<2;$i++)
    {
    for($j=0;$j<2;$j++)
    { 
        for($k=0;$k<2;$k++)
        {
            $d[$i][$j]+=$a[$i][$k]*$b[$k][$j];
            
        }
        echo $d[$i][$j]."&nbsp";
        
    }
    echo "<br>";
    
}


    // print_r($c);
    
    ?>