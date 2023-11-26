<?php
include("session.php");
include("menu.php");
?>

<html>
<head>
    <title>Add Supplier</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>

<div class="rcontent">
    <h1><span>Add Supplier</span></h1>
    <div id="data">To view the list of suppliers <a style="text-decoration:none" href="viewsupplier.php">Click Here</a><br /><br />

        <h1>Supplier Information</h1>
        <form method="post" action="insertsupplier.php">

            <label class="form-label">Supplier Name</label>
            <input type="text" class="form-control" name="sname" required>

            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="semail" required>

            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="saddress" required>

            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="sphone" required>

            <button type="submit" class="btn btn-danger" name="sub">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
