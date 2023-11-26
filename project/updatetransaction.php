<?php
include("conec.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_transaction'])) {
        $transaction_id = $_POST['update_transaction'];
        $select_query = "SELECT * FROM transaction WHERE id = $transaction_id";
        $result = $conn->query($select_query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>
            <form method="post" action="">
                Product Name: <input type="text" name="p_name" value="<?php echo $row['p_name']; ?>"><br>
                Product ID: <input type="text" name="pid" value="<?php echo $row['pid']; ?>"><br>
                Quantity: <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"><br>
                Price: <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
                <input type="hidden" name="transaction_id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="btn btn-danger" name="update">Submit</button>
            </form>
            <?php
        } else {
            echo "Transaction not found.";
        }
    } elseif (isset($_POST['update'])) {
        $transaction_id = $_POST['transaction_id'];
        $p_name = $_POST['p_name'];
        $pid = $_POST['pid'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $update_query = "UPDATE transaction SET 
                p_name = '$p_name',
                pid = '$pid',
                quantity = '$quantity',
                price = '$price'
                WHERE id = $transaction_id";

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
