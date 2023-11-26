<?php
include("session.php");
include("menu.php");
include("conec.php");


$sql = "SELECT * FROM product";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product List</title>
</head>

<body>

    <div class="container mt-5">
        <h1>Product List</h1>

        <?php if ($result->num_rows > 0) : ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Cost Price</th>
                        <th>Market Price</th>
                        <th>Supplier ID</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo $row["product_id"]; ?></td>
                            <td><?php echo $row["product_name"]; ?></td>
                            <td><?php echo $row["product_type"]; ?></td>
                            <td><?php echo $row["cost_price"]; ?></td>
                            <td><?php echo $row["market_price"]; ?></td>
                            <td><?php echo $row["supplier_id"]; ?></td>
                            <td><?php echo $row["quantity"]; ?></td>
                            <td>
                                <form method='post' action='updateproduct.php'>
                                    <button type='submit' class='btn btn-primary' name='update_product' value='<?php echo $row["product_id"]; ?>'>Update</button>
                                </form>
                                <form method='post' action='deleteproduct.php'>
                                    <button type='submit' class='btn btn-danger' name='delete_product' value='<?php echo $row["product_id"]; ?>'>Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>No products found.</p>
        <?php endif; ?>
    </div>

</body>

</html>
