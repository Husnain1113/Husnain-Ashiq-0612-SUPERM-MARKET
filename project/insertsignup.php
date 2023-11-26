<?php
include("conec.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists
    $check_query = "SELECT * FROM login WHERE email = '$email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "Email already exists. Please choose a different email.";
    } else {
        // Insert a new record if the email doesn't exist
        $insert_query = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $insert_query);

        if ($result) {
            echo "Account created successfully";
            // Redirect to login page or another page after successful signup
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
