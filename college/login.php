<? session_start();
if(isset($_SESSION['loggedin']))
{
    header("location:dashboard.php");exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="shortcut icon" type="image/x-icon" href="jaxlogo.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style = "background-color:#2994ff">
<div class = "container">
<div class = "row">
<?
if(isset($_SESSION['messagefail'])) 
{
  echo $_SESSION['messagefail'];
  unset($_SESSION['messagefail']);
}
?>
<h1>Please enter your username and password below.</h1>
<form action = "loginprocess.php" method = "POST">
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email Address">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox" name="remember"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default" name="login">Submit</button>

</form>

</body>
