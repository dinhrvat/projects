<? session_start(); ?>
<!DOCTYPE html>
<html lang = "en-US">
<head>
    <title>Dashboard</title>
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
echo '<div class = "alert alert-success" role = "alert">
                <h1>Login Successful! Welcome to your dashboard.</h1>
				</div>';

				//destroy SESSION variable for message??
				//if not logged in send to login.php
?>

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
                <tr><td>Courses Registered For: <?=$_SESSION['coursename']?></td><tr>
            </tbody>
        </table>
    </div>
<form action = logout.php method = "POST">
<button type="submit" class="btn btn-default" name="logout">Logout</button>
</body>
</html>