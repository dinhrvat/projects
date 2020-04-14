<?
$to = $_SESSION['email'];
$subject = "You have successfully registered to DIN University!";
$message = 
    "<html>
    <head>
    <title></title>
    </head>
    <body>
    <p>You have been successfully registered!</p>
    <p>Your username is: $email and your password is: $password</p>
    <p>Please login here: <a href = \"https://dinhrvat.com/projects/college/login.php\">Login</a>
        </form></p>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers
    $headers .= 'From: College Admissions <dinhrvat@gmail.com>' . "\r\n";
    mail($to,$subject,$message,$headers);
?>