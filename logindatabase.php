<?php
$email = $_POST['email'];
$password = $_POST['password'];
$con=new mysqli("localhost","root","","hardwareproductsmanagementsystem");
if(!$con)
{
echo "Sorry! Please Retry.";
}
$sql="SELECT * FROM registration where '$email','$password'";
$result=$con->query($sql);
echo "Logged In Successfully! *WELCOME!*";
?>
