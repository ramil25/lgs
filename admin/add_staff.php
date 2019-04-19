<?php
session_start();
  $success = '';
  require '../db.php';
  $success = '';
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["imgp"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (isset($_POST['add']))
    {
      $check = getimagesize($_FILES["imgp"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imgp"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imgp"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  }
      $username = $_POST['username'];
      $password = $_POST['password'];
      $fname = $_POST['fullname'];
      $mname = $_POST['middlename'];
      $lname = $_POST['lastname'];
      $gender = $_POST['gender'];
      $pos = $_POST['position'];
      $camp = $_POST['camp'];
      $fulln =$fname." ".$lname;
      $sql = 'INSERT INTO users(full_name,user_name,user_password,first_name,middle_name,last_name,gender,position,campus,profile_pic,user_level) values("'.$fulln.'","'.$username.'","'.$password.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$gender.'","'.$pos.'","'.$camp.'","'.$target_file.'",1)';
      $query = mysqli_query($conn,$sql);
      if ($query)
      {
        $success .= '<p class="text-success text-uppercase text-center" style="font-weight:bold";>✔️ Added Successfully
        </p>';
      }
      else if (!$query)
      {
        $success .= '<p class="text-danger text-uppercase text-center" style="font-weight:bold";>⚠️ Something Went Wrong
        </p>';
      }
    }
    if (isset($_SESSION["user_level"])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add Staff Account</title>
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
              <div class="user-wrapper">
                <div class="profile-image">
                  <a href="update_user.php?user_id=<?php echo $_SESSION['user_name']; ?>"><img src="../images/default.png" alt="profile image"></a>
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
                  <a class="nav-link" href="manage_student.php">Manage Student Request</a>
                </li>
              </ul>
            </div>
             <li class="nav-item">
            <a class="nav-link" href="add_staff.php">
              <i class="menu-icon mdi mdi-account-plus"></i>
              <span class="menu-title">Create Staff Account</span>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chart_menu.php">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Enrolees Chart</span>
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
                    <h1 class="text-center page-header p-2">ADD STAFF</h1>
                  </div>
                 </div>
            </div>
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
                  <div class="col-lg-6 mx-auto">
                      <div class="auto-form-wrapper">
              <form action="" method="POST" enctype="multipart/form-data">
                <!--FNAME-->
                <?php echo $success; ?>
                <div class="form-group row">
                <label class="label-dark col-sm-4 col-form-label">Username</label>
                 <div class="col-sm-8">
                    <input type="text" name="username" placeholder="Type your username" required class="form-control" />
                 </div>
               </div>
                <div class="form-group row">
                <label class="label-dark col-sm-4 col-form-label">Password</label>
                 <div class="col-sm-8">
                    <input type="password" name="password"  placeholder="Type your password" required class="form-control" />
                 </div>
               </div>
                <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">First Name</label>
                  <div class="col-sm-8">
                     <input type="text" name="fullname" placeholder="First Name" required class="form-control" />
                  </div>
                </div>
                  <!--MNAME-->
                  <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">Middle Name</label>
                  <div class="col-sm-8">
                     <input type="text" name="middlename" placeholder="Middle Name" required class="form-control" />
                  </div>
                </div>
                <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">Last Name</label>
                  <div class="col-sm-8">
                     <input type="text" name="lastname" placeholder="Last Name" required class="form-control" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Gender</label>
                  <div class="col-sm-8">
                  <select class="form-control" name="gender" required>
                    <option disabled>Choose Gender</option>
                   <option value="Male">Male</option>
                   <option value="Female">Female</option>
                  </select>
                  </div>
                </div>
                <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">Position</label>
                  <div class="col-sm-8">
                     <input type="text" name="position" placeholder="Your Position" required class="form-control" />
                  </div>
                </div>
                   <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">Email Address</label>
                  <div class="col-sm-8">
                     <input type="text" name="camp" placeholder="Email Address" required class="form-control" />
                  </div>
                </div>
                      <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">Upload Photos</label>
                  <div class="col-sm-8">
                     <input type="file" name="imgp" id="imgp" required class="btn btn-primary btn-block" />
                  </div>
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-success submit-btn w-50" name="add">Add</button>
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
