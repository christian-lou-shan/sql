<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="form">
        <form name = "form" action= "login.php"method = "POST">>
            <h1>Login</h1>
            <div class="input">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" id="user" name="user" required>
                <label for="">Email</label>
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
            <input type="submit" id="btn" value="Login" name="submit"> 
            <div class="register">
                <p>Don't have a acount<a href="#">Register</a></p>
            </div>
        </form>
    </section>


    
    <div id="form">
        <center>
        <h1>BAYOT SA SURSUGON</h1>
</center>
        <form name = "form" action= "login.php"method = "POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"> </br> </br>
            <label>Password:  </label>
            <input type="password" id="pass" name = "pass"> </br> </br>
            <input type="submit" id="btn" value="Login" name="submit"> 
            <button>Sign up</button>
        </form>
    </div>
</body>
</html>