<?php
$name     = 'Paul';
$greeting = 'Hello';

if ($name != '') { 
    $greeting = 'Welcome back, ' . $name . '! Enjoy your visit to The Liquor Store.';
} else {
    $greeting = 'Hello Guest, please log in to continue.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Liquor Store - IF Statement</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'include/header.php'; ?>

<h1>The Liquor Store</h1>
<p><strong>Greeting Message:</strong></p>
<p style="font-size: 20px; color: #333;"><?= $greeting ?></p>

<?php include 'include/footer.php'; ?>

</body>
</html>
