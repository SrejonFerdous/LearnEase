<!-- Footer-->
<footer class="container-fluid bg-dark text-center p-2">
<small class="text-white">Copyright &copy; LearnEase.com - 2024</small>
</footer>

<!--student reg-->

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterTittle">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
    <!--Include student reg form-->
    <?php include('studentRegistration.php'); ?>
    <!--Include of student reg form-->
    
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
      </div>
    </div>
  </div>
</div>
<!--End of student reg-->


<!--student login-->

<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterTitle">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--from-->
    
      <form id="stuLoginForm">
  
<div class="form-group">
<i class="fas fa-envelop"></i>
    <label for="stuLogemail" class="p1-2 font-weight-bold">Email</label>
    <input type="email" class="form-control" name="stuLogemail" placeholder="Email" id="stuLogemail">
  </div>
  
  <div class="form-group">
  <i class="fas fa-key"></i>
    <label for="stuLogpass" class="p1-2 font-weight-bold">Password</label>
   <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
</div>
  
  
</form>

<!--form-control class is used for Bootstrap styling-->
    
    
      </div>
      <div class="modal-footer">
	  <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancel</button>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()" >Login</button>
      </div>
    </div>
  </div>
</div>
<!--End of student login-->






<!-- Jquery and Bootstrap Javascript-->
<script src="js/jquery.min.js"></script> <!-- event handle,animation-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Font Awesome CSS-->
<script src="js/all.min.js"></script>

<!-- Student Ajax Call Javascript-->
<script src="js/ajaxrequest.js"></script> <!--data update dynamic behaviour-->

</body>
</html>