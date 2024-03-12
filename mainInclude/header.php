<!DOCTYPE html>
<html lang="en">
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS-->
<link rel ="stylesheet" href="css/bootstrap.min.css">

<!-- Font Awesome CSS-->
<link rel ="stylesheet" href="css/all.min.css">

<!--Google Font-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<!--Custom CSS-->
<link rel="stylesheet" href="css/style.css">

 <meta name= "viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>


<title>LearnEase</title>
</head>
<body>

<!-- Start Navigation-->

<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <div class="container-fluid"> <!-- FULL WIDTH CONTAINER-->
    <a class="navbar-brand" href="index.php">LearnEase</a>
    <span class="navbar-text">Learn quick and easily </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav">
        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
         <li class="nav-item custom-nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        <li class="nav-item custom-nav-item"><a href="teampage.php" class="nav-link">Team</a></li>
        <li class="nav-item custom-nav-item"><a href="about.php" class="nav-link">About</a></li>
         <?php

      if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

         if(isset($_SESSION['is_login'])){

          echo '<li class="nav-item custom-nav-item"><a href="Student/studentProfile.php" class="nav-link">My Profile</a></li>
        <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Log Out</a></li>';
         } else{
          echo'<li class="nav-item custom-nav-item"><a href="login.php" class="nav-link">Log In</a></li>
        <li class="nav-item custom-nav-item"><a href="signup.php" class="nav-link" >Sign Up</a></li>';

         }
         ?>
        

       

      </ul>
    </div>
  </div>
</nav>

<!-- End Navigation-->