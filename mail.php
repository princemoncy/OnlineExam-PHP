<?php

$mail=$_POST['Email'];



$pattern1='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';



if(!preg_match($pattern1,$mail)){
        
    echo "<i style='color:red'>Email not valid</i>";
    
}

else{
    echo "<i style='color:green'>Email  valid<i>";
}




?>