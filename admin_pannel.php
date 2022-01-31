<?php
session_start();
if(!isset($_SESSION['id'])){
  header('location:admin_Login.php');
}
?>
<link rel="stylesheet" href="Css/Adminpannel.css" type="text/css">

<?php

include('BootsrapStyles.php')
?>
<title>Online Exam/Admin Pannel</title>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="navbar-brand"><b style="color:white"><i class="fas fa-user-shield"></i> Admin Pannel</b></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto flex-column vertical-nav">
	  <form action="" method="POST">
                    <button  class="nav-link btn navbtn "  name="SD"><i class="fas fa-user-graduate"></i> Students </button>
                    <button class="nav-link btn navbtn" name="Qu"><i class="fas fa-question"></i> Question </button>
                    <button class="nav-link btn navbtn" name="So" ><i class="fas fa-trophy"></i> Results  </button>
                    
                   </form>   
                    <form action="Request.php" method="POST">
                    <button class=" nav-link btn navbtn" name="lgt"><i class="fas fa-sign-out-alt"></i> Log Out</button>
                    <button class="nav-link btn navbtn btn-outline-primary "  name="exm"><i class="fas fa-book-open"></i> To Exam</button>

                   </form>       
    </ul>

  </div>
  
</nav>
 <br>
 <div>
<?php


if(isset($_POST['SD'])){
include("Studentdetails.php");
include("StudentTable.php");

}



elseif(isset($_POST['Qu'])){

include("AddQuestion.php");
include("QuestionTable.php");

}
elseif(isset($_POST['So'])){

  include("Mark.php");
  }

  else{
    include("Studentdetails.php");
  include("StudentTable.php");
  }
 
?>
 </div>
 