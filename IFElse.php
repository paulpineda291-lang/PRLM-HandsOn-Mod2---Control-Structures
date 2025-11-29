<?php
// Product stock value
$stock = 0;   // Change this value to test the condition
$product = "Fundador";

// IF-ELSE condition for stock availability
if ($stock > 0) {
    $message = "$product is available. We currently have $stock bottle(s) in stock.";
} else {
    $message = "$product is currently <strong>sold out</strong>. New stocks will arrive next week.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Liquor Store - If Else Statement</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>

<?php include 'include/header.php'; ?>
    
<h1>The Liquor Store</h1>
<h2>If–Else Statement Example</h2>

<p><strong>Product:</strong> <?= $product ?></p>
<p style="font-size: 18px;"><?= $message ?></p>

<?php include 'include/footer.php'; ?>

</body>
</html>
