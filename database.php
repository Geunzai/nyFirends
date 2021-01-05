<?php
    $servername = "localhost";
    $database = "nyfriends";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>