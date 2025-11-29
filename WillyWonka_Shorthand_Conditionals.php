<?php
$name = "Paolo";
$prize = "Golden Ticket";
const DISCOUNT_THRESHOLD = 5;
const DISCOUNT_RATE = 0.10;
const MINIMUM_SPEND = 200;

$items_count = 7; 
$item_cost = 40;
$subtotal = $items_count * $item_cost;
$discount = 0;

include 'header.php';


for ($i = 1; $i <= $items_count; $i++) {
    if ($i > DISCOUNT_THRESHOLD) {
        $discount += $subtotal * DISCOUNT_RATE * 0.05;
    }
}

$subtotal -= $discount;

$tax = $subtotal * 0.10;
$total = $subtotal + $tax;

$checkout_message = "";
do {
    if ($total < MINIMUM_SPEND) {
        $needed = MINIMUM_SPEND - $total;
        $checkout_message = "You need P" . number_format($needed, 2) . " more to unlock our prize draw.";
    } else {
        $checkout_message = "Qualified! Entered into the prize draw.";
    }
} while (false); 

?>

    <h4>Order Details (Shorthand Operators):</h4>
    <p>Items: <b><?php echo $items_count; ?></b></p>
    <p>Base Cost: P <b><?php echo number_format($items_count * $item_cost, 2); ?></b></p>
    <p>Discount Applied: P <b><?php echo number_format($discount, 2); ?></b></p>
    <p>Subtotal: P <b><?php echo number_format($subtotal, 2); ?></b></p>
    <p>Tax: P <b><?php echo number_format($tax, 2); ?></b></p>
    <p>Total: P <b><?php echo number_format($total, 2); ?></b></p>
    <hr>
    <p><b>Checkout Status:</b> <?php echo $checkout_message; ?></p>
</body>
</html>