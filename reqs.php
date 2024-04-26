<?php
session_start();

function redirectToPage($page) {
    // Redirect to the specified page
    echo "<script>window.location.href='".$page."'</script>";// Ensure that no other code is executed after redirection
}


// Database credentials
$hostname = "localhost";  // or your database server address
$username = "root";
$password = "";
$database = "school_cashier";

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   
}

?>