<!-- filepath: /C:/Users/LENOVO/OneDrive/Pictures/Desktop/.venv/login_process.php -->
<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy data for user validation
    $valid_username = "user";
    $valid_password = "password";

    // Validate the user credentials
    if ($username == $valid_username && $password == $valid_password) {
        // Set session variables
        $_SESSION['username'] = $username;
        // Redirect to the welcome page
        header("Location: welcome.php");
        exit();
    } else {
        // Invalid credentials, redirect back to login with error
        header("Location: login.html?error=invalid_credentials");
        exit();
    }
}
?>
