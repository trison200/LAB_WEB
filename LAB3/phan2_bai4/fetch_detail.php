<?php
include 'db_connection.php';

$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$query = "SELECT * FROM products WHERE id = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

echo json_encode($product);

$stmt->close();
$connection->close();
?>