<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "ttt";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName,"3306") or die("Something went wrong;");
echo "connection successfull !";

?>