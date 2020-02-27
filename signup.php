<?php

$conn = mysqli_connect("localhost", "root", "root", "webdev4_assignment");

$username=$_POST['username'];
$password=$_POST['password'];

// echo $username;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users(username,password) VALUES ('$username','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    alert("New record created");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>