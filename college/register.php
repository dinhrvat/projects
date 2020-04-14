<? session_start(); ?>
<!DOCTYPE html>
<html lang = "en-US">
<head>
    <title>Successfully Registered!</title>
    <link rel="shortcut icon" type="image/x-icon" href="jaxlogo.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse" style="background-color:#2994ff;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color:#FFFFFF;">DIN University Registration</a>
        <ul class="nav navbar-nav navbar-right">
            <form action = "register.php" method = "POST">
        </ul>
    </div>
    </nav>
    <!-- End of Navigation Bar -->
    <?
    include '/home/dinhrvat/functions.php';

    
    //This code CREATES a new user into the jaxcode79 db//
    if(isset($_POST['mycollegeform']))
    {
        $firstname = $_SESSION['firstname'];
        $middlename = $_SESSION['middlename'];
        $lastname = $_SESSION['lastname'];
        $email = $_SESSION['email'];
        $phonenumber = $_SESSION['phonenumber'];
        $street = $_SESSION['street'];
        $street2 = $_SESSION['street2'];
        $city = $_SESSION['city'];
        $state = $_SESSION['state'];
        $zipcode = $_SESSION['zipcode'];
        $gender = $_SESSION['gender'];
        $imagename = $_SESSION['imagename'];
        $password = rand();
        $encryptedpassword = md5($password);
  
        $sql = "INSERT INTO college_students (firstname, middlename, lastname, email, phonenumber, street, street2, city, state, zipcode, gender, image, password)
                VALUES ('{$firstname}', '{$middlename}', '{$lastname}', '{$email}', '{$phonenumber}', '{$street}', '{$street2}', '{$city}', '{$state}', '{$zipcode}', '{$gender}','{$imagename}', '{$encryptedpassword}')";

        

        if (mysqli_query($conn, $sql)) 
        {
            $last_id = mysqli_insert_id($conn);
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        if(!empty($_SESSION['course_id'])) 
            {
               include 'classloop.php';
            }
            echo '<div class = "alert alert-success">
                    <strong>Success!</strong> New Guest Added.
                  </div>';
}
            include 'emailsend.php';
    ?>


    <div class = "row">
        <h1 class = "text-center"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']; ?></h1>
        <div class="text-center lead">
        <?
            if(!empty($_SESSION['courselist'])) 
            {
                echo '<h1 class = "text-center">You are successfully registered in the following classe(s) that you have selected!</h1>';
                echo $_SESSION['courselist'];
            } 
            else 
            {
                echo 'You did not register for any classes';
                echo '<br>';
            }
            echo '<i>Please check your email for your login information.</i>'
        ?>
        </div> 
    </div>

   <!-- Table with demographics -->
   <div class = "col-md-12">
        <table class = "table table-hover table-striped">
            <tbody>
                <tr><td>First Name: <?=$_SESSION['firstname']?></td></tr>
                <tr><td>Middle Name: <?=$_SESSION['middlename']?></td></tr>
                <tr><td>Last Name: <?=$_SESSION['lastname']?></td></tr>
                <tr><td>Email: <?=$_SESSION['email']?></td></tr>
                <tr><td>Phone Number: <?=$_SESSION['phonenumber']?></td></tr>
                <tr><td>Street: <?=$_SESSION['street']?></td></tr>
                <tr><td>Street 2: <?=$_SESSION['street2']?></td></tr>
                <tr><td>City: <?=$_SESSION['city']?></td></tr>
                <tr><td>State: <?=$_SESSION['state']?></td></tr>
                <tr><td>Zipcode: <?=$_SESSION['zipcode']?></td></tr>
                <tr><td>Gender: <?=$_SESSION['gender']?></td></tr> 
            </tbody>
        </table>
    </div>
    <img src="uploads/<?=$_SESSION['imagename']?>" class="img-responsive img-thumbnail">
    </div>  
    <?php
    
// remove all session variables
session_unset();
//session_unset($_SESSION['phonenumber']);

// destroy the session
session_destroy();
?>
</body>
</html>