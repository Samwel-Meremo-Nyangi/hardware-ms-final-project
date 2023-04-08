<?php
$id = $_POST['id'];
$owner = $_POST['owner'];
$cost = $_POST['cost'];
$description = $_POST['description'];
$deadline = $_POST['deadline'];
$con=new mysqli("localhost","root","","hardwareproductsmanagementsystem");
if(!$con)
{
echo "Sorry! Kindly Retry.";
}
$sql="INSERT INTO tenders_and_contracts VALUES('$id','$owner', '$cost','$description', '$deadline')";
$result=$con->query($sql);
echo "Nice! Your Contract Has Been Successfully Posted! Wait For Bidding.";
?>