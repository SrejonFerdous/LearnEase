<?php
if(!isset($_SESSION)){
	session_start();
}

include_once('../dbConnection.php');

if(isset($_SESSION['is_login'])){
	$stuLogEmail=$_SESSION['stuLogEmail'];
}else{
	echo "<script> location.href '../index.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--rendering mode for Internet Explorer(Latest Rendering Mode)-->

<title>Watch Course</title>
 
<!-- Bootstrap CSS-->
<link rel ="stylesheet" href="../css/bootstrap.min.css">

<!-- Font Awesome CSS-->
<link rel ="stylesheet" href="../css/all.min.css">

<!--Google Font-->

<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<!--Custom CSS-->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/studentstyle.css">
</head>

<body> 
<div class="container-fluid p-2" style="background-color:#343a40;">
<h2 style="color:white;">LearnEase</h2>
<a class="btn btn-danger" href="./myCourse.php">  Your Courses</a>
</div>

	
<div class="container-fluid">
<div class="row"> <!-- create row within the container-->
<div class="col-sm-3 border-right">
<h4 class="text-center">Lessons</h4>
<ul id="playlist" class="nav flex-column">  <!--unordered list (<ul>) is used to display the playlist of lessons. It has the class nav flex-column to style it as a vertical navigation list-->
<?php
	
		if(isset($_GET['course_id'])){
			
			$course_id= $_GET['course_id'];
			
			$sql="SELECT * FROM lesson WHERE course_id='$course_id'";
			$result=$conn->query($sql);
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					echo '<li class="nav-item border-bottom py-2"
					movieurl='.$row['lesson_link'].' style="cursor: pointer;">'.$row['lesson_name'].'</li>';
				}
			}
		}
		?>

</ul>
</div>
<div class="col-sm-8"> <!--where the video player will be displayed-->

	<video id="videoarea" src="" class="mt-5 w-75 ml-2"controls>
	</video>
	</div></div></div>
	
	
<!-- Jquery and Bootstrap Javascript-->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<!-- Font Awesome CSS-->
<script type="text/javascript" src="../js/all.min.js"></script>

<!-- custom js-->
<script type="text/javascript" src="../js/custom.js"></script>

</body>
</html>