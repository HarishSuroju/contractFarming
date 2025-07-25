<?php
$season = $_GET['season'] ?? '';
$crops = [];

if ($season === 'summer') {
    $crops = ["Rice", "Maize", "Millets", "Cotton", "Sugarcane", "Groundnut", "Pulses", "Soybean", "Mirchi"];
} elseif ($season === 'winter') {
    $crops = ["Wheat", "Barley", "Peas", "Mustard", "Gram"];
} elseif ($season === 'spring') {
    $crops = ["Spring Wheat", "Barley", "Oats"];
} elseif ($season === 'autumn') {
    $crops = ["Winter Wheat", "Barley", "Canola"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div class="navbar">
    <h4><i class="ri-home-3-line"></i> Home</h4>
    <div class="nav-links">
        <a href="service.html"><i class="ri-customer-service-2-line"></i> Services</a>
        <a href="search.html"><i class="ri-search-line"></i> Search</a>
        <a href="prof.php"><i class="ri-account-circle-line"></i> Profile</a>
    </div>
</div>
  
    <div class="container">
        <h1>Select a Product</h1>
        <div class="products">
            <?php foreach ($crops as $crop): ?>
                <a href="Cprofiles.php?product=<?php echo strtolower($crop); ?>" class="product-item">
                   <!-- <img src="images/<?php echo strtolower($crop); ?>.jpg" alt="<?php echo $crop; ?>" class="product-image"> --> 
                    <span class="product-name"><?php echo $crop; ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
