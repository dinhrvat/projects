<!DOCTYPE html>

<html>

    <head>

        <title>Tab: Hello World</title>

        <body>

            <?php

                //Greeting
                $greeting = 'Hello, World!';

                 echo '<h1>'.$greeting.'</h1>';

                 echo '<br>';

                 //Create an array, then loop through the array

                 $cars = array('Buick','Chrysler','Dodge','Ferrai','Fiat');
                 
                     foreach($cars as $car)
                     {
                         echo $car;
                         echo '<br>';
                     }

                     echo '<br>';

                     
                     $sign = "Staff Only";
                     if($sign = "Staff Only")
                     {
                         echo "Don't use this bathroom";
                     }
                     else
                     {
                        echo "You can use this bathroom";
                     }

                     echo '<br>';
                 
            ?>

        </body>

    </head>

</html>