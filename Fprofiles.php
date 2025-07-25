<?php
// Get the selected crop from the URL parameter (if applicable)
$product = $_GET['product'] ?? '';

try {
    // Connect to the SQLite database
    $db = new PDO('sqlite:my.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch contractors related to the selected crop
    $stmt = $db->prepare("SELECT * FROM Contractors WHERE LOWER(crops) = :product");
    $stmt->bindParam(':product', $product);
    $stmt->execute();

    $contractors = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contractors Profiles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container3">
    <h1>Contractors Profiles for <?php echo ucfirst($product); ?></h1>
    
    <input type="text" id="search" placeholder="Search contractors by name..." class="search-bar">
    
    <div class="profiles" id="profile-list">
        <?php if ($contractors): ?>
            <?php foreach ($contractors as $contractor): ?>
                <!-- Link each profile card to agreement.php with contractor ID -->
                <a href="Fagreement.php?farmer_id=<?php echo $farmer['id']; ?>&contractor_id=<?php echo $contractor['id']; ?>" class="profile-card-link">
                    <div class="profile-card">
                        <h2><?php echo htmlspecialchars($contractor['user_name']); ?></h2>
                        <p>Company: <?php echo htmlspecialchars($contractor['company_name']); ?></p>
                        <p>Contact: <?php echo htmlspecialchars($contractor['phone']); ?></p>
                        <p>Crops: <?php echo htmlspecialchars($contractor['crops']); ?></p>
                        <p>Address: <?php echo htmlspecialchars($contractor['address']); ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No contractors found for the selected crop.</p>
        <?php endif; ?>
    </div>
</div>

<script>
    // Search functionality for contractor profiles
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
