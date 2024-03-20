<?php
    include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
</head>
<body>
<section class="form">
        <form name = "form" action="login.php"method = "POST">
            <h1>Login</h1>
            <div class="inputbox">
                <input type="text" id="user" name="user" required>
                <label for="">Username</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" id="pass" name = "pass" required>
                <label for="">Password</label>
               
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Remember Me</label>
                <a href="#">Forget Password</a>
            </div>
           
            <input type="submit" class="btn" value="Login" name="submit">
            <div class="register">
                <p>Don't have a acount? <a href="sign.php">REGISTER</a></p>
            </div>
        </form>
    </section>
   
</body>
</html>