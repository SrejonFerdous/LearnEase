<?php
include('./dbConnection.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	
if(!isset($_SESSION['stuLogEmail'])){
echo "<script>location.href='loginorsignup.php'</script>";	
}
else{
	header("Pragma: no-cache"); //indicates that the browser should not cache the response
	header("Cache-Control: no-cache"); //not store a cached copy of the response.
	header("Expires: 0"); //the past indicates that the content has already expired and should not be used from cache.
	$stuEmail= $_SESSION['stuLogEmail'];
	

	
if(isset($_POST['purchase'])){
	
	$order_id = $_POST['Order_ID'];
	$stuEmail= $_SESSION['stuLogEmail'];
	$course_id= $_SESSION['course_id'];
	$amount=$_POST['TXN_AMOUNT'];
	
	$yee='';
	$flag='';
$sql2="SELECT course_id FROM courseorder WHERE stu_email ='$stuEmail'";
$runquery= mysqli_query($conn,$sql2) or die(mysqli_error($conn));
	while($result2=mysqli_fetch_array($runquery)){
				
				$yee=$result2['course_id'];
				
				if($yee==$course_id){
					$flag="gggg";
				}
				
	}
	
	
if($flag!=''){
	echo"
        <script>
          alert('You have already purchased this course ');
          window.location.href='./Student/myCourse.php';
        </script>
        ";
}else{

	$sql ="INSERT INTO courseorder(order_id, stu_email, course_id,amount) VALUES ('$order_id','$stuEmail', '$course_id','$amount')";

	if($conn->query($sql)==TRUE){
		//echo json_encode("OK");
		
		//echo "Congratulations!!!! Purshased Successfully...";
		
		echo"
        <script>
          alert('Congratulations!!!! Purshased Successfully...');
          window.location.href='./Student/myCourse.php';
        </script>
        ";
		//echo"<script>setTimeout(()=>{
		//	window.location.href='./Student/myCourse.php';
		// },1500);</script>";

	}else{
		echo"
		<script>
          alert(' Already Purshased');
        
        </script>
        ";
		
		echo"<script>setTimeout(()=>{
			window.location.href='./courses.php';
		 },1500);</script>";
	}
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="GENERATOR" content="Eversoft First Page"> <!-- software or tool that was used to generate the web page-->
<meta name= "viewport" content="width=device-width,initial-scale=1.0">
<title>CheckOut</title>

<!-- Bootstrap CSS-->
<link rel ="stylesheet" href="css/bootstrap.min.css">

<!--Google Font-->

<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<!--Custom CSS-->
<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<div class="container mt-5">
	<div class="row"> <!--create a row within the layout of a web page-->
	<div class="col-sm-6 offset-sm-3 jumbotron">
	<h3 class="mb-5">Welcome to StudyEase Payment</h3>
		<form method="post">
		
		<div class="form-group row">
		<label for="Order_ID" class="col-sm-4 col-form-label">Order ID</label>
		<div class="col-sm-8">
		<input id="Order_ID" class="form-control"
		tabindex="1" size="20" name="Order_ID"autoComplete="off"
	 value="<?php echo "ORDS".rand(10000,99999999)?>" readonly>
	</div>
	</div>
	
	<div class="form-group row">
		<label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
		<div class="col-sm-8">
		<input id="CUST_ID" class="form-control"
		tabindex="2" size="12" maxLength="12" name="CUST_ID"autoComplete="off"
	 value="<?php if(isset($stuEmail)){echo $stuEmail;} ?>" readonly>
	</div>
	</div>
	
	
	<div class="form-group row">
		<label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
		<div class="col-sm-8">
		<input title="TXN_AMOUNT" class="form-control"
		tabindex="10" type="text" name="TXN_AMOUNT"
	 value="<?php if(isset($_POST['id'])){echo $_POST['id'];} ?>" readonly>
	</div>
	</div>
	
	<div class="form-group row">
		
		<div class="col-sm-8">
		<input id="INDUSTRY_TYPE_ID" class="form-control"
		tabindex="4" type="hidden" maxLength="12" size="12" name="INDUSTRY_TYPE_ID"
	autoComplete="off" value="Retail" readonly>
	</div>
	</div>
	
	<div class="form-group row">
		
		<div class="col-sm-8">
		<input id="CHANNEL_ID" class="form-control"
		tabindex="4" type="hidden" maxLength="12" size="12" name="CHANNEL_ID"
	autoComplete="off" value="WEB" readonly>
	</div>
	</div>
	
	<div class="text-center">
	<input value="Checkout" name="purchase" type="submit" class="btn btn-primary" onclick="">
	<a href="./courses.php" class="btn btn-secondary">Cancel</a>
	</div>
	</form>
	<small class="form-text text-muted">Note: Purchase The Course by Clicking Checkout Button </small>
	
	</div>
	</div>
	
	</div>
	
	
	
	
	
	
	
	
	
	
	

</body>
</html>

<?php }

?>