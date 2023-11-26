<?php
include("conec.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_product'])) {
        $product_id = $_POST['delete_product'];
        $delete_query = "DELETE FROM product WHERE product_id = $product_id";
        if ($conn->query($delete_query) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>
