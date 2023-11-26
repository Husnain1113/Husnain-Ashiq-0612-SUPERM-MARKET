<?php

include("menu.php");
include("conec.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_supplier'])) {
        $supplier_id = $_POST['update_supplier'];
        $select_query = "SELECT * FROM supplier WHERE sid = $supplier_id";
        $result = $conn->query($select_query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>
            <form method="post" action="">
                Supplier Name: <input type="text" name="sname" value="<?php echo $row['sname']; ?>"><br>
                Email: <input type="text" name="semail" value="<?php echo $row['semail']; ?>"><br>
                Address: <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>"><br>
                Phone Number: <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>"><br>
                <input type="hidden" name="supplier_id" value="<?php echo $row['sid']; ?>">
                <button type="submit" class="btn btn-danger" name="update">Submit</button>
            </form>
            <?php
        } else {
            echo "Supplier not found.";
        }
    } elseif (isset($_POST['update'])) {
        $supplier_id = $_POST['supplier_id'];
        $sname = $_POST['sname'];
        $semail = $_POST['semail'];
        $saddress = $_POST['saddress'];
        $sphone = $_POST['sphone'];

        $update_query = "UPDATE supplier SET 
                sname = '$sname',
                semail = '$semail',
                saddress = '$saddress',
                sphone = '$sphone'
                WHERE sid = $supplier_id";

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
