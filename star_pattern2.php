<?php 
//pyramin pattern
echo "Pyramid Pattern"."<br>";
for($i=0;$i<=5;$i++){
    for($j=0;$j<=10;$j++){
        if(($i+$j>=4&&$j<=4&& $i<=4)||(($j+5)<=($i+5))){
            echo "* ";
        }
        
else{
            echo "&nbsp;&nbsp;&nbsp;";
        }

//         if(($j+5)<=($i+5)){
//             echo "*";
// }
// else{
//     echo "&nbsp;&nbsp;&nbsp;";
// }
    }
    echo "<br>";
}
echo "<br>";echo "<br>";

//square pattern
echo "Square pattern"."<br>";
for($i=0;$i<=5;++$i){
    for($j=0;$j<=5;++$j){
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";echo "<br>";

//hollow square pattern
echo "Hollow square pattern"."<br>";
for($i=0;$i<=5;$i++){
    for($j=0;$j<=5;$j++){
        if($i==0||$i==5||$j==0||$j==5){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

echo "<br>";echo "<br>";

//left triangle pattern
echo "Left triangle pattern"."<br>";
for($i=0;$i<=5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";echo "<br>";


//hollow triangle pattern
echo "Hollow Triangle Pattern"."<br>";
for($i=0;$i<=5;$i++){
    for($j=0;$j<=$i;$j++){
        if($i==5||$j==0||$i==$j){
            echo "* ";
        }else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

echo "<br>";echo "<br>";

//hollow right triangle pattern
echo "Hollow Right Triangle Pattern"."<br>";
for($i=0;$i<=4;$i++){
    for($j=0;$j<=4;$j++){
        if($i==4||$j==4||$i+$j==4){
            echo "* ";
        }else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>";echo "<br>";

//right triangle pattern
echo "Right Triangle Pattern"."<br>";
for($i=0;$i<=4;$i++){
    for($j=0;$j<=4;$j++){
        if($i+$j>=4){
            echo "* ";
        }else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>";echo "<br>";

//Downward triangle pattern
echo "Downward Triangle Pattern"."<br>";
for($i=0;$i<=4;$i++){
    for($j=0;$j<=5;$j++){
        if($i+$j<=4){
            echo "* ";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>";echo "<br>";



?> 