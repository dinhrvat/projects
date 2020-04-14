<!DOCTYPE html>

<html lang = "en">

<head>

        <meta charset = "UTF-8">
        <!-- Scales the web-page according to the device -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- This is a favicon of a red heart -->
        <link rel="shortcut icon" type="image/x-icon" href="heart.ico">

        <title>Successfully Registered!</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse" style="background-color:rgb(255, 0, 0);">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color:#FFFFFF;">Din Hrvat's Medical Clinic</a>
        <ul class="nav navbar-nav navbar-right">
            <form action = "thankyou.php" method = "POST">
        </ul>
    </div>
    </nav>
    <!-- End of Navigation Bar -->

    <?
    $serverame = "localhost";
    $username = "jaxcode79";
    $password = "jaxcode79";
    $dbname = "jaxcode79";

    //Establishing a connection to the MyClinicForm database//
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
    {
        die("Connection Failed: " . mysqli_connect_error());
    }
 
    //This code CREATES a new user into the jaxcode79 db//
    if(isset($_POST['medicalclinicform']))
    {
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $phonenumber = $_POST['phonenumber'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $dob = $_POST['month'].' '.$_POST['day'].', '.$_POST['year'];
        $address = $POST['street']. ' '.$_POST['city']. ' '.$_POST['state']. ' '.$_POST['zipcode'];
        $gender = $_POST['gender'];
        $ethnicity = $_POST['ethnicity'];
        $race = $_POST['race'];
        $maritalstatus = $_POST['maritalstatus'];
        $numberofchildren = $_POST['numberofchildren'];
        $sql = "INSERT INTO MyClinicForm (firstname, middlename, lastname, phonenumber, email, dob, address, gender, ethnicity, race, maritalstatus, numberofchildren)
                VALUES ('{$firstname}', '{$middlename}', '{$lastname}', '{$phonenumber}', '{$email}', '{$dob}', '{$address}'
                , '{$gender}', '{$ethnicity}', '{$race}', '{$maritalstatus}', '{$numberofchildren}')";
    
        if (mysqli_query($conn, $sql)) 
        {
            echo '<div class = "alert alert-success">
                  <strong>Success!</strong> New Guest Added.
                  </div>';
    
            $to = "dinhrvat@gmail.com";
            $subject = "You registered a new guest";
            $txt = "New guest has been added!";
            $headers = "From: dinhrvat@gmail.com";
           // mail($to,$subject,$txt,$headers);
        } 
            else 
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
    }
    ?>


    <div class = "row">
    
    <h1 class = "text-center"><?php echo 'Hello, '.$_POST['firstname'].' '.$_POST['lastname'];?>
    </h1>

    <h1 class = "text-center"><?php echo 'You are successfully registered!';?>
    </h1>

    <h2 class = "text-center">Thank you for signing in. Please return the tablet, take a seat,
                              and you will be called as soon as possible.</h2>
    </div>  

</body>

</html>
