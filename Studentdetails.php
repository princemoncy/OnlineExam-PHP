<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class=" ml-5 ">
<form action="studentServe.php" method="POST">
  <div class="container">
  <center><h3>Add Student Details</h3></center>
    <hr>
    <label ><b>Name</b></label><br>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Enter StudentName"  name="StuName" required><br>

    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" value="<?php echo "IMG-".date('dmY-his').'-'.rand(10,99);?>" placeholder="Enter StudentId" name="StuId" hidden >

    <label ><b>Email </b></label><br>
    <input type="text" id="email" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Enter Email" name="Email"  required>  
    <div id="mail"></div><br>
    
    <label ><b>Phone</b></label><br>
    <input type="text"  id="phone"  class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Enter Phone Number" name="Phone"  required>  <br>
    <div id="ph"></div>
    
    <button type="submit" class="btn  stu"  id="Addbtn" name="Add" >ADD</button>
  </div>
  
  
</form>


</div>

<script>
$(function(){
  
$('#email').keyup(function(e){
  e.preventDefault();
 
  $.ajax({
    url:'mail.php',
    type:'POST',
    data:$(this).serializeArray(),
    success:function($signresult){
      $('#mail').html($signresult);
    }

  })
})





$('#phone').keyup(function(e){
  e.preventDefault();
 
  $.ajax({
    url:'phone.php',
    type:'POST',
    data:$(this).serializeArray(),
    success:function($result){
      $('#ph').html($result);
    }

  })
})

})


</script>



<style>
  
 @media only screen and (max-width:1600px){
  .container {
    width: 60%;
    
    margin-left: 20%;
}
 }
 @media only screen and (max-width:1500px){
  .container {
    width: 50%;
    
    margin-left: 25%;
}
 }
 @media only screen and (max-width:700px){
  .container {
    width: 100%;
    
    margin-left: -5%;
}
 }
  </style>
