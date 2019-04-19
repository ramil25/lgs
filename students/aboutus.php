<?php
session_start();
require '../db.php';
if (isset($_SESSION["user_level"])) {
    $success = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>About Us</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="../assets/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="../assets/owl-carousel/owl.theme.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/lspu.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          <img src="../images/lspu.jpg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.php">
          <img src="../images/lspu.png" alt="logo" />
        </a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <h2 style="font-family: times new roman;" class="navbar-nav d-none d-md-flex">Laguna State Polytechnic University</h2>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Welcome Admin!</span>
              <img class="img-xs rounded-circle" src="../images/default.png" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
              </a>
              <a class="dropdown-item mt-2" href="logout.php">
                Logout
            </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <a href="update_user.php?user_id=<?php echo $_SESSION['user_name']; ?>"><img src="<?php echo  $_SESSION['profile_pic']; ?>" alt="profile image"></a>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $_SESSION['user_name']; ?></p>
                  <div>
                    <small class="designation text-muted">Admin</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-newspaper"></i>
              <span class="menu-title">Newsfeed</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="result.php">
              <i class="menu-icon mdi mdi-bulletin-board"></i>
              <span class="menu-title">Results</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="req_moral.php">
              <i class="menu-icon mdi mdi-comment"></i>
              <span class="menu-title">Request Good Moral</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">
              <i class="menu-icon mdi mdi-information"></i>
              <span class="menu-title">About Us</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="menu-icon mdi mdi-power"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin">
                  <div class="card card-statistics"><br>
                    <h1 class="text-center page-header p-2">LSPU Mission</h1>
                    <p class="text-center">The Laguna State Polytechnic University is a center of Development transforming lives and communities.</p><br><br>

                    <h1 class="text-center page-header p-2">LSPU Vision</h1>
                    <p class="text-center">LSPU provides quality education through responsive instruction, distinctive research, sustainable extension <br>and production services for improved quality of life towards nation building.</p><br><br>

                    <h1 class="text-center page-header p-2">Guidance Mission</h1>
                    <p class="text-center">The Guidance Office views a person as individual created in the image and likeness of God. An individual must be respected and recognized with worth and dignity according to their capabilities, abilities, skills and needs. The Guidance Services are designed to assist an individual person to become self-integrated, self-directed and self-reliant person acknowledge to his capabilities for his future achievements.</p><br><br>

                    <h1 class="text-center page-header p-2">Guidance Vision</h1>
                    <p class="text-center">In a modern technology, a discipline skillful, we envision the Guidance Office as a student center for a robust, holistic person with conductive facilities and testing for professional training for total development of an individual personality through pyschological, counselling, assessment and emotional therapy.</p><br><br>
                  </div>
                 </div>
            </div>

   
                 

           </div>
           </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a href="" target="_blank">LSPU</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">LSPU
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
      </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
<?php
}
else {
  echo '<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="/lgs/">
          <img src="../images/lspu.jpg" alt="logo" />
        </a>
      </div>
  <H1 style="font-family:Arial;">PLEASE LOGIN <a href="/lgs/">HERE</a></H1>'
  ;
}
?>
