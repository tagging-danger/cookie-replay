<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mock user credentials
    $valid_username = "user123";
    $valid_password = "password123";

    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password match
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful, set session cookie
        $_SESSION["authenticated"] = true;

        // Redirect user to protected page
        header("Location: protected_page.php");
        exit();
    } else {
        // Authentication failed, redirect user back to login page
        header("Location: login.html");
        exit();
    }
} else {
    // If the form is not submitted, redirect user back to login page
    header("Location: login.html");
    exit();
}
?>
