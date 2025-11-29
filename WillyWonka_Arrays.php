<?php
$name = "Paolo";
$prize = "Golden Ticket";
$products = ["Everlasting Gobstopper", "Fizzy Lifting Drinks", "Chocolate River", "Three-Course Dinner Chewing Gum"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>variables</title>
</head>
<body>
    <h1>Willy Wonka & The Chocolate Factory</h1>
    <h2>WELCOME <?php echo $name; ?> TO THE CHOCOLATE FACTORY BY WILLY WONKA !!</h2>
    <h3>THE ULTIMATE PRIZE WILL BE THE <?php echo $prize; ?></h3>
    <h4>OUR PRODUCTS!</h4>
    <ul>
        <li><?php echo $products[0]; ?></li>
        <li><?php echo $products[1]; ?></li>
        <li><?php echo $products[2]; ?></li>
        <li><?php echo $products[3]; ?></li>
    </ul>
</body>
</html>