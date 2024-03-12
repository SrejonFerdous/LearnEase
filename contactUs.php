<?php
include('./dbConnection.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
		
    } 
	

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	
	$subject= $_POST['subject'];
	$email= $_POST['email'];
	$message=$_POST['message'];

	$sql ="INSERT INTO contactUs(name, subject, email,message) VALUES ('$name','$subject', '$email','$message')";

	if($conn->query($sql)==TRUE){
		
		echo"
        <script>
          alert('Received successfully!!! Thank You!!!');
          window.location.href='./index.php';
        </script>
        ";
		
		//echo json_encode("OK");
		
	
		//echo"<script>setTimeout(()=>{
			//window.location.href='./index.php';
		//},1500);</script>";

	}else{
		echo json_encode("Failed");
	}
}

?>



<div class="container mt-4" id="Contact">
	<h2 class="text-center mb-4">Contact Us</h2>
	

	
	<div class= "row">
	<div class="col-md-8">
		<form action="" method="post">
		
			<input type="text" class="form-control" name="name" placeholder="Name"><br>
			<input type="text" class="form-control" name="subject" placeholder="Subject"><br>
			<input type="email" class="form-control" name="email" placeholder="Email"><br>
			<textarea class="form-control" name="message" placeholder="How can we help you" style="height;150px;"></textarea><br>
			<input class="btn btn-primary" type="submit" value="Send" name="submit">
			
			
		</form>
	</div>
	
	<div class="col-md-4 stripe text-white text-center">
	<h4>LearnEase.com</h4>
	<p>Enroll now to Get</p>
 <h2>30% Discount</h2>
	
	</div>
	
</div>
</div>
<br>

