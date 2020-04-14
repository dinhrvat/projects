<!DOCTYPE html>
<html lang = "en">
<head>

        <meta charset = "UTF-8">
        <!-- Scales the web-page according to the device -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- This is a favicon of a red heart -->
        <link rel="shortcut icon" type="image/x-icon" href="heart.ico">

        <title>New Patient Form</title>

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
                <li class = "active"><input type="submit" class="btn btn-lg btn-success" name="medicalclinicform" style="margin:10px;" value="Submit Form">
                </li> 
        </ul>
    </div>
    </nav>
    <!-- End of Navigation Bar -->
 
    <!-- Created a div container to wrap all of my divs into -->
    <div class = "container">
    <div class = "row">

    <!-- Created a div to keep the heart image on the left side of the page. -->
    <div class = "col-md-3">
    <img src = "heart.jpg" style="width:60%;" class="img-responsive">
    </div>

    <!-- Created a div to keep the text in the center of the page. -->
    <div class = "col-md-6 text-center">
    <h1>Welcome to the medical clinic!</h1>
    <p>Please sign fill out the form to the best of your ability and you will be all set to go :)</p>
    </div>
    
    <!-- Created a div to keep the heart image on the right side of the page using the float:right command. -->
    <div class = "col-md-3">
    <img src = "heart.jpg" style="width:60%;float:right;">
    </div>
    <!-- Closed the first div row class from line 61 -->
    </div>

    <div class = "row">
    <div class = "col-md-6">
    
        <br>
        <h4 style>Please enter your name, phone number, and email below.</h4>
                
        <div class="input-group">
        <span class = "input-group-addon"><i class = "glyphicon glyphicon-heart-empty"></i></span>
        <input id = "firstname" type = "text" class = "form-control" name = "firstname" required placeholder = "First Name">
        </div>

        <div class="input-group">
        <span class = "input-group-addon"><i class = "glyphicon glyphicon-heart-empty"></i></span>
        <input id = "middlename" type = "text" class = "form-control" name = "middlename" placeholder = "Middle Name">
        </div>

        <div class="input-group">
        <span class = "input-group-addon"><i class = "glyphicon glyphicon-heart-empty"></i></span>
        <input id = "lastname" type = "text" class = "form-control" name = "lastname" required placeholder = "Last Name">
        </div>

        <div class="input-group">
        <span class = "input-group-addon"><i class = "glyphicon glyphicon-phone"></i></span>
        <input id = "phonenumber" type = "text" class = "form-control" name = "phonenumber" placeholder = "Phone Number">
        </div>

        <div class="input-group">
        <span class = "input-group-addon"><i class = "glyphicon glyphicon-envelope"></i></span>
        <input id = "email" type = "text" class = "form-control" name = "email" required placeholder = "Email">
        </div>

        <!-- Drop-Down menu for selecting a birth-month -->
        <br>
        <h4>What is your date of birth?</h4>
        <div class = "col-md-4">
        <label for = "months">Choose a month:</label>
        <select class = "form-control" id="month" name="month">
        <option value = "jan">January</option>
        <option value = "feb">February</option>
        <option value = "march">March</option>
        <option value = "april">April</option>
        <option value = "may">May</option>
        <option value = "june">June</option>
        <option value = "july">July</option>
        <option value = "aug">August</option>
        <option value = "sep">September</option>
        <option value = "oct">October</option>
        <option value = "nov">November</option>
        <option value = "dec">December</option>
        </select>
        </div>

        <!-- Drop-Down menu for selecting a birth-day -->
        <div class = "col-md-4">
        <label for = "days">Choose a day:</label>
        <select class = "form-control" id="day" name="day">
        <option value = "1">1</option>    
        <option value = "2">2</option>
        <option value = "3">3</option>
        <option value = "4">4</option>
        <option value = "5">5</option>
        <option value = "6">6</option>
        <option value = "7">7</option>
        <option value = "8">8</option>
        <option value = "9">9</option>
        <option value = "10">10</option>
        <option value = "11">11</option>
        <option value = "12">12</option>
        <option value = "13">13</option>
        <option value = "14">14</option>
        <option value = "15">15</option>
        <option value = "16">16</option>
        <option value = "17">17</option>
        <option value = "18">18</option>
        <option value = "19">19</option>
        <option value = "20">20</option>
        <option value = "21">21</option>
        <option value = "22">22</option>
        <option value = "23">23</option>
        <option value = "24">24</option>
        <option value = "25">25</option>
        <option value = "26">26</option>
        <option value = "27">27</option>
        <option value = "28">28</option>
        <option value = "29">29</option>
        <option value = "30">30</option>
        <option value = "31">31</option>
        </select>
        </div>

        <!-- Drop-Down menu for selecting a birth-year -->
        <div class = "col-md-4">
        <label for = "years">Choose a year!</label>
        <select class = "form-control" id="year" name="year">
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
        <option value="1993">1993</option>
        <option value="1992">1992</option>
        <option value="1991">1991</option>
        <option value="1990">1990</option>
        <option value="1989">1989</option>
        <option value="1988">1988</option>
        <option value="1987">1987</option>
        <option value="1986">1986</option>
        <option value="1985">1985</option>
        <option value="1984">1984</option>
        <option value="1983">1983</option>
        <option value="1982">1982</option>
        <option value="1981">1981</option>
        <option value="1980">1980</option>
        <option value="1979">1979</option>
        <option value="1978">1978</option>
        <option value="1977">1977</option>
        <option value="1976">1976</option>
        <option value="1975">1975</option>
        <option value="1974">1974</option>
        <option value="1973">1973</option>
        <option value="1972">1972</option>
        <option value="1971">1971</option>
        <option value="1970">1970</option>
        <option value="1969">1969</option>
        <option value="1968">1968</option>
        <option value="1967">1967</option>
        <option value="1966">1966</option>
        <option value="1965">1965</option>
        <option value="1964">1964</option>
        <option value="1963">1963</option>
        <option value="1962">1962</option>
        <option value="1961">1961</option>
        <option value="1960">1960</option>
        <option value="1959">1959</option>
        <option value="1958">1958</option>
        <option value="1957">1957</option>
        <option value="1956">1956</option>
        <option value="1955">1955</option>
        <option value="1954">1954</option>
        <option value="1953">1953</option>
        <option value="1952">1952</option>
        <option value="1951">1951</option>
        <option value="1950">1950</option>
        <option value="1949">1949</option>
        <option value="1948">1948</option>
        <option value="1947">1947</option>
        <option value="1946">1946</option>
        <option value="1945">1945</option>
        <option value="1944">1944</option>
        <option value="1943">1943</option>
        <option value="1942">1942</option>
        <option value="1941">1941</option>
        <option value="1940">1940</option>
        <option value="1939">1939</option>
        <option value="1938">1938</option>
        <option value="1937">1937</option>
        <option value="1936">1936</option>
        <option value="1935">1935</option>
        <option value="1934">1934</option>
        <option value="1933">1933</option>
        <option value="1932">1932</option>
        <option value="1931">1931</option>
        <option value="1930">1930</option>
        </select>
        <br>
        </div>

        <!-- Address -->
        <div class="form-group">
        <h4 class = text-center>What is your address?</h4>
        <label for="street">Street:</label>
        <input type="text" class="form-control" id="street" name="street" required>
        </td><td>
        </td>
        </tr>
        <tr><td>
        <label for="city">City:</label>
        <input type="text" class="form-control" id="city" name="city" required>
        </td>
        </div>
        <!-- /Address -->

        </div>

        <br>

        <!-- Select your gender -->
    <div class = "col-md-6 text-center">
    <div class ="row">
        <h4>Please select your gender:</h4>
        <input style = "background-color:Blue" type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>

        <!-- Ethnicity -->
        <h4>Choose your ethnicity:</h4>
        <input type="radio" id="nonhispanic" name="ethnicity" value="Non-Hispanic">
        <label for="nonhispanic">Non-Hispanic</label><br>
        <input type="radio" id="hispanic" name="ethnicity" value="Hispanic">
        <label for="hispanic">Hispanic</label><br>


    <!-- Race -->
    <td>
        <h4>Select your race:</h4>
        <label for="race"></label>
        <select class="form-control" id="race" name="race" required>
        <option value="African American">African American</option>
        <option value="Alaskan Native">Alaskan Native</option>
        <option value="American Indian">American Indian</option>
        <option value="Asian">Asian</option>
        <option value="Caucasian">Caucasian</option>
        <option value="Native Hawaiian">Native Hawaiian</option>
        <option value="Pacific Islander">Pacific Islander</option>
        <option value="Other">Other</option>
        </select>
    </td>


        <br>
        <!-- Marital Status -->
        <div class="form-group">
        <table class="table"></caption><tr><td>
        <label for="maritalstatus">Marital Status:</label>
        <select class="form-control" id="maritalstatus" name="maritalstatus" required>
        <option value="Married">Married</option>
        <option value="Single">Single</option>
        <option value="Divorced">Divorced</option>
        <option value="Separated">Separated</option>
        <option value="Widowed">Widowed</option>
        </td>

        <!-- Number of Children -->
        <td>
        <label for="numberofchildren">Number of Children:</label>
        <input type="number" class="form-control" id="numberofchildren" min="0" max="50" name="numberofchildren" value="0">
        </td>
        </tr></table>

        <!-- State -->
        <table>
        <tr>
        <td>
        <label for="state">State:</label>
        <select class="form-control" id="state" name="state" required>
        <option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="Florida" selected>Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select>
        </td>
        </tr>

        <!-- Zipcode -->
        <td>
        <label for="zipcode">Zipcode:</label>
        <input type="number" class="form-control" id="zipcode" name="zipcode" max="99999" placeholder = "00000" required>
        </td></tr>
        </table>
        </div>
        
    </div>
    </div>
    </div>

    </form>
</body>
</html>
