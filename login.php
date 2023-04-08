<!DOCTYPE html>
<html>
  <head>
    <title>LOGIN DATABASE</title>
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
    <h3>WELCOME TO BIBO HARDWARE!</h3>
  </head>
  <body>
    <div class="login">
      <h2>Login</h2>
      <form>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="LOGIN">
      </form>
    </div>
	<h3>Thank You For Visiting Us. Welcome Again!</h3>
  </body>
</html>
