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
                // console.log("hello");
                // console.log($_SESSION['username']);
                // echo "<script type='text/javascript'>console.log('".$_SESSION['username']."');</script>";
                echo "<script type='text/javascript'>window.location='login-success.php';</script>";
                // phpinfo();
                 exit();
                // var_dump(session_id());
            }
            else {
                echo "<script type='text/javascript'>alert('Wrong credentials');</script>";
            }
        }
    }
}

?>