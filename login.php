<?php
include('./mainInclude/header.php');
?>

<!-- Start Course Banner-->
<div class="container-fluid bg dark">
	<div class="row"> <!--create a row within the layout of a web page-->
		<img src="./image/login.jpg" alt="courses" style="height: 500px; width: 100%; object-fit: cover;  box-shadow: 10px"/>
		
	</div>
</div>
<br><br><br>

<!-- End Course Banner-->
<!--student login-->

<!-- Modal -->
        <!--from-->
        <div class="container jumbotron mb-5">
	<div class="row">
	<div class="col-sm">
    
      <form id="stuLoginForm"> 
  
<div class="form-group"> <!--group form-related elements-->
<i class="fas fa-envelope"></i>
    <label for="stuLogemail" class="p1-2 font-weight-bold">Email</label>
    <input type="email" class="form-control" name="stuLogemail" placeholder="Email" id="stuLogemail">
  </div>
  
  <div class="form-group">
  <i class="fas fa-key"></i>
    <label for="stuLogpass" class="p1-2 font-weight-bold">Password</label>
   <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
</div>
  
<!--form-control class is used for Bootstrap styling-->
  
</form>
    
      <div class="modal-footer">
	  <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()" >Login</button>
      </div>
  </div>
</div>
</div>
<!--End of student login-->


<?php
include('./mainInclude/footer.php');
?>