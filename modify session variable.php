<?php
session_start();
?>
<html>
    <body>
        <?php
        //to change session variable just overwrite it
        $_SESSION["name"]="Isha";
        print_r($_SESSION["name"]);
        ?>
    </body>
</html>