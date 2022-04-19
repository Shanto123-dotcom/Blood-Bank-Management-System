<?php
include('database/dbconfig.php');
include('database/security.php');

if(isset($_POST['login_btn'])){
    $email_login=$_POST['email'];
    $password_login=$_POST['pass'];
    $pass=md5($password_login);

    $query = "SELECT * FROM users WHERE email='$email_login' AND pass='$pass'";
    $query_run= mysqli_query($conn,$query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username']=$email_login;
        header('Location:dashboard.php');
    }else{
        $_SESSION['status'] = 'Invalid ID';
        header('Location:index.php');
    }
}

?>



?>