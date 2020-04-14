<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>


<body>

<?php
echo 'Hello, '.$_POST['firstname'];
?>
    <form action = "index.php" method = "POST">

    Your name: <input type = "text" name = "firstname">
    <input type = "submit" name = "myform">

    </form>
    
</body>
</html>


<?php 
        echo 'Hello';
        echo '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, modi.</p>';
        echo '<br>';

        $variable = 'Hello World';

        echo $variable;

        echo '<br>';
        echo '<br>';

        $x = 1;

        if($x < 9)

        {
            echo 'This is true';
        }
        else
            echo 'This is false';

            echo '<br>';
            echo '<br>';

    
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo '<br>';

$x = 1;

while($x <= 50)
{
    echo "The number is: $x <br>";
    $x+=10;

}
echo '<br>';

for($x = 0; $x <= 3; $x++)
{
    echo '<p>HERE COMES JOHN CENA!!!!</p>'; 
}


$colors = array('red', 'blue', 'green');

    foreach($colors as $color)
    {
        echo $color.'<br>';
    }

    ?>
        
    

