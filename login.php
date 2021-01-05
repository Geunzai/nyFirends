<?php
    session_start();
    $_SESSION;
?>


<html>
    <title>Welcome</title>
    <head>
    <meta charset="utf-8">
        <style>
            .logo {
                padding: 350;
            }
            .container {
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Welcome to Finance Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>

    <!-- This is a login page-->
   
    <body>
        <div class = "logo"><center><img src = "newyorkFriends.jpg"></center></div>
        <div class = "signin-form">
            <center>
                <form action="loginProcess.php" method="POST" enctype="multipart/form-data">         
                    <div class="container">
                        <label for="uname"><b>아이디</b></label>
                        <input type="text" placeholder="아이디" name="id" required>
                    <br>
                        <label for="psw"><b>비밀번호</b></label>
                        <input type="password" placeholder="비밀번호" name="pw" required>
                    <br>
                        <button type="submit" value = "login">로그인</button>
                    <br>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> 기억하기
                        </label>
                    </div>
                
                    <div class="container" style="background-color:#f1f1f1">
               
                    </div>
                </form>
            </center>
        </div>
    </body>


</html>