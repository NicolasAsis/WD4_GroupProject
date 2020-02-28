<?php

$conn = new mysqli("localhost", "root", "root", "webdev4_assignment");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // alert("Hello");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        // echo $username;
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO users(username,password) VALUES ('$username','$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script type='text/javascript'>alert('New account created successfully');</script>";
            // console.log("New record created successfully");
            // alert("New record created");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
}

?>