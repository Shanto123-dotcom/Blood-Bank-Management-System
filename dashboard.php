<?php 
include('database/dbconfig.php');
include('database/security.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>AIUB-USER DASHBOARD-BBM</title>
</head>
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
        <h1 class= "title">Dashboard</h1>
        <br>
        <a href="send.php"class="custom-btn btn-3">Send Blood</a><br>
        
        <h3><a href="receive.php"class="custom-btn btn-3">Receive Blood</a></h3>
        
        <h3><a href="profile.php"class="custom-btn btn-3">Profile</a></h3>
        
        <h3><a href="logout.php"class="custom-btn btn-3">Log Out</a></h3>
    </center>
    <?php
                                            }
                                        
                                       
                                        ?>
</div>
</body>
</html>