<?php
$payment_code = $_POST['payment_code'];
$amount = $_POST['amount'];
$payee = $_POST['payee'];
$phone = $_POST['phone'];
$paid_to = $_POST['paid_to'];
$paid_for = $_POST['paid_for'];
$con=new mysqli("localhost","root","","hardwareproductsmanagementsystem");
if(!$con)
{
echo "Sorry! Please Retry";
}
$sql="INSERT INTO payments VALUES('$payment_code','$amount', '$payee', '$phone', '$paid_to','$paid_for')";
$result=$con->query($sql);
echo "Payment Successful. Thank You! You Can Have Your Product.";
?>
