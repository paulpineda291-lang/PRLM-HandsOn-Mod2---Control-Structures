<?php
$products = [
    'Fundador' => 10.00,
    'Black Label' => 15.00,
    'RedHorse' => 5.00,
];
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
    <h2>Price List</h2>
    
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($products as $item => $price) { ?>
        <tr>
            <td><?= $item ?></td>
            <td>$<?= $price ?></td>
        </tr>
        <?php } ?>
    </table>
    
    <?php include 'include/footer.php'; ?>
</body>
</html>