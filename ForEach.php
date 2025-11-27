<?php
$products = [
    'Fundador' => 10.00,
    'Black Label'  => 15.00,
    'RedHorse'  => 5.00,
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>The Liquior Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>The Liquior Store</h1>
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
<?php include 'include/header.php'; ?>
</body>
</html>