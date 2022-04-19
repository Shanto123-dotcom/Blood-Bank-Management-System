<?php 
include('database/dbconfig.php');
include('database/security.php');
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile-AIUB-BBM</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
<?php
                     $email=$_SESSION['username'];
                     $query = "SELECT * FROM users WHERE email='$email'";
                     $query_run = mysqli_query ($conn,$query);

                     foreach($query_run as $row)
                     {
                    
                    ?>
<body>
<div class="container-login">
<div class="header-login">
    <div class="header-login-box">
      <span class="header-text-position">
        <a href="dashboard.php">Welcome, <?php echo $row['username'];?></a>
      </span>
      <p><?php echo $row['hospital_name'];?></p>
    </div>
  </div>

  <div class="ticker-wrapper-h">
	<div class="heading">Notice Board</div>
	
	<ul class="news-ticker-h">
		<li>Welcome <?php echo $row['username'];?> </li>
		<li>Welcome to the central Blood Bank system of AIUB</li>
		<li>Excuses never save a life, Blood donation does.</li>
		<li>Donate! It is a bloody good job.</li>
        <li>There is a hope of life to someone in your blood donation.</li>
        <li>No one has ever become poor by giving.</li>
        <li>If you face any problem contact us</li>
	</ul>
</div>

    <center>
        <h1 class="title">Profile</h1>
        <form action="reg_a.php" method="POST">
            <label for="">Username</label>
            <input type="text" name="username" value="<?php echo $row['username'];?>"><br><br>
            <label for="">Hospital name</label>
            <input type="text" name="hospital_name" value="<?php echo $row['hospital_name'];?>"><br><br>
            <label for="">Email:</label>
            <input type="email" name="email" value="<?php echo $row['email'];?>" readonly><br><br>
            <label for="">Number</label>
            <input type="number"name="number" value="<?php echo $row['number'];?>"><br><br>
            <label for="">Password</label>
            <input type="text" value=""name="password" required><br><br>
            <input type="submit" name="update" value="Update"class="custom-btn btn-3" onclick="popup()">
            <a href="dashboard.php" class="custom-btn btn-3">Dashboard</a>
        </form>
                     </div>
        <?php } 
        include("asset/js/script.php");
        ?>
    </center>
</body>
</html>