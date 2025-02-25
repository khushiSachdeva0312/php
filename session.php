<?php
/*A session is a way to store informations (in variables)to be used across multiple pages.
Unlike a cookie, the information is not stored on the computer
By default, session variables last until the user closes the browser.*/
ini_set('session.gc_maxlifetime', 60);

ini_set('session.cookie_lifetime', 0);

session_start();
?>
<html>
    <body>
        <?php
        //set session variables
        $_SESSION["name"] = "Khushi";
        echo "Session variables are set";
        print_r($_SESSION);
        echo session_id();
        ?>
    </body>
</html>