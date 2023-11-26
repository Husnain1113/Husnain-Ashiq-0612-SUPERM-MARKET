<?php
include("conec.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_employee'])) {
        $employee_id = $_POST['delete_employee'];
        $delete_query = "DELETE FROM employee WHERE id = $employee_id";

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
