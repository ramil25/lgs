
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body bgcolor="#ffffff">

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
	<div style="background-color: #e9ebee;">	
		<div id="demo" class="carousel slide" data-ride="carousel"><br>

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <center>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/carousel/slide1.jpg" alt="Los Angeles" width="60%" height=auto>
    </div>
    <div class="carousel-item">
      <img src="../images/carousel/slide2.jpg" alt="Chicago" width="60%" height=auto>
    </div>
    <div class="carousel-item">
      <img src="../images/carousel/slide3.jpg" alt="New York" width="60%" height=auto>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</center>
	</div>
	</div>

	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12 ">
	<div class="menu" style="background-color: #e9ebee;">
	<center>
	<table class="table">
		<thead class="thead-dark table-hover">
		
		<tr>
			<th style="text-align: center;">Announcements</th>
		</tr>
	</thead>
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
		echo "<tr><td><i>No Announcements</tr></td></i>";
	}
    ?>		

	</div>	
	</div>



	</div>
	</div>

	</div>
	</div>

	
</body>

</html>
