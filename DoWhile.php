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
    <h2>Prices for Each Bottle of Beer</h2>
    
    <p>
    <?php
    $Bottle = 5;
    $price = 5.00;
    
    do {
        echo $Bottle;
        echo ' Bottle cost $';
        echo $price * $Bottle;
        echo '<br>';
        $Bottle--;
    } while ($Bottle > 0);
    ?>
    </p>
    
    <?php include 'include/footer.php'; ?>
</body>
</html>
