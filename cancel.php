<?php
// Database credentials
$servername = "localhost";
$username = "root";  // Your MySQL username
$password = "";  // Your MySQL password
$dbname = "happyvet";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the customer ID from the URL (e.g., cancel.php?id=123)
$customerID = $_GET['id'];

// Update the status of the appointment to "Cancelled"
$sql = "UPDATE customer SET status='Cancelled' WHERE customerID=$customerID";

if ($conn->query($sql) === TRUE) {
    // Display success alert and redirect to the appointment list page
    echo "<script>alert('Appointment Cancelled!');</script>";
    echo "<script>window.location.href = 'admin.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
