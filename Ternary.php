<?php
$stock = 5;
$message = ($stock > 0) ? 'In stock' : 'Sold out next week';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Liquor Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'include/header.php'; ?>
    
    <h1>The Liquor Store</h1>
    <h2>Fundador</h2>
    <p><?= $message ?></p>
    
    <?php include 'include/footer.php'; ?>
</body>
</html>
