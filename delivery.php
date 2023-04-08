<html>
<head>
<title>Delivery Details In Database</title>
</head>
<style>
		form {
			margin: 0 auto;
			width: 50%;
			padding: 20px;
			background-color: #f2f2f2;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		label {
			display: block;
			margin-bottom: 8px;
		}

		input[type="text"], input[type="date"], input[type="number"] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: none;
			border-radius: 4px;
			background-color: #f8f8f8;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
<body bgcolor="lime">
<center><img src="hardwarepi.png" /></center>
<form method="post" action="deliverydatabase.php">
<fieldset>
<legend><h2>Capture Delivery Details</h2></legend>
<p>Enter Supplier Name: 
  <input type="text" size= "100" name="supplier" required>
  </p>
  </p>
<p>Enter Product Name: 
  <input type="text" size= "100" name="productname" required>
  </p>
  <p>When It was Delivered: 
  <input type="date" size= "100" name="deliverydate" required>
  </p>
  </p>
  <p>Enter Quantity Delivered: 
  <input type="number" size= "100" name="quantity" required>
  </p>
  </p>
  <center>
  </p>
<p>
  <input type="submit" value="SAVE DELIVERY DETAILS" />
  </centre>
</p>
</fieldset>
</form>
</body>
</html>

