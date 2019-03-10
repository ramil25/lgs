<?php
$empty = '';
$error ='';
require 'db.php';
if($conn)
{
	if(isset($_POST['login']))
	{
		$un =$_POST['un'];
		$ps =$_POST['ps'];
	$sql="SELECT * FROM users WHERE user_name='".$un."' and user_password='".$ps."'";
	$result =mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	if (empty($un) || empty($ps))
	{
		$empty .= '<p style="margin-top:10px;text-align:center;color:#e60000;font-weight:bold;font-size: 17px;text-transform: uppercase;">please fill the required fields</p>';
	}
	else if($row)
	{
			if($row['user_level']==1)
			{
				header("location: admin/");
			}
			else if($row['user_level']==2)
			{
				header("location: student/");
			}
	}
	else if (!$row)
	{
		$error .= '<p style="margin-top:10px;text-align:center;color:#e60000;font-weight:bold;font-size: 17px;text-transform: uppercase;">Wrong username or password</p>';
	}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Page</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/lspu.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
          	        	<center>
<span><img src="images/lspu.png" width="120" height="120"></span>
</center>

            <div class="auto-form-wrapper">
				<?php echo $empty ?>
				<?php echo $error ?>
              <form method="post">
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" name="un">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="Password" name="ps">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary submit-btn btn-block" name="login">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
           
                  </div>
                  <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2019 LSPU All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
</body>

</html>

</body>
</html>
