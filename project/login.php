
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <h2>Login</h2>
        <form method="post" action="">
            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
    </div>

</body>

</html>

<?php

include("conec.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_query = "SELECT * FROM login WHERE email = '$email'AND password='$password' ";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        
         {
            $_SESSION['login'] = true;
            $_SESSION['email'] = $email; 
            header("Location: index.php"); 
            exit();
     
        }
    } else {
        echo "Email not found. Please sign up.";
    }

    mysqli_close($conn); 
}
?>
