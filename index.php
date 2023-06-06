<?php
    include("functions/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Log in</title>
</head>

<body>


    <main>
        <div class="container">
            <div class="login-image">
                <img src="./img/abstract-photo.jpg" id="image">
            </div>
            <div class="form-container">
                <form action="functions/crud_operations.php" method="post">
                    <div class="login-header">
                        <h1>Log In</h1>
                        <p>Safe website for great users.</p>
                    </div>
                    <div class="usr-field">
                        <label for="usrnm-input">Username</label>
                        <input type="text" id="usrnm-input" name="username">
                    </div>
                    <div class="psw-field">
                        <label for="pswd-input">Password</label>
                        <input type="password" id="pswd-input" name="password">
                    </div>
                    <button type="submit">Get me in!</button>
                </form>
            </div>
        </div>
    </main>


</body>

</html>