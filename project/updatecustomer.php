<?php

include("conec.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_customer'])) {
        $customer_id = $_POST['update_customer'];
        $select_query = "SELECT * FROM customer WHERE cid = $customer_id";
        $result = $conn->query($select_query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>
            <form method="post" action="">
                First Name: <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"><br>
                Last Name: <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"><br>
                Join Date: <input type="text" name="cjoin_date" value="<?php echo $row['cjoin_date']; ?>"><br>
                Money Spent: <input type="text" name="cmoney_spent" value="<?php echo $row['cmoney_spent']; ?>"><br>
                Address: <input type="text" name="caddress" value="<?php echo $row['caddress']; ?>"><br>
                Money Spent Reset: <input type="text" name="cmoney_spent_reset" value="<?php echo $row['cmoney_spent_reset']; ?>"><br>
                Phone: <input type="text" name="cphone" value="<?php echo $row['cphone']; ?>"><br>
                <input type="hidden" name="customer_id" value="<?php echo $row['cid']; ?>">
                <button type="submit" class="btn btn-danger" name="update">Submit</button>
            </form>
            <?php
        } else {
            echo "Customer not found.";
        }
    } elseif (isset($_POST['update'])) {
        $customer_id = $_POST['customer_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $join_date = $_POST['cjoin_date'];
        $money_spent = $_POST['cmoney_spent'];
        $address = $_POST['caddress'];
        $money_spent_reset = $_POST['cmoney_spent_reset'];
        $phone = $_POST['cphone'];

        $update_query = "UPDATE customer SET 
            first_name = '$first_name',
            last_name = '$last_name',
            cjoin_date = '$join_date',
            cmoney_spent = $money_spent,
            caddress = '$address',
            cmoney_spent_reset = $money_spent_reset,
            cphone = '$phone'
            WHERE cid = $customer_id";

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
