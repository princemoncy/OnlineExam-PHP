<?php
session_start();
if(isset( $_SESSION['sid'])){
  header('location:index.php');
}
if(isset($_SESSION['id'])){
  header('location:admin_pannel.php');
}

?>
<title>Students Login - Online Exam</title>

<?php
include('BootsrapStyles.php');
?>
<link rel="stylesheet" href="Css/style.css" type="text/css">
<!------ Include the above in your HEAD tag ---------->

<style>

/* BASIC */


</style>
<br>
<center><h2 class="h1 text-black "><b>Online Exam Portal</b></h2></center>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <br><h3 class="hed"><i class="fas fa-user-graduate "></i><br> Student Login</h3><br>
</div>

    <!-- Login Form -->
    <form action="Server.php" method="post">
   
    <!--<label for="uname"><b>Students Name</b></label>-->
      <input type="text" id="login" class="fadeIn second" placeholder="Enter Studets Name" name="Name" value="Prince Moncy" required>
  <!--    <label for="psw"><b>Students ID</b></label>-->
      <input type="text" id="password" class="fadeIn third" placeholder="Enter Studets ID" name="StudentsId"  value="IMG-17012022791" required>

      <label><b>Choose Exam</b></label>
    <select name="subject" id="select" >
    <option value="Gk">General Knowledge Exam</option>
    <option value="WT">Web Technology Exam</option>
  </select>

      <input type="submit" class="fadeIn fourth" value="Enter" name="submit">
        <div id="formFooter">
      <a class="underlineHover" href="admin_Login.php">Admin Login</a>
    </div>

    </form>

    <!-- Remind Passowrd -->
  
  </div>
</div>
