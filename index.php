<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
  <style>
    /* Global Styles */
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-image: url('https://wallpapers.com/images/hd/farm-background-zw6wnq2i8x025vjf.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      color: #333;
    }

    /* Navbar Styles */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      background-color: rgba(0, 0, 0, 0.7);
      color: #f8fafa;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    .nav-links {
      display: flex;
      gap: 1rem;
    }
    .nav-links h2,
    .nav-links a {
      color: #f8fafa;
      text-decoration: none;
      display: flex;
      align-items: center;
    }
    .navbar a:hover {
      color: #ffda3e;
    }
    .dropdown {
      position: relative;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
    #about {
      background-color: #5cb85c;
      border-radius: 5px;
      color: white;
      padding: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    /* Container and Login Box */
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background-color: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 300px;
      max-width: 90%;
    }
    .login-box h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    /* Buttons */
    .login-btn {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      border: none;
      border-radius: 5px;
      background-color: #5cb85c;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .login-btn:hover {
      background-color: #4cae4c;
    }
    .signup {
      margin-top: 10px;
    }
    .signup a {
      color: #007bff;
      text-decoration: none;
    }
    .signup a:hover {
      text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .nav-links {
        flex-direction: column;
        gap: 1rem;
      }
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }
      .login-box {
        width: 90%;
      }
    }
  </style>
</head>
<body>

  <!-- Navigation Container -->
  <div class="navbar">
    <div class="nav-links">
      <h2><i class="ri-home-3-line"></i> Home</h2>
      <a href="http://127.0.0.1:5500/TBP/service.html"><h2><i class="ri-customer-service-2-line"></i> Services</h2></a>
      <div class="dropdown">
        <h2><button onclick="toggleDropdown()" id="about">About Us</button></h2>
        <div id="dropdownMenu" class="dropdown-content">
         
          <a href="intro.php">Our Vision</a>
        </div>
      </div>
      <a href="prof.php"><h2><i class="ri-account-circle-line"></i> Profile</h2></a>
    </div>
  </div>

  <div class="container">
    <div class="login-box">
      <h2>Login</h2>
      <div class="login-options">
        <a href="fl.php"><button class="login-btn">Farmer Login</button></a>
        <a href="cl.php"><button class="login-btn">Contractor Login</button></a>
      </div>
      <div class="signup">
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
      </div>
    </div>
  </div>

  <script>
    function toggleDropdown() {
      var dropdown = document.getElementById("dropdownMenu");
      dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    }

    window.onclick = function(event) {
      if (!event.target.matches('button')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.style.display === "block") {
            openDropdown.style.display = "none";
          }
        }
      }
    }
  </script>
</body>
</html>
