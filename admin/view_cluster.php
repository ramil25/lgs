<?php
require '../db.php';
$year=$_GET['year'];
$title=$_GET['title'];
$c1='';
$c2='';
$c3='';
if(isset($_GET['title']))
{
  if($title=="CA")
  {
    $c1='BSA';
    $c2='BAT';
    $c3='BSAgEd';
    $c4='BSAB';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CCS")
  {
    $c1='BSIT';
    $c2='BSCS';
    $c3='BSIS';
    $c4='ACT';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CHMT")
  {
    $c1='DHRM';
    $c2='BSHRM';
    $c3='BS Tourism';
    $c4='';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CCJE")
  {
    $c1='BSCrim';
    $c2='';
    $c3='';
    $c4='';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="IAE")
  {
    $c1='BSAgEng';
    $c2='';
    $c3='';
    $c4='';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CTE")
  {
    $c1='BSEd';
    $c2='BEED';
    $c3='';
    $c4='';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CBMA")
  {
    $c1='BSBA';
    $c2='BSAccountancy';
    $c3='BSOA';
    $c4='ACS';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CAS")
  {
    $c1='BSP';
    $c2='BS Food Tech';
    $c3='';
    $c4='';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
$res =mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cluster</title>
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
                  <img src="../images/default.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Dem</p>
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
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chart.php">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Enrolees Chart</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
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
            <a class="nav-link" href="../index.php">
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
                  <div class="card">
                    <h1 class="text-center page-header p-2"><?php echo $title; ?></h1>
                  </div>
                 </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin">
              <button class="btn btn-success" onclick="location.href='cluster.php'">Back</button>
                <div class="card-body row no-gutters align-items-center">
              <table  class="table table-light table-responsive text-center">
          <tr>
            <td>NAME</td>
            <td>COURSE
              <td>RAW SCORE</td></td>
              <td>GWA</td>
              <td>Remarks</td>
          </tr>
                  <?php 
          while($row=mysqli_fetch_assoc($res))
      { ?>
        <tr>
          <td><p style="color: black; font-size: 20px;"><?php echo $row['full_name'];
            ?></p></td>
            <td><p style="color: black; font-size: 20px;"><?php echo $row['fchoice'];
            ?></p></td>
            <td><p style="color: black; font-size: 20px;"><?php echo $row['raw_score'];
            ?></p></td>
            <td><p style="color: black; font-size: 20px;"><?php echo $row['grade_GWA'];
            ?></p></td>
           <td><p style="color: black; font-size: 20px;"><?php echo $row['remarks'];
            ?></p></td>
            <td><button class="btn btn-success">Delete</button></td>
        </tr>
      <?php } ?>
               </table>
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
  <?php
}
?>
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