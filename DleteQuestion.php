<?php

include('Connect.php');


  $myid=$_GET['id'];
$sql="DELETE FROM Question WHERE id='$myid'";

if(mysqli_query($Connect,$sql)){
    header("location:admin_pannel.php");
}


?>