<?php
/*Normally, when a function is completed/executed, all of its variables are deleted.
 However, sometimes we want a local variable NOT to be deleted. We need it for a further job.*/
 
    function myTest() {
    static $x = 0;
    echo $x;
    $x++;
    }

    myTest();
    myTest();
    myTest();
?>