<?php
		if (isset($_POST['forgotpassworddatabase.php'])) {
			// Retrieve the email address from the form
			$email = $_POST['email'];

			// Connect to the database
			$con=new mysqli("localhost","root","","hardwareproductsmanagementsystem");

			if (!$con) {
				die("Could Not Find Email: " . mysqli_connect_error());
			}

			// Check if the email address exists in the database
			$sql = "SELECT * FROM forgotpassword WHERE email='$email'";
			$result = mysqli_query($con, $sql);

			if (mysqli_num_rows($result) == 1) {
			
				// Save the token and email address in the database
				$sql = "INSERT INTO forgotpassword (email)  VALUES ('$email')";
				$result = mysqli_query($con, $sql);

				// Send a password reset link to the email address
				$subject = "Password Reset Link";
				$message = "Click the following link to reset your password: http://localhost/forg
				otpassword.php?email=$email";
				$headers = "From: ";

				if (mail($email)) {
					echo "<p>A password reset link has been sent to your email address. Please check
					 your inbox and follow the instructions in the email.</p>";
				} else {
				echo "<p>Could not send email. Please try again later.</p>";
				}
				} else {
				echo "<p>Email address not found. Please try again.</p>";
				}
						// Close the database connection
						mysqli_close($con);
					}
				?>