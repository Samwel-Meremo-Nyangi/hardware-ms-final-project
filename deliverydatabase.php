<?php
$supplier = $_POST['supplier'];
$productname = $_POST['productname'];
$deliverydate = $_POST['deliverydate'];
$quantity = $_POST['quantity'];
$con=new mysqli("localhost","root","","hardwareproductsmanagementsystem");
if(!$con)
{
echo "
<script>
alert('Sorry! Input Correct Delivery Details.')
</script>
";
}

$sql="INSERT INTO trial VALUES('$supplier','$productname','$deliverydate', '$quantity')";
$result=$con->query($sql);
echo "
<script>
alert('Records inserted succesfully');
window.location.href='delivery.php';
</script>
";
?>