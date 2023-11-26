<?php
include("session.php");
include("menu.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Transaction</title>
    
</head>
<body>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 >Add Transaction</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="checkProdutTrans.php">
                        <div class="form-group">
                            <label for="pid">Product ID</label>
                            <input type="text" class="form-control" id="pid" name="pid" required>
                        </div>
                        <div class="form-group">
                            <label for="p_name">Product Name</label>
                            <input type="text" class="form-control" id="p_name" name="p_name" required>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                        <button type="submit" class="btn btn-danger btn-block" name="sub">Submit</button>
                    </form>
                </div>
            </div>
        </div>

<div class="col-md-6">
<?php
include("viewtransaction.php");
?> 
</div>
</div>
</div>
</body>
</html>
