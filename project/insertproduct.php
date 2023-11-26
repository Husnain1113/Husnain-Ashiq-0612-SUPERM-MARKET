<?php
include("conec.php");
if (isset($_POST['sub'])) 
{

    $cost=$_POST['cost_price'];
    $supplier=$_POST['supplier_id'];
    $name=$_POST['product_name'];
    $quantity=$_POST['quantity'];
    $PType=$_POST['product_type'];
    $market=$_POST['market_price'];
    $qry="INSERT INTO product(cost_price,supplier_id,product_name,quantity,product_type,market_price) VALUES ('$cost','$supplier','$name','$quantity','$PType','$market')";
    $result= mysqli_query($conn, $qry) ;
    if($result)
    {
        echo "successfully inserted";

}
else{
    echo "error";
}
mysqli_close($conn);
}


?>