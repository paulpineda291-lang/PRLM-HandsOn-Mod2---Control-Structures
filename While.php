<?php
$counter = 1;
$Bottle = 8;
$price = 5.00;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
     <h1>The Liquior Store</h1>
    <h2>Fundador</h2>

<h3>Prices for each bottle</h3>
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
<?php include 'include/header.php'; ?>

</body>
</html>