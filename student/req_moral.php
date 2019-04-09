<?php
require '../db.php';
$sql ="SELECT * FROM students WHERE remarks='Qualified'";
$res =mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Newsfeed</title>
    <link rel="stylesheet" href="../css/students.css">
    <link rel="stylesheet" href="../css/components.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="shortcut icon" href="../images/lspu.png">
    <link rel="stylesheet" href="../css/responsee.css">
    <link rel="stylesheet" href="../assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="../css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="../assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="../assets/js/validation.js"></script> 
  </head>  
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/prospera-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="../img/premium-features.png" alt=""></a>
    <!-- HEADER -->
    <header role="banner">    
      <!-- Top Bar -->
      <div class="top-bar background-white">
        <div class="line">
          <div class="s-12 m-6 l-6">
            <div class="top-bar-contact" style="margin-top: 15px;">
              <h6 class="text-size-12">Contact Us: (049)813-0452 | <a class="text-orange-hover" href="mailto:contact@sampledomain.com">icts@lspusc.edu.ph</a></h6>
            </div>
          </div>        
        </div>
      </div>
      
      <!-- Top Navigation -->
      <nav class="background-white background-primary-hightlight">
        <div class="line" >
          <div class="s-12 l-2">
            <a href="index.html" class="logo"><img src="../images/lspulogo.png" alt="" style="margin-left:10px;float:left;width: 130px; height: auto;"></a>
          </div>
          <div class="top-nav s-12 l-10">
            <p class="nav-text"></p>
            <ul class="right chevron">
              <li><a href="index.php">Newsfeed</a></li>
              <li><a href="result.php">Results</a></li>
              <li><a href="req_moral.php">Request Good Moral</a></li>
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
      
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

                        $sql =  mysqli_query($conn,"SELECT * From users WHERE user_level='1'");
                        $row = mysqli_num_rows($sql);


                            while ($row = mysqli_fetch_array($sql))
                            { ?>
                              <option value="<?php echo $row['full_name']; ?>"><?php echo $row['full_name']; ?></option>
                              <?php 
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

    
    <!-- FOOTER -->
    
    <script type="text/javascript" src="../js/responsee.js"></script>
    <script type="text/javascript" src="../assets/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../js/template-scripts.js"></script>   
   </body>
</html>