<?php
session_start();
require "UserAuthenticator.php";

// Create an instance of the UserAuthenticator
$auth = new UserAuth();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="centered-container">
        <nav>
            <a href="logout.php"><button>Logout</button></a>
            <a href="date.php"><button>Date</button></a>
            <a href="rps.php"><button>PlayRPS</button></a>
            <a href="repeater.php"><button>Repeater</button></a>
        </nav>

        <?php if (!$auth->isLoggedIn()): ?>
            <form action="login.php" method="post">
                <p>
                    Name: <input type="text" name="userName" />
                </p>
                <p>
                    Password: <input type="text" name="userPswd" />
                </p>
                <p>
                    <button type="submit">Log In</button>
                </p>
            </form>
        <?php else: ?>
            <h1>Main Page</h1>
        <?php endif; ?>
        
    </div>
     
</body>
</html>