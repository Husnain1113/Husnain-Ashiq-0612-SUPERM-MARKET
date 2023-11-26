<?php
include("conec.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_transaction'])) {
        $transaction_id = $_POST['delete_transaction'];
        $delete_query = "DELETE FROM transaction WHERE id = $transaction_id";

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
