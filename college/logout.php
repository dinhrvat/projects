<?php
session_start();

header("Location: login.php");

session_unset();

session_destroy();

header("Location: login.php");

?>