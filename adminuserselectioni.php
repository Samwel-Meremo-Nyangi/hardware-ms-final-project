<?php
$sql = "INSERT INTO registration VALUES ('$email', '$password');
if ($con->query($sql) === TRUE)
{
echo "Registered successfully!!";
} else {
  echo "Error:" . $sql . "<br>" . $con->error;
}
$con->close();
?>
<?php
session_start();
@include'config.php';
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($con,$_POST['name']); 
$email=mysqli_real_escape_string($con,$_POST['email']);
$pass=md5($_POST['password']);
$cpass=md5($_POST['confirmPassword']);
$user_type=$_POST['user_type'];
$select="SELECT *FROM registration WHERE email='$email'&& password='$password'";
$result=mysqli_query($con,$select);
if(mysqli_num_rows($result)>0){  
$row =mysqli_fetch_array($result);
if($row['user_type']== 'admin'){
$_SESSION['emailAdmin']=$row['adminname'];    
header('location:adminlogin.php');         
}
elseif($row['user_type']== 'user'){  
$_SESSION['user_name']=$row['name'];    
header('location:customer.php');          
}
}
else{
    $error[]='incorect password or email! ';
}
};
?>
<!DOCTYPE html>
<html lan"en">
<head>
<meta charset="UTF-8">
  <title>login form</title>
<link rel="" href="">
</head>
<body>
<div class="form-container">
<form action="" method="post">    
 <h3>login now</h3>  
 <?php
if(isset($error)){
foreach($error as $error){
echo '<span class="error-msg">'.$error.'</span>';        
 };     
};       
?>   
<input type="email" name="email" placeholder="Enter your email">
<input type="password" name="password" placeholder="Enter your password"> 
<select name="user_type">
<li><a href="homepage.html">HOME</a></li>         
    <option value="user">user</option>       
    <option value="admin">admin</option>
  </select>
<input type="submit" name="submit" value="login now" class="form-btn">
<p>New Here?<a href="register.php">Register Now</a></p>
 </form>
</div>
</body>
</html>