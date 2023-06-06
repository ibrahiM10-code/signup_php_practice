<?php 

    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "signUpDB";
    $conn = "";

    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

    if (!$conn) {
        echo "There has been a problem...";
    } else {
        echo "Connection succesful!";
    }

?>