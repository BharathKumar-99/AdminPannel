<?php 
session_start ();
if(!isset($_SESSION["login"]))

	header("location:login.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Questions</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-min.png"
            alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">Admin</h5>
              </div>
            </div>
            
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
              aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-onepassword  text-info"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-calendar-today text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="index.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>

        <!-- 2nd item -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="Question.php">
            <span class="menu-icon">
              <i class="mdi mdi-book-open-variant"></i>
            </span>
            <span class="menu-title">Questions</span>
          </a>
        </li>


        <!-- 4th item -->

        <li class="nav-item menu-items">
          <a class="nav-link" href="logout.php">
            <span class="menu-icon">
              <i class="mdi mdi-logout"></i>
            </span>
            <span class="menu-title">Logout</span>
          </a>
        </li>


      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg"
              alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>

          <ul class="navbar-nav navbar-nav-right">



            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
             
      </nav>

      <!-- <h4 style="margin-top: 6rem;">Users Stats</h4> -->

<div class="container">

            <div class="container" style=" display: flex; margin-top: 6rem;
       height: fit-content; width: 100%;">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"></h4>
           
             <?php
include_once 'database.php';
$retval1=mysqli_select_db($conn,'myexampo_Users');
if(isset($_POST['submit']))
{    
     $quetion = $_POST['question'];
     $otp1 = $_POST['otp1'];
     $otp2 = $_POST['otp2'];
     $otp3 = $_POST['otp3'];
     $otp4 = $_POST['otp4'];
     $crt = $_POST['crtans'];
      $tbname = $_POST['tbname'];
      $tbname=preg_replace('/\s+/', '', $tbname);
     $sql = "INSERT INTO `$tbname`(`questions`, `otp1`, `otp2`, `otp3`, `otp4`, `correctans`) Values ('$quetion','$otp1','$otp2','$otp3','$otp4','$crt')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error Inserting Data";
     }
     mysqli_close($conn);
     
}
?>
   <form action="Question.php">
    <input type="submit" value="Back" />
</form>
            </div>
            </div>
            </div>
     


         



      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="assets/vendors/chart.js/Chart.min.js"></script>
      <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
      <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
      <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="assets/js/off-canvas.js"></script>
      <script src="assets/js/hoverable-collapse.js"></script>
      <script src="assets/js/misc.js"></script>
      <script src="assets/js/settings.js"></script>
      <script src="assets/js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="assets/js/dashboard.js"></script>


    
      <!-- End custom js for this page -->
</body>

</html>
 