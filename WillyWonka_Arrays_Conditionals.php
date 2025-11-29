<?php
$name = "Paolo";
$prize = "Golden Ticket";
$products = ["Everlasting Gobstopper", "Fizzy Lifting Drinks", "Chocolate River", "Three-Course Dinner Chewing Gum", "Snozzberry"];

include 'header.php';

$product_count = count($products);

if ($product_count > 4) {
    $heading_message = "OUR EXPANDED SELECTION OF <b>$product_count</b> ITEMS!";
} elseif ($product_count > 2) {
    $heading_message = "OUR POPULAR <b>$product_count</b> ITEMS!";
} else {
    $heading_message = "LIMITED STOCK!";
}
?>

    <h4><?php echo $heading_message; ?></h4>
    <ul>
    <?php
    foreach ($products as $product) {
        if ($product === "Everlasting Gobstopper") {
            echo "<li><b>FEATURED!</b> <span style='color: green;'>$product</span> (The most enduring!)</li>";
        } elseif ($product === "Snozzberry") {
            echo "<li style='font-style: italic;'>$product (Wait, what is a Snozzberry?)</li>";
        } else {
            echo "<li>$product</li>";
        }
    }
    ?>
    </ul>
</body>
</html>