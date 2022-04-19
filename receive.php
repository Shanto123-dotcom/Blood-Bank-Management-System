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
    <title>Request for Blood</title>
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
       
    
        <h1 class="title">Request for a Blood </h1>

        <hr>
        <form action="send_a.php" method="POST">
        <label for="">Patient's Name</label>
        <input type="text" name="patient_name"><br><br>
        <label for="">Patient's Age</label>
        <input type="number" name="patient_age"><br><br>
        <label for="">Blood's Group</label>
        <input type="text" name="blood_group"><br><br>
        <label for="">Blood Needed</label>
        <input type="number" name="need" placeholder="3 Bags"><br><br>
        <label for="">Mobile Number</label>
        <input type="text" name="mobile"><br><br>
        <label for="">Word's Number</label>
        <input type="number" name="word"><br><br>
        <label for="">Patient's disease</label>
        <input type="text" name="disease"><br><br>
        <input type="text" name="hos"value="<?php echo $row['hospital_name'];?>" hidden>
        <input type="submit" value="Send Request" name="rec" class="custom-btn btn-3" onclick="popup()">
        </form>
        <a href="dashboard.php" class="custom-btn btn-3">Dashboard</a>
<?php
                     }
                     include("asset/js/script.php");
?>
</div>

    </center>
</body>
</html>