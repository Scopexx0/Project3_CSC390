<?php
// CSC 390
// Jeronimo Augurusa
// Repeater logic

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
    <?php

    $sentence = "This one is the original sentence ";
    $times = rand(0,500);

    for($x = 0; $x<$times; $x++){
        echo $sentence;
    }

    ?>
    
</body>
</html>