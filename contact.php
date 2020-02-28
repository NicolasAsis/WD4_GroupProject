<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // alert("Hello");
        if(isset($_POST['contactBut'])){
            $email_to = "nicolovesbasketball@gmail.com";
            $fName = $_POST['firstName'];
            $email_from = "Msg from "+ $fName + " - " + $_POST['email'];
            $msg = $_POST['msg'];
            
            echo "<script type='text/javascript'>alert('Message sent!');</script>";
            mail($email_to,$email_from,$msg);
    
        }
    }
?>