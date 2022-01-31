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
$sql="SELECT * FROM students WHERE id='$myid'";

if($req=mysqli_query($Connect,$sql)){

while ($row=mysqli_fetch_array($req)) {

 $name=$row['studentname'];
  $id  =$row['studentid'];
  $mail= $row['email'];
  $phone = $row['phone'];
  
}

}

if(isset($_POST['Add'])){

  $StuName=$_POST['StuName'];
  $StuId=$_POST['StuId'];
  $StuEmail=$_POST['Email'];
  $StuPhone=$_POST['Phone'];
  
  $squp="UPDATE students SET Studentname='$StuName', studentid='$StuId', email='$StuEmail', phone='$StuPhone'  WHERE id='$myid'";
  
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
    <center><h3>Update Student Details</h3></center>
    <hr>
    <label ><b>Name</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Enter StudentName" name="StuName" value='<?php echo $name; ?>'>


    <label ><b>Id</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Enter StudentId" name="StuId"  value='<?php echo $id; ?>'>  

    <label ><b>Email </b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Enter Email" name="Email" value='<?php echo $mail; ?>'>  

    <label ><b>Ph</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Enter Phone Number" name="Phone"  value='<?php echo $phone; ?>'>  
    <hr>

    <button type="submit" class="form-control btn"  aria-label="Username" aria-describedby="basic-addon1" class="registerbtn" name="Add">Add</button>
  </div>
  
  <div class="pan"></div>
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
    background: linear-gradient(
90deg
,#ff5574,#ff8956);
    
}
.btn{
   background: linear-gradient(
180deg
,#ff5574,#ff8956);
color:white;
}
</style>