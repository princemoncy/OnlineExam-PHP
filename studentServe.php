<?php

include('Connect.php');

if(isset($_POST['Add'])){

    $StuName=$_POST['StuName'];
    $StuId=$_POST['StuId'];
    $StuEmail=$_POST['Email'];
    $StuPhone=$_POST['Phone'];
 
    $pattern1='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
    $pattern2='/^[+91]+[ 0-9]{10}/';
    $error=1;
    if(!preg_match($pattern1,$StuEmail)){
        
        echo "eamil not valid";
        $error=0;
    }
        
    if(!preg_match($pattern2,$StuPhone)){
     
        echo "Phone number not valid";
        $error=0;
    }
    

if($error!==0){
    $sqli="INSERT INTO students(studentname,studentid,email,phone) VALUE('$StuName','$StuId','$StuEmail','$StuPhone')";
    
    if(mysqli_query($Connect,$sqli)){
    
    
    header("location:admin_pannel.php");
  
    
    }
  
} 
    
}

     
 
    
?>