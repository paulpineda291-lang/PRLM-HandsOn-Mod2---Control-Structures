<?php
$stock = 0;   

if ($stock > 0) {
    $message = 'In stock';
} else {
    $message = 'Sold out next weel';   
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>The Liquior Store</title>
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