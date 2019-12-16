<?php
 session_start();
 ?><!DOCTYPE html>
 <html lang="en">
 <head>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <meta name="description" content="Name of your web site">
 <meta name="author" content="Marketify">

 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 <title>DIU Defense</title>

 <!-- STYLES -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/plugins.css" />
 <link rel="stylesheet" type="text/css" href="css/style.css" />
 <!-- /STYLES -->

 </head>

 <body>

 <!-- WRAPPER ALL -->
 <div class="wrapper_all">

 	<div id="popup_blog">
 		<div class="container">
 			<div class="inner_popup scrollable"></div>
 		</div>
 		<span class="close"><a href="#"></a></span>
 	</div>

 	<!-- PRELOADER -->
 	<div class="preloader">
 		<div class="spinner_wrap">
 			<div class="spinner"></div>
 		</div>
 	</div>
 	<!-- /PRELOADER -->

 	<!-- MOBILE MENU -->
 	<div class="mobile_header_wrap">
 		<div class="main_wrap">
 			<div class="logo">
 				<img src="img/logo/Logo.png" alt="" />
 			</div>
 			<div class="trigger">
 				<div class="hamburger hamburger--collapse-r">
 					<div class="hamburger-box">
 						<div class="hamburger-inner"></div>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="mobile_menu_wrap">
    			<div class="mob_menu">
 				<ul class="anchor_nav">
 					<li><a href="index.php#home">Home</a></li>
 					<li><a href="index.php#instructions">instructions</a></li>
 					<li><a href="index.php#Supervisor">Supervisor</a></li>
 					<li><a href="index.php#TitleDefense">Title Defense</a></li>
 					<li><a href="index.php#Notice">Notice</a></li>
 					<li><a href="index.php#Sign in">Sign in</a></li>
 				</ul>
 			</div>
 		</div>
 	</div>
 	<!-- /MOBILE MENU -->

     <!-- CONTENT -->
 	<div class="content">

 		<!-- LEFTPART -->
 		<div class="leftpart_wrap">
 			<div class="leftpart_inner">
 				<div class="logo_wrap">
 					<a href="#"><img src="img/logo/Logo.png" alt="" /></a>
 				</div>
 				<div class="menu_list_wrap">
 					<ul class="anchor_nav">
 						<li><a href="index.php#home">Home</a></li>
 						<li><a href="index.php#instructions">instructions</a></li>
 						<li><a href="index.php#Supervisor">Supervisor</a></li>
 						<li><a href="index.php#TitleDefense">Title Defense</a></li>
 						<li><a href="index.php#Notice">Notice</a></li>
 						<li><a href="index.php#Signin">Sign in</a></li>
 					</ul>
 				</div>
 				<div class="leftpart_bottom">
 					<!-- <div class="social_wrap">
 						<ul>
 							<li><a href="#"><i class="xcon-facebook"></i></a></li>
 							<li><a href="#"><i class="xcon-twitter"></i></a></li>
 							<li><a href="#"><i class="xcon-linkedin"></i></a></li>
 							<li><a href="#"><i class="xcon-instagram"></i></a></li>
 							<li><a href="#"><i class="xcon-behance"></i></a></li>
 						</ul>
 					</div> -->
 				</div>
 				<a class="resize" href="#"><i class="xcon-angle-left"></i></a>
 			</div>
 		</div>
 		<!-- /LEFTPART -->
    <!-- RIGHTPART -->
    <div class="rightpart">
      <div class="rightpart_inner">
        <div class="section">
          <div class="container mt-5">
            <div class="row">
              <div class="col-lg-6 m-auto bg-light">
                <div class="text-center bg-info text-white py-2">
                  <h2>Login</h2>
                </div>
          <?php if(isset($_SESSION['wrong'])) { ?>
          <div class="alert alert-danger" role="alert">
           <?php
           echo $_SESSION['wrong'];
           unset($_SESSION['wrong']);
           ?>
         </div>
           <?php } ?>

          <form action="login_post.php" method="post">
            <div class="form-group my-4">
              <select class="form-control" name="user_type" required>
                <option value=""><---Select One---></option>
                <option value="Admin">Admin</option>
              </select>
            </div>
          <div class="form-group my-4">
            <input type="email" name="email" placeholder="Enter your email" class="form-control">
          </div>
          <div class="form-group my-4">
            <input type="password" name="password" placeholder="Enter your password" class="form-control">
          </div>

          <div class="text-center ">
            <button type="submit" class="btn btn-info text-white mb-3 px-4">Login</button>

          </div>
          <div class="rightbox my-4 text-secondary">
              <p>> Not an Admin? Visit user page
                  <a href="index-2.php">
                      <button type="button" class="btn btn-outline-info">visit site</button>
              </p>
              </a>
          </div>
         </form>
        </div>
      </div>

    </div>
  </div>
</div>
<a class="totop" href="#"></a>
</div>
<!-- /RIGHTPART -->

</div>
<!-- / WRAPPER ALL -->

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script src="js/plugins.js"></script>
<script src="js/init.js"></script>
<!-- /SCRIPTS -->


</body>

</html>
