<?php 

echo "<br>";
echo "Empty triangle";
echo "<br>";
$n=5;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
        if($i==$j||$i==$n||$j==1){
            echo "*";
        }
        else{
            echo "&nbsp;&nbsp";
        }
    }
    echo "<br>";
}


echo "<br>";
echo "pattern1";
echo "<br>";
echo "<br>";
for($i=0;$i<=5;++$i){
    for($j=0;$j<=5;++$j){
        echo "* ";
    }
    echo "<br>";
}


 echo "<br>"."<br>";
 echo "pattern2"."<br>";  
 echo "<br>";
for ($i=0; $i<5; $i++)
{
   
    for ($j=0; $j<=$i; $j++)
{
    echo "* ";
}
echo "<br/>";
}

echo "<br>"."<br>";
echo "patt 2 opp";
echo "<br>";
$n=5;
for($i=0;$i<=$n;++$i){
    echo "<br>";
    for($j=0;$j<=$n;++$j){
        if($i+$j>=$n){
            echo "*";
        }
        else{
            echo "&nbsp;&nbsp";
        }
    }
}
echo "<br>";


echo "<br>"."<br>";
echo "pattern3"."<br>";
   
for ($i=0; $i<5; $i++)
{
    echo "<br/>";
    for ($j=0; $j<5; $j++)
{ 
    if ($j>=$i)
    echo "* ";
    else 
    echo " ";
}
}



echo "<br>"."<br>";
echo "pattern4"."<br>";
   
for ($i=0; $i<=5; $i++)
{
    
    for ($k=0; $k<$i; $k++) 
       print "&nbsp";
    
   for ($j=0; $j<=5; $j++)
{ 
    if ($j<$i)
    print "&nbsp";
    else 
    print "*";
    echo "&nbsp";
}
echo "<br/>";
}



echo "<br>"."<br>";
echo "pattern5"."<br>";

for ($i=0; $i<=5; $i++) 
{
    for ($k=5-$i; $k>=0; $k--) 
       echo "&nbsp";
    
    for ($j=0; $j<=$i; $j++)
      { 
        print "*";
        echo "&nbsp";
      }
echo "<br/>";
}
 


echo "<br>"."<br>";
echo "pattern6"."<br>";

for ($i=0; $i<5; $i++) 
{
    
    for ($k=1; $k<=$i; $k++) 
       echo "&nbsp&nbsp";
    
    for ($j=5; $j>$i; $j--)
      { 
        print "&nbsp*&nbsp";
        echo "&nbsp";
      }
echo "<br/>";
}



echo "<br>"."<br>";
echo "pattern7"."<br>";

for($i=0;$i<5;++$i)
{
   for($j=0;$j<5;++$j)
{
   if( $i==0|| $j==0||$i==4||$j==4)
   {
     echo "  *  ";
   }
   else 
   {    
      echo " &nbsp&nbsp";
   }
}
echo"<br>";
}


echo "<br>"."<br>";
echo "pattern8"."<br>";
$n=9;
for($i=0;$i<$n*2;++$i)
{
for($j=0;$j<$n;++$j)
{
   if($i>$j && $i<=$n)
   {
    echo "* ";
   } 
   else if(($i-$n-1)<$j && $i>$n)           
   {
    echo "* ";
   }
} 
echo"<br>";
}



echo "<br>"."<br>";
echo "pattern9"."<br>";  
echo "<br>";
for ($i=0; $i<$n; $i++)
{
for ($j=0; $j<$n; $j++)
{ 
    if($i==$j||$i==$n-1||$j==0)
    {
    echo " * ";
    }
   else 
  {
   echo "  &nbsp&nbsp";
 }
}
echo "<br/>";
}

?>