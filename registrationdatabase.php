<?php
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$password= $_POST['password'];
$con=new mysqli("localhost","root","","hardwareproductsmanagementsystem");
if(!$con)
{
echo "Kindly Retry!";
}
$sql="INSERT INTO registration VALUES('$email','$fullname','$password')";
$result=$con->query($sql);
echo "Data Captured Successsfully! Thank You For Registering With Us! Welcome!";
?>