<html>
    <body>
    
        <?php

        //The switch statement is used to perform different actions based on different conditions.
        //Use the switch statement to select one of many blocks of code to be executed.
        $color = "black";
        
        switch ($color) {
        case "grey":
            echo "Your favorite color is grey!";
            break;
        case "black":
            echo "Your favorite color is black!";
            break;
        case "white":
            echo "Your favorite color is white!";
            break;
        default:
            echo "Your favorite color is neither grey, black, nor white!";
        }
        ?>
     
    </body>
</html>