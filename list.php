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

// Fetch appointment data from the database
$sql = "SELECT * FROM customer";  // Query to get all the appointments
$result = $conn->query($sql);

// Close connection after query
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/adminn.css"/>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>HappyVet</title>
</head>
<body>
<div class="flex-container">
    <!-- Sidebar -->
    <aside id="sidebar">
        <div class="logo-container">
            <div class="logo">Happy<br>Vet</div>
        </div>
        <ul class="sidebar-list">
            <li><a href="admin.php"><i class="fa fa-dashboard"></i> Manage Appointment</a></li>
            <li><a href="list.php"><i class="fa fa-list"></i> Appointment List</a></li>
        </ul>
        <!-- Logout Button -->
        <ul class="sidebar-list">
            <li><a href="logout.php" class="logout-btn"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main">
        <h3>Appointment List</h3>
        <table>
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Search..." autocomplete="off">
            <button class="search-btn" onclick="searchProducts()">
                <i class="fa fa-search"></i> 
            </button>
        </div>

        </div>

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if there are results and loop through each one
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['contactNumber'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td>" . $row['time'] . "</td>";
                        echo "<td>" . $row["status"] ."</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No appointments found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
// JavaScript function to search for appointments in the table (only when the search button is clicked)
function searchProducts() {
    var input = document.getElementById('search-input');
    var filter = input.value.toLowerCase();
    var table = document.querySelector('table');
    var rows = table.getElementsByTagName('tr');

    // Loop through each row (skip header row)
    for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName('td');
        var found = false;

        // Loop through each cell in the row
        for (var j = 0; j < cells.length; j++) {
            var cell = cells[j];
            if (cell.textContent.toLowerCase().indexOf(filter) > -1) {
                found = true;
                break;
            }
        }

        // Show or hide the row based on search
        if (found) {
            rows[i].style.display = '';
        } else {
            rows[i].style.display = 'none';
        }
    }
}

</script>

</body>
</html>
