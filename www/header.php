<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "emmanuel");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start the session
session_start();

?>
