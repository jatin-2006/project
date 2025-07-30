<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Night Vision Cinema</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="index-body">
  <div class="container">
    <h1>Night Vision Cinema</h1>
    <form action="login.php" method="POST" class="form-box">
      <h2>Login</h2>
      <input type="text" name="number" placeholder="Mobile Number" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
      <p>Dont have an account? <a href="register1.php">Register</a></p>
    </form>
  </div>
</body>
</html>
