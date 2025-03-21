<?php
session_start(); // Start session

$conn = mysqli_connect("localhost", "root", "", "happyvet");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["Login"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    
    // Query the users table to find the user by username
    $user_result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($user_result) > 0) {
        $row = mysqli_fetch_assoc($user_result);

        // Directly compare the password without hashing (not recommended for production)
        if ($password == $row["password"]) {
            // Set session variables based on user type (Admin or Customer)
            $_SESSION['login_user'] = $username;
            $_SESSION['user_type'] = $row["user_type"]; // Store user_type from the database

            // Redirect based on the user type
            if ($row["user_type"] == "Admin") {
                header("Location: admin.php"); // Redirect to admin page
            } else {
                header("Location: homepage.php"); // Redirect to customer homepage
            }
            exit(); // Stop further code execution
        } else {
            echo "<script>alert('Wrong Password'); window.location.href='login.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Wrong Username'); window.location.href='login.php';</script>";
        exit();
    }
}

$conn->close();
?>
