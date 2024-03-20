<link rel = "stylesheet" type = "text/css" href = "style2.css">


<?php
    include("dbconnect.php");
    include("login.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>HOME PAGE?</h1>
        <section>
        <?php
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            $sql ="SELECT * FROM login_table WHERE UserName = '$username' and Password = '$password'";
            $result = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($result);
            if($count > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo $row['FirstName'] . " " . $row['LastName'];
                    
                }
            }
        ?>
        </section>
    </center>
</body>
</html>