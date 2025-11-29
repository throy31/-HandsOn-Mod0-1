<?php
$name = "Paolo";
$prize = "Golden Ticket";
const TAX_RATE = 0.12;

$product_prices = [
    "Everlasting Gobstopper" => 67,
    "Fizzy Lifting Drinks" => 85,
    "Chocolate River" => 120
];
$cart_items = [
    "Everlasting Gobstopper" => 2,
    "Fizzy Lifting Drinks" => 1,
    "Chocolate River" => 1
];

include 'header.php';

$subtotal = 0;
$total_packs = 0;
$item_names = array_keys($cart_items);
$i = 0;

while ($i < count($item_names)) {
    $item_name = $item_names[$i];
    $quantity = $cart_items[$item_name];
    $price = $product_prices[$item_name];
    
    $handling_fee = 0;
    switch ($item_name) {
        case "Fizzy Lifting Drinks":
            $handling_fee = 5;
            break;
        case "Chocolate River":
            $handling_fee = 10;
            break;
    }
    
    $item_total = ($price * $quantity) + ($handling_fee * $quantity);
    $subtotal += $item_total;
    $total_packs++;
    
    $i++;
}


$tax = $subtotal * TAX_RATE;
$total = $subtotal + $tax;
?>

    <h4>Your Order Summary (Operators in Action):</h4>
    <p>Total Item Categories: <b><?php echo $total_packs; ?></b></p>
    <p>Subtotal (Incl. Fees): P <b><?php echo number_format($subtotal, 2); ?></b></p>
    <p>Tax (<?php echo (TAX_RATE * 100); ?>%): P <b><?php echo number_format($tax, 2); ?></b></p>
    <p>Final Total: P <b><?php echo number_format($total, 2); ?></b></p>
    
    <?php if ($total > 300) { ?>
        <p style="color: green;"><b>High Value Order!</b> You get a free tour map.</p>
    <?php } else { ?>
        <p style="color: orange;">Spend P<?php echo number_format(300 - $total, 2); ?> more for a free tour map!</p>
    <?php } ?>
</body>
</html>