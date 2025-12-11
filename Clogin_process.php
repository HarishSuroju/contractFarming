<?php
// Start the session to track user login
session_start();

// Database file path - use /tmp for Vercel compatibility
$dbFile = isset($_ENV['VERCEL']) ? '/tmp/my.db' : 'my.db'; // Adjust this to match your SQLite database file location

try {
    // Create a new PDO instance
    $pdo = new PDO("sqlite:$dbFile");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get data from POST request
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    // Prepare the SQL statement to find the user
    $stmt = $pdo->prepare("SELECT * FROM user WHERE user_name = :user_name");
    $stmt->bindParam(':user_name', $user_name);
    $stmt->execute();

    // Fetch the user data
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if user exists and verify the password
    if ($user && password_verify($password, $user['password'])) {
        // Successful login
        $_SESSION['contractorId'] = $user['id']; // Save user ID in session
        header("Location:Cseasons.php");
        // Redirect or perform any additional actions
    } else {
        // Failed login
        echo json_encode(['status' => 'error', 'message' => 'Invalid username or password.']);
    }
} catch (PDOException $e) {
    // Handle any errors
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
}
?>