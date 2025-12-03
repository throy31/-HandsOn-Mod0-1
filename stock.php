<?php
declare(strict_types=1);

$name = "paolo";
$prize = "Golden Ticket";

$chocoProducts = [
    "Milk Chocolate Bar" => [ "price" => 90.09, "stock" => 100 ],
    "Dark Chocolate Cubes" => [ "price" => 100.01, "stock" => 50 ],
    "Chocolate Coins" => [ "price" => 67.00, "stock" => 25 ],
    "Strawberry Choco Bar" => [ "price" => 69.00, "stock" => 55 ],
    "Caramel Fudge Choco" => [ "price" => 82.12, "stock" => 79 ],
    "Mint Crunch Choco" => [ "price" => 49.99, "stock" => 11 ],
    "Peanut Butter Choco Cup" => [ "price" => 89.99, "stock" => 67 ]
];

$taxRate = 12;

function get_reorder_message(int $stock) : string { return ($stock < 10) ? "YES" : "NO"; }
function get_total_value(float $price, int $qty) : float { return $price * $qty; }
function get_tax_due(float $price, int $qty, int $tax = 0) : float { return ($price * $qty) * ($tax / 100); }
?>

<?php include "header.php"; ?>
<link rel="stylesheet" href="styles.css">

<div class="nav">
    <a href="WillyWonka_Arrays_Conditionals.php">Arrays & Conditionals</a>
    <a href="WillyWonka_Operators_Conditionals.php">Operators Demo</a>
    <a href="WillyWonka_Shorthand_Conditionals.php">Shorthand Operators</a>
    <a href="WillyWonka_TypeJuggling_Conditionals.php">Type Juggling</a>
    <a href="stock.php">Stock Monitoring</a>
</div>

<div class="container">
<h1>🍫 STOCK MONITORING — WONKA FACTORY</h1>

<table border="1" cellpadding="8">
    <tr style="background-color:#704214;color:white;">
        <th>Product Name</th>
        <th>Stock Level</th>
        <th>Reorder?</th>
        <th>Total Value (₱)</th>
        <th>Tax Due (₱)</th>
    </tr>

<?php
foreach($chocoProducts as $product_name => $data) {
    echo "<tr>";
    echo "<td>$product_name</td>";
    echo "<td>" . $data["stock"] . "</td>";
    echo "<td>" . get_reorder_message($data["stock"]) . "</td>";
    echo "<td>₱" . number_format(get_total_value($data["price"], $data["stock"]), 2) . "</td>";
    echo "<td>₱" . number_format(get_tax_due($data["price"], $data["stock"], $taxRate), 2) . "</td>";
    echo "</tr>";
}
?>
</table>
</div>

<?php include "footer.php"; ?>
