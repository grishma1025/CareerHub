<?php
ob_start();
error_reporting(1);
session_start();
include("connect.php");

if(!$_SESSION['login_user_name'])
{
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="home.php">Welcome Admin!!</a>
            <!-- Sidebar Toggle-->
        
            <!-- Navbar Search-->
            
            <!-- Navbar-->
           <ul class="navbar-nav ms-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user fa-fw"></i> Profile
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            <li><a class="dropdown-item" href="password.php">Change Password</a></li>
        </ul>
    </li>
</ul>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- FontAwesome for Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                       <div class="nav">
  <div class="sb-sidenav-menu-heading">Index</div>
  
  <a class="nav-link" href="home.php">
    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
    Dashboard
  </a>

  <a class="nav-link" href="contacts.php">
    <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
    Contacts
  </a>

  <a class="nav-link" href="feedback.php">
    <div class="sb-nav-link-icon"><i class="fas fa-comment-dots"></i></div>
    Feedback
  </a>

  <a class="nav-link" href="users.php">
    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
    Employee Registrations
  </a>

  <a class="nav-link" href="users1.php">
    <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
    Employer Registrations
  </a>

  <a class="nav-link" href="happy-candidates.php">
    <div class="sb-nav-link-icon"><i class="fas fa-smile"></i></div>
    Happy Candidates
  </a>

  <a class="nav-link" href="view_company.php">
    <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
    Companies
  </a>
  
  <a class="nav-link" href="add_admin.php">
    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
    Add Admin
</a>


</div>
                    </div>
                   
                </nav>
            </div>
			
			 <div id="layoutSidenav_content">
			 <main>