<?php
session_start();
	 require '../db.php';
   $title =$_GET['title'];
	 if ($_SESSION["user_level"]==0) {
		 $sql ="SELECT * from students";
     $res =mysqli_query($conn,$sql);
     $query ="SELECT * from users where user_level=2";
     $ress =mysqli_query($conn,$query);
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
                      <?php
                      if($title=='Add')
                      {
                        ?>
												<h1 class="text-center page-header p-2">SELECT STUDENT TO CREATE ACCOUNT</h1>
                      <?php } ?>
                      <?php
                      if($title=='Update')
                      {
                        ?>
												<h1 class="text-center page-header p-2">SELECT STUDENT TO UPDATE ACCOUNT</h1>
                      <?php } ?>
                      <?php
                      if($title=='View')
                      {
                        ?>
												<h1 class="text-center page-header p-2">SELECT STUDENT TO VIEW ACCOUNT DETAILS</h1>
                      <?php } ?>
											</div>

                      <!--
                      <form method="POST" class="card card-sm">
        <div class="card-body row no-gutters align-items-center">
          <input type="text" name="search" class="col" placeholder="Search..." name="search"/>
           <button type="submit" name="submit-search" class="col-auto">
           <i class="mdi mdi-magnify btn-success icon-sm"></i></button>
           </div>
          </form>-->
            </div>
          <?php

    require '../db.php';
    if(isset($_POST['submit-search'])) {
    $search = $_POST["search"];
    if($title=='Add')
    {
    $sql = "SELECT * FROM students WHERE Surname LIKE '%$search%' OR first_name LIKE '%$search%' OR fcourse LIKE '%$search%'";
    $result = mysqli_query($conn,$sql);
    $checkResult = mysqli_num_rows($result);

    $sq = "SELECT * FROM students WHERE Surname LIKE '%$search%' OR first_name LIKE '%$search%' OR fcourse LIKE '%$search%'";
    $results = mysqli_query($conn,$sq);
    $checkResults = mysqli_num_rows($results);
    }
    else if($title=='Update' || $title=='View')
    {
    $sql = "SELECT * FROM users WHERE full_name LIKE '%$search%' OR course LIKE '%$search%'";
    $result = mysqli_query($conn,$sql);
    $checkResult = mysqli_num_rows($result);

    $sq = "SELECT * FROM users WHERE full_name LIKE '%$search%' OR course LIKE '%$search%'";
    $results = mysqli_query($conn,$sq);
    $checkResults = mysqli_num_rows($results);
    }
    echo "  About ".$checkResult." result(s)!";
    if ($checkResult > 0 ||  $checkResults > 0 ) {
?>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
                <div class="card-body">
                  <div class="clearfix">
                      <?php
                      while ($row = mysqli_fetch_assoc($result)) {
                      if($title=='Add')
                        {
                        $fname = $row['Surname']." ".$row['first_name'];
                      }
                      else
                      {
                      }
                      if($title=='Add')
                      {
                        ?>
                        <div style="float: left;">
                      <h3 class="ml-5 mt-2"><a href = "add_student.php?std_id=<?php echo $row['student_id'];?>&std=<?php echo $row['Surname']." ".$row['first_name']; ?>&gender=<?php echo $row['gender']; ?>"><?php echo $fname; ?></a></h3>
                    </div>
                    <?php } }
                    ?>

                     <?php
                     while ($rows = mysqli_fetch_assoc($results)) {

                      $fname = $row['full_name'];
                      $std_id = $row['student_id'];
                      if($title=='Update')
                      {
                        ?>
                      <h3 class="text-left mt-2"><a href = "update_account.php?std_id=<?php echo $rows['user_id']; ?>&std=<?php echo $rows['full_name']; ?>"><?php echo $rows['full_name']; ?></a></h3>
                      <?php } ?>
                     <?php
                      if($title=='View')
                      {

                        ?>
                        <table  class="table table-striped table-light text-left">
                      <tr>
                        <td>
                      <h3 class="float-right ml-5 mt-2"><a href = "view_account.php?std_id=<?php echo $rows['user_id']; ?>&std=<?php echo $rows['full_name']; ?>"><?php echo $rows['full_name']; ?></a></h3>
                    </td>
                    <td>
                      <button class="btn btn-danger">Delete</button>
                    </td>
                    <?php } ?>
                       </tr>
                </table>
                  </div>
                </div>
            </div>
            <?php
      }
    }

  }
  ?>
	<table  class="table table-striped table-light text-left">
	<?php
  if($title=="Add" || $title=='Update')
  { ?>
        <tr>
<th>USER</th>
</tr>
<?php 
}
else if($title=="View")
{
?>
    <tr>
<th>USER</th>
<th>Action</th>
</tr>
<?php  
}
	while($row=mysqli_fetch_assoc($res))
	{
    ?>
<tr>
  <?php
  if($title=='Add')
  {
    ?>
	<td><p style="color: black; font-size: 20px;"><a href = "add_student.php?std_id=<?php echo $row['student_id'];?>&std=<?php echo $row['Surname']." ".$row['first_name']; ?>&gender=<?php echo $row['gender']; ?>"><?php echo $row['Surname']." ".$row['first_name']; ?>
	</a></p></td>
<?php }} ?>

<?php
while($row=mysqli_fetch_assoc($ress))
{
  if($title=='Update')
  {
    ?>
  <td><p style="color: black; font-size: 20px;"><a href = "update_account.php?std_id=<?php echo $row['user_id'];?>&std=<?php echo $row['full_name']; ?>"><?php echo $row['full_name']; ?>
  </a></p></td>
<?php } ?>

<?php
  if($title=='View')
  {
    ?>
  <td><p style="color: black; font-size: 20px;"><a href = "view_account.php?std_id=<?php echo $row['user_id'];?>"><?php echo $row['full_name']; ?>
  </a></p></td>
  <td>
              <form method="post">
              <input type="hidden" name="hid" value="<?php echo $row['user_id']; ?>">
                <button type="submit" class="btn btn-danger" name="del">Delete</button></form></td>
<?php } ?>
</tr>
<?php
}
?>
</table>
<?php 
      if(isset($_POST['del']))
              {
                $hid= $_POST['hid'];
                $dsql ="DELETE FROM users where user_id=".$hid;
                $result =mysqli_query($conn,$dsql);
              }
              ?>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a href="" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
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
