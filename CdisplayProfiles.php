<?php
// Start session to access user data
session_start();

// Get the farmer and contractor IDs from the URL parameters
$farmerId = $_GET['farmerId'] ?? '';
$contractorId = $_SESSION['contractorId'] ?? ''; // Assuming the logged-in contractor's ID is stored in session

// Connect to the database
try {
    $db = new PDO('sqlite:my.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch farmer profile
    $farmerStmt = $db->prepare("SELECT * FROM Farmers WHERE id = :farmerId");
    $farmerStmt->bindParam(':farmerId', $farmerId);
    $farmerStmt->execute();
    $farmer = $farmerStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch contractor profile
    $contractorStmt = $db->prepare("SELECT * FROM contractors WHERE id = :contractorId");
    $contractorStmt->bindParam(':contractorId', $contractorId);
    $contractorStmt->execute();
    $contractor = $contractorStmt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer and Contractor Profiles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="profile-container">
        <h1>Farmer and Contractor Profiles</h1>
        <div class="profile-box">
            <!-- Farmer Profile -->
            <?php if ($farmer): ?>
                <div class="profile-card">
                    <h2>Farmer Profile</h2>
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($farmer['user_name']); ?></p>
                    <p><strong>Product:</strong> <?php echo htmlspecialchars($farmer['crops']); ?></p>
                    <p><strong>Contact:</strong> <?php echo htmlspecialchars($farmer['phone']); ?></p>
                    <p><strong>Land Type:</strong> <?php echo htmlspecialchars($farmer['land_type']); ?></p>
                    <p><strong>Address:</strong> <?php echo htmlspecialchars($farmer['address']); ?></p>
                </div>
            <?php else: ?>
                <p>Farmer profile not found.</p>
            <?php endif; ?>
            
            <!-- Contractor Profile -->
            <?php if ($contractor): ?>
                <div class="profile-card">
                    <h2>Contractor Profile</h2>
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($contractor['user_name']); ?></p>
                    <p><strong>Contact:</strong> <?php echo htmlspecialchars($contractor['phone']); ?></p>
                    <p><strong>Company Name:</strong> <?php echo htmlspecialchars($contractor['company_name']); ?></p>
                    <p><strong>Address:</strong> <?php echo htmlspecialchars($contractor['address']); ?></p>
                    <p><strong>Crop:</strong> <?php echo htmlspecialchars($contractor['crops']); ?></p>
                </div>
            <?php else: ?>
                <p>Contractor profile not found.</p>
            <?php endif; ?>
        </div>
        
        <!-- Make Agreement Button -->
        <div class="agreement-button">
            <button onclick="makeAgreement()">Make Agreement</button>
        </div>
    </div>

    <script>
        function makeAgreement() {
            alert("Agreement has been successfully created between the farmer and contractor!");
            // Additional functionality to save or log the agreement can be added here.
        }
    </script>
</body>
</html>
