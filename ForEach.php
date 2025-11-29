<?php
// Product list with prices
$products = [
    'Fundador'    => 10.00,
    'Black Label' => 15.00,
    'Red Horse'   => 5.00,
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Liquor Store - Foreach Loop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'include/header.php'; ?>

<h1>The Liquor Store</h1>
<h2>Price List (Foreach Loop)</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Item</th>
        <th>Price</th>
    </tr>

    <?php foreach ($products as $item => $price): ?>
        <tr>
            <td><strong><?= $item ?></strong></td>
            <td>$<?= number_format($price, 2) ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<br>

<?php include 'include/footer.php'; ?>

</body>
</html>
