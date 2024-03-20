<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "style3.css"> 
</head>
<body>
    <section>
<div id="form">
        <center>
        <h1>Register</h1>
        </center>
        <form name = "form" action= "register.php"method = "POST">
            <label>Firstname: </label>
            <input type="text" id="first" name="first"> </br> </br>
            <label>Lastname: </label>
            <input type="text" id="last" name="last"> </br> </br>
            <label>Age: </label>
            <label>Gender: </label>
            <select id="gender"  name="gender">
                <option value="" selected></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select> </br> </br>
            <label>Username: </label>
            <input type="text" id="user" name="user"> </br> </br>
            <label>Password:  </label>
            <input type="password" id="pass" name = "pass"> </br> </br>
            <input type="submit" id="btn" href="index.php" value="Register" name="submit1">
            
            <a class="login" href="index.php">Login</a>
        </form>
    </div>
</section>
</body>
</html>