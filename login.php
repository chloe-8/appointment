<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('image/bg.webp') no-repeat center center/cover;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            background: linear-gradient(to bottom, #fffbe9, #fddfad);
            padding: 50px;
            border-radius: 20px;
            text-align: left;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            height: 450px;
        }
        h1 {
            font-family: 'Georgia', serif;
            font-size: 28px;
            margin-bottom: 50px;
            text-align: center;
        }
        .label {
            margin-bottom: 10px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
        }
        .input-group1 {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }
        .input-group1 input {
            border: 1px solid #ddd;
            outline: none;
            padding: 12px;
            border-radius: 10px;
            font-size: 16px;
            margin-top: 20px;
        }
        .input-group input {
            border: 1px solid #ddd;
            outline: none;
            padding: 12px;
            border-radius: 10px;
            font-size: 16px;
            margin-top: 15px;
        }

        .login-btn {
            background: #ffcc80;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 30px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 100px;
        }

        .login-btn:hover {
            background: #ffa726;
        }

        .error-message {
            color: red;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }
        /* Eye Icon */
        .password-container i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: #888;
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome!</h1>
        <form action="login_handler.php" method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" required maxlength="15" autocomplete="off">
            </div>
            <div class="input-group1">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required maxlength="8">
            </div>
            <?php
                if(isset($_GET['msg']) && $_GET['msg']=='failed') {
                    echo "<div class='error-message'>Invalid Username/Password</div>";
                }
            ?>
            <div>
                <input type="submit" name="Login" value="Login" class="login-btn">
            </div>
        </form>
    </div>

    <script>
        document.getElementById("togglePassword").addEventListener("click", function() {
            let passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                this.classList.remove("fa-eye-slash");
                this.classList.add("fa-eye");
            }
        });
    </script>
</body>
</html>
