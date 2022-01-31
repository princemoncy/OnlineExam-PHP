<?php
session_start();

?>
<link rel="icon" type="image/icon" href="img/icon">


<script src="https://kit.fontawesome.com/2008a64d25.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>




<?php

include('Connect.php');


  $myid=$_GET['id'];
$sql="SELECT * FROM questiontab WHERE id='$myid'";

if($req=mysqli_query($Connect,$sql)){

while ($row=mysqli_fetch_array($req)) {

 $ques=$row['question'];
  $op1 =$row['opt1'];
  $op2= $row['opt2'];
  $op3 = $row['opt3'];
  $op4 = $row['opt4'];
  $rans = $row['rans'];
  
}

}

if(isset($_POST['Add'])){

  $question=$_POST['question'];
  $opt1=$_POST['opt1'];
  $opt2=$_POST['opt2'];
  $opt3=$_POST['opt3'];
  $opt4=$_POST['opt4'];
  $ans=$_POST['ans'];
 

  







  
  $squp="UPDATE questiontab SET question='$question', opt1='$opt1', opt2='$opt2', opt3='$opt3',opt4='$opt4',rans='$ans'  WHERE id='$myid'";
  
  if(mysqli_query($Connect,$squp)){
  
  header("location:admin_pannel.php");
    
  }
  
  
}

?>

<nav class="navbar navbar-expand-lg adm ">


<div class="navbar-brand"><b style="color:white"><i class="fas fa-user-shield"></i> Admin Pannel</b></div>
</nav><br>
<ul class="navbar-nav mr-auto flex-column vertical-nav">
<button class="btn btn   text-white"><a class="text-white" href="admin_pannel.php"><i class="fas fa-chevron-left"></i>Go Back</a></button> 
      
    </ul>
<br><br>

<form action="" method="POST">
  <div class="container">
   
    <center><h1>Update Questions</h1></center>
    <hr>
    <label ><b>Question</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"  name="question" value='<?php echo $ques ; ?>'>


    <label ><b>opt1</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"  name="opt1"  value='<?php echo $op1; ?>'>  

    <label ><b>opt2 </b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"  name="opt2" value='<?php echo $op2; ?>'>  

    <label ><b>opt3</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"  name="opt3"  value='<?php echo $op3; ?>'>  
    
    <label ><b>opt4</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"  name="opt4"  value='<?php echo $op4; ?>'>  
   
    <label ><b>rans</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"  name="ans"  value='<?php echo $rans; ?>'>  
   
    <hr>

    <button type="submit" class="form-control btn-danger"  aria-label="Username" aria-describedby="basic-addon1" class="registerbtn" name="Add">Add</button>
  </div>
  
  
</form>

</body>
</html>
<title>Online Exam/Update</title>
<style>
   @media (min-width:992px) {   
 
 .vertical-nav {
   position: fixed;
   top: 0px;
   left: 0;
   width: 200px;
   height: 100%;
   overflow-y: auto;
   padding-top: 59px;
   box-shadow:  -4px 8px 7px 0px black;
}
}
  .adm {
    background:linear-gradient(180deg, #E21717, #b4161b);
    
}
.btn{
  background:linear-gradient(180deg, #E21717, #b4161b);
}
</style>