<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch form data
    $userName = $_POST['username'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $landType = $_POST['landType'] ?? '';
    $address = $_POST['address'] ?? '';
    $crops = $_POST['crops'] ?? '';

    try {
        // Connect to the SQLite database
        $db = new PDO('sqlite:my.db');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Create the Farmers table if it doesn't exist
        $createTableSQL = "CREATE TABLE IF NOT EXISTS Farmers (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_name TEXT NOT NULL,
            phone TEXT NOT NULL,
            land_type TEXT NOT NULL,
            address TEXT NOT NULL,
            crops TEXT NOT NULL
        )";
        $db->exec($createTableSQL);

        // SQL statement to insert data
        $insertSQL = "INSERT INTO Farmers (user_name, phone, land_type, address, crops) 
                      VALUES (:user_name, :phone, :land_type, :address, :crops)";

        // Prepare and bind parameters
        $stmt = $db->prepare($insertSQL);
        $stmt->bindParam(':user_name', $userName);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':land_type', $landType);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':crops', $crops);

        // Execute the query
        $stmt->execute();

        // Redirect to index.php on success
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        // Display an error message if something goes wrong
        echo "Database error: " . $e->getMessage();
    }
}
?>
