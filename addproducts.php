<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		th {
			background-color: #333;
			color: #fff;
		}

		input[type=text], input[type=number] {
			padding: 6px 10px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			font-size: 14px;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 8px 16px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 14px;
		}

		input[type=submit]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<center><img src="kk.png" /></center>
<body>
<form method="post" action="addproductsdatabase.php", action = "addedproductlist.php">
<fieldset>
<legend><h2>Add A Product</h2></legend>
<p>Enter Products Name: 
  <input type="text" size= "100" name="name">
  </p>
  </p>
<p>Enter Product Price in Indian Rupee: 
  <input type="number" size= "50" name="price">
  </p>
  </p>
  <p>Describe the Product: 
  <input type="text" size= "5000" name="details">
<p>
  <input type="submit" value="Add Product" />
</p>
</fieldset>
</form>
	<table>
		<thead>
            <h3>Added Products List</h3>
			<tr>
				<th>Product Name</th>
				<th>Price</th>
				<th>Details</th>
			</tr>
		</thead>
    </table>
</body>
</html>