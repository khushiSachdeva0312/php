<?php
session_start();
?>
<html>
    <body>
        <?php
        //echo session variables that were set on previous page
        echo "My name is".$_SESSION["name"]."<br>";
        //alternative way to get all values of session variable
        echo print_r($_SESSION["name"]);
        ?>
    </body>
</html>