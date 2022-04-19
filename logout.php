<?php
include('database/dbconfig.php');
session_start();
session_destroy();
header("location:index.php");
?>