<?php
session_start();
$sid =$_GET['std_id'];
require '../db.php';
if (isset($_SESSION["user_level"])) {

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
                    <h1 class="text-center page-header p-2">UPDATE STUDENT</h1>
                  </div>
                 </div>
            </div>
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
                  <div class="col-lg-6 mx-auto">
                      <div class="auto-form-wrapper">

              <form method="post">
                <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">Surname</label>
                  <div class="col-sm-8">
                     <input type="text" name="surname" placeholder="Surname" required class="form-control" value="<?php echo $fetch['Surname']; ?>" />
                  </div>
                </div>

                <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">First Name</label>
                  <div class="col-sm-8">
                     <input type="text" name="fn" placeholder="First Name" required class="form-control" value="<?php echo $fetch['first_name']; ?>" />
                  </div>
                </div>

                <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">Middle Initial</label>
                  <div class="col-sm-8">
                     <input type="text" name="mi" placeholder="Middle Initial" required class="form-control" value="<?php echo $fetch['middle_name']; ?>" />
                  </div>
                </div>

                <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Gender</label>
                  <div class="col-sm-8">
                  <select class="form-control" name="gender" required value="<?php echo $fetch['gender']; ?>" >
                   <option><?php echo $fetch['gender'] ?></option>
                   <option value="Male">Male</option>
                   <option value="Female">Female</option>
                  </select>
                  </div>
                </div>

                 <div class="form-group row">
                 <label class="label-dark col-sm-4 col-form-label">Town/City</label>
                  <div class="col-sm-8">
                     <input type="text" name="addr" placeholder="Your Home Town or City" required class="form-control" value="<?php echo $fetch['address']; ?>" />
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">School Attended</label>
                  <div class="col-sm-8">
                     <input type="text" name="school_last_attended" placeholder="School Name" required class="form-control" value="<?php echo $fetch['school_last_attended']; ?>" >
                  </div>
                </div> <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Strand / Course</label>
                  <div class="col-sm-8">
                    <input type="text" name="strand_course" placeholder="Enter Student Strand" required class="form-control" value="<?php echo $fetch['strand_course']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">GWA</label>
                  <div class="col-sm-8">
                   <input type="text" name="grade_GWA" placeholder="Grade" required class="form-control" value="<?php echo $fetch['grade_GWA']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Math</label>
                  <div class="col-sm-8">
                   <input type="text" name="grade_Math" placeholder="Grade" required class="form-control" value="<?php echo $fetch['grade_Math']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">English</label>
                  <div class="col-sm-8">
                    <input type="text" name="grade_English" placeholder="Grade" required class="form-control" value="<?php echo $fetch['grade_English']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Science</label>
                  <div class="col-sm-8">
                  <input type="text" name="grade_Science" placeholder="Grade" required class="form-control" value="<?php echo $fetch['grade_Science']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">1st Choice</label>
                  <div class="col-sm-8">
                    <select name="fchoice" class="form-control" required>
                       <option value="<?php echo $fetch['fchoice'] ?>"><?php echo $fetch['fchoice'] ?></option>
                      <option value="BSACCO">BSACCO</option>
                      <option value="BSBA">BSBA</option>
                      <option value="BSOA">BSOA</option>
                       <option value="BSCriminology">BSCriminology</option>
                        <option value="BSEd">BSEd</option>
                         <option value="BEED">BEED</option>
                         <option value="BSAgEng">BSAgEng</option>
                          <option value="BSCS">BSCS</option>
                           <option value="BSIT">BSIT</option>
                            <option value="BSIS">BSIS</option>
                             <option value="ACT">ACT</option>
                              <option value="BSA">BSA</option>
                               <option value="BAT">BAT</option>
                                <option value="BSAB">BSAB</option>
                                 <option value="BSFOODTECH">BSFOODTECH</option>
                      <option value="BS Psychology">BS Psychology</option>  
                       <option value="BSHM">BSHM</option>
                        <option value="BSTM">BSTM</option>
                    </select>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">2nd Choice</label>
                  <div class="col-sm-8">
                    <select name="schoice" class="form-control" required>
                       <option value="<?php echo $fetch['schoice'] ?>"><?php echo $fetch['schoice'] ?></option>
                      <option value="BSACCO">BSACCO</option>
                      <option value="BSBA">BSBA</option>
                      <option value="BSOA">BSOA</option>
                       <option value="BSCriminology">BSCriminology</option>
                        <option value="BSEd">BSEd</option>
                         <option value="BEED">BEED</option>
                         <option value="BSAgEng">BSAgEng</option>
                          <option value="BSCS">BSCS</option>
                           <option value="BSIT">BSIT</option>
                            <option value="BSIS">BSIS</option>
                             <option value="ACT">ACT</option>
                              <option value="BSA">BSA</option>
                               <option value="BAT">BAT</option>
                                <option value="BSAB">BSAB</option>
                                 <option value="BSFOODTECH">BSFOODTECH</option>
                      <option value="BS Psychology">BS Psychology</option>  
                       <option value="BSHM">BSHM</option>
                        <option value="BSTM">BSTM</option>
                    </select>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">3rd Choice</label>
                  <div class="col-sm-8">
                   <select name="tchoice" class="form-control" required>
                       <option value="<?php echo $fetch['tchoice'] ?>"><?php echo $fetch['tchoice'] ?></option>
                      <option value="BSACCO">BSACCO</option>
                      <option value="BSBA">BSBA</option>
                      <option value="BSOA">BSOA</option>
                       <option value="BSCriminology">BSCriminology</option>
                        <option value="BSEd">BSEd</option>
                         <option value="BEED">BEED</option>
                         <option value="BSAgEng">BSAgEng</option>
                          <option value="BSCS">BSCS</option>
                           <option value="BSIT">BSIT</option>
                            <option value="BSIS">BSIS</option>
                             <option value="ACT">ACT</option>
                              <option value="BSA">BSA</option>
                               <option value="BAT">BAT</option>
                                <option value="BSAB">BSAB</option>
                                 <option value="BSFOODTECH">BSFOODTECH</option>
                      <option value="BS Psychology">BS Psychology</option>  
                       <option value="BSHM">BSHM</option>
                        <option value="BSTM">BSTM</option>
                    </select>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Raw Score:</label>
                  <div class="col-sm-8">
                    <input type="text" name="raw_score" placeholder="Input Score" required class="form-control" value="<?php echo $fetch['raw_score']; ?>" >
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="label-dark col-sm-4 col-form-label">Remarks:</label>
                  <div class="col-sm-8">
                   <input type="text" name="remarks" placeholder="Remarks Here" readonly class="form-control"value="<?php echo $fetch['remarks']; ?>" >
                  </div>
                </div>

                <div class="form-group text-center">
                  <button type="submit" class="btn btn-success submit-btn w-50" name="update">Update</button>
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
  <?php
if(isset($_POST['update']))
{
  $coll='';
  $rem='';
  $course='';
  $fn =$_POST['fn'];
   $sn =$_POST['surname'];
    $mi =$_POST['mi'];
  $gender =$_POST['gender'];
   $addr =$_POST['addr'];
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

 //first choice
    if($fchoice=='BSA' && $gwa>=87 && $rs>=68)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BSA';
    }
    else if($fchoice=='BSAB' && $gwa>=83 && $rs>=68)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BSAB';
    }
    else if($fchoice=='BAT' && $gwa>=79 && $rs>=54)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BAT';
    }
    else if($fchoice=='BSFOODTECH' && $gwa>=83 && $rs>=54)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BSFOODTECH';
    }
    else if($fchoice=='BSCS' && $gwa>=83 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='BSCS';
    }
    else if($fchoice=='BSIT' && $gwa>=80 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='BSIT';
    }
    else if($fchoice=='BSIS' && $gwa>=80 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='BSIS';
    }
    else if($fchoice=='ACT' && $gwa>=75 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='ACT';
    }
    else if(($fchoice=='BS Psychology' || $fchoice=='BS PSYCHOLOGY')  && ($gwa>=85 && $rs>=68))
    {
      $coll='CAS';
      $rem ='Qualified';
      $course='BS Psychology';
    }
    else if(($fchoice=='BSCriminology' || $fchoice=='BS Criminology') && ($gwa>=75 && $rs>=68))
    {
      $coll='CCJE';
      $rem ='Qualified';
      $course='BS Criminology';
    }
     else if($fchoice=='BSHM' && $gwa>=75 && $rs>=54)
    {
      $coll='CHMT';
      $rem ='Qualified';
      $course='BSHM';
    }
    else if($fchoice=='BSTM' && $gwa>=75 && $rs>=54)
    {
      $coll='CHMT';
      $rem ='Qualified';
      $course='BSTM';
    }
    else if($fchoice=='BSACCO' && $gwa>=87 && $rs>=68)
    {
      $coll='CBMA';
      $rem ='Qualified';
      $course='BSACCO';
    }
    else if($fchoice=='BSBA' && $gwa>=85 && $rs>=54)
    {
      $coll='CBMA';
      $rem ='Qualified';
      $course='BSBA';
    }
    else if($fchoice=='BSOA' && $gwa>=75 && $rs>=54)
    {
      $coll='CBMA';
      $rem ='Qualified';
      $course='BSOA';
    }
    else if($fchoice=='BSEd' || $fchoice=='BSED' && $gwa>=75 && $rs>=68)
    {
      $coll='CTE';
      $rem ='Qualified';
      $course='BSEd';
    }
    else if(($fchoice=='BEEd' || $fchoice=='BEED') && ($gwa>=75 && $rs>=68))
    {
      $coll='CTE';
      $rem ='Qualified';
      $course='BEED';
    }
    else if(($fchoice=='BSAgEng' || $fchoice=='BSAGENG')  && ($gwa>=87 && $rs>=54))
    {
      $coll='IAE';
      $rem ='Qualified';
      $course='BSAgEng';
    }

    //second choice
    else if($schoice=='BSA' && $gwa>=87 && $rs>=68)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BSA';
    }
    else if($schoice=='BSAB' && $gwa>=83 && $rs>=68)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BSAB';
    }
    else if($schoice=='BAT' && $gwa>=79 && $rs>=54)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BAT';
    }
    else if($schoice=='BSFOODTECH' && $gwa>=83 && $rs>=54)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BSFOODTECH';
    }
    else if($schoice=='BSCS' && $gwa>=83 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='BSCS';
    }
    else if($schoice=='BSIT' && $gwa>=80 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='BSIT';
    }
    else if($schoice=='BSIS' && $gwa>=80 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='BSIS';
    }
    else if($schoice=='ACT' && $gwa>=75 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='ACT';
    }
    else if(($schoice=='BS Psychology' || $schoice=='BS PSYCHOLOGY')  && ($gwa>=85 && $rs>=68))
    {
      $coll='CAS';
      $rem ='Qualified';
      $course='BS Psychology';
    }
    else if(($schoice=='BSCriminology' || $schoice=='BS Criminology') && ($gwa>=75 && $rs>=68))
    {
      $coll='CCJE';
      $rem ='Qualified';
      $course='BS Criminology';
    }
    else if($schoice=='BSHM' && $gwa>=75 && $rs>=54)
    {
      $coll='CHMT';
      $rem ='Qualified';
      $course='BSHM';
    }
    else if($schoice=='BSTM' && $gwa>=75 && $rs>=54)
    {
      $coll='CHMT';
      $rem ='Qualified';
      $course='BSTM';
    }
    else if($schoice=='BSACCO' && $gwa>=87 && $rs>=68)
    {
      $coll='CBMA';
      $rem ='Qualified';
      $course='BSACCO';
    }
    else if($schoice=='BSBA' && $gwa>=85 && $rs>=54)
    {
      $coll='CBMA';
      $rem ='Qualified';
      $course='BSBA';
    }
    else if($schoice=='BSOA' && $gwa>=75 && $rs>=54)
    {
      $coll='CBMA';
      $rem ='Qualified';
      $course='BSOA';
    }
    else if($schoice=='BSEd' || $schoice=='BSED' && $gwa>=75 && $rs>=68)
    {
      $coll='CTE';
      $rem ='Qualified';
      $course='BSEd';
    }
    else if(($schoice=='BEEd' || $schoice=='BEED') && ($gwa>=75 && $rs>=68))
    {
      $coll='CTE';
      $rem ='Qualified';
      $course='BEED';
    }
    else if(($schoice=='BSAgEng' || $schoice=='BSAGENG')  && ($gwa>=87 && $rs>=54))
    {
      $coll='IAE';
      $rem ='Qualified';
      $course='BSAgEng';
    }

    //third choice
    else if($tchoice=='BSA' && $gwa>=87 && $rs>=68)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BSA';
    }
    else if($tchoice=='BSAB' && $gwa>=83 && $rs>=68)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BSAB';
    }
    else if($tchoice=='BAT' && $gwa>=79 && $rs>=54)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BAT';
    }
    else if($tchoice=='BSFOODTECH' && $gwa>=83 && $rs>=54)
    {
      $coll='CA';
      $rem ='Qualified';
      $course='BSFOODTECH';
    }
    else if($tchoice=='BSCS' && $gwa>=83 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='BSCS';
    }
    else if($tchoice=='BSIT' && $gwa>=80 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='BSIT';
    }
    else if($tchoice=='BSIS' && $gwa>=80 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='BSIS';
    }
    else if($tchoice=='ACT' && $gwa>=75 && $rs>=54)
    {
      $coll='CCS';
      $rem ='Qualified';
      $course='ACT';
    }
    else if(($tchoice=='BS Psychology' || $tchoice=='BS PSYCHOLOGY')  && ($gwa>=85 && $rs>=68))
    {
      $coll='CAS';
      $rem ='Qualified';
      $course='BS Psychology';
    }
    else if(($tchoice=='BSCriminology' || $tchoice=='BS Criminology') && ($gwa>=75 && $rs>=68))
    {
      $coll='CCJE';
      $rem ='Qualified';
      $course='BS Criminology';
    }
    else if($tchoice=='BSHM' && $gwa>=75 && $rs>=54)
    {
      $coll='CHMT';
      $rem ='Qualified';
      $course='BSHM';
    }
    else if($tchoice=='BSTM' && $gwa>=75 && $rs>=54)
    {
      $coll='CHMT';
      $rem ='Qualified';
      $course='BSTM';
    }
    else if($tchoice=='BSACCO' && $gwa>=87 && $rs>=68)
    {
      $coll='CBMA';
      $rem ='Qualified';
      $course='BSACCO';
    }
    else if($tchoice=='BSBA' && $gwa>=85 && $rs>=54)
    {
      $coll='CBMA';
      $rem ='Qualified';
      $course='BSBA';
    }
    else if($tchoice=='BSOA' && $gwa>=75 && $rs>=54)
    {
      $coll='CBMA';
      $rem ='Qualified';
      $course='BSOA';
    }
    else if($tchoice=='BSEd' || $tchoice=='BSED' && $gwa>=75 && $rs>=68)
    {
      $coll='CTE';
      $rem ='Qualified';
      $course='BSEd';
    }
    else if(($tchoice=='BEEd' || $tchoice=='BEED') && ($gwa>=75 && $rs>=68))
    {
      $coll='CTE';
      $rem ='Qualified';
      $course='BEED';
    }
    else if(($tchoice=='BSAgEng' || $tchoice=='BSAGENG')  && ($gwa>=87 && $rs>=54))
    {
      $coll='IAE';
      $rem ='Qualified';
      $course='BSAgEng';
    }
    else{
      $course='none';
      $coll ='none';
      $rem='Unqualified';
    }

  $updatesql ="UPDATE students set Surname='".$sn."', first_name='".$fn."', middle_name='".$mi."',gender='".$gender."',address='".$addr."',school_last_attended='".$lsa."',strand_course='".$sc."',grade_GWA=".$gwa.",grade_Math=".$math.",grade_English=".$eng.",grade_Science=".$scie.",fchoice='".$fchoice."',schoice='".$schoice."',tchoice='".$tchoice."',colleges='".$coll."',fcourse='".$course."',raw_score=".$rs.",remarks='".$rem."' WHERE student_id=".$sid;
   $res= mysqli_query($conn,$updatesql);
  if($res)
  {
    echo "<script>alert('Updated successfully');
    location.href='student_admission.php';
    </script>";
  }
}

 } ?>
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
