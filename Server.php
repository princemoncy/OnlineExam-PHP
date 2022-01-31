<?php
session_start();
?>

<link rel="icon" type="image/icon" href="img/icon">
<title>Online Exam/Mark</title>
<link rel="stylesheet" href="Css/styleServer.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php





include('Connect.php');

//adminloginstart

if(isset($_POST['Enter'])){

    $uname=$_POST['UserName'];
    $password=$_POST['password'];


  $sql="SELECT * FROM adminlogin WHERE username='$uname' AND password='$password'";
  if($req=mysqli_query($Connect,$sql)){


    if(mysqli_num_rows($req)==1){


     while($row=mysqli_fetch_array($req)){

        $_SESSION['id']=$row['id'];
        

        
       header('location:admin_pannel.php');
       
      }


    }  

    else{
      echo mysqli_error($Connect);
    }
  }
  else{
    echo mysqli_error($Connect);
  }




}
//adminlogin end


//studentloginstart

if(isset($_POST['submit'])){



 $Studentsname=$_POST['Name'];
 $StudentsId=$_POST['StudentsId'];




 $sq="SELECT * FROM students WHERE studentname='$Studentsname' AND studentid='$StudentsId'";
 if($re=mysqli_query($Connect,$sq)){


    if(mysqli_num_rows($re)==1){

   while($ro=mysqli_fetch_array($re)){
      $studid =$_SESSION['stuid']=$ro['studentid'];
       $_SESSION['sid']=$ro['id'];
       $_SESSION['sub']=$_POST['subject'];
    

               

    header('location:index.php');

 
   }


  }

 else{
    echo mysqli_error($Connect);
  }
 }
 else{
    echo mysqli_error($Connect);
 }




}


//studentloginend




//add question start


if(isset($_POST['Save'])){
$slectsub=mysqli_real_escape_string($Connect,$_POST['Selecttable']);
$ques=htmlspecialchars(mysqli_real_escape_string($Connect,$_POST['Question']));
$op1=htmlspecialchars(mysqli_real_escape_string($Connect,$_POST['Option1']));
$op2=htmlspecialchars(mysqli_real_escape_string($Connect,$_POST['Option2']));
$op3=htmlspecialchars(mysqli_real_escape_string($Connect,$_POST['Option3']));
$op4=htmlspecialchars(mysqli_real_escape_string($Connect,$_POST['Option4']));
$ans=htmlspecialchars(mysqli_real_escape_string($Connect,$_POST['Ans']));
$cat=htmlspecialchars(mysqli_real_escape_string($Connect,$_POST['cat']));


$ql="INSERT INTO questiontab(question,opt1,opt2,opt3,opt4,rans,cat) VALUE('$ques','$op1','$op2','$op3','$op4','$ans','$cat')";
if(mysqli_query($Connect,$ql)){


    header("location:admin_pannel.php");
    
    }
    
    else{
        echo mysqli_error($Connect);
    }
    
}
$sudid=$_SESSION['sid'];
  
if(isset($_POST['submitExam'])){
      
  $sdel="DELETE FROM `answertab` WHERE `answertab`.`studentid`='".$_SESSION['sid']."'";
  if(mysqli_query($Connect,$sdel)==TRUE){

$sub= $_SESSION['sub'];
//echo $_POST['Options1'];
$sql="SELECT * FROM questiontab WHERE cat='$sub'";
 if($req=mysqli_query($Connect,$sql)){

  $opt=0;
while($row=mysqli_fetch_array($req)){
  $opt++;

  $questions= htmlspecialchars( ${'questions'.$opt}= $_POST['questions'.$opt]);
  $rans= htmlspecialchars( ${'rans'.$opt}= $_POST['rans'.$opt]);
  $cat= ${'cat'.$opt}= $_POST['cat'.$opt];
  $answer= htmlspecialchars(${"answer".$opt}= $_POST['Options'.$opt]);
  $subexam=$_POST['submitExam'];
  $questions;
  $answer;
  
  
 
 $sqlans="INSERT INTO answertab(questionid,answer,studentid,rans,cat) VALUES('$questions','$answer','$sudid','$rans','$cat')";
 
 if(mysqli_query($Connect,$sqlans)){
  
     
 
 }
 else{
 
     echo mysqli_error($Connect);
 }
 
 }
 
}  
}

}

//add question end


//result start


if(isset($subexam)){
 session_destroy();

$sq="SELECT DISTINCT studentname,id FROM students,answertab WHERE students.id=answertab.studentid AND students.id='".$_SESSION['sid']."'";
if($r=mysqli_query($Connect,$sq)){

  
while($ro=mysqli_fetch_array($r)) {

  $usid=$ro['id'] ;
  echo '
  <center><h1 style="color:white">Result<h1></center>
  <div class="card">
  <h2>'.$ro['studentname'].'</h2><p class="id">Student ID : '.  $ro['id']  .'</p>';
            
  
$sql="SELECT * FROM answertab WHERE answer=rans AND studentid='$usid'";
if($req=mysqli_query($Connect,$sql)){
 echo' <div class="gm">'.mysqli_num_rows($req)*5..'</div>
  <div class="sls"></div>
 <div class="tm">50</div>';

}


$sqli="SELECT DISTINCT cat FROM answertab WHERE answer=rans AND studentid='$usid' ";
if($reqe=mysqli_query($Connect,$sqli)){
while($row=mysqli_fetch_array($reqe)){

  
  echo ' <div class="cat">'.$row['cat'].'</div>';
 $cate=$row['cat'];
  
 }
}

}


}
$sel="SELECT COUNT(question) AS qcount FROM questiontab";
if($rel=mysqli_query($Connect,$sel)){

 if($rel=mysqli_fetch_array($rel)){
echo ' <div class="qc">Question : '.$rel['qcount'].'</div>

<button class="btn btn-outline link"><a  href="Studentlogin.php" >ReTry</a></button>

</div>
';
 }
}
}
else{
  header('location:Studentlogin.php');
}
//reslut end
?>


