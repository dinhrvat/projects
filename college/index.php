<? session_start(); ?>
<!DOCTYPE html>
<html lang = "en-US">
<head>
    <title>DIN University</title>
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
    <div class = "container-fluid" s>
        <h1 title = "Registration Form" style = "text-align:center; color:black;">Course Registration</h1>
        <hr style = "border: 5px solid black; border-radius: 100px;">
        <!-- After the user presses the submit button, they will be taken to a page that asks them to confirm their sumbission. "Edit" Button 
             will exist here. -->
        <form action = "edit.php" method = "POST" enctype="multipart/form-data">
            <!-- Opening the Form -->
            <div class = "col-md-12">
                <h3 style = "color:black">1) Please Fill In The Form</h3>
                <!-- First Name -->
                <div class="input-group">
                    <span class = "input-group-addon"><i class = "glyphicon glyphicon-user"></i></span>
                    <input id = "firstname" type = "text" class = "form-control" name = "firstname" required placeholder = "First Name" 
                    value="<? if(isset($_SESSION['firstname'])) 
                    {echo $_SESSION['firstname'];}?>">
                </div>
                <!-- Middle Name -->
                <div class="input-group">
                    <span class = "input-group-addon"><i class = "glyphicon glyphicon-user"></i></span>
                    <input id = "middlename" type = "text" class = "form-control" name = "middlename"  placeholder = "Middle Name" 
                    value = "<? if(isset($_SESSION['middlename'])) 
                    {echo $_SESSION['middlename'];}?>">
                </div>
                <!-- Last Name -->
                <div class = "input-group">    
                    <span class = "input-group-addon"><i class = "glyphicon glyphicon-user"></i></span>
                    <input id = "lastname" type = "text" class = "form-control" name = "lastname" required placeholder = "Last Name"
                    value = "<? if(isset($_SESSION['lastname'])) 
                    {echo $_SESSION['lastname'];}?>">
                </div>
                <!-- Email -->
                <div class = "input-group">    
                    <span class = "input-group-addon"><i class = "glyphicon glyphicon-envelope"></i></span>
                    <input id = "email" type = "text" class = "form-control" name = "email" required placeholder = "Email"
                    value = "<? if(isset($_SESSION['email'])) 
                    {echo $_SESSION['email'];}?>">
                </div>
                <!-- Phone Number -->
                <div class = "input-group">    
                    <span class = "input-group-addon"><i class = "glyphicon glyphicon-phone"></i></span>
                    <input id = "phonenumber" type = "number" class = "form-control" name = "phonenumber" required placeholder = "Phone Number"
                    value = "<? if(isset($_SESSION['phonenumber'])) 
                    {echo $_SESSION['phonenumber'];}?>">
                </div>
                <!-- Part 2 of The Form -->
                <h3 style = "color:black">2) Enter Your Address</h3>
                <!-- Street Address -->
                <div class = "input-group">
                    <span class = "input-group-addon"><i class = "glyphicon glyphicon-home"></i></span>
                    <input id = "street" type = "text" class = "form-control" name = "street" required placeholder = "Street Address"
                    value = "<? if(isset($_SESSION['street'])) 
                    {echo $_SESSION['street'];}?>">
                </div>
                 <!-- Street Address 2 -->
                 <div class = "input-group">
                    <span class = "input-group-addon"><i class = "glyphicon glyphicon-home"></i></span>
                    <input id = "street2" type = "text" class = "form-control" name = "street2" placeholder = "Street Address 2"
                    value = "<? if(isset($_SESSION['street2'])) 
                    {echo $_SESSION['street2'];}?>">
                </div>
                <!-- City -->
                <div class = "input-group">
                    <span class = "input-group-addon"><i class = "glyphicon glyphicon-home"></i></span>
                    <input id = "city" type = "text" class = "form-control" name = "city" required placeholder = "City"
                    value = "<? if(isset($_SESSION['city'])) 
                    {echo $_SESSION['city'];}?>">
                </div>
                <!-- State -->
                <div class = "input-group">
                    <span class = "input-group-addon"><i class = "glyphicon glyphicon-home"></i></span>
                    <select class = "form-control" id = "state" name = "state" required
                    value = "<? if(isset($_SESSION['state'])) 
                    {echo $_SESSION['state'];}?>">
                    <option value = <option selected>State...</option>
                <? 
                $state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");
                
                foreach($state_list as $state) 
                {
                    if($_SESSION['state'] == $state) 
                    {
                        echo '<option value="'.$state.'" selected>'.$state.'</option>';
                    } else 
                    {
                        echo '<option value="'.$state.'">'.$state.'</option>';
                    }
                }
                ?>
                </select>
                </div>
                <!-- Zipcode -->
                <div class = "input-group">
                <span class = "input-group-addon"><i class = "glyphicon glyphicon-home"></i></span>
                    <input type = "text" class = "form-control" id = "zipcode" name = "zipcode" required placeholder = "Zipcode"
                    value = "<? if(isset($_SESSION['zipcode'])) 
                    {echo $_SESSION['zipcode'];}?>">
                </div>
                <!-- Image Upload -->
                <h3 style = "color:black">3) Select Which Picture You Would Like To <u>Upload</u></h3>
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                <input type = "file" name = "fileToUpload" class = "form-control" id = "fileToUpload">
                <!-- Gender -->
                <h3 style = "color:black">4) What Is Your Gender?</h3>
                
                <? if($_SESSION['gender'] == 'Male') 
                {
                   echo '<input type="radio" id="male" name="gender" value="Male" checked>';
                } else 
                {
                    echo '<input type="radio" id="male" name="gender" value="Male" required>';
                }
                ?>
                <label for="male">Male</label><br>
                
                <? if($_SESSION['gender'] == 'Female') 
                {
                   echo '<input type="radio" id="female" name="gender" value="Female" checked>';
                } else 
                {
                    echo '<input type="radio" id="female" name="gender" value="Female" required>';
                }
                ?>
                <label for="female">Female</label><br>
                <!-- Course Selector -->
                <h3 style = "color:black">5) Pick Your Courses</h3>
                <div class = "row">
                    <div class = "col-md-12">
                        <!-- Creating the table -->
                        <table class = "table table-hover table-striped table-bordered">
                        <thead> 
                            <tr>
                                <th></th>
                                <th>Select Course:</th>
                                <th>Description:</th>
                                <th>Days & Time:</th>
                                <th>Instructor:</th>
                                <th>Credits:</th>
                                <th style = "text-align: center">Level:</th>
                                <th>Prerequisites:</th>
                            </tr>
                        </thead>
                        <tbody>
                    </div>
                </div>
                <?php

                include '/home/dinhrvat/functions.php';

                    $sql = "SELECT * FROM college_courses";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) 
                    {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) 
                        {                
                            ?>
                        <tr>
                             <td>
                            
                            <input type="checkbox" id="course_id" name="course_id[]" value="<?=$row['course_id']?>"
                            <?if(isset($_SESSION['course_id']))
                            {
                                foreach($_SESSION['course_id'] as $thisone)
                                {
                                    if($row['course_id'] == $thisone)
                                    {
                                        echo 'checked';
                                    }
                                }
                            }
                            ?>>
                           
                            </td>
                            <td><?=$row['coursename']?></td>
                            <td><?=$row['description']?></td>
                            <td><?=$row['days_and_time']?></td>
                            <td><?=$row['instructor']?></td>
                            <td><?=$row['credits']?></td>
                            <td><?=$row['level']?></td>
                            <td style = "text-align: center"><?=$row['prerequisites']?></td>
                        </tr>
                     <?
                        }
                    } 
                    else 
                    {
                        echo "0 results";
                    }
                    mysqli_close($conn);
                ?>
                        </tbody> </table>   
                        <br>
                        <!-- Submit -->
                        <span class = "input-group-addon btn btn-block"><input type="submit" name = "mycollegeform" value="Register" style = "background-color:orange"></span>
        </form>
    </div>
</body>
</html>