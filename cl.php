<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    <style>
        /* General Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Background */
        body {
            background-image: url('https://www.alanboswell.com/wp-content/uploads/farm-tractor-harvest-combine-field.jpg');
            background-size: cover;
            background-position-y: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .nav-links h2 {
            margin: 0;
            color: #333;
            font-size: 1.2rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
        }

        /* Login Form */
        .login_form {
            height: 60vh;
            background: linear-gradient(180deg, #fff 23%, #f7ffee 81%, #f2ffe1 100%);
            border-radius: 0 0 50px 0;
            padding: 60px 50px;
            box-shadow: 5px 5px 10px #4d4d4d30, -5px -5px 10px #45454530;
            border: 1px solid white;
            max-width: 400px;
            margin: 5% auto;
        }

        .login_form h5 {
            text-align: center;
            color: green;
            font-size: 40px;
            letter-spacing: 3px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .form-control {
            background-color: transparent;
            border: 0.5px solid green;
            border-radius: 18px;
            padding: 0.8rem;
            width: 100%;
            margin-bottom: 1rem;
        }

        .forget_password {
            color: green;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .forget_password a {
            text-decoration: none;
            color: green;
        }

        .login_button .btn {
            width: 100%;
            border-radius: 26px;
            font-size: 18px;
            background-color: green;
            color: #fff;
            padding: 0.8rem;
            border: none;
            cursor: pointer;
        }

        .title {
            position: absolute;
            bottom: 20px;
            left: 20px;
            text-align: left;
            color:#080808;
        }

        .title h4 {
            font-size: 28px;
            margin: 0;
            opacity: 0.9;
        }

        .title h5 {
            font-size: 16px;
            margin: 0;
            opacity: 0.8;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }
            
            .nav-links h2 {
                font-size: 1rem;
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="nav-links">
            <h2><i class="ri-home-3-line"></i> Home</h2>
            <a href="prof.php">
                <h2><i class="ri-account-circle-line"></i> Profile</h2>
            </a>
        </div>
    </div>

    <!-- Login Form -->
    <div class="login_form">
        <h5>Login</h5>
        <form action="Clogin_process.php" method="post">
            <div class="login_email_input">
                <label for="user_name" class="form-label">User Name</label>
                <input type="text" class="form-control" name="user_name" placeholder="Enter your User name" required>
            </div>
            <div class="login_password_input">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="passwordInput" placeholder="Enter your password" required>
            </div>
            <div class="forget_password">
                <input type="checkbox" id="showPasswordCheckbox" onchange="togglePasswordVisibility()"> Show Password
                <span><a href="#">Forget Password</a></span>
            </div>
            <div class="login_button">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>

    <!-- AgreeGrow Text -->
    <div class="title">
        <h4>AgreeGrow</h4>
        <h5><i>It always seems impossible until it's done</i></h5>
    </div>

    <!-- Script for Show Password -->
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("passwordInput");
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>
