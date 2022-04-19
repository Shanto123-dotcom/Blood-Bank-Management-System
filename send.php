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
    <link rel="stylesheet" href="asset\css\style.css">
    <title>Send-AIUB-BBM</title>
</head>
<body>
<?php
                     $email=$_SESSION['username'];
                     $query = "SELECT * FROM users WHERE email='$email'";
                     $query_run = mysqli_query ($conn,$query);

                     foreach($query_run as $row)
                     {
                    
                    ?>
<div class="container-login">
<div class="header-login">
    <div class="header-login-box">
      <span class="header-text-position">
        <a href="dashboard.php">Welcome, <?php echo $row['username'];?></a>
      </span>
      <p><?php echo $row['hospital_name'];?></p>
    </div>
  </div>
    <center>
        <h1 class= "title">Blood Donation</h1>
        <hr>
        <h3></h3>
        <form action="send_a.php" method="POST">
            <label for="">Doner's Name</label>
            <input type="text" name="doner_name"><br><br>
            <label for="doner_age">Doner's Age</label>
            <input type="text" name="doner_age"><br><br>
            <label for="">Blood Group</label>
            <input type="text" name="blood" ><br><br>
            <label for="mobile_number">Mobile Number</label>
            <input type="text" name="doner_num"><br><br>
            <label for="">Physical Status</label>
            <input type="text" value="Good" name="physical"><br><br>
            <label for="bag_number">Blood's Bag number</label>
            <input type="text" name="blood_bag_number"><br><br>
            <label for="">Date</label>
            <input type="date" name="date"><br><br>
            <input type="text" name="hospital_name" value="<?php echo $row['hospital_name']?>" hidden>
            <input type="submit" name="send" value="Send" class="custom-btn btn-3" onclick="popup()"><br><br>
            <hr>
            <a href="dashboard.php" class="custom-btn btn-3">Dashboard</a>
            
        </form>
    </center>
                     </div>

<?php }
include("asset/js/script.php");?>

</body>
</html>