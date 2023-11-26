<?php
include("session.php");
include("menu.php");
?>

<html>
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>

<div class="rcontent">
    <h1><span>Add Employee</span></h1>
    <div id="data">To view the list of employees <a style="text-decoration:none" href="viewemployee.php">Click Here</a><br /><br />

        <h1>Employee Information</h1>
        <form method="post" action="insertemployee.php">

            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" required>

            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" required>

            <label class="form-label">Department ID</label>
            <input type="text" class="form-control" name="dept_id" required>

            <label class="form-label">Salary</label>
            <input type="text" class="form-control" name="salary" required>

            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone_number" required>

            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address" required>

            <label class="form-label">Join Date</label>
            <input type="date" class="form-control" name="join_date" required>

            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="dob" required>

            <label class="form-label">End Date</label>
            <input type="date" class="form-control" name="end_date">

            <label class="form-label">Admin</label>
            <input type="text" class="form-control" name="admin">

            <button type="submit" class="btn btn-danger" name="sub">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
