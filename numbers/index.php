<title>HEREDOC</title>
<h1>Hi</h1>

<form action = "index.php" method = "POST">
<input type = "submit" name = "createsite" value = "Generate Website">
</form><br><br>

<?
if(isset($_POST['createsite']))
{

$i = 1;


while($i <= 100) {
    $prev = $i - 1;
    //prev
    if($prev == 0) {
        $prevlink = '<a href = "../index.php">Home</a>';
    } else {
        $prevlink = '<a href = "newfile'.$prev.'.php">Previous Page</a>';
    }

    $next = $i + 1;
    //next
    if($next == 101){
        $nextlink = '<a href = "../index.php">Home</a>';
    }
    else{
        $nextlink = '<a href = "newfile'.$next.'.php">Next Page</a>';
    }

    

$myfile = fopen("pages/newfile".$i.".php", "w") or die("Unable to open file!");
$z = $i * $i;
$mystring = <<<EOT
<!DOCTYPE html>
<html>
<head>
<title>HEREDOC</title>
</head>
<body>
The previous page was page $prev.
<br>
This is page $i.
<br>
The next page is page $next.
<br>
$i * $i = $z
<br>
$prevlink
<br>
$nextlink
</body>
</html>
EOT;

fwrite($myfile, $mystring);
fclose($myfile);
echo '<a href = "pages/newfile'.$i.'.php">Page '.$i.'</a><br>';
    $i++;
  
}

}
?>