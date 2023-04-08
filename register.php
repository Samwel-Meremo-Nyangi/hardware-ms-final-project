<html>
<head>
<title>Bibo HardwaresRegistration</title>
</head>
<style>
      .login {
        width: 300px;
        margin: 0 auto;
        margin-top: 100px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      h2 {
        text-align: center;
      }

      label {
        display: block;
        margin-bottom: 5px;
      }

      input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
      }
      input[type="text"], input[type="fullname"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
      }

      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
<center><img src="hardwarepi.png" width: 30px;margin: 0 auto;margin-top: 10px;padding: 20px;
border: 1px solid #ccc;border-radius: 5px;/></center>
<form method="post" action="registrationdatabase.php">
<fieldset>
<legend><H2>Register with us</H2></legend>
<p>Enter Email:
  <input type="email" size= "100" id="username" name="email">
  </p>
  </p>
  <p>Enter Full Name:
  <input type="text" size= "100" name="fullname">
  </p>
  </p>
  <p>Enter Password:
  <input type="password" size= "100" id="password" name="password">
  </p>
  </p>
<p>Confirm Password:
  <input type="password" size= "100" name="confirmPassword">
  </p>
  <center>
  </p>
<p>
  <input type="submit" value="SAVE REGISTRATION DETAILS" />
  </centre>
</p>
</fieldset>
</form>
</body>
</html>