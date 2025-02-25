<html>
    <head>
        <title>
            Passing Arguments By Reference
        </title>
    </head>
    <body>
        <?php
             $orignum = 10;
             function addFive($num) {
                 return $num += 5;
                }
                
                function addSix(&$num) {
                    return $num += 6;
                }
                
                addFive( $orignum );

         
         echo "Original Value is $orignum<br />";
         
         addSix( $orignum );
         echo "Original Value is $orignum<br />";
      ?>
    </body>
</html>