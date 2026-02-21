<?php
session_start();
include("config.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>CareerHub &mdash; Get a job!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">

    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.php">CareerHub</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php" class="nav-link">Home</a></li>
              <li><a href="about.php">About</a></li>
			  
			  
			  <?php
				if(isset($_SESSION['login_user_name']))
				{
				?>
              <li class="has-children">
                <a>For Employee</a>
                <ul class="dropdown">
                  <li><a href="resume-writting.php">Resume writting</a></li>
                  <li><a href="find-job.php">Find a Job</a></li>
                  <li><a href="find-task.php">Find a task</a></li>
                  <li><a href="view-companies.php">View Companies</a></li>
                </ul>
              </li>
		   <?php
				}
				?>
				
				
			   <?php
				if(isset($_SESSION['employer']))
				{
				?>
				<?php
				if(isset($_SESSION['login_user_name']))
				
				?>
              <li class="has-children">
                <a>For Employer</a>
                <ul class="dropdown">
                  <li><a href="post-job.php">Post a job</a></li>
                
                  <li><a href="post-task.php">Post a task</a></li>

                </ul>
              </li>
			    <?php
				}
				
				?>
      
			  <li><a href="contact.php">Contact</a></li>
			  <li><a href="feedback.php">Feedback</a></li>
	
			 
			    
			      </ul>
          </nav>
				<?php if(isset($_SESSION['login_user_name']) || isset($_SESSION['employer'])): ?>
                <!-- Show Logout button if logged in as employee or employer -->
                <div class="right-cta-menu text-right d-flex align-items-center col-6">
                    <div class="ml-auto">
                        <a href="logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color: rgb(209, 133, 156);">Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <!-- Show Login options if not logged in -->
                <div class="right-cta-menu text-right d-flex align-items-center col-6">
                    <div class="ml-auto">
                        <a href="signup.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color: rgb(209, 133, 156);">Candidate Login</a>
                        <a href="signupemp.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color: rgb(209, 133, 156);">Employer Login</a>
                    </div>
                </div>
            <?php endif; ?>



	   </div>
      </div> 
	  
    </header>
