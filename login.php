<?php

session_start();

$conn = new mysqli("localhost", "root", "root", "webdev4_assignment");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // alert("Hello");
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $password = strip_tags(mysqli_real_escape_string($conn,trim($password)));

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $table = mysqli_query($conn,$sql);
        
        if (mysqli_num_rows($table) > 0) {
            $row=mysqli_fetch_array($table);
            $password2=$row['password'];

            if(password_verify($password,$password2)){
                $_SESSION['username'] = $username;
                header("location:login-signup.php");
                echo "<script type='text/javascript'>alert('Login Successful');</script>";
            }
            else {
                echo "<script type='text/javascript'>alert('Wrong credentials');</script>";
            }
        }
    }
}

?>