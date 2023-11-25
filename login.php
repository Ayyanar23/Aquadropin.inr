<?php
session_start();

// Define your valid username and password (replace with a database query)
$validUsername = "your_username";
$validPassword = "your_password";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
        // Valid username and password, set a session variable
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $enteredUsername;

        // Redirect to a protected page (e.g., dashboard)
        header("Location: dashboard.php");
        exit;
    } else {
        $error_message = "Invalid username or password. Please try again.";
    }
}

// If the user is already logged in, redirect them to the dashboard
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("Location: dashboard.php");
    exit;
}
?>