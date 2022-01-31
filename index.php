<?php
session_start();
if(!isset($_SESSION['sid'])){
  header('location:Studentlogin.php');
  }

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/icon" href="img/icon">
<?php
include('BootsrapStyles.php')

?>
<title>Online Exam</title>
<link rel="stylesheet" href="Css/style.css" type="text/css">

<style>

</style>
</head>
<body>
<div class="row">
  
  <div class="column">
    

<?Php
 

 include('Connect.php');
 
$sid=$_SESSION['sid'];
$sub=$_SESSION['sub'];

if($sub=='WT'){

echo '<p style=text-align:center;font-size:40px><b> Web Technology Exam </b> </p>';

}
if($sub=='Gk'){

  echo '<p style=text-align:center;font-size:40px><b> General Knowledge Exam</b> <p>';
  
  }

$sql="SELECT * FROM questiontab WHERE cat='$sub'";
 if($req=mysqli_query($Connect,$sql)){

  $opt=0;
  echo '<form action="Server.php" method="POST" id="submit"   name="myForm" >';
while($row=mysqli_fetch_array($req)){
  $opt++;

echo '<div class="card">
  <div class="card-body"> 
<h3>'.$opt.' : '.$row['question'].'</h3>
<input type="text" name="questions'.$opt.'" value="'.$row['id'].'" hidden/>
<input type="text" name="rans'.$opt.'" value="'.$row['rans'].'" hidden />
<input type="text" name="cat'.$opt.'" value="'.$row['cat'].'"  hidden/>

<div class="inp">
      <input type="radio" name="Options'.$opt.'" value="'.$row['opt1'].'" />
      <label>'.$row['opt1'].'</label>

      <input type="radio" name="Options'.$opt.'" value="'.$row['opt2'].'"/>
      <label>'.$row['opt2'].'</label>

      <input type="radio" name="Options'.$opt.'" value="'.$row['opt3'].'"/>
      <label>'.$row['opt3'].'</label>

      <input type="radio" name="Options'.$opt.'" value="'.$row['opt4'].'"/>
      <label>'.$row['opt4'].'</label>
      </div>
      </div>
</div>';
?>

<script>
$('#submit').submit(function (e) {
  var x<?php echo $opt; ?> = document.forms["myForm"]["Options<?php echo $opt; ?>"].value;
  if (x<?php echo $opt; ?> == "") {
      
      e.preventDefault();
  
alert("Please Answer Question No. <?php echo $opt; ?>");

  }
  
})
</script>

<?php


 }
echo '<center><button type="submit" name="submitExam" class="fnbtn col-md-4 col-lg-2 col-4">Finish</button><center>
</form>';
 }
 else{
   echo mysqli_error($Connect);
 }

?>
  
