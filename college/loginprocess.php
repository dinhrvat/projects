<?
session_start();

include '/home/dinhrvat/functions.php';
    //If the email and password are empty, spit out an error mesage.
    if($_POST['email'] == '' OR $_POST['password'] == '')
    {
        $_SESSION['messagefail'] = '<div class = "alert alert-danger" role = "alert">
        Invalid login. Please try again.
        </div>';
         header("Location:login.php");
    }
    else
    {
        $email = $_POST['email'];
        $encryptedpassword = md5($_POST['password']);
        $sql = "SELECT * FROM college_students WHERE email = '{$email}' AND password = '{$encryptedpassword}'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) 
            {
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['student_id'] = $row['student_id'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['phonenumber'] = $row['phonenumber'];
                $_SESSION['street'] = $row['street'];
                $_SESSION['street2'] = $row['street2'];
                $_SESSION['city'] = $row['city'];
                $_SESSION['state'] = $row['state'];
                $_SESSION['zipcode'] = $row['zipcode'];
                $_SESSION['gender'] = $row['gender'];
                
                $_SESSION['coursename'] = $row['coursename'];
                header("Location: dashboard.php");
            }
        } 
        else 
        {
            $_SESSION['messagefail'] = '<div class = "alert alert-danger" role = "alert">
                      Invalid login. Please try again.
                      </div>';
                      header("Location:login.php");
        }
    } 
?>