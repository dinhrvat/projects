<? session_start(); ?>
<!DOCTYPE html>
<html lang = "en-US">
<head>
    <title>Confirm Registration Form</title>
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
<?
include '/home/dinhrvat/functions.php';
$_SESSION['email'] = $_POST['email'];

//SELECT
$sql = "SELECT email FROM college_students WHERE email='{$_SESSION['email']}'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) 
        {
            $message = 'You are already registered. <a href="login.php">Login In</a>';
                         
        }
    } 
    else 
    {   
        $message = '';
    } 

if($message == '') 
{ 
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['middlename'] = $_POST['middlename'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phonenumber'] = $_POST['phonenumber'];
    $_SESSION['street'] = $_POST['street'];
    $_SESSION['street2'] = $_POST['street2'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['zipcode'] = $_POST['zipcode'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['course_id'] = $_POST['course_id'];
    $_SESSION['imagename'] = $imagename;
?>
    <h1>Would you like to edit any of the following?</h1>
    <!-- Table that displays the information received from the index.php page. -->
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
        
        <?
        $_SESSION['courselist'] = '';
            if(isset($_SESSION['course_id'])) 
            {
                foreach($_SESSION['course_id'] as $yes)
                {
                    $sql = "SELECT coursename,description FROM college_courses WHERE course_id='{$yes}'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) 
                    {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) 
                        {
                            echo ' <tr><td>Course: '.$row['coursename'].': '.$row['description'].'</td></tr> ';
                            $_SESSION['courselist'] .= $row['coursename'].'<br>';
                        }
                    } 
                    else 
                    {
                        echo "0 results";
                    }
                }
            }
            ?>
            <tr><td><?include 'upload.php'?></td></tr>
        </tbody>
    </table>

        <!--Edit-->
        <div class="container">
        <div class="row">
        <div class="col-md-6">
        <!-- Form returns to index.php to re-type their values -->
        <form action = "index.php" method = "POST">
            <span class = "input-group-addon"><button name = "editthis" class ="btn btn-success btn-lg"> Edit</button></span>
            
        </form>
        </div><div class="col-md-6">
        <!-- Form goes to register.php to publish the data into the database -->
        <form action = "register.php" method = "POST">

            <span class = "input-group-addon"><button name = "mycollegeform" class ="btn btn-primary btn-lg"> Submit</button></span>
        </form>
    </div>
    </div></div>

  <?
  } 
  else 
  {
    echo $message;
  }
  ?>
</body>
</html>