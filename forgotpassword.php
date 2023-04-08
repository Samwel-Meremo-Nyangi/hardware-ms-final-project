<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<style>
		body {
			margin: 0;
			font-family: Arial, sans-serif;
		}
		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		form {
			background-color: #f2f2f2;
			border: 1px solid #ddd;
			padding: 20px;
			margin: 20px auto;
			box-shadow: 2px 2px 5px #ddd;
			min-width: 300px;
			max-width: 500px;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="email"], input[type="password"] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		button {
			background-color: #333;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		button:hover {
			background-color: #fff;
			color: #333;
			transition: all 0.3s ease-in-out;
		}
	</style>
</head>
<body>
	<header>
		<h1>Forgot Password</h1>
	</header>
	<form method="post" action ="forgotpassworddatabase.php">
		<label for="email">Forgot Password? Please Enter Email:</label>
		<input type="email" id="email" name="email" required>
		<button type="submit" name="submit">Reset Password</button>
	</form>
</body>
</html>