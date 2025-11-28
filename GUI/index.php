<?php
/*ORIGINAL CREATOR: Luca Garofalo (Lucksi)
AUTHOR: Luca Garofalo (Lucksi)
Copyright (C) 2021-2023 Lucksi <lukege287@gmail.com>
License: GNU General Public License v3.0*/ 

require("Actions/Login_Controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Panel</title>
    <link rel="stylesheet" href="Styles/styles.css">
</head>

<body>
    <div class="login-container">
        <h2>Admin Panel Login</h2>
        <?php
        if (isset($error_message)) {
            echo '<div class="error-message">' . htmlspecialchars($error_message) . '</div>';
        }
        ?>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
