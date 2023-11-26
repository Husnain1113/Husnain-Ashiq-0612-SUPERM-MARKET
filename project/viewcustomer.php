<?php
include("conec.php");
include("session.php");
include("menu.php");

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer Data</title>
</head>

<body>

    <div class="container mt-5">
    <h1>Customer Data</h1>
<?php

if ($result->num_rows > 0) {
    echo "<table border='1'class=table-bordered border-dark><tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Join Date</th>
            <th>Money Spent</th>
            <th>Address</th>
            <th>Money Spent Reset</th>
            <th>Phone</th>
            <th>Action</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["cid"] . "</td>
                <td>" . $row["first_name"] . "</td>
                <td>" . $row["last_name"] . "</td>
                <td>" . $row["cjoin_date"] . "</td>
                <td>" . $row["cmoney_spent"] . "</td>
                <td>" . $row["caddress"] . "</td>
                <td>" . $row["cmoney_spent_reset"] . "</td>
                <td>" . $row["cphone"] . "</td>
                <td>
                    <form method='post' action='updatecustomer.php'>
                        <button type='submit' name='update_customer' value='" . $row["cid"] . "'>Update</button>
                    </form>
                    <form method='post' action='deletecustomer.php'> 
                        <button type='submit' name='delete_customer' value='" . $row["cid"] . "'>Delete</button>
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