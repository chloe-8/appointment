<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Happy Vet</title>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar">
    <div class="logo">
        <span>Happy Vet</span>
    </div>
    <div class="nav-center"> 
        <ul class="nav-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
    </div>
    <div class="nav-right">
    <?php
        if(isset($_SESSION['login_user'])) {
            echo "<a href='logout.php'>Logout</a>";
        } else {
            echo "<a href='login.php'>Login</a>";
        }
    ?>
</div>

</nav>

<!-- Hero Section -->
<div class="hero">
    <div class="hero-text">
        <h1>Happy Vet - We Are Here for Your Pet!</h1>
        <p>
            At Happy Vet, we are dedicated to providing top-quality care for your beloved pets. <br>
            Our team of experienced veterinarians and compassionate staff is committed to <br>ensuring
            the health, happiness, and well-being of your furry friends. <br>
            From routine check-ups to specialized treatments, we offer a wide range of veterinary <br>
            services tailored to meet your pet’s unique needs. Whether it's preventive care, <br>
            vaccinations, grooming, or emergency services, we are here to support you <br>every step of the way.
            Your pet's health is our priority — because at Happy Vet, we treat them like family!
        </p>
    </div>
    <div class="submit">
    <a href="book.php" class="book-now-btn">Book Now</a>
</div>

</div>

<!-- Separate Footer Section -->
<div class="footer-container">
    <footer class="footer">
        <div class="footer-section">
            <h4>Happy Vet</h4>
            <p>Caring for your pets like family.</p>
        </div>
        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>Contact Us</h4>
            <p><i class="fa fa-map-marker"></i> Cabancalan, Mandaue City</p>
            <p><i class="fa fa-phone"></i> +63 912 345 6789</p>
            <p><i class="fa fa-envelope"></i> happyvet@gmail.com</p>
        </div>
        <div class="footer-section">
            <h4>Follow Us</h4>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        <p>&copy; 2025 Happy Vet. All Rights Reserved.</p>
    </div>
</div>

</body>
</html>
