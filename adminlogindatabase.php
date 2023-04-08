<?php
$emailAdmin = $_POST['emailAdmin'];
$password = $_POST['password'];
$conn=new mysqli("localhost","root","","hardwareproductsmanagementsystem");
if(!$conn)
{
echo "Sorry Boss! Please Retry The Login";
}
$sql="INSERT INTO adminlog VALUES('$emailAdmin','$password')";
$result=$conn->query($sql);
echo "Welcome Boss!";
?>
