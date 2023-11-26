<?php
include("session.php");
include("menu.php");
?>

<html>
    <head>
        <title>addproduct</title>
       
    </head>
    <body  style >
        
    <div class="rcontent">
    	<h1><span>Add Product</span></h1>
        <div id="data">To view list of products <a style="text-decoration:none" href="viewproduct.php">Click Here</a><br /><br />
                
                <h1>Product</h1>
                <form method="post" action="insertproduct.php">
                
                    <label class="form-label">product Name</label>
                    <input type="text" class="form-control" name="product_name">
                
                
                    <label class="form-label">product Type</label>
                    <input type="text" class="form-control" name="product_type">

                    <label class="form-label">supplier ID</label>
                    <input type="text" class="form-control" name="supplier_id">
                
                
                    <label class="form-label">Quantity</label>
                    <input type="text" class="form-control" name="quantity">

                      <label class="form-label">Cost Price</label>
                    <input type="text" class="form-control" name="cost_price">

                    <label class="form-label">Market Price</label>
                    <input type="text" class="form-control" name="market_price">
               
                    <button type="submit" class="btn btn-danger" name="sub">submit</button>
                
           
    </body>
</html>
