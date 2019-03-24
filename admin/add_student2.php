<?php  
$title=$_GET['title'];
if(isset($_POST['add']))
{
  require '../db.php';
  $fn =$_POST['fullname'];
  $gender =$_POST['gender'];
  $lsa =$_POST['school_last_attended'];
  $sc =$_POST['strand_course'];
  $gwa=$_POST['grade_GWA'];
  $math =$_POST['grade_Math'];
  $eng=$_POST['grade_English'];
  $scie=$_POST['grade_Science'];
  $fchoice =$_POST['fchoice'];
  $schoice =$_POST['schoice'];
  $tchoice =$_POST['tchoice'];
  $rs =$_POST['raw_score'];
  $rem =$_POST['remarks'];
  $date=$_POST['month']."/".$_POST['day']."/".$_POST['year'];
  $addsql ="INSERT INTO students(full_name,gender,school_last_attended,strand_course,grade_GWA,grade_Math,grade_English,grade_Science,fchoice,schoice,tchoice,raw_score,remarks,date_ad,photo_link) VALUES ('".$fn."','".$gender."','".$lsa."','".$sc."',".$gwa.",".$math.",".$eng.",".$scie.",'".$fchoice."','".$schoice."','".$tchoice."','".$rs."','".$rem."','".$date."','')";
  $res= mysqli_query($conn,$addsql);
  if($res)
  {
    echo "<script>alert('Student added successfully');
    location.href='student_admission.php';
    </script>";
  }
}
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
            <a class="nav-link" href="add_staff.php">
              <i class="menu-icon mdi mdi-account-plus"></i>
              <span class="menu-title">Create Staff Account</span>
            </a>
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
                  <div class="card card-statistics">
                    <h1 class="text-center page-header p-2">ADD STUDENT</h1>
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
                     <input type="text" name="fullname" placeholder="Full Name" required class="form-control" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Gender</label>
                  <div class="col-sm-8">
                  <select class="form-control" name="gender" required>
                   <option>Gender</option>
                   <option value="Male">Male</option>
                   <option value="Female">Female</option>
                  </select>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">School Attended</label>
                  <div class="col-sm-8">
                     <input type="text" name="school_last_attended" placeholder="School Name" required class="form-control" />
                  </div>
                </div> <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Strand / Course</label>
                  <div class="col-sm-8">
                    <input type="text" name="strand_course" placeholder="Enter Student Strand" required class="form-control" />
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">GWA</label>
                  <div class="col-sm-8">
                   <input type="text" name="grade_GWA" placeholder="Grade" required class="form-control"/>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Math</label>
                  <div class="col-sm-8">
                   <input type="text" name="grade_Math" placeholder="Grade" required class="form-control"/>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">English</label>
                  <div class="col-sm-8">
                    <input type="text" name="grade_English" placeholder="Grade" required class="form-control"/>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Science</label>
                  <div class="col-sm-8">
                  <input type="text" name="grade_Science" placeholder="Grade" required class="form-control"/>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">1st Choice</label>
                  <div class="col-sm-8">
                    <input type="text" name="fchoice" placeholder="Course" required class="form-control">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">2nd Choice</label>
                  <div class="col-sm-8">
                    <input type="text" name="schoice" placeholder="Course" required class="form-control">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">3rd Choice</label>
                  <div class="col-sm-8">
                    <input type="text" name="tchoice" placeholder="Course" required class="form-control">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Raw Score:</label>
                  <div class="col-sm-8">
                    <input type="text" name="raw_score" placeholder="Input Score" required class="form-control">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Remarks:</label>
                  <div class="col-sm-8">
                   <input type="text" name="remarks" placeholder="Remarks Here" required class="form-control">
                  </div>
                </div>

                   <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Date:</label>
                  <div class="col-sm-8 form-control">
                   <select name="month">
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
             <option value="May">May</option>
          </select>
                  
       <select name="day">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
       </select>

       <select name="year">
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
             <option value="2030">2030</option>
          </select>
         
                  </div>
                </div>

                <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Upload File:</label>
                  <div class="col-sm-8">
                    <input type="file" name="photo_link" style="text-indent: 0px">
                  </div>
                </div>

                <div class="form-group text-center">
                  <button type="submit" class="btn btn-success submit-btn w-50" name="add">Add</button>
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