<?php

include("menu.php");
include("conec.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_product'])) {
        $product_id = $_POST['update_product'];
        $select_query = "SELECT * FROM product WHERE product_id = $product_id";
        $result = $conn->query($select_query);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>
            <form method="post" action="">
                Product Name: <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>"><br>
                Product Type: <input type="text" name="product_type" value="<?php echo $row['product_type']; ?>"><br>
                Cost Price: <input type="text" name="cost_price" value="<?php echo $row['cost_price']; ?>"><br>
                Market Price: <input type="text" name="market_price" value="<?php echo $row['market_price']; ?>"><br>
                Supplier ID: <input type="text" name="supplier_id" value="<?php echo $row['supplier_id']; ?>"><br>
                Quantity: <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"><br>
                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                <button type="submit" class="btn btn-danger" name="update">update</button>
            </form>
            <?php
        } else {
            echo "Product not found.";
        }
    } elseif (isset($_POST['update'])) {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_type = $_POST['product_type'];
        $cost_price = $_POST['cost_price'];
        $market_price = $_POST['market_price'];
        $supplier_id = $_POST['supplier_id'];
        $quantity = $_POST['quantity'];

        $update_query = "UPDATE product SET 
                product_name = '$product_name',
                product_type = '$product_type',
                cost_price = $cost_price,
                market_price = $market_price,
                supplier_id = $supplier_id,
                quantity = $quantity
                WHERE product_id = $product_id";

        if ($conn->query($update_query) === TRUE) {
            echo "Record updated successfully";

            header("Location: " . $_SESSION['previous_page']);
            exit();

        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
} else {
    echo "Invalid request.";
}


$_SESSION['previous_page'] = $_SERVER['HTTP_REFERER'];



mysqli_close($conn);
?>
