<?php
$servername = "localhost";
$database = "nyfriends";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';


?>