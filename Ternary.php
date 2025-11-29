<?php
$product = "Fundador";
$stock   = 5;

$message = ($stock > 0) 
    ? "$product is available. We have $stock bottle(s) left."
    : "$product is <strong>sold out</strong>. New stocks will arrive next week.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Liquor Store - Ternary Operator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'include/header.php'; ?>
    
<h1>The Liquor Store</h1>
<h2>Ternary Operator Example</h2>

<p><strong>Product:</strong> <?= $product ?></p>
<p style="font-size: 18px;"><?= $message ?></p>

<?php include 'include/footer.php'; ?>

</body>
</html>
