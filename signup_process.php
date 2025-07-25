<?php
// Start session (optional, in case you want to store session data later)
session_start();

// Database file path
$dbFile = 'my.db'; // Adjust this to match your SQLite database file location

try {
    // Create a new PDO instance to connect to SQLite
    $pdo = new PDO("sqlite:$dbFile");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the user table if it doesn't exist
    $pdo->exec("CREATE TABLE IF NOT EXISTS user (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        fname TEXT NOT NULL,
        user_name TEXT NOT NULL UNIQUE,
        phone_number TEXT NOT NULL,
        password TEXT NOT NULL
    )");

    // Check if passwords match
    if ($_POST['password'] !== $_POST['pword']) {
        echo "Passwords do not match!";
        exit;
    }

    // Get data from POST request and hash the password
    $fname = $_POST['fname'];
    $user_name = $_POST['uname'];
    $phone_number = $_POST['phno'];
    $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Prepare the SQL statement to insert data
    $stmt = $pdo->prepare("INSERT INTO user (fname, user_name, phone_number, password) VALUES (:fname, :user_name, :phone_number, :password)");
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':user_name', $user_name);
    $stmt->bindParam(':phone_number', $phone_number);
    $stmt->bindParam(':password', $passwordHash);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to index.php on success
        header("Location: index.php");
        exit;
    } else {
        echo "Error: Could not insert data.";
    }

} catch (PDOException $e) {
    // Handle database errors
    echo "Database error: " . $e->getMessage();
}
?>