<?php
include('database/dbconfig.php');
include('database/security.php');
session_start();

if(isset($_POST['send'])){
    $doner=$_POST['doner_name'];
    $doner_age=$_POST['doner_age'];
    $blood=$_POST['blood'];
    $mobile=$_POST['doner_num'];
    $physical=$_POST['physical'];
    $bag=$_POST['blood_bag_number'];
    $hospital_name=$_POST['hospital_name'];
    $date=$_POST['date'];
    

    $query = "INSERT INTO `blood_sends`(`doner_name`, `doner_age`, `hospital_name`, `blood_group`, `doner_num`, `blood_bag_num`, `donate_date`, `doner_physical_status`) VALUES ('$doner','$doner_age','$hospital_name','$blood','$mobile','$bag','$date','$physical')";
    $query_run=mysqli_query($conn,$query);
    if($query_run){
        $_SESSION['Done'] = 'Successful Donation to the Blood Bank';
        header('Location:send.php');
    }else{
        echo "Not Send";
    }
}

if(isset($_POST['rec'])){
   $name=$_POST['patient_name'];
   $age=$_POST['patient_age'];
   $blood_g=$_POST['blood_group'];
   $bag=$_POST['need'];
   $number=$_POST['mobile'];
   $word=$_POST['word'];
   $disease=$_POST['disease'];
   $hos=$_POST['hos'];

    $query = "INSERT INTO `bbm_recive`(`patient_name`, `patient_age`, `blood_group`, `need`, `mobile`, `word`, `disease`,hospital_name) VALUES ('$name','$age','$blood_g','$bag','$number','$word','$disease','$hos')";
    $query_run=mysqli_query($conn,$query);
    if($query_run){
        $_SESSION['Done'] = 'Successful Send Receive Request';
        header('Location:receive.php');
        
    }else{
        echo "Not Send";
    }
}


?>