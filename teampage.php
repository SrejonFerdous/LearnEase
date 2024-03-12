<!-- Start Including header-->
<?php

include('./mainInclude/header.php');
include('./dbConnection.php');

?>
<!-- Start Including header-->

<!-- Start Course Banner-->
<div class="container-fluid bg dark">
  <div class="row"> <!--create a row within the layout of a web page-->
    <img src="./image/Team.jpg" alt="courses" style="height: 600px; width: 100%; object-fit: cover;box-shadow: 10px"/>
    
  </div>
</div>
<!-- End Course Banner-->

<div class="container mt-5" >
  <h1 class="text-center">Team</h1>
  <div class="row mt-4"> <!--create a row within the layout of a web page-->
   <?php

   $sql="SELECT*FROM team";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      $team_id=$row['team_id'];

      echo '<div class="col-sm mb-4">
      <a class="btn" style="text-align: left; padding: 0px; margin: 0px;">
  <div class="card">
    <img class="card-img-top" src="'.str_replace('..', '.' ,$row['team_img']).'" alt="Card image cap">
    <div class="card-body">
	
      <h5 class="card-title">'.$row['team_name'].'</h5>
      <p class="card-text">ID: '.$row['team_roll'].'</p>
      <p class="card-text">Semester: '.$row['team_sem'].'</p>
      <p class="card-text">'.$row['team_dept'].'</p>
      <p class="card-text">'.$row['team_varsity'].'</p>
      <p class="card-text">Mobile: '.$row['team_mobile'].'</p>
      <p class="card-text">Email: '.$row['team_email'].'</p>
      
    </div>
  </div>
</a>
      </div>
      ';
    }
   }

   ?>

  </div>
  
</div>
  
  <!--str_replace function double  period to single period-->
  <!-- end 2nd card deck-->
<!-- End All courses-->

<!-- Start Including Footer-->
<?php
include('./mainInclude/footer.php');
?>
<!-- Start Including Footer-->