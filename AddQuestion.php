
<div class="col-lg-8 m-auto ">
  <center><h3>Add Questions</h3></center>
  <hr>
  <br>
<form action="Server.php" method="POST" class="row">

    <div class="col-lg-12"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Question" placeholder="Enter Question..."></textarea><br></div>
  
    <div class="col-lg-6"><label ><b>Option1</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Option1" name="Option1" required/></div>
    <div class="col-lg-6"><label ><b>Option2</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Option2" name="Option2" required/></div>
    <div class="col-lg-6"><label ><b>Option3</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Option3" name="Option3" required/></div>
    <div class="col-lg-6"><label ><b>Option4</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Option4" name="Option4" required/></div>
    <div class="col-lg-6"><label ><b>RightAns</b></label>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Answer" name="Ans" required/></div>
    <div class="col-lg-6"><label ><b>Cat</b></label>
    <select class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="cat" id="select" >
    <option >--Select Table--</option>
    <option value="Gk">GK Questions</option>
    <option value="WT">Web Technology Questions</option>
  </select>
</div>

<br>
<br>
<br>
<br>

    <button type="submit" class="btn fnbtn  "   name="Save">SAVE</button>
</form>
  </div>



