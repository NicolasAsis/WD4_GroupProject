<?php
    $conn = new mysqli("localhost", "root", "root", "webdev4_assignment");

    $id = $_POST['postId'];
    
    echo "<script type='text/javascript'>alert('.$id.');</script>";
    
    if (isset($id)) {
        $sql = "DELETE FROM news WHERE id = '$id'";
        ($conn->query($sql));
    } 
?>