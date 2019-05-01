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
			session_start();
			$_SESSION["user_level"] = $row['user_level'];
			$_SESSION["user_name"] = $un;
			if($_SESSION["user_level"]==0)
			{
        $_SESSION['profile_pic'] = $row['profile_pic'];
				$_SESSION["user_name"] = $un;
        $_SESSION["user_id"] = $row['user_id'];
				header("location: admin/");
			}
      else if($_SESSION["user_level"]==1)
      {
          $_SESSION['profile_pic'] = $row['profile_pic'];
           $_SESSION["user_id"] = $row['user_id'];
        $_SESSION["user_name"] = $un;
        header("location: staff/");
      }
			else if($_SESSION["user_level"]==2)
			{
          $_SESSION['profile_pic'] = $row['profile_pic'];
				$_SESSION["user_name"] = $un;
				header("location: students/");
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
  <script>
            function showPass()
            {
                var pass = document.getElementById('pass');
                if(document.getElementById('check').checked)
                {
                    pass.setAttribute('type','text');
                }else{
                    pass.setAttribute('type','password');
                }
            }
        </script>
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
                 <label class="label-dark">Username</label>
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
                  <label class="label-dark">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="Password" name="ps" id="pass">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                <div class="form-group">
                     <input type="checkbox" id="check" onclick="showPass();"/>
                     <small class="text-sm-right">Show Password</small>
                </div>
                  <button type="submit" class="btn btn-primary submit-btn btn-block" name="login">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">

                  </div>
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
