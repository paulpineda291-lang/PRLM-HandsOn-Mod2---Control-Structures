<?php
$stock = 5;

$message = ($stock > 0) ? ' on stock' : 'Sold out next week';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Liquior Store</h1>
    <h2>Fundador</h2>
    <p><?= $message ?></p>
    <?php include 'include/footer.php'; ?>
    <?php include 'include/header.php'; ?>
</body>
</html>
