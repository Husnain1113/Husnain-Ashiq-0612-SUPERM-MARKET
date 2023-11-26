<?php
include("session.php");
include("menu.php");
?>

<html>
<head>
    <title>Add Customer</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>

<div class="rcontent">
    <h1><span>Add Customer</span></h1>
    <div id="data">To view the list of customers <a style="text-decoration:none" href="viewcustomer.php">Click Here</a><br /><br />

        <h1>Customer Information</h1>
        <form method="post" action="insertcustomer.php">

            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" required>

            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" required>

            <label class="form-label">Join Date</label>
            <input type="date" class="form-control" name="cjoin_date" required>

            <label class="form-label">Money Spent</label>
            <input type="text" class="form-control" name="cmoney_spent" required>

            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="caddress" required>

            <label class="form-label">Money Spent Reset</label>
            <input type="text" class="form-control" name="cmoney_spent_reset">

            <label class="form-label">Phone</label>
            <input type="tel" class="form-control" name="cphone" required>

            <button type="submit" class="btn btn-danger" name="sub">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
