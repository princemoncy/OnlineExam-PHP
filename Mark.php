

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="Css/mark.css" type="text/css">
<center><h3>Exam Results</h3></center>

<?php
include('Connect.php');
$sq="SELECT DISTINCT studentname, id FROM students,answertab WHERE students.id=answertab.studentid";
if($r=mysqli_query($Connect,$sq)){

  echo'<div class="container"><div class="row  box">';
while($ro=mysqli_fetch_array($r)) {

  $usid=$ro['id'] ;
  echo '
  <div class="card  mt-5">
  
  <div class="card-body">
  <h3 class="card-title"> '.$ro['studentname'].'</h3>
  <p class="card-text">ID :'.  $ro['id']  .' </p>';

  
$sql="SELECT * FROM answertab WHERE answer=rans AND studentid='$usid'";
if($req=mysqli_query($Connect,$sql)){
 echo'<p  class="card-text">Score : '.mysqli_num_rows($req)*5..'</p>';

}
$sqli="SELECT DISTINCT cat FROM answertab WHERE answer=rans AND studentid='$usid' ";
if($reqe=mysqli_query($Connect,$sqli)){
while($row=mysqli_fetch_array($reqe)){

  
  echo '<p  class="card-text">Cat : '.$row['cat'].'<p>';
 
  
 }
}
echo'</div>
 </div>';
}
echo'</div>
 </div>';

}
?>

