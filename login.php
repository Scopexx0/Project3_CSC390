<?php
// Including the Auth Class.
require "UserAuthenticator.php";

// Getting the values from the form input.
$userName = $_POST['userName'];
$userPswd = $_POST['userPswd'];

// Create the object user.
$newUser = new UserAuth();
// Authenticate if the credentials match the case.
if($newUser->authenticate($userName, $userPswd)){
    echo "<script>alert('LoggedIn');</script>";
    $newUser->redirectToLogin();
} else{
    echo "<script>alert('Incorrect credentials');</script>";  
    header("Location: index.php");
}
?>