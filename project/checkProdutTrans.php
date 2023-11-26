<?php
include("conec.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['sub'])) {
        // Assuming you've sanitized the inputs to prevent SQL injection
        $pid = $_POST['pid'];
        $p_name = $_POST['p_name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        // Validate if there is enough quantity in the product table
        $check_quantity_query = "SELECT quantity FROM product WHERE product_id = $pid";
        $check_quantity_result = mysqli_query($conn, $check_quantity_query);

        if ($check_quantity_result) {
            $row = mysqli_fetch_assoc($check_quantity_result);
            $available_quantity = $row['quantity'];

            if ($available_quantity >= $quantity) {
                // Update the product table with reduced quantity
                $update_quantity_query = "UPDATE product SET quantity = quantity - $quantity WHERE product_id = $pid";
                mysqli_query($conn, $update_quantity_query);

                // Insert the sale details into the transaction table
                $insert_transaction_query = "INSERT INTO transaction (p_name, pid, quantity, price) VALUES ('$p_name', $pid, $quantity, $price)";
                mysqli_query($conn, $insert_transaction_query);

                echo "Sale successful. Product quantity updated.";
                header("Location: transaction.php");
            } else {
                echo "Not enough quantity in stock.";
            }
        } else {
            echo "Error checking product quantity: " . mysqli_error($conn);
        }
    }
}
 
mysqli_close($conn);
?>
