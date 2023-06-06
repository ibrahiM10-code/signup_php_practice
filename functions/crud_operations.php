<?php

    include("connection.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO user_details (username, user_password) VALUES '$username', '$password'";
    
    mysqli_query($conn, $query);
    header("Location:../alert/success.html?success");
    mysqli_close($conn);
?>