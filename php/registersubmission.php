<?php
ob_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = rand(100, 1000);
// For connection
$conn = mysqli_connect("localhost", "root", "", "auth");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// For registeration
$sql = "SELECT * FROM `userdetails` WHERE `email` = '$email'";
$result = mysqli_query($conn, $sql);

$adddata = "INSERT INTO `userdetails`(`id`, `name`, `email`, `password`) VALUES ('$id','$name','$email','$password')";
if (mysqli_num_rows($result) > 0) {
    echo "user exists";
} else {
    if ($conn->query($adddata) === TRUE) {
        echo "Registered Successfully, Now you can login";
    } else {
        echo "Error: " . $adddata . "<br>" . $conn->error;
    }
}
$conn->close();


?>