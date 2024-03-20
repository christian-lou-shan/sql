<?php
    include("dbconnect.php");

    if(isset($_POST['submit1'])){
        $FName = $_POST['first'];
        $LName = $_POST['last'];
        $Gender = $_POST['gender'];
        $Username = $_POST['user'];
        $Password = $_POST['pass'];

   
        $sql = "INSERT INTO `login_table` (`Firstname`, `Lastname`, `Gender`, `Username`, `Password`) 
        VALUES ('$FName', '$LName','$Gender', '$Username', '$Password')";


        
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
          header("Location:login.php");
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();

    }
?>