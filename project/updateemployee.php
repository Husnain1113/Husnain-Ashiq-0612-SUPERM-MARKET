<?php
include("menu.php");
include("conec.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_employee'])) {
        $employee_id = $_POST['update_employee'];
        $select_query = "SELECT * FROM employee WHERE id = $employee_id";
        $result = $conn->query($select_query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>
            <form method="post" action="">
                First Name: <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"><br>
                Last Name: <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"><br>
                Department ID: <input type="text" name="dept_id" value="<?php echo $row['dept_id']; ?>"><br>
                Salary: <input type="text" name="salary" value="<?php echo $row['salary']; ?>"><br>
                Phone Number: <input type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>"><br>
                Address: <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
                Join Date: <input type="text" name="join_date" value="<?php echo $row['join_date']; ?>"><br>
                Date of Birth: <input type="text" name="dob" value="<?php echo $row['dob']; ?>"><br>
                End Date: <input type="text" name="end_date" value="<?php echo $row['end_date']; ?>"><br>
                Admin: <input type="text" name="admin" value="<?php echo $row['admin']; ?>"><br>
                <input type="hidden" name="employee_id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="btn btn-danger" name="update">Submit</button>
            </form>
            <?php
        } else {
            echo "Employee not found.";
        }
    } elseif (isset($_POST['update'])) {
        $employee_id = $_POST['employee_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $dept_id = $_POST['dept_id'];
        $salary = $_POST['salary'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $join_date = $_POST['join_date'];
        $dob = $_POST['dob'];
        $end_date = $_POST['end_date'];
        $admin = $_POST['admin'];

        $update_query = "UPDATE employee SET 
                first_name = '$first_name',
                last_name = '$last_name',
                dept_id = $dept_id,
                salary = $salary,
                phone_number = $phone_number,
                address = '$address',
                join_date = '$join_date',
                dob = '$dob',
                end_date = '$end_date',
                admin = '$admin'
                WHERE id = $employee_id";

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
