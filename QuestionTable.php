<?php
include('Connect.php');


$sql="SELECT * FROM questiontab";
if($req=mysqli_query($Connect,$sql)){
echo'<div class="table-responsive col-lg-8 m-auto">
<table class="table table-bordered bg-white">
<thead class="thead-dark">
  <tr>
    <th scope="row">No</th>
    <th scope="row">Questions</th>
    <th scope="row">Option1</th>
    <th scope="row">Option2</th>
    <th scope="row">Option3</th>
    <th scope="row">Option4</th>
    <th scope="row">Answer</th>
    <th scope="row">Cat</th>
    <th scope="row">Edit</th>
    <th scope="row">Delete</th>


  </tr>
  
  
  </thead>';
  $num=0;
while($row=mysqli_fetch_array($req)){
  $num++;
  echo'<tr>
    <td>'.$num.'</td>
    <td>'.$row['question'].'</td>
    <td>'.$row['opt1'].'</td>
    <td>'.$row['opt2'].'</td>
    <td>'.$row['opt3'].'</td>
    <td>'.$row['opt4'].'</td>
    <td>'.$row['rans'].'</td> 
    <td>'.$row['cat'].'</td>
    <td><a href="updateQuestion.php?id='.$row['id'].'"  name="quest"><i class="fas fa-edit"></i><A>  </td>
    <td><a href="DleteQuestion.php?id='.$row['id'].'"><i class="fas fa-trash"></i><A>  </td>
  </tr>';
  
}
echo'</table>
</div>';
}
else{
    echo mysqli_error($Connect);
}



?>


