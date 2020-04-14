<!-- This is an application that prompts a login form that allows users to sign-in --> 

<!DOCTYPE html>

<html>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="golddragon.ico">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <title>Web login form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      

    </head>

    <body >

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://www.google.com/">Google</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class = "active"><a href = "index.html">Home</a></li>
                    <li><a href = "#">Page 1</a></li>
                    <li><a href = "#">Page 2</a></li>
                    <li><a href = "cubs.html">Page 3</a></li>
                    <li><a href = "fire.html"> Page 4</a></li>
                    <li><a href = "hanna.html"> Page 5</a></li>
                </ul>
              </div>
            </div>
          </nav>

        <div class = "container">
            <div class = "row">
                <div class = "col-md-12">
                    <h1>Web Form</h1>

        <?
            $servername = "localhost";
            $username = "jaxcode79";
            $password = "jaxcode79";
            $dbname = "jaxcode79";
    
            //Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            //Check connection
            if (!$conn) 
            {
                die("Connection failed: " . mysqli_connect_error());
            }
    
                if(isset($_POST['myguestform']))
                {
                    echo 'Hello, '.$_POST['firstname'];
                    echo ' ';
                    echo $_POST['lastname'];
                    echo '<br>';
                    echo 'Your email is: '.$_POST['email'];
                    echo '<br>';
                }

                    if(isset($_POST['getridofthis']))
                    {
                        echo 'HELLO TLkjsldkfjsldkfjkfj';
                        //sql to delete a record
                        $sql = "DELETE FROM MyGuests WHERE id = '{$_POST['id']}'";

                        if(mysqli_query($conn, $sql))
                        {
                            echo '<div class = "alert alert-warning">
                                  <strong>Success!</strong> Guest Removed.
                                  </div>';
                        } 
                        else
                        {
                            echo "Error deleting record: " .mysqli_error($conn);
                        }
                    }

                    
                    // Check connection
                    if(isset($_POST['updatethisguest']))
                    {
                        $sql = "UPDATE MyGuests SET
                        firstname = '{$_POST['firstname']}', lastname = '{$_POST['lastname']}', email = '{$_POST['email']}'
                        WHERE id = '{$_POST['id']}'";
                   
                        if (mysqli_query($conn, $sql)) 
                        {
                            echo "Record updated successfully";
                        } 
                        else 
                        {
                            echo "Error updating record: " . mysqli_error($conn);
                        }
                    }      
                    ?>   
                    <? 
    
            //This code creates a new user into the jaxcode79 db//
            if(isset($_POST['myguestform']))
            {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $sql = "INSERT INTO MyGuests (firstname, lastname, email)
                VALUES ('{$firstname}', '{$lastname}', '{$email}')";
    
                if (mysqli_query($conn, $sql)) 
                {
                    echo '<div class = "alert alert-success">
                          <strong>Success!</strong> New Guest Added.
                          </div>';
    
                        $to = "dinhrvat@gmail.com";
                        $subject = "You registered a new guest";
                        $txt = "New guest has been added!";
                        $headers = "From: dinhrvat@gmail.com";
                        mail($to,$subject,$txt,$headers);
                } 
                else 
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        ?>


        <!-- This code creates a form and accepts variables: firstname, lastname, email, and a myform -->
        <form action = "index.php" method = "POST">
                
                <div class="input-group">
                <span class = "input-group-addon"><i class = "glyphicon glyphicon-user"></i></span>
                <input id = "firstname" type = "text" class = "form-control" name = "firstname" placeholder = "first name" value="<? if(isset($_POST['editthis'])) { echo $_POST['firstname']; } ?>">
                </div>

                <div class="input-group">
                <span class = "input-group-addon"><i class = "glyphicon glyphicon-user"></i></span>
                <input id = "lastname" type = "text" class = "form-control" name = "lastname" placeholder = "last name" value="<? if(isset($_POST['editthis'])) { echo $_POST['lastname']; } ?>">
                </div>

                <div class="input-group">
                <span class = "input-group-addon"><i class = "glyphicon glyphicon-envelope"></i></span>
                <input id = "email" type = "text" class = "form-control" name = "email" placeholder = "email" value="<? if(isset($_POST['editthis'])) { echo $_POST['email']; } ?>">
                </div>

                <?
                if(isset($_POST['editthis']))
                {
                    echo '<input type = "hidden" name = "id" class = "btn btn-xs btn-info" value = "'.$_POST['id'].'">';
                    echo '<input type = "submit" name = "updatethisguest" class = "btn btn-xs btn-info" value = "Update">';
                } 
                else
                {
                  echo '<input type = "submit" name = "myguestform" class = "btn btn-xs btn-primary" value = "Submit">';
                }

            ?>
        </form>
            <br>
            <br>

        <table class = "table table-striped table-hover">
            <tr>
                <th>Guest ID</th>
                <th>First Name</th>
                <th>Last Name </th>
                <th>Email</th>
                <th>Registration Date</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>

            <?php

                $sql = "SELECT * FROM MyGuests";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0)
                {
                    //output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
            ?>
                       
                    <tr> 
                        <td><?=$row['id']?></td>
                        <td><?=$row['firstname']?></td>
                        <td><?=$row['lastname']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['reg_date']?></td> 

                            <!--Edit-->
                            <td>
                            <form  action = "index.php" method = "POST">
                            <input type = "hidden" name = "id" value = "<?=$row['id']?>">
                            <input type = "hidden" name = "firstname" value = "<?=$row['firstname']?>">
                            <input type = "hidden" name = "lastname" value = "<?=$row['lastname']?>">
                            <input type = "hidden" name = "email" value = "<?=$row['email']?>">
                            <button name = "editthis" class ="btn btn-success btn-xs"> Edit</button>
                            </form>
                            </td>

                            <!--Delete-->
                            <td>
                            <form  action = "index.php" method = "POST">
                            <input type = "hidden" name = "id" value = "<?=$row['id']?>">
                            <button name = "getridofthis" class ="btn btn-danger btn-xs"> Delete</button>
                            </form>
                            </td>
                               
                    </tr>

            <?php
  
                    }
                        }
                        else
                        {
                            echo "0 results";
                        }
                           mysqli_close($conn);

            ?>
            </table>
                </div>
                </div>
                </div>

    </body>

</html>