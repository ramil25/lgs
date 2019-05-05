<?php
session_start();
require '../db.php';
if ($_SESSION["user_level"]==null) {
header("location: ../login.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/lspu.png" />
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
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-account"></i>
              <span claclass="navbar-nav navbar-nav-left header-links d-none d-md-flex"ss="menu-title">Student</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="student_admission.php">Student Admission</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="student_account.php">Student Account</a>
                </li>
               <li class="nav-item">
                  <a class="nav-link" href="request.php?request=VIEWREQUEST">Requests</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_staff.php">
              <i class="menu-icon mdi mdi-account-plus"></i>
              <span class="menu-title">Create Staff Account</span>
           	</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chart_menu.php">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Enrollees Chart</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consoledated.php">
              <i class="menu-icon mdi mdi-folder-outline"></i>
              <span class="menu-title">Consoledated Report</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="year_menu.php?category=CLUSTER">
              <i class="menu-icon mdi mdi-poll"></i>
              <span class="menu-title">Cluster Programs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="year_menu.php?category=Qualifying Exam">
              <i class="menu-icon mdi mdi-newspaper"></i>
              <span class="menu-title">Qualifying Exams</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="announcement.php">
              <i class="menu-icon mdi mdi-newspaper"></i>
              <span class="menu-title">Announcements</span>
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
                  <div class="card card-statistics">
                    <h1 class="text-center page-header p-2">ADMIN PANEL</h1>
                  </div>
                 </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <a href="student_admission.php">
                <div class="card-body">
                  <div class="clearfix text-center">
                      <i class="mdi mdi-account text-primary icon-lg"></i>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-center mb-0">Student Admission</h3>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            </div>
              </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <a href="student_account.php">
                <div class="card-body">
                  <div class="clearfix text-center">
                      <i class="mdi mdi-account-box text-primary icon-lg"></i>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-center mb-0">Student Account</h3>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            </div>
             </div>

             <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <a href="add_staff.php">
                <div class="card-body">
                  <div class="clearfix text-center">
                      <i class="mdi mdi-account-plus text-primary icon-lg"></i>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-center mb-0">Create Staff Account</h3>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            </div>
             </div>

              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <a href="manage_student.php">
                <div class="card-body">
                  <div class="clearfix text-center">
                      <i class="mdi mdi-folder-multiple text-primary icon-lg"></i>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-center mb-0">Manage Request</h3>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            </div>
                </div>

               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <a href="chart_menu.php">
                <div class="card-body">
                  <div class="clearfix text-center">
                      <i class="mdi mdi-chart-bar text-primary icon-lg"></i>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-center mb-0 ml-3">Enrollees Charts</h3>
                      </div>
                    </div>
                  </div>
                </div>
                     </a>
              </div>
            </div>

              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <a href="consoledated.php">
                <div class="card-body">
                  <div class="clearfix text-center">
                      <i class="mdi mdi-note-text text-primary icon-lg"></i>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-center mb-0 text-center">Consoledated Report</h3>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            </div>
          </div>

             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <a href="year_menu.php?category=CLUSTER">
                <div class="card-body">
                  <div class="clearfix text-center">
                      <i class="mdi mdi-check-all text-primary icon-lg"></i>
                    <div class="float-right">
                      <div class="fluid-container">
                        <br>
                        <h3 class="font-weight-medium mb-0 text-center ml-3">Cluster Program</h3>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            </div>
          </div>

              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <a href="year_menu.php?category=Qualifying Exam">
                <div class="card-body">
                  <div class="clearfix text-center">
                      <i class="mdi mdi-transcribe text-primary icon-lg"></i>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-center mb-0">Qualifying Exams</h3>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <a href="announcement.php">
                <div class="card-body">
                  <div class="clearfix text-center">
                      <i class="mdi mdi-transcribe text-primary icon-lg"></i>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h4 class="font-weight-medium text-center mb-0">Announcements</h3>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
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

?>