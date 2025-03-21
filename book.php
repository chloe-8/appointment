<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bookk.css"/>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Happy Vet Appointment</title>
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
                echo "<a href=\"logout_admin.php\">Logout</a>";
            } else {
                echo "<a href=\"login.php\">Login</a>";
            }
        ?>
    </div>
</nav>

<div class="form-section">
    <div class="form-container">
        <h2>Happy Vet Appointment Form</h2>
        <form action="appointment.php" method="POST">
            <div class="form-grid">
                <div class="form-group">
                    <label for="full-name">Full Name:</label>
                    <input type="text" id="full-name" name="full-name" required>
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select id="category" name="category" required onchange="showOtherInput()">
                        <option value="cat">Cat</option>
                        <option value="dog">Dog</option>
                        <option value="rabbit">Rabbit</option>
                        <option value="hamster">Hamster</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group" id="other-animal" style="display:none;">
                    <label for="other-animal-type">Please specify your pet:</label>
                    <input type="text" id="other-animal-type" name="other-animal-type">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact No:</label>
                    <input type="text" id="contact" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="time" id="time" name="time" required>
                </div>
            </div>

            <div class="submit">
                <button type="submit" class="book-now-btn">Book Now</button>
            </div>
        </form>
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
<script>
    function showOtherInput() {
        var category = document.getElementById('category').value;
        var otherAnimalInput = document.getElementById('other-animal');
        
        if (category === 'other') {
            otherAnimalInput.style.display = 'block';
        } else {
            otherAnimalInput.style.display = 'none';
        }
    }
</script>
</body>
</html>
