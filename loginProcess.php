<?php
session_start();
    include ("database.php");
    include ("function.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $user_account = $_POST['id'];
        $user_password = $_POST['pw'];

        if(!empty($user_account) && !empty($user_password)){
            $query = "select * from ny_users where Account = '$user_account'";

            $result = mysqli_query($conn, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['Password'] === $user_password && $user_data['SecurityLevel'] == 1){

                        $_SESSION['Account'] = $user_data['Account'];
                        header("Location: userhomepage.php");
                        
                    }
                    else if($user_data['Password'] === $user_password && $user_data['SecurityLevel'] == 2){

                        $_SESSION['Account'] = $user_data['Account'];
                        header("Location: adminhomepage.php");
                        
                    }
                   
                    }
                }  echo "아이디/비밀번호가 맞지 않습니다.";
            }else {
                echo "아이디/비밀번호가 맞지 않습니다.";
        }
    }
// if(isset($_POST['login']))
// {
//     extract($_POST);
//     include 'database.php';
//     $sql=mysqli_query($conn,"SELECT * FROM ny_users where Account='$id' and Password='$pw'");
//     $row  = mysqli_fetch_array($sql);
//     if(is_array($row))
//     {
//         $_SESSION["id"] = $row['id'];
//         $_SESSION["FirstName"]=$row['FirstName'];
//         $_SESSION["LastName"]=$row['LastName']; 
//         $_SESSION["Account"]=$row['Account']; 
//         $_SESSION["Activation"]=$row['Activation']; 
//         $_SESSION["SecurityLevel"]=$row['SecurityLevel']; 
//         $_SESSION["Password"]=$row['Password']; 
//         header("Location: homepage.php"); 
//     }
//     else
//     {
//         echo "아이디/비밀번호가 맞지 않습니다.";
//     }
// }
?>