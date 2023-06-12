<?php

    include("connection.php");
    
    if (isset($_POST["login-btn"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = "INSERT INTO user_details (username, user_password) VALUES '{$username}', '{$password}'";
        // $query = "INSERT INTO user_details SET username = '{$username}', user_password = '{$password}'";
        mysqli_query($conn, $query);
        header("Location:../alert/success.html?success");
        mysqli_close($conn);
    }

?>