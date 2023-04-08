<?php
if (isset($_POST['submit'])) {
$email = $_POST['email'];
$con=new mysqli("localhost","root","","hardwareproductsmanagementsystem");
if(!$con)
{
echo "Sorry! Input Correct Email To retrieve Your Password.";
}
$sql="INSERT INTO forgotpassword VALUES('$email')";
$result=$con->query($sql);
echo "Email Recorded. Please Check Your Email For A Password Reset Link.";
}
?>