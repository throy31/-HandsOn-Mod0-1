<?php
$name = "Paolo";
$prize = "Golden Ticket";
$products = ["Everlasting Gobstopper", "Fizzy Lifting Drinks", "Chocolate River", "Three-Course Dinner Chewing Gum"];
$cost = 67;
$items = 4;
$subtotal = $cost * $items;
$tax = ($subtotal/100) * 12;
$total = $subtotal + $tax;
$winner = true;
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
    
    <h4>Your Shopping Cart:</h4>
    <p>Items: <?php echo $items; ?></p>
    <p>Cost per pack: P <?php echo $cost; ?></p>
    <p>Subtotal: P <?php echo $subtotal; ?></p>
    <p>Tax: P <?php echo $tax; ?></p>
    <p>Total: P <?php echo $total; ?></p>

    <?php if($winner == true) { ?>
        <p>If this shows **1**, you won the GOLDEN TICKET. **<?php echo $winner; ?>**</p>
    <?php } ?>
</body>
</html>