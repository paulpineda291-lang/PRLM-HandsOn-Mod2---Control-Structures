<?php
$counter = 1;
$Bottle = 8;
$price = 5.00;
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
    <h2>Fundador</h2>
    <h3>Prices for Each Bottle</h3>
    
    <p>
        <?php
        while ($counter <= $Bottle) {
            echo $counter;
            echo ' Bottle cost $';
            echo $price * $counter;
            echo '<br>';
            $counter++;
        }
        ?>
    </p>
    
    <?php include 'include/footer.php'; ?>
</body>
</html>
