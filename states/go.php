<html>

<head>

<!-- This is the index page that displays all 50 state flags on the home page -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<title>50 States</title>
</head>

<body>


<div class = "container"><div class ="row"><div clas = "col-md-12" style = "background-color:gray">
<div class = "text-center"><h1>These are all of the flags of each state in the United States of America.</h1></div>


<form action="go.php" method="POST">
<input type="submit" name="go" value="Make Pages">
</form>

<?

if(isset($_POST['go'])) {

$state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", 
"Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", 
"Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire",
"New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", 
"Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", 
"West Virginia", "Wisconsin", "Wyoming");


foreach($state_list as $state) {

// New Hampshire = $state
// New_Hampshire = $statewithunderscore
// new_hampshire = $statewithunderscoreandlowercase


$statewithunderscore = preg_replace('/\s+/', '_', $state);
$statewithunderscoreandlowercase = strtolower($statewithunderscore);

$myfile = fopen("newfile/".$statewithunderscoreandlowercase.".php", "w") or die("Unable to open file!");

$mystring = <<<EOT
    <!DOCTYPE html>
    <html>
    <head>
    <title>$state</title>
    </head>
    <body>
    <div class = "container"><div class ="row"><div clas = "col-md-12" style = "background-color:gray">
    <img src="http://lesson.jaxcode.webfactional.com/stateflags/$statewithunderscore.svg.png
    " class = "text-center">
    <br>
    <br>
    This is the state of $state.
    <br>
    <a href="../index.php">Go to Index</a>
    <br>
    <iframe src = "https://en.wikipedia.org/wiki/$statewithunderscoreandlowercase" width = "100%" height = "10000" frameborder = "0">
        </iframe>
    </body>
    </html>
EOT;
    
    fwrite($myfile, $mystring);
    fclose($myfile);
}
echo 'Pages Made!<br><br><a href="index.php">Go to Index</a>';

}


?>