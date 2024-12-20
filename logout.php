<?php
session_start();
require "UserAuthenticator.php";

// Create a new instance for logging out
$auth = new UserAuth();
$auth->logout();
$auth->redirectToLogin();
?>