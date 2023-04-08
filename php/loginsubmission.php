<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    // connection
    $conn = mysqli_connect("localhost", "root", "", "auth");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `userdetails` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);
    $bool = false;

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if($row['password'] == $password){
                echo('Login successful');
                $bool=true;
            }else{
                echo('incorrect password');
            }
        }
      } else {
        echo "no user exists";
      }


    $conn->close();

?>