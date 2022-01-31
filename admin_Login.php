<?php
session_start();
if(isset($_SESSION['id'])){
  header('location:admin_pannel.php');
}

include('BootsrapStyles.php');
?>

<link rel="stylesheet" href="Css/style.css" type="text/css">
<style>

/* BASIC */

</style>
<!------ Include the above in your HEAD tag ---------->


<br>
<br>
<br><center><h2 class="h1 text-white"><b>Online Exam Portal</b></h2></center>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <br><h3 class="hed"><i class="fas fa-user-shield"></i> <br>Admin Login</h3><br>
</div>

    <!-- Login Form -->
    <form action="Server.php" method="post">
   
  <!--  <label for="UserName"><b>UserName</b></label>-->
      <input type="text" id="login" class="fadeIn second"  placeholder="Enter Username" value="admin" name="UserName" required>
     <!-- <label for="password"><b>Password</b></label>-->
      <input type="password" id="password" class="fadeIn third"  placeholder="Enter password"  value="123" name="password" required>
      <input type="submit" class="fadeIn fourth" value="Log In" name="Enter">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="Studentlogin.php">Student Login</a>
    </div>

  </div>
</div>
