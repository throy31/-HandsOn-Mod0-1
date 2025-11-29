<?php
$name = "Paolo";
$total_score = 0;
$delivery_region = "West";
$prize = "Golden Ticket";

$score_items = [150, 100, 200, 50];

include 'header.php';


foreach ($score_items as $score) {
    $total_score += $score;
}

if ($total_score > 500) {
    $prize = "Golden Ticket";
} elseif ($total_score > 400) {
    $prize = "Lifetime Supply of Chocolate";
} else {
    $prize = "A Free Lollipop";
}

$shipping_rate = match ($delivery_region) {
    "North" => 80.00,
    "South" => 120.00,
    "East" => 100.00,
    "West" => 90.00,
    default => 150.00
};

$is_golden_winner = ($prize === "Golden Ticket");
?>

    <h4>Order Summary (Type Juggling & Match):</h4>
    <p>Total Eligibility Score: <b><?php echo $total_score; ?></b></p>
    
    <p>Delivery Region: <b><?php echo $delivery_region; ?></b></p>
    <p>Shipping Rate: P <b><?php echo number_format($shipping_rate, 2); ?></b> (Set by Match)</p>
    <hr>
    
    <h4>Golden Ticket Eligibility:</h4>
    <p><b>Is Eligible?</b></p>
    
    <?php if ($is_golden_winner) { ?>
        <p style="color: green;"><b>WINNER:</b> Proceed to the factory gates!</p>
    <?php } else { ?>
        <p style="color: orange;">You earned: <b><?php echo $prize; ?></b>.</p>
    <?php } ?>
</body>
</html>