<!-- This is the index page that displays all 50 state flags on the home page -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<title>50 States</title>

<div class = "container"><div class ="row"><div clas = "col-md-12" style = "background-color:gray">
<div class = "text-center"><h1>These are all of the flags of each state in the United States of America.</h1></div>
<table class = "table table-bordered table-hover"><tr>
<?
$state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", 
"Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", 
"Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire",
"New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", 
"Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", 
"West Virginia", "Wisconsin", "Wyoming");


$counter = 1;

foreach($state_list as $state)
{
$alllower = strtolower($state);
$underscoresCAPS = preg_replace('/\s+/', '_', $state);
$alllowerwithunderscores = preg_replace('/\s+/', '_', $alllower);

echo '<td class = "text-center"><a href = "newfile/'.$alllowerwithunderscores.'.php"><img src = "http://lesson.jaxcode.webfactional.com/stateflags/'.$underscoresCAPS.'.svg.png"><br>';
echo $state.'</a><br>';
echo '</td>';

$counter++;
if($counter == 6)
{
    echo '</tr><tr>';
    $counter = 1;
}
}
?>
</tr>
</table></div></div></div>

<!-- I need to create the code that creates a new state-file inside of the "newfile" folder, which can be accessed after the user clicks on a flag -->

</body>
</html>