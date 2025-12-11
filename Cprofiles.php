<?php
// Get the selected crop from the URL parameter
$product = $_GET['product'] ?? '';

// Database file path - use /tmp for Vercel compatibility
$dbFile = isset($_ENV['VERCEL']) ? '/tmp/my.db' : 'my.db';

try {
    // Connect to the SQLite database
    $db = new PDO("sqlite:$dbFile");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch farmers who grow the selected crop
    $stmt = $db->prepare("SELECT * FROM Farmers WHERE LOWER(crops) = :product");
    $stmt->bindParam(':product', $product);
    $stmt->execute();

    $farmers = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Profiles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container3">
    <h1>Farmers Profiles for <?php echo ucfirst($product); ?></h1>
    
    <input type="text" id="search" placeholder="Search farmers by name..." class="search-bar">
    
    <div class="profiles" id="profile-list">
        <?php if ($farmers): ?>
            <?php foreach ($farmers as $farmer): ?>
                <!-- Link each profile card to agreement.php with farmer ID -->
                <a href="Cagreement.php?farmer_id=<?php echo $farmer['id']; ?>" class="profile-card-link">
                    <div class="profile-card">
                        <h2><?php echo htmlspecialchars($farmer['user_name']); ?></h2>
                        <p>Product: <?php echo htmlspecialchars($farmer['crops']); ?></p>
                        <p>Contact: <?php echo htmlspecialchars($farmer['phone']); ?></p>
                        <p>Land Type: <?php echo htmlspecialchars($farmer['land_type']); ?></p>
                        <p>Address: <?php echo htmlspecialchars($farmer['address']); ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No farmers found for the selected crop.</p>
        <?php endif; ?>
    </div>
</div>

<script>
    // Search functionality for farmer profiles
    document.getElementById('search').addEventListener('input', function() {
        const filter = this.value.toLowerCase();
        const profiles = document.querySelectorAll('.profile-card-link');

        profiles.forEach(profile => {
            const name = profile.querySelector('h2').textContent.toLowerCase();
            profile.style.display = name.includes(filter) ? 'block' : 'none';
        });
    });
</script>

</body>
</html>
