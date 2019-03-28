<?php
require 'db.php';
$sql ="SELECT * FROM students";
$res =mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Results</title>

	<link rel="shortcut icon" href="images/lspu.png">
	<link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="css/students.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<body bgcolor="#eaf0f2">

<header class="header-two-bars">

	<div class="header-first-bar">

		<div class="header-limiter">

			<a href="index.php">
			<img src="images/lspulogo.png" class="img-fluid" alt="Home" style="margin-left:10px;float:left;width: 120px; height: auto;"></a>

			<nav>
				<a href="index.php" style="margin-right: 30px;">Newsfeeds</a>
				<a href="result.php" class="selected" style="margin-right: 30px;">Results</a>
				<a href="aboutus.php" style="margin-right: 30px;">About Us</a>
			</nav>

			<a href="login.php" class="btn logout-button">Login</a>

		</div>

	</div>

</header>

<!-- The content of your page would go here. -->


<div class="menu" style="background-color: #eaf0f2;">
	<div class="container">
		<div class="row">
			<div class="col-11">
				<form method="get">
				<input class="form-control" type="text" name="search" placeholder="Search..." value="">
			</div>
			<div class="col-1">
			<button type="submit" name="submit-search" class=" ml-0 form-control">
           <i class="mdi mdi-magnify icon-sm"></i></button>
       </form>
			</div>

			<div class="col-12">
				<table class="table table-hover table-striped text-left">
					<?php 
					if(isset($_GET['submit-search']))
					{
					$s =$_GET['search'];
					$query ="SELECT * FROM students WHERE full_name LIKE '".$s."%'";
					$ress =mysqli_query($conn,$query);
					if($ress)
					{ ?>
						<tr>
						<th><h3>Names of Examiners</h3></th>
						<th><h3>Course</h3></th>
						<th><h3>Results</h3></th>
					</tr>
					<?php
          while($rows=mysqli_fetch_assoc($ress))
	  { ?>
	  <tr>
	<td style="font-size: 20px;"><?php echo $rows['full_name']; ?></td>

	<td style="font-size: 20px;"> <?php echo $rows['fchoice']; ?></td>

	<td style="font-size: 20px;">  <?php echo $rows['remarks']; ?></td>
	  </tr>
	  <?php }
					}
				}
				else
				{
					?>
					<tr>
						<th><h3>Names of Examiners</h3></th>
						<th><h3>Course</h3></th>
						<th><h3>Results</h3></th>
					</tr>
					<?php
          while($row=mysqli_fetch_assoc($res))
	  { ?>
	  <tr>
	<td style="font-size: 20px;"><?php echo $row['full_name']; ?></td>

	<td style="font-size: 20px;"> <?php echo $row['fchoice']; ?></td>

	<td style="font-size: 20px;">  <?php echo $row['remarks']; ?></td>
	  </tr>
	  <?php }  }?>
				</table>
			</div>
			
		</div>
		
	</div>


</div>

</body>

</html>
