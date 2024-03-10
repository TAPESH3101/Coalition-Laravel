<?php
$data = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $dateTimeSubmitted = date('Y-m-d H:i:s');
    $totalValue = $quantity * $price;

    $newData = [
        'productName' => $productName,
        'quantity' => $quantity,
        'price' => $price,
        'dateTimeSubmitted' => $dateTimeSubmitted,
        'totalValue' => $totalValue
    ];

    // Load existing data if available
    if (file_exists('data.json')) {
        $data = json_decode(file_get_contents('data.json'), true);
    }
    // Append new data
    $data[] = $newData;
    // Save data to JSON file
    file_put_contents('data.json', json_encode($data));
}
?>
