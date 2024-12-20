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
    <title>RockPaperScissors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="playrps.php" method="post">
        <input type='radio' name="rps" value="rock">Rock</button>
        <input type='radio' name="rps" value="paper">Paper</button>
        <input type='radio' name="rps" value="scissors">Scissors</button>
        <p>
            <button>Play</button>
        </p>
    </form>
</body>
</html>