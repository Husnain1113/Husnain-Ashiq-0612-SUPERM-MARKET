<?php
include("conec.php");

$sql = "SELECT * FROM transaction";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>transation List</title>
</head>

<body>

    <div class="container mt-0">
  
    <h1>transation List</h1>
<?php

if ($result->num_rows > 0) {
    echo "<table border='13' class=table-bordered border-dark><tr><th>ID</th><th>Product-Name</th><th>Product-ID</th><th>Quantity</th><th>Price</th><th>Action</th></tr>";

    $totalPrice = 0;

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] ."</td>
                <td>" . $row["p_name"] ."</td>
                <td>" . $row["pid"] ."</td>
                <td>" . $row["quantity"] . "</td>
                <td>" . $row["price"] . "</td>
                <td>
                    <form method='post' action='updatetransaction.php'>
                        <button type='submit' name='update_transaction' value='" . $row["id"] . "'>Update</button>
                    </form>
                    <form method='post' action='deletetransaction.php'> 
                        <button type='submit' name='delete_transaction' value='" . $row["id"] . "'>Delete</button>
                    </form>
                </td>
              </tr>";

        // Accumulate the total price
        $totalPrice += $row["price"];
    }

    // Display the total price row
    echo "<tr><td colspan='4'></td><td>Total: $totalPrice</td><td></td></tr>";

    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</div>


</body>

</html>