<?php
session_start();
if(isset($_POST['lgt'])){
    $_SESSION['id']="";
  session_destroy();
  session_unset();
  
header('location:admin_Login.php');
}

if(isset($_POST['exm'])){
    $_SESSION['id']="";
  session_destroy();
  session_unset();
header('location:Studentlogin.php');
}



?>