<?php
include("session.php");
include("menu.php");
include("conec.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_supplier'])) {
        $sid = $_POST['update_supplier'];

        exit();
    }
}

$sql = "SELECT * FROM supplier";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Supplier Data</title>
</head>

<body>

    <div class="container mt-5">
    <h1>Supplier Data</h1>
<?php
if ($result->num_rows > 0) {
    
    echo "<table border='3' class=table-bordered border-dark><tr><th>ID</th><th>Supplier Name</th><th>Email</th><th>Address</th><th>Phone Number</th><th>Action</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["sid"] ."</td>
                <td>" . $row["sname"] ."</td>
                <td>" . $row["semail"] . "</td>
                <td>" . $row["saddress"] . "</td>
                <td>" . $row["sphone"] . "</td>
                <td>
                <form method='post' action='updatesupplier.php'>
                <button type='submit' name='update_supplier' value='" . $row["sid"] . "'>Update</button>
                </form>
                <form method='post' action='deletesupplier.php'> 
                    <button type='submit' name='delete_supplier' value='" . $row["sid"] . "'>Delete</button></td>
                    </form>
                </td>
              </tr>";
    }

    echo "</table>";
    
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</div>

</body>

</html>
