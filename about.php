<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/about.css"/>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Happy Vet</title>
</head>
<body>
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
        <?php
        if(isset($_SESSION['login_user'])) {
            echo "<a href='logout.php'>Logout</a>";
        } else {
            echo "<a href='login.php'>Login</a>";
        }
    ?>
</div>
    </nav>

    <div class="hero">
        <div class="hero-text">
            <h1><i class="fa fa-paw"></i> Welcome to Happy Vet Veterinary Clinic</h1>
            <p>
                Caring for your pets like family! At Happy Vet Veterinary Clinic, we are passionate about providing 
                top-quality veterinary care with compassion and expertise. 
            </p>
            <p>
                Located in Cabancalan, Mandaue City, we are dedicated to ensuring the health and happiness of your 
                beloved pets through a wide range of veterinary services.
            </p>
        </div>
    </div>

    <div class="mission-container">
        <div class="mission-text">
            <div class="mission">
                <img src="icons/flag.png" alt="mission icon">
                <h2>Our Mission</h2>
            </div>
            <p>
                Our mission is to provide exceptional veterinary care that enhances the well-being of pets while 
                building strong relationships with pet owners.  
            </p>
            <p>
                We believe that every pet deserves love, respect, and expert medical attention to live a happy life.
            </p>
        </div>
        <div class="mission-image">
            <img src="image/mission.webp" alt="mission img">
        </div>
    </div>

    <div class="service-container">
        <div class="service-image">
            <img src="image/services.jpg" alt="service img">
        </div>
        <div class="service-text">
            <div class="service-title">
                <img src="icons/responsible.png" alt="service icon" class="service-icon">
                <h3>Our Services</h3>
            </div>
            <ul>
                <li><i class="fa fa-check"></i> <b>Wellness & Preventive Care</b> – Routine check-ups, vaccinations, deworming, and parasite control.</li>
                <li><i class="fa fa-check"></i> <b>Medical Consultations & Diagnostics</b> – Blood tests, X-rays, ultrasounds, and advanced diagnostics.</li>
                <li><i class="fa fa-check"></i> <b>Surgery & Emergency Care</b> – Spay/neuter, soft tissue surgery, orthopedic procedures, and urgent care.</li>
                <li><i class="fa fa-check"></i> <b>Dental Care</b> – Teeth cleaning, extractions, and oral health maintenance.</li>
            </ul>
        </div>
    </div>
    <div class="why">
    <div class="why-text">
        <div class="why-title">
            <img src="icons/question.png" alt="why icon" class="why-icon">
            <h4>Why Choose Us?</h4>
        </div>
        <ul>
            <li><i class="fa fa-check"></i> <b>Experienced & Compassionate Team</b> – Our veterinarians and staff treat every pet with care and professionalism.</li>
            <li><i class="fa fa-check"></i> <b>State-of-the-Art Facilities</b> – We use advanced technology for accurate diagnosis and effective treatment.</li>
            <li><i class="fa fa-check"></i> <b>A Stress-Free Environment</b> – A welcoming clinic designed to keep your pets comfortable and relaxed.</li>
            <li><i class="fa fa-check"></i> <b>Personalized Care</b> – Every pet receives a tailored treatment plan for their unique needs.</li>
        </ul>
    </div>

    <!-- Moved the image inside the container -->
    <div class="why-image">
        <img src="image/why uss.jpg" alt="Why Choose Us Image">
    </div>
</div>
<footer class="footer">
    <div class="footer-container">
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
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Happy Vet. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>
