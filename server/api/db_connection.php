<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpass = "cookie321!";
$dbname = "mydb";

$conn = mysqli_connect($dbservername, $dbusername, $dbpass, $dbname);

if (!$conn){
    throw new Exception('Connection error: ' . mysqli_connect_error());
}

?>