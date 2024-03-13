<?php
session_start();

// Check if username and password are provided
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password (e.g., by checking against a database)
    // For demonstration purposes, let's assume username is "user" and password is "password"
    if($username === "user" && $password === "password") {
        // Authentication successful
        $_SESSION['username'] = $username;
        header("Location: profile.php"); // Redirect to user's profile page
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password. Please try again.";
    }
}
?>
