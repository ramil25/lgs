<?php
session_start();
$sid =$_GET['std_id'];
require '../db.php';
if ($_SESSION["user_level"]==0) {

if($conn)
{
  $sql ="SELECT * FROM students WHERE student_id=".$sid;
  $result =mysqli_query($conn,$sql);
  $fetch  =mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Admission</title>
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
<style type="text/css">
</style>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class=" brand-logo" href="index.php">
          <img src="../images/lspu.png" width="100" height="100" alt="logo" />
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
              <a class="dropdown-item mt-2" href="../index.php">
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
              <br><br><br>
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
            <a class="nav-link" href="chart_menu.php">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Enrolees Chart</span>
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
                    <h1 class="text-center page-header p-2">STUDENT PROFILE</h1>
                  </div>
                 </div>
            </div>
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
                  <div class="col-lg-6 mx-auto">
                      <div class="auto-form-wrapper">

              <form method="post">
                <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">Name</label>
                  <div class="col-sm-8">
                     <input type="text"  name="fullname" placeholder="Full Name" required readonly class="form-control-plaintext" value="<?php echo $fetch['Surname']." ". $fetch['first_name']." ". $fetch['middle_name']; ?>" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Gender</label>
                  <div class="col-sm-8">
                  <input type="text" readonly class="form-control-plaintext"  name="gender" required value="<?php echo $fetch['gender']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Home Town/City</label>
                  <div class="col-sm-8">
                  <input type="text" readonly class="form-control-plaintext"  name="addr" required value="<?php echo $fetch['address']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">School Attended</label>
                  <div class="col-sm-8">
                     <input type="text" name="school_last_attended" placeholder="School Name" required readonly class="form-control-plaintext" value="<?php echo $fetch['school_last_attended']; ?>" >
                  </div>
                </div> <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Strand / Course</label>
                  <div class="col-sm-8">
                    <input type="text" name="strand_course" placeholder="Enter Student Strand" required readonly class="form-control-plaintext" value="<?php echo $fetch['strand_course']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">GWA</label>
                  <div class="col-sm-8">
                   <input type="text" name="grade_GWA" placeholder="Grade" required readonly class="form-control-plaintext" value="<?php echo $fetch['grade_GWA']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Math</label>
                  <div class="col-sm-8">
                   <input type="text" name="grade_Math" placeholder="Grade" readonly class="form-control-plaintext" value="<?php echo $fetch['grade_Math']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">English</label>
                  <div class="col-sm-8">
                    <input type="text" name="grade_English" placeholder="Grade" readonly class="form-control-plaintext" value="<?php echo $fetch['grade_English']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Science</label>
                  <div class="col-sm-8">
                  <input type="text" name="grade_Science" placeholder="Grade" readonly class="form-control-plaintext" value="<?php echo $fetch['grade_Science']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">1st Choice</label>
                  <div class="col-sm-8">
                    <input type="text" name="fchoice" placeholder="Course" readonly class="form-control-plaintext" value="<?php echo $fetch['fchoice']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">2nd Choice</label>
                  <div class="col-sm-8">
                    <input type="text" name="schoice" placeholder="Course" readonly class="form-control-plaintext" value="<?php echo $fetch['schoice']; ?>">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">3rd Choice</label>
                  <div class="col-sm-8">
                    <input type="text" name="tchoice" placeholder="Course" readonly class="form-control-plaintext" value="<?php echo $fetch['tchoice']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Qualified Course</label>
                  <div class="col-sm-8">
                    <input type="text" name="tchoice" placeholder="Course" readonly class="form-control-plaintext" value="<?php echo $fetch['fcourse']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Raw Score:</label>
                  <div class="col-sm-8">
                    <input type="text" name="raw_score" placeholder="Input Score" readonly class="form-control-plaintext" value="<?php echo $fetch['raw_score']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Remarks:</label>
                  <div class="col-sm-8">
                   <input type="text" name="remarks" placeholder="Remarks Here" readonly class="form-control-plaintext" value="<?php echo $fetch['remarks']; ?>" >
                  </div>
                </div>

                </div>
              </form>
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
  <?php } ?>
</body>

</html>
<?php
}
else if($_SESSION["user_level"]!=0 || $_SESSION['username']=='') {
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
