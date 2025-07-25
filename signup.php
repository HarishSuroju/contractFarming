<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 130vh;
      margin: 0;
    }

    .container {
      width: 450px;
      padding: 30px;
      border: 2px solid black;
      border-radius: 20px;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 1.8em;
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      font-size: 1.1em;
      color: #333;
    }

    input[type="text"],
    input[type="tel"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1em;
    }

    button {
      width: 100%;
      padding: 12px;
      font-size: 1.1em;
      color: white;
      background-color: #4CAF50;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Sign Up Page</h1>
    <form action="signup_process.php" method="post">
      <label for="fname">Name: </label>
      <input type="text" id="fname" name="fname" placeholder="Enter your Name" required>

      <label for="uname">User Name: </label>
      <input type="text" id="uname" name="uname" required>

      <label for="phno">Phone Number: </label>
      <input type="tel" id="phno" name="phno" required>

      <label for="password">Create Password: </label>
      <input type="password" id="password" name="password" pattern="(?=.*[a-zA-Z])(?=.*[@$%?&])[A-Za-z\d@$!%*?&]{8,}" required>
      <p>
        * Password should contain 8 characters including Alphabet and atleast one special charecter(@,$,%,?,&)
      </p>

      <label for="pword">Confirm Password: </label>
      <input type="password" id="pword" name="pword" required>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
