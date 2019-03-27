<?php
session_start();
require '../db.php';
  if (isset($_POST['submit']))
  {
  $rcv = $_POST['reciever'];
  $cmmt = $_POST['comment'];

  $sql = 'INSERT INTO message(comment,reciever) VALUES ("'.$cmmt.'","'.$rcv.'")';
  $query = mysqli_query($conn,$sql);
      if ($query)
      {
        echo "<script>alert('Request Sent!');
        location.href='req_moral.php';
        </script>";
      }
      else if (!$query)
      {
        echo "<script>alert('Something went Wrong!');
        location.href='req_moral.php';
        </script>";
      }
  }

 ?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>Request Good Moral</title>

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
				<a href="index.php" style="margin-right: 30px;">Newsfeeds</a>
				<a href="result.php"  style="margin-right: 30px;">Results</a>
				<a href="req_moral.php" class="selected" 	style="margin-right: 30px;">Request Good Moral</a>
				<a href="aboutus.php" style="margin-right: 30px;">About Us</a>
			</nav>

			<a href="logout.php" class="btn logout-button">Logout</a>

		</div>

	</div>

</header>

<!-- The content of your page would go here. -->


<div class="menu" style="background-color: #eaf0f2;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<form method="post" action="req_moral.php" style="margin-top: 20px">
                    <div class="form-group">

                    <h1 style="margin-top: 30px"> Request Goodmoral </h1><center>
                    
                    <label for="rec1" style="margin-top: 20px;">Select Reciever:</label>

                    <select class="form-control" name="reciever">
                    	<option value="pick">Select Reciever</option>
				        <?php
				        session_start();
						require '../db.php';

                        $sql =  mysqli_query($conn,"SELECT user_name From users WHERE user_level='1'");
                        $row = mysqli_num_rows($sql);


                            while ($row = mysqli_fetch_array($sql))
                            {
                                echo "<option value='". $row['user_name'] ."'>" .$row['user_name'] ."</option>" ;
                            }
                            echo "</select>" ;

                        ?>
				    </select><br>

                      <textarea class="form-control" rows="8" name="comment" placeholder="Comment..."></textarea><br><br>
                      <center><input type="submit" class="btn btn-lg btn-success" name="submit"></center>
                    </div>
              </form>    
            </div>
        </div>
				
			</div>
			
		</div>
		
	</div>


</div>

</body>

</html>
