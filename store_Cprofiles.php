<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch form data with unique field names
    $userName = $_POST['user_name'] ?? '';
    $companyName = $_POST['company_name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $crops = $_POST['crops'] ?? '';

    // Database file path - use /tmp for Vercel compatibility
    $dbFile = isset($_ENV['VERCEL']) ? '/tmp/my.db' : 'my.db';

    try {
        // Connect to the SQLite database
        $db = new PDO("sqlite:$dbFile");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Create the contractors table if it doesn't exist
        $createTableSQL = "CREATE TABLE IF NOT EXISTS contractors (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_name TEXT NOT NULL,
            company_name TEXT NOT NULL,
            phone TEXT NOT NULL,
            address TEXT NOT NULL,
            crops TEXT NOT NULL
        )";
        $db->exec($createTableSQL);

        // SQL statement to insert data
        $insertSQL = "INSERT INTO contractors (user_name, company_name, phone, address, crops) 
                      VALUES (:user_name, :company_name, :phone, :address, :crops)";

        // Prepare and bind parameters
        $stmt = $db->prepare($insertSQL);
        $stmt->bindParam(':user_name', $userName);
        $stmt->bindParam(':company_name', $companyName);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':crops', $crops);

        // Execute the query
        $stmt->execute();

        // Redirect to index.php on success
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>