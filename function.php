<?php
    function check_login($conn) {
        if(isset($_SESSION['Account'])){
            $id = $_SESSION['Account'];
            $query = "select * from ny_uers where Account = '$id'";

            $result = mysqli_query($conn,$qurery);

            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        header("location: login.php");
        die;
    }

?>