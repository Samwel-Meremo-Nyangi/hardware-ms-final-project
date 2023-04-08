<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hardwareproductsmanagementsystem";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['productname']) && isset($_POST['productcategory'])) {
    $productname = $_POST['productname'];
    $productcategory = $_POST['productcategory'];
    $sql = "INSERT INTO javascriptproducts (productname, productcategory) VALUES ('$productname', '$productcategory')";   
    if ($conn) {
        echo "Product $productname added successfully to category $productcategory.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>