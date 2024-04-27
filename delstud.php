<?php

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

// Prepare SQL statement to delete data from the database
$sql = "DELETE FROM `student` WHERE `student_id` = ?";
    
// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET['sid']);

// Execute the statement
if ($stmt->execute()) {
    echo "<script>alert('Student record deleted Successfully'); window.location.href = 'students.php';</script>";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>