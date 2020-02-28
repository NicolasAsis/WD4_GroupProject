<?php

$conn = new mysqli("localhost", "root", "root", "webdev4_assignment");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // alert("Hello");
    if(isset($_POST['addPost'])){
        $title = $_POST['title'];
        $imgUrl = $_POST['imgUrl'];

        // echo $username;
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO news(news_title,news_imgUrl) VALUES ('$title','$imgUrl')";

        if ($conn->query($sql) === TRUE) {
            // echo "<script type='text/javascript'>alert('New post created successfully');</script>";
            // console.log("New record created successfully");
            // alert("New record created");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
}

?>