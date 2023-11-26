<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sub'])) {
    // Assuming you have sanitized the inputs to prevent SQL injection
    $pid = $_POST['pid'];
    $p_name = $_POST['p_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    // Check if the session variable 'transactions' exists
    if (!isset($_SESSION['transactions'])) {
        $_SESSION['transactions'] = array(); // Initialize the session variable as an empty array
    }

    // Add the current transaction to the session variable
    $_SESSION['transactions'][] = array(
        'pid' => $pid,
        'p_name' => $p_name,
        'quantity' => $quantity,
        'price' => $price
    );

    // Calculate total price
    $totalPrice = 0;
    foreach ($_SESSION['transactions'] as $transaction) {
        $totalPrice += $transaction['price'];
    }

    // Display the table with transactions
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>";

    foreach ($_SESSION['transactions'] as $transaction) {
        echo "<tr>
                <td>{$transaction['pid']}</td>
                <td>{$transaction['p_name']}</td>
                <td>{$transaction['quantity']}</td>
                <td>{$transaction['price']}</td>
            </tr>";
    }

    echo "</tbody></table>";

    // Display total price
    echo "<p>Total Price: $totalPrice</p>";
}
?>
