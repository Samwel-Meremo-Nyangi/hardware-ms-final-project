<?php
$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];
$con=new mysqli("localhost","root","","hardwareproductsmanagementsystem");
if(!$con)
{
echo "Sorry! Kindly heck and feed correct entries";
}
$sql="INSERT INTO products VALUES('$name','$price','$details')";
$result=$con->query($sql);
echo "Product Successfully Added!";
?>
