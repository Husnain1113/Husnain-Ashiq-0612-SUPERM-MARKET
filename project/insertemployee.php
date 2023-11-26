<?php
include("conec.php");

if (isset($_POST['sub'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $deptID = $_POST['dept_id'];
    $salary = $_POST['salary'];
    $phoneNumber = $_POST['phone_number'];
    $address = $_POST['address'];
    $joinDate = $_POST['join_date'];
    $dob = $_POST['dob'];
    $endDate = $_POST['end_date'];
    $admin = $_POST['admin'];

    $qry = "INSERT INTO employee(first_name, last_name, dept_id, salary, phone_number, address, join_date, dob, end_date, admin) 
            VALUES ('$firstName', '$lastName', '$deptID', '$salary', '$phoneNumber', '$address', '$joinDate', '$dob', '$endDate', '$admin')";

    $result = mysqli_query($conn, $qry);

    if ($result) {
        echo "Successfully inserted";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
