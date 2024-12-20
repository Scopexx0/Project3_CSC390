<?php
session_start();
require "UserAuthenticator.php";

// Create an instance of the UserAuthenticator
$auth = new UserAuth();

if (!$auth->isLoggedIn()) {
    $auth->redirectToLogin();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="centered-container">
        <h1>
        <?php

        date_default_timezone_set('America/Chicago');
        echo date("l jS \of F Y h:i:s A T");

        ?>
        </h1>
        <a href="index.php"><button>GoBack</button></a>
    </div>
</body>
</html>