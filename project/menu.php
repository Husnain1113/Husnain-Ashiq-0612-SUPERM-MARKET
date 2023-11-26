<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
        /* Custom CSS for changing the navbar color */
        .custom-navbar {
            background-color: #A52A2A; /* Coffee color */
            padding: 10px 20px; /* Adjust padding as needed */
        }

        .custom-navbar a {
            color: #ffffff !important; /* White text */
        }

        .logout-button {
            margin-left: auto; /* Pushes the logout button to the right */
        }
    </style>
</head>
<body>
    <!-- Horizontal Navbar with custom styles -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="transaction.php">Transaction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addemply.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addcustomer.php">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="supplier.php">Supplier</a>
                    </li>
                </ul>
                <button class="btn btn-danger logout-button"><a href="logout.php" class="text-dark">Logout</a></button>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS Bundle (Bootstrap JS and Popper.js) -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
