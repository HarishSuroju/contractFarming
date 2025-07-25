<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    <style>
        /* Basic Reset and Responsive Sizing */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            background-image: url('https://plus.unsplash.com/premium_photo-1674624682232-c9ced5360a2e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZmFybSUyMGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D');
            background-size: cover;
            background-position-y: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            color: #333;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
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
        
        /* Responsive Flex and Grid Layout */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }
        
        .login_form {
            background: linear-gradient(180deg, rgba(255, 255, 255, 1) 23%, rgba(247, 255, 238, 1) 81%, rgba(242, 255, 225, 1) 100%);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 5px 5px 10px #4d4d4d30, -5px -5px 10px #45454530;
            border: 1px solid green;
            max-width: 400px;
            width: 100%;
            margin: 1rem;
        }
        
        .login_form h5 {
            text-align: center;
            color: #00885a;
            font-size: 1.5rem;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }
        
        .form-control {
            background-color: rgba(255, 255, 255, 0) !important;
            border: 0.5px solid #00885b6e;
            border-radius: 8px;
            padding: 0.8rem;
            width: 100%;
            margin-bottom: 1rem;
        }
        
        .forget_password {
            color: #00885a;
            font-size: 0.9rem;
            text-align: right;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .forget_password a {
            text-decoration: none;
            color: #00885a;
        }
        
        .login_button button {
            width: 100%;
            padding: 0.8rem;
            border-radius: 8px;
            font-size: 1rem;
            background-color: #00885a;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }
        
        .login_button button:hover {
            background-color: #026141;
        }
        
        .title {
            text-align: center;
            margin-top: 1.5rem;
        }
        
        .title h4 {
            font-size: 2.5rem;
            color: #ffffff;
        }
        
        .title h5 {
            font-size: 1rem;
            color: #ffffff;
        }

        /* Media Queries for Smaller Screens */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }

            .nav-links h2 {
                font-size: 1rem;
                margin-bottom: 0.5rem;
            }
            
            .login_form {
                padding: 1.5rem;
            }

            .title h4 {
                font-size: 2rem;
            }

            .title h5 {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .title h4 {
                font-size: 1.5rem;
            }

            .title h5 {
                font-size: 0.7rem;
            }
            
            .nav-links {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="nav-links">
            <h2><i class="ri-home-3-line"></i> Home</h2>
            <a href="prof.php"><h2><i class="ri-account-circle-line"></i> Profile</h2></a>
        </div>
    </div>

    <div class="container">
        <div class="login_form">
            <h5>Login</h5>
          
            <form action="Flogin_process.php" method="post">
                <label for="user_name" class="form-label">User Name</label>
                <input type="text" class="form-control" name="user_name" placeholder="Enter your User name" required>
                
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="passwordInput" placeholder="Enter your password" required>
                
                <div class="forget_password">
                    <input type="checkbox" id="showPasswordCheckbox" onchange="togglePasswordVisibility()" > <p style:"padding-left:0;">Show Password</p>
                    <a href="#">Forget Password</a>
                </div>
                <br><br>
                <div class="login_button">
                    <button type="submit" class="btn login_button">Login</button>
                </div>
            </form>
        </div>

        <div class="title">
            <h4>AgreeGrow</h4>
            <h5><i>It always seems impossible until it's done</i></h5>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("passwordInput");
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>
