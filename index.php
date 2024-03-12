  
<!-- Start Including Header-->
<?php
include('./mainInclude/header.php');
include('./dbConnection.php');
?>
<!-- Start Including Header-->

<!-- Start Video Background-->

<div class="container-fluid remove-vid-marg">
	<div class="vid-parent">
		<video playsinline autoplay muted loop>
			<source src="video/bg.MP4">
		</video>
		<div class="vid-overlay"></div> <!--overlay that may be used to enhance the visual appearance of the video background--->
	</div>
	<div class="vid-content">
			<h1 class="my-content"> Welcome to LearnEase</h1>
			<small class="my-content">Learn quickly & easily</small><br>

			<?php

         if(!isset($_SESSION['is_login'])){

          echo'<a href="loginorsignup.php" class="btn btn-danger mt-3">Get Started</a>';
      }else
      {
      	echo'<a href="Student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>';
      }
      ?>
			
			

		</div>
</div>

<!-- End Video Background-->

<!-- Start text Banner -->
<div class= "container-fluid bg-danger txt-banner">
	<div class= "row bottom-banner"> <!--proper alignment and spacing-->
	<div class= "col-sm"> <!-- represents a column within the row -->
		<h5 style="text-align:center"><i class= "fas fa-book-open mr-3"></i>100+ online courses
		</h5>
		</div>
		
		<div class= "col-sm">
		<h5 style="text-align:center"><i class= "fas fa-users mr-3"></i>Expert Instructors
		</h5>
		</div>
		
		<div class= "col-sm">
		<h5 style="text-align:center"><i class= "fas fa-keyboard mr-3"></i>Lifetime Access
		</h5>
		</div>
		
	
		
	
		</div>
	</div>


<!-- End text Banner-->


<!-- start popular courses-->

<div class="container mt-5" > <!-- space creating with above -->
	<h1 class="text-center">Available Courses</h1>
	
	<!-- 1st card deck-->
	<div class="card-deck mt-4">


		<?php
		$sql ="SELECT * FROM course LIMIT 3";
		$result = $conn-> query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
				$course_id=$row['course_id'];

				echo'<a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
  <div class="card">
    <img class="card-img-top" src="'.str_replace('..', '.' ,$row['course_img']).'" alt="Card image cap"> 
    <div class="card-body">
      <h5 class="card-title">'.$row['course_name'].'</h5>
      <p class="card-text">'.$row['course_desc'].'</p>
     
    </div>
	<div class="card-footer">
		<p class="card-text d-inline">Price:<small><del>&#2547 '.$row['course_original_price'].'</del></small>
		<span class="font-weight-bolder">&#2547 '.$row['course_price'].'<span></p>
		<a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll </a>
	</div>
  </div>
</a>';
		}
		}
		?>
</div>
<!--str_replace is used to replace '..' with '.' to fix the image path-->
 <!-- end card deck 1--> 
 
	<!-- 2nd card deck-->
	<div class="card-deck mt-4">
	
<?php
		$sql ="SELECT * FROM course LIMIT 3,3";
		$result = $conn-> query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
				$course_id=$row['course_id'];

				echo'<a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
  <div class="card">
    <img class="card-img-top" src="'.str_replace('..', '.' ,$row['course_img']).'" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">'.$row['course_name'].'</h5>
      <p class="card-text">'.$row['course_desc'].'</p>
     
    </div>
	<div class="card-footer">
		<p class="card-text d-inline">Price:<small><del>&#2547 '.$row['course_original_price'].'</del></small>
		<span class="font-weight-bolder">&#2547 '.$row['course_price'].'<span></p>
		<a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll </a>
	</div>
  </div>
</a>';
		}
		}
		?>
</div>
	
	
	<!-- end 2nd card deck-->

	
	
	
	<div class="text-center m-2">
		<a  href="courses.php">
			View All Courses
		</a>
		
	</div>
</div>


<!-- End popular courses-->


<!-- Start Contact us-->
<?php
include('./contactUs.php');
?>
<!-- End Contact us-->

<!-- Social-->



<div class= "container-fluid bg-danger txt-banner">

<div class="row bottom-banner text-white text-center p-1">

	<div class= "col-sm"> <!-- represents a column within the row -->
	<a class="text-white social-hover" href="https://www.facebook.com/">
	<i class="fab fa-facebook-f"></i>Facebook</a>
	</div>
	
	<div class= "col-sm">
	<a class="text-white social-hover" href="https://twitter.com/?lang=en">
	<i class="fab fa-twitter"></i>Twitter</a>
	</div>
	
	<div class= "col-sm">
	<a class="text-white social-hover" href="https://www.linkedin.com/">
	<i class="fab fa-linkedin"></i>LinkedIn</a>
	</div>
	
	</div>
</div>
<!-- Social-->

<!-- About-->
<div class="container-fluid p-4" style="background-color:#e9ecef">
<div class="container" style="background-color:#e9ecef">
	<div class="row text-center"> <!-- 3ta row ase-->
	
	
		<div class="col-sm">
			<h5>About Us</h5>
			<p>Discover Best Online Courses from LearnEase <br>
			Learn quick & easily
			
			</p>
		</div>
		
		<div class="col-sm">
			<h5>Category</h5>
			<a class="text-dark">Web Development</a><br>
			<a class="text-dark" >Web Design</a><br>
			<a class="text-dark" >Computer Science & Engineering Fundamentals</a><br>
			
		</div>
		
		<div class="col-sm">
			<h5>Contact Us</h5>
			<p>Ahsanullah University of Science & Technology <br>
			Department of Computer Science & Engineering <br>
			141-142, Tejgaon Industrial Area, Dhaka 1206</p>
		</div>
		
	</div>
</div>
</div>

<!-- End About-->

<!-- Start Including Footer-->
<?php
include('./mainInclude/footer.php');
?>
<!-- Start Including Footer-->
