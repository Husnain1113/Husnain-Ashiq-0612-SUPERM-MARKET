<?php
include("conec.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['sub'])) {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $joinDate = $_POST['cjoin_date'];
        $moneySpent = $_POST['cmoney_spent'];
        $address = $_POST['caddress'];
        $moneySpentReset = $_POST['cmoney_spent_reset'];
        $phone = $_POST['cphone'];

        $qry = "INSERT INTO customer(first_name, last_name, cjoin_date, cmoney_spent, caddress, cmoney_spent_reset, cphone) 
                VALUES ('$firstName', '$lastName', '$joinDate', '$moneySpent', '$address', '$moneySpentReset', '$phone')";

        $result = mysqli_query($conn, $qry);

        if ($result) {
            echo "Successfully inserted";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>









<menu type="context">






<html>
    <head>
        <title>login</title>
       <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
       <link rel="stylesheet" href="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="login.php">login</a>
        <a class="nav-link" href="addemply.php">Employee</a>
        <a class="nav-link" href="product.php">Product</a>
        <a class="nav-link" href="addcustomer.php" >customer</a>
        <a class="nav-link" href="supplier.php" >supplier</a>
        <a class="nav-link" href="logout.php" >logout</a>
      </div>
    </div>
  </div>
</nav>
    </body>
</html>

</menu>