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
      <a href="index.php">Login</a>
    </div>
  </div>
  <form action="reg_a.php" method="POST">
  <div class="login-box">
    <div class="login">
      <h1>Sign Up</h1>
      <input id="username" type="text" name="hospital_name" placeholder="Hospital Name" />
      <label for="username" class="login-input-icon">
      <i class="fa-solid fa-hospital"></i>
      </label>
      <input id="username" type="text" name="username" placeholder="Username" />
      <label for="username" class="login-input-icon">
        <i class="fa fa-user"></i>
      </label>
      <input id="username" type="email" name="email" placeholder="Email" />
      <label for="username" class="login-input-icon">
      <i class="fa-solid fa-envelope"></i>
      </label>
      <input name="password" type="password" placeholder="Password" />
      <label for="password" class="login-input-icon">
        <i class="fa fa-lock"></i>
      </label>
      
      <input type="submit" name="signup" value="Sign Up" class="b">
      <span class="login-separator"></span>
</form>
    </div>
  </div>
</div>

</body>
</html>