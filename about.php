  
<!-- Start Including Header-->
<?php
include('./mainInclude/header.php');
include('./dbConnection.php');
?>
<!-- Start Including Header-->

<!-- Start Course Banner-->
<div class="container-fluid bg dark">
  <div class="row"> <!--create a row within the layout of a web page-->
    <img src="./image/about.jpg" alt="courses" style="height: 780px; width: 100%; object-fit: cover;box-shadow: 10px"/>
    
  </div>
</div>
<!-- End Course Banner-->
<?php
$sql = "SELECT * FROM about";
$result=$conn->query($sql);

if($result->num_rows==1){
    $row=$result->fetch_assoc();
    $des=$row['des'];


}?>
<h1>About</h1>
<p style="font-size:30px"><?php echo $row ['des']?></p>
<br>
<br><br><br>


<!-- Start Including Footer-->
<?php
include('./mainInclude/footer.php');
?>
<!-- Start Including Footer-->