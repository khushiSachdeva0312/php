<?php  
class OddNumberException extends Exception { }  
//user-defined function with an exception  
function testEven($num) {  
    //trigger an exception in a "try" block  
    try {  
         if($num%2 == 1) {  
           //throw an exception  
           throw new OddNumberException;  
        //    echo "After throw this statement will not execute";  
          }  
          echo '</br> <b> If you see this text, the passed value is an EVEN Number </b>';  
     }  
       
     //catch exception  
     catch (OddNumberException $ex) {  
         echo '</br> <b> Exception Message: ODD Number' .'</b>';  
     }  
     //catch exception  
     catch (Exception $e) {  
         echo '</br> <b> Exception Message: ' .$e->getMessage() .'</b>';  
     }  
  
}  
   echo 'Output for EVEN Number';  
   testEven(28);  
   echo '</br> </br>';  
   echo 'Output for ODD Number';  
   testEven(17);  
?>  