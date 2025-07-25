<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contractor and Farmer Buttons</title>
  <style>
    .button-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 50px;
    }
    .button {
      padding: 15px 30px;
      font-size: 18px;
      font-weight: bold;
      color: white;
      background-color: #4CAF50;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<div class="button-container">
  <a href="Cprofbuild.php" ><button class="button" onclick="alert('Contractor selected')">Contractor</button></a>
  <a href="Fprofbuild.php"><button class="button" onclick="alert('Farmer selected')">Farmer</button></a>
</div>

</body>
</html>
