<?php

session_start();
$db = require("../model/database.php");
$config = require('../config.php');
$dataConnection = new DataConnection($config);
$conn = $dataConnection->Connection();

if(isset($_POST['firstname'], $_POST['lastname'], $_POST['email'],$_POST['mobile no'],$_POST['Password'],$_POST['con-password'])) {
    $firstname = $_POST['firstname'];
    $latname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile no'];
    $password = $_POST['Password'];
    $conpass = $_POST['con-password'];
  

    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result && $result->num_rows > 0) {
       
        header("Location:../view/login.php");
        exit;
    }

   
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (firstname,lastname, email,mobile, password,conpass) VALUES ('$firstname','$latname' '$email','$mobileno','$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        header("Location:../view/login.php");
        exit; 
    } else {
        echo "Error: Registration failed";
    }
} else {
    echo "Invalid input data";
}

$conn->close();

?>