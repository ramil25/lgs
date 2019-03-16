<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Request Goodmoral</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/lspu.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="../assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="../assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="../assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.php"><img src="../images/lspu.jpg" alt="logo" style="width: 150px; height: auto;"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul style="float: center">
                            <li class="active"><a href="index.php">home</a></li>
                            <li><a href="#">transaction</a>
                                <ul class="sub-menu">
                                    <li><a href="req_moral.php">Request Good Moral</a></li>
                                    <li><a href="sched_guidance.php">Schedule for Guidance</a></li>
                                </ul>
                            </li>
                            <li><a href="#">message</a>
                                <ul class="sub-menu">
                                    <li><a href="create_message.php">Create Message</a></li>
                                    <li><a href="">View Mailbox</a></li>
                                </ul>
                            </li>
                            <li class="menu-btn">
                                <a href="../index.php" class="login">log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->


    <!-- Feature Area Starts -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <center><h1 style="margin-top: 30px"> Request Goodmoral: </h1><center>
                    <form action="req_moral.php" style="margin-top: 50px">
                     <div class="form-group">
                      <label for="comment">Comment:</label>
                      <textarea class="form-control" rows="5" id="comment"></textarea><br><br>
                      <center><button type="submit" class="btn btn-lg btn-success">Submit</button></center>
                    </div>
              </form>    
            </div>
        </div>
    <!-- Feature Area End -->

    


    <!-- Javascript -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="../assets/js/vendor/wow.min.js"></script>
    <script src="../assets/js/vendor/owl-carousel.min.js"></script>
    <script src="../assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="../assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
