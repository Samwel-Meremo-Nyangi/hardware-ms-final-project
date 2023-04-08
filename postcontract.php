<!DOCTYPE html>
<html>
<head>
	<title>Post Contract And Its Details</title>
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
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 20px;
			resize: vertical;
		}
        input[type="email"], textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 20px;
			resize: vertical;
		}
        input[type="number"], textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 20px;
			resize: vertical;
		}
		button {
			display: block;
			background-color: #4CAF50;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<center><img src="hardwarepi.png" /></center>
<form method="post" action="postcontractdatabase.php">
<fieldset>
<legend><h2>Post A Contract Here</h2></legend>
<p>Enter Contract ID: 
  <input type="text" size= "100" name="id" required>
  </p>
  </p>
<p>The Contract Owner's Email?: 
  <input type="email" size= "100" name="owner" required>
  </p>
  <p>How Much Is The Contract's Cost (In Rupees)?: 
  <input type="number" size= "100" name="cost" required>
  </p>
  <p>What Is The Contract Application Deadline?: 
  <input type="date" size= "100" name="deadline" required>
  </p>
  <p>Describe The Contract Here: 
  <input type="text" size= "5000" name="description" required>
  </p>
  </p>
<p>
  <input type="submit" value="POST CONTRACT" />
</p>
</fieldset>
</form>
</body>
</html>
