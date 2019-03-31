
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Newsfeed</title>

	<link rel="shortcut icon" href="../images/lspu.png">
	<link rel="stylesheet" href="../css/students.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<body bgcolor="#eaf0f2">

<header class="header-two-bars">

	<div class="header-first-bar">

		<div class="header-limiter">

			<a href="index.php">
			<img src="../images/lspulogo.png" class="img-fluid" alt="Home" style="margin-left:10px;float:left;width: 120px; height: auto;"></a>

			<nav>
				<a href="index.php"  class="selected" style="margin-right: 30px;">Newsfeeds</a>
				<a href="result.php" style="margin-right: 30px;">Results</a>
				<a href="req_moral.php" style="margin-right: 30px;">Request Good Moral</a>
				<a href="aboutus.php" style="margin-right: 30px;">About Us</a>
			</nav>

			<a href="logout.php" class="btn logout-button">Logout</a>

		</div>

	</div>

</header>

<!-- The content of your page would go here. -->


	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-6 col-md-8 col-lg-8 ">
	<div class="menu" style="background-color: #eaf0f2;">
	<center>
	<table>
		<tr>
			<th style="text-align: center;">Announcements</th>
		</tr>
	</center>
<?php
	session_start();
	require '../db.php';

	$sql = "SELECT * FROM announcement";
	$result = $conn -> query($sql);
	if ($result -> num_rows > 0) {
		while ($row = $result -> fetch_assoc()) {
			echo "<tr><td>".$row["announcement"]."<br></td></tr>"; 
		}
		echo "</table>";
	}
	else {
		echo "<i>0 results</i>";
	}
    ?>		

	</div>	
	</div>

	<div class="col-sm-6 col-md-4 col-lg-4 ">
	<div class="menu" style="background-color: #eaf0f2;">	
		<h4>Images</h4>
	</div>
	</div>

	</div>
	</div>

	
</body>

</html>
