<?php
require '../db.php';
session_start(); 
$success = '';
if(isset($_POST['update-account']))
{
  $target_dir = "../images/";
$target_file = "../images/".basename($_FILES["imgp"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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
   $fname = $_POST['fullname'];
   $posi = $_POST['position'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $repeat = $_POST['repeat-password'];
   $mobile = $_POST['mobile'];
   $email = $_POST['email'];
   $sql = "UPDATE users SET profile_pic='".$target_file."', full_name='".$fname."',position='".$posi."',user_name='".$username."',user_password='".$password."',mobile='".$mobile."',email='".$email."' WHERE user_name='".$_SESSION['user_name']."'";
   $query = mysqli_query($conn,$sql);
    if ($password !== $repeat)
    {
      $success .= '<p class="text-danger text-uppercase text-center" style="font-weight:bold";>⚠️ Password do not match
      </p>';
    }
    else if (strlen($password) < 10)
    {
      $success .= '<p class="text-danger text-uppercase text-center" style="font-weight:bold";>⚠️ Password is too weak
      </p>';
    }
    else if (!$query)
    {
      $success .= '<p class="text-danger text-uppercase text-center" style="font-weight:bold";>⚠️ Something Went Wrong
      </p>';
    }
    else if ($query)
    {
        $success .= '<p class="text-success text-uppercase text-center" style="font-weight:bold";>✔️ Updated Successfully
        </p>';
    }

}

if(isset($_GET['user_id']))
  {
    $query ="SELECT * from users where user_name='".$_SESSION['user_name']."'";
    $ress =mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($ress);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Update Account</title>
  <!-- plugins:css -->
  <link rel="icon" href="../images/lspu.png" />
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
                  <!-- user-img -->
                  <a href="update_user.php?user_id=<?php echo $_SESSION['user_name']; ?>"><img src="<?php echo $row['profile_pic'] ?>" alt="profile image"></a>
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
                    <h1 class="text-center page-header p-2">UPDATE ACCOUNT</h1>
                  </div>
                 </div>
            </div>
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
                  <div class="col-lg-6 mx-auto">
                      <div class="auto-form-wrapper">
                      <?php echo $success; ?>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label"> Full Name</label>
                  <div class="col-sm-8">
                     <input type="text" name="fullname" placeholder="Full Name" class="form-control" value="<?php echo $row['full_name']; ?>" />
                  </div>
                </div>
                <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">Position</label>
                  <div class="col-sm-8">
                     <input type="text" name="position" placeholder="Position" class="form-control" value="<?php echo $row['position']; ?>" />
                  </div>
                </div>


                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label"> Username</label>
                  <div class="col-sm-8">
                   <input type="text" name="username" value="<?php echo $row['user_name']; ?>" placeholder="Grade" required class="form-control"/>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Password</label>
                  <div class="col-sm-8">
                   <input type="password" value="<?php echo $row['user_password']; ?>" name="password" placeholder="Grade" required class="form-control"/>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Confirm Password</label>
                  <div class="col-sm-8">
                    <input type="password" name="repeat-password" placeholder="Confirm" required class="form-control"/>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Mobile</label>
                  <div class="col-sm-8">
                  <input type="text" value="<?php echo $row['mobile']; ?>" name="mobile" placeholder="Grade" required class="form-control"/>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Email</label>
                  <div class="col-sm-8">
                    <input type="email" value="<?php echo $row['email']; ?>" name="email" placeholder="Email" required class="form-control">
                  </div>
                </div>
                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Upload File</label>
                  <div class="col-sm-8">
                    <input type="file" name="imgp" id="imgp" placeholder="Course" required class="btn btn-block btn-primary">
                  </div>
                </div>



                <div class="form-group text-center">
                  <button type="submit" class="btn btn-success submit-btn w-50" name="update-account">Update</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">

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
</body>

</html>
<?php } ?>