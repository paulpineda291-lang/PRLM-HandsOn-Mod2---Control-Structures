<?php
$Bottle = 5;
$price = 5.00;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>The Liquior Store</h1>
<h2>Prices for Each bottle of Beer</h2>

<p>
<?php
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
<?php include 'include/header.php'; ?>
</body>
</html>
