<html>
    <body>
        <?php
             // class to show run time polymorphism  
            class new_Shape    
            // parent class to draw differeent shapes  
            {    
            function draw(){}    
            }    
            // class Circle to draw a circle  
            class Circle extends new_Shape    
            {    
            function draw()    
            {    
            print " the function executed properly and Circle has been drawn . </br> ";    
            }    
            }    
            // class triangle to draw a triangle  
            class Triangle extends new_Shape    
            {    
            function draw()    
            {    
            print " the function executed properly and Triangle has been drawn . </br> ";    
            }    
            }    
            // class Square to draw a square  
            class Square extends new_Shape    
            {    
            function draw()    
            {    
            print "the function executed properly and Square has been drawn . ";    
            }    
            }    
                
            $Val=array(2);    
                
            $Val[0] = new Circle();    
            $Val[1] = new Triangle();    
            $Val[2] = new Square();    
                
            for($i=0;$i<3;$i++)    
            {    
            $Val[$i]->draw();    
            }    
        ?>
    </body>
</html>