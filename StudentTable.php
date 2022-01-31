<?php
include('Connect.php');


$sql="SELECT * FROM students";
if($req=mysqli_query($Connect,$sql)){
echo'<div class="table-responsive col-lg-8 m-auto">


<table class="table table-bordered bg-white">
<thead class="thead-dark">
  <tr>
    <th scope="row">ID</th>
    <th scope="row">Student Name</th>
    <th scope="row">Student ID</th>
    <th scope="row">Email</th>
    <th scope="row">Phone</th>
    <th scope="row">Time</th>
    <th scope="row">Edit</th>
    <th scope="row">Delete</th>


  </tr>
  
  </thead>';
while($row=mysqli_fetch_array($req)){
  echo'<tr>
  <td>'.$row['id'].'</td>
    <td>'.$row['studentname'].'</td>
    <td>'.$row['studentid'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['phone'].'</td>
    <td>'.$row['time'].'</td>
    <td><a href="Update.php?id='.$row['id'].'"><i class="fas fa-edit"></i><A>  </td>
    <td><a href="DleteStudent.php?id='.$row['id'].'"><i class="fas fa-trash"></i><A>  </td>
  </tr>';
}
echo'</table>

</div>';
}
else{
    echo mysqli_error($Connect);
}


?>


