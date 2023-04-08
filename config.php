<?php
$host = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname ='hardwareproductsmanagementsystem';

$conn =mysqli_connect($host, $dbuser, $dbpass, $dbname) or die(mysqli_error($conn));

if($conn)
{
    echo"
    <script>
    alert('db connected');
    window.location.href='delivery.html';
    </script>
";
}
else
{
    echo"
    <script>
    alert('db error');
    </script>
";
}
?>