<?php
    session_start();

    if(isset($_SESSION['Account'])){
        unset($_SESSION["Account"]);
    }
 
    header("Location:login.php");
?>