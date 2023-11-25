<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];

    // Perform form validation
    $errors = [];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    // Add more validation rules here as needed

    // If there are no errors, you can proceed to save the user data to a database or perform other actions
    if (empty($errors)) {
        // Database connection code here (insert user data, etc.)

        // Redirect to a success page or perform other actions
        header("Location: success.html");
        exit();
    } else {
        // Display errors to the user
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
