<?php
include 'db_connection.php';

$query = "SELECT id, name, price, image FROM products";
$result = $connection->query($query);

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);

$connection->close();
?>