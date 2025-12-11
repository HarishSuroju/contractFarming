<?php
session_start();

// Ensure farmer and contractor IDs are available
$farmerId = $_SESSION['farmer_id'] ?? '';
$contractorId = $_GET['contractorId'] ?? '';

// Database file path - use /tmp for Vercel compatibility
$dbFile = isset($_ENV['VERCEL']) ? '/tmp/my.db' : 'my.db';

if ($farmerId && $contractorId) {
    try {
        // Connect to SQLite database
        $db = new PDO("sqlite:$dbFile");
    echo "Connected to the database successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
        // Create the contracts table if it doesn't exist
        $createTableSQL = "
            CREATE TABLE IF NOT EXISTS contracts (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                farmer_id INTEGER NOT NULL,
                contractor_id INTEGER NOT NULL,
                agreement_date TEXT DEFAULT (datetime('now')),
                FOREIGN KEY(farmer_id) REFERENCES farmers(id),
                FOREIGN KEY(contractor_id) REFERENCES contractors(id)
            );
        ";
        $db->exec($createTableSQL);

        // Insert the IDs into the contracts table
        $stmt = $db->prepare("INSERT INTO contracts (farmer_id, contractor_id) VALUES (:farmerId, :contractorId)");
        $stmt->bindParam(':farmerId', $farmerId, PDO::PARAM_INT);
        $stmt->bindParam(':contractorId', $contractorId, PDO::PARAM_INT);
        $stmt->execute();

        // Output success message
        echo json_encode(["success" => true, "message" => "Agreement successfully saved."]);

    } catch (PDOException $e) {
        echo json_encode(["success" => false, "message" => "Database error: " . $e->getMessage()]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Missing farmer or contractor ID."]);
}
?>