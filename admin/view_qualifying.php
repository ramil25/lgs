<?php
session_start();
require '../db.php';
if (isset($_SESSION["user_level"])) {
$year=$_GET['dateadd'];
$title=$_GET['title'];
$rn =0;
if(isset($_GET['title']))
{
  $sql ="SELECT * FROM students where date_ad='".$year."'";
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
<div class="container-fluid">
<div class="row-fluid">
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <h1 class="text-center page-header p-2"><?php echo $title; ?></h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="text-right"><?php echo $year; ?></h2>
              <table  class="table table-responsive table-striped text-center">
          <tr>
          <thead class="table-dark">
            <th>RN</th>
            <th>NAME</th>
            <th>Strand</th>
            <th>Gender</th>
            <th>Last School Attended</th>
            <th>GWA</th>
            <th>English</th>
            <th>Math</th>
            <th>Science</th>
            <th>1st Choice</th>
            <th>2nd Choice</th>
            <th>3rd Choice</th>
              <th>RAW SCORE</th>
              <th>Remarks</th>
          </tr>
          </thead>
                  <?php
          while($row=mysqli_fetch_assoc($res))
      {
      $rn++;
       ?>
        <tr>
          <td><?php echo $rn; ?></td>
          <td><?php echo $row['Surname']." ".$row['first_name']." ".$row['middle_name'];
            ?></td>
            <td><?php echo $row['strand_course'];
            ?></td>
            <td><?php echo $row['gender'];
            ?></td>
            <td><?php echo $row['school_last_attended'];
            ?></td>
             <td><?php echo $row['grade_GWA'];
            ?></td>
             <td><?php echo $row['grade_English'];
            ?></td>
             <td><?php echo $row['grade_Math'];
            ?></td>
             <td><?php echo $row['grade_Science'];
            ?></td>
            <td><?php echo $row['fchoice'];
            ?></td>
              <td><?php echo $row['schoice'];
            ?></td>
              <td><?php echo $row['tchoice'];
            ?></td>
            <td><?php echo $row['raw_score'];
            ?></td>
            <td><?php echo $row['remarks'];
            ?></td>
            
        </tr>
      <?php }
      ?>

               </table>
               </div>
             </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer" style="margin-top:100%;">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a href="" target="_blank">LSPU</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">LSPU
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
    
  <?php

}
?>
</div>
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
