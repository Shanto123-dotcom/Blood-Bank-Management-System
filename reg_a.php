<?php
include('database/dbconfig.php');
include('database/security.php');

if(isset($_POST['signup'])){
    $hos_name=$_POST['hospital_name'];
    $username=$_POST['username'];
    $hos_num=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $pass=md5($password);

    $query = "INSERT INTO `users`(`hospital_name`, `username`, `email`, `pass`, `number`) VALUES ('$hos_name','$username','$email','$pass','$hos_num')";
    $query_run= mysqli_query($conn,$query);

    if($query_run){
        $_SESSION["succ"]="New Account Create Successfully";
        header('location:index.php');
    }
}

if(isset($_POST['update'])){
    $hos_name=$_POST['hospital_name'];
    $username=$_POST['username'];
    $hos_num=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $pass=md5($password);

    $query = "UPDATE `users` SET `hospital_name`='$hos_name',`username`='$username',`email`='$email',`pass`='$pass',`number`='$hos_num' WHERE email='$email'";
    $query_run= mysqli_query($conn,$query);

    if($query_run){
        
        header('location:done.php');
    }else{
       echo "Not Update";
    }
}






?>
