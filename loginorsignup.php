<?php
	include('./dbConnection.php');
	include('./mainInclude/header.php');
?>

<div class="container-fluid bg-dark">
<!---course banner --->
	<div class="row"> <!--create a row within the layout of a web page-->
	<img src="./image/lgsup.jpg" alt="courses" style="height:400px; width:100%; object-fit:cover; box-shadow:20px;"/>
	</div>
	</div>
	
	<br><br><br>
	<!---course banner --->
	
<div class="container jumbotron mb-5">
	<div class="row">
	<div class="col-md-4">
	<h5 class="mb-3">If Already Registered then Login</h5>
	<form role="form" id="stuLoginForm"> <!-- role used for accessibility-->
	
		<div class="form-group">
			<i class="fas fa-envelope"></i>
			<label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label>
			<small id="statusLogMsg1"></small>
			<input type="email" class="form-control" placeholder="Email" name="stuLogEmail" id="stuLogEmail">
		</div>
		
		<!--form-control class is used for Bootstrap styling-->
		
		<div class="form-group"> <!--group form-related elements-->
			<i class="fas fa-key"></i>
			<label for="stuLogPass" class="pl-2 font-weight-bold">Password</label>
		
			<input type="password" class="form-control" placeholder="Password" name="stuLogPass" id="stuLogPass">
		</div>
		
		<button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login
		</button>
		</form>
		<br/>
	<small id="statusLogMsg"></small>	
	</div>	

<div class="col-md-6 offset-md-1">
	<h5 class="mb-3">Are you a new user? SignUp please</h5>
	<form role="form" id="stuRegForm">
	
		<div class="form-group">
			<i class="fas fa-user"></i>
			<label for="stuname" class="pl-2 font-weight-bold">Name</label>
			<small id="statusMsg1"></small>
			<input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
		</div>
		
		
		<div class="form-group">
			<i class="fas fa-envelope"></i>
			<label for="stuemail" class="pl-2 font-weight-bold">Email</label>
		<small id="statusMsg2"></small>
			<input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
			<small class="form-text">We'll never share your email with anyone else.</small>
		</div>
		
		<div class="form-group">
			<i class="fas fa-key"></i>
			<label for="stupass" class="pl-2 font-weight-bold">New Password</label>
		<small id ="statusMsg3"></small>
			<input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
		</div>
		
		<button type="button" class="btn btn-primary" id="signup"onclick="addStu()">Sign Up
		</button>
		</form>
		<br/>
	<small id="successMsg"></small>	
	</div>	
</div>
</div>	
<hr/>

<?php
include('./mainInclude/footer.php');
?>