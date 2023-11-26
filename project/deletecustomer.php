<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_customer'])) {
        $customer_id = $_POST['delete_customer'];
        $delete_query = "DELETE FROM customer WHERE cid = $customer_id";

        if ($conn->query($delete_query) === TRUE) {
            echo "Record deleted successfully";

            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>
