<?php 

session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>AUIB - Blood Bank Managment</title>
</head>
<body>
    
    <div class="container-login">
  <div class="header-login">
    <div class="header-login-box">
      <span class="header-text-position">
        <a href="index.php">AIUB-Blood Bank Managment System</a>
      </span>
      <a href="sign-up.php">Sign Up</a>
    </div>
  </div>
  <form action="login_a.php" method="POST">
  <div class="login-box">
    <div class="login">
      <h1>Authentication</h1>
      <input id="username" type="text" name="email" placeholder="Email" />
      <label for="username" class="login-input-icon">
        <i class="fa fa-user"></i>
      </label>
      <input id="password" name="pass" type="password" placeholder="Password" />
      <label for="password" class="login-input-icon">
        <i class="fa fa-lock"></i>
      </label>
      <div class="login-remember">
        <label class="login-checkbox">
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <span class="login-remember-text">
          &nbsp;&nbsp;Remember
        </span>
      </div>
      <input type="submit" name="login_btn" class="b" Value="Login">
      <span class="login-separator"></span>
</form>
    </div>
  </div>
</div>
</body>
</html>
