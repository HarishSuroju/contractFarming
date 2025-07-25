<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Building Form</title>
    <style>
        body {
            font-family: 'Verdana', sans-serif; /* Changed font for better visibility */
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
            font-size: 16px; /* Increased base font size */
            color: #333; /* Improved text color for readability */
        }

        .container {
            max-width: 500px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-size: 1.2em; /* Increased label font size */
            color: #555;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em; /* Standardized input font size */
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 1.2em; /* Increased button font size */
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Profile Form</h2>
        <form action="store_Fprofiles.php" method="POST">
            <!-- Name -->
            <label for="User_name">User Name</label>
            <input type="text" id="username" name="username" placeholder="Enter your user name" required>

            <!-- Phone Number -->
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <!-- Type of Land -->
            <label for="landType">Type of Land</label>
            <select id="landType" name="landType" required>
                <option value="arable">Red soil</option>
                <option value="pasture">Alluvial Soil</option>
                <option value="orchard">Black soil</option>
                <option value="vineyard">Clay soil</option>
                <option value="forest">Forest</option>
            </select>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter your Address" required>

            <!-- Crops to be Cultivated -->
            <label for="crops">Crops to be Cultivated</label>
            <textarea id="crops" name="crops" rows="3" placeholder="List crops to be cultivated" required></textarea>

            <!-- Submit Button -->
            <button type="submit">Submit Profile</button>
        </form>
    </div>

</body>
</html>
