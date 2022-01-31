<?php
$phone=$_POST['Phone'];

$pattern2='/^[+91]+[ 0-9]{10}/';


if(!preg_match($pattern2,$phone)){
        
    echo "<i style='color:red'>Phone Number not valid</i>";
    
}

else{
    echo "<i style='color:green'>Phone Number  valid<i>";
}





?>