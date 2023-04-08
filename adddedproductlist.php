<?php
// Start the session
session_start();
// Array to store products
$products = [];
// Add a product to the array
function addProduct($name,$price, $details) {
  global $products;
  $product = [
    "name" => $name,
    "price" => $price,
    "details" => $details,
  ];
  array_push($products, $product);
}

// Check if a product has been added
if(isset($_POST['add_product'])) {
  // Get the form data
  $name = $_POST['name'];
  $price = $_POST['price'];
  $details = $_POST['details'];
  // Add the product
  addProduct($name,$price, $details);
  // Set a success message
  $_SESSION['success'] = "Product added successfully!";
  // Redirect to the products page
  header("Location: productssssdatabase.php");
  exit();
}