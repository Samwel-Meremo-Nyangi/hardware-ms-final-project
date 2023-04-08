<!DOCTYPE html>
<html>
<head>
	<title>Bibo Hardwares Product Addition</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.5;
			color: #333;
		}
		.container {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			background-color: #fff;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"] {
			padding: 10px;
			width: 100%;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		.error {
			color: #ff0000;
			margin-bottom: 10px;
		}
	</style>
</head>
<center><img src="hardwarepi.png" /></center>
<form method="post" action="productssssdatabase.php">
<fieldset>
<legend><h2>Login Here Boss. Welcome!</h2></legend>
<p>Enter Product Name: 
  <input type="text" size= "100" name="productname">
  </p>
  </p>
<p>Select Product Category: 
<select input type= "text" size= "" name="productcategory">
        <option value="power_tools">Power Tools</option>
        <option value="hand_tools">Hand Tools</option>
        <option value="fasteners">Fasteners</option>
        <option value="safety_equipment">Safety Equipment</option>
      </select>
  </p>
  <center>
  </p>
<p>
  <input type="submit" value="ADD PRODUCT" />
  </centre>
</p>
</fieldset>
</form>
</body>
</html>
