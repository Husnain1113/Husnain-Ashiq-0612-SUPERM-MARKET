<?php
include("session.php");
include("menu.php");
include("conec.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_employee'])) {
        $id = $_POST['update_employee'];

        exit();
    }
}

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Empolyee Data</title>
</head>

<body>

    <div class="container mt-5">
    <h1>Empolyee Data</h1>
<?php

if ($result->num_rows > 0) {
    
    echo "<table border='2'class=table-bordered border-dark><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Department ID</th><th>Salary</th><th>Phone Number</th><th>Address</th><th>Join Date</th><th>Date of Birth</th><th>End Date</th><th>Admin</th><th>Action</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] ."</td>
                <td>" . $row["first_name"] ."</td>
                <td>" . $row["last_name"] . "</td>
                <td>" . $row["dept_id"] . "</td>
                <td>" . $row["salary"] . "</td>
                <td>" . $row["phone_number"] .  "</td>
                <td>" . $row["address"] .  "</td>
                <td>" . $row["join_date"] .  "</td>
                <td>" . $row["dob"] .  "</td>
                <td>" . $row["end_date"] .  "</td>
                <td>" . $row["admin"] .  "</td>
                <td>
                <form method='post' action='updateemployee.php'>
                <button type='submit' name='update_employee' value='" . $row["id"] . "'>Update</button>
                </form>
                <form method='post' action='deleteemployee.php'> 
                    <button type='submit' name='delete_employee' value='" . $row["id"] . "'>Delete</button></td>
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
