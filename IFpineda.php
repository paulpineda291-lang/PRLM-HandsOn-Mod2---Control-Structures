<?php
$name     = 'Paul';
$greeting = 'Hello';

if ($name != '') { 
    $greeting = 'Welcome back, ' . $name;
}
?>
<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="css/styles.css"></head>
    <body>
        <h1>The Liquior Store</h1>
        <h2><?= $greeting ?></h2>
        <?php include 'include/footer.php'; ?>
        <?php include 'include/header.php'; ?>
    </body>
</html>