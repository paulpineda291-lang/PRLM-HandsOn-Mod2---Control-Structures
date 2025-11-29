<?php
$counter = 1;
$Bottle  = 8;
$price   = 5.00;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Liquor Store - While Loop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'include/header.php'; ?>
    
<h1>The Liquor Store</h1>
<h3>Price Table for Fundador</h3>

<p><strong>Price per Bottle:</strong> $<?= number_format($price, 2); ?></p>

<p>
<?php
while ($counter <= $Bottle) {

    $total = $price * $counter;

    echo "<strong>$counter Bottle(s):</strong> $" . number_format($total, 2) . "<br>";

    $counter++;
}
?>
</p>
<?php include 'include/footer.php'; ?>

</body>
</html>
