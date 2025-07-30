<?php?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - Night Vision Cinema</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="index-body">
  <div class="container">
    <h1>Register</h1>
    <form action="register.php" method="POST" class="form-box">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="text" name="number" placeholder="Mobile Number" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Register</button>
      <p>Already have an account? <a href="index.php">Login</a></p>
    </form>
  </div>
</body>
</html>

