<!DOCTYPE html>
<html>
<head>
	<title>Payments Entries</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.5;
			color: #333;
		}
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			background-color: #fff;
		}
		h1 {
			margin-top: 0;
		}
		form {
			margin-bottom: 20px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type="text"], input[type="email"], input[type="number"], input[type="int"], select {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 10px;
			font-size: 14px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			font-size: 16px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
<center><img src="hardwarepi.png" /></center>
<form method="post" action="paymentsdatabase.php">
<fieldset>
<legend><h2>Make Payment</h2></legend>
<p>Enter Paymnet Code: 
  <input type="text" size= "100" name="payment_code" required>
  </p>
  </p>
<p>Enter Amount: 
  <input type="number" size= "10" name="amount" required>
  </p>
  <p>Enter Payee Name: 
  <input type="text" size= "100" name="payee" required>
  </p>
  <p>Who/Which Office/Address Payment Made To: 
  <input type="text" size= "1000" name="paid_to" required>
  </p>
  <p>Payment Made For:
  <!--<input type="" size= "" name="paid_for" required> -->
  <select input type id="paid_for" name="paid_for" required>
				<option value="">Select One</option>
				<option value="A Product Bought">Product</option>
				<option value="Contract">Contract</option>
				<option value="Delivery">Delivery</option>
			</select>
  </p>
  <p>Payee Mobile Phone Number:
  <input type="int" size= "18" name="phone" required>
  </p>
  <center>
  </p>
<p>
  <input type="submit" value="EFFECT PAYMENT" />
  </centre>
</p>
</fieldset>
</form>
</body>
</html>
