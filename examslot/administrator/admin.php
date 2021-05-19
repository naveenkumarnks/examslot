<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Login</title>
    
</head>
<body>
<div class="login-box">
  <h2>Login</h2>
  <form action="validation.php" method="post">
    <div class="user-box">
      <input type="text" name="adminname" required>
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required>
      <label>Password</label>
    </div>
    <button type="submit" class="glow-on-hover"> LOGIN </button>
  </form>
</div>
</body>
</html>