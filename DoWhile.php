<?php
$Bottle = 5;
$price = 5.00;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Liquor Store - Do While Loop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'include/header.php'; ?>

<h1>The Liquor Store</h1>
<h2>Beer Bottle Price Calculation</h2>

<p><strong>Price per Bottle:</strong> $<?php echo number_format($price, 2); ?></p>

<p>
<?php
do {
    $totalCost = $price * $Bottle;

    echo "<strong>$Bottle Bottle(s):</strong> $" . number_format($totalCost, 2) . "<br>";

    $Bottle--;
} while ($Bottle > 0);
?>
</p>

<?php include 'include/footer.php'; ?>

</body>
</html>
