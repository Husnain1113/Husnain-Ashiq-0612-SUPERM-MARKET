<?php
include("conec.php");

if (isset($_POST['sub'])) {
    $supplierName = $_POST['sname'];
    $email = $_POST['semail'];
    $address = $_POST['saddress'];
    $phoneNumber = $_POST['sphone'];

    $qry = "INSERT INTO supplier(sname, semail, saddress, sphone) 
            VALUES ('$supplierName', '$email', '$address', '$phoneNumber')";

    $result = mysqli_query($conn, $qry);

    if ($result) {
        echo "Supplier added successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>



