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
}

// Get the student ID from the URL parameter
$student_id = $_GET['sid'];

// Fetch the PDF blob from the database
$sql = "SELECT form137 FROM student WHERE student_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $student_id);
$stmt->execute();
$stmt->bind_result($pdfBlob);
$stmt->fetch();
$stmt->close();

// Output the PDF content
header('Content-type: application/pdf');
echo $pdfBlob;
?>
