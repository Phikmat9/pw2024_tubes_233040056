<?php 
session_start();
session_destroy();
header("location: ../register/login.php");
exit;
?>