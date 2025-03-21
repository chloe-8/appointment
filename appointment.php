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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullName = $_POST['full-name'];
    $category = $_POST['category'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // If the category is 'Other', get the custom animal type
    if ($category == 'other') {
        $category = $_POST['other-animal-type'];
    }

    // Prepare SQL query to insert data into the database
    $sql = "INSERT INTO customer (name, email, contactNumber, category, date, time) 
            VALUES ('$fullName', '$email', '$contact', '$category', '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
        // Display success alert after successful insertion
        echo "<script>alert('Appointment booked successfully!');</script>";

        // Redirect to homepage after 2 seconds
        echo "<script>setTimeout(function() { window.location.href = 'homepage.php'; }, 50);</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
