<?php
require 'cookie_check.php';
require 'session_check.php';
require 'db.php';
$sid = $_SESSION['supervisor_id'];
$select= "SELECT * FROM users WHERE Supervisor='$sid'";
$select_result= mysqli_query($db, $select);
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <meta name="description" content="Name of your web site">
 <meta name="author" content="Marketify">

 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 <title>DIU Defense </title>

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
 					<li><a href="index.php#TitleDefense">Title Defense</a></li>
 					<li><a href="index.php#Supervisor">Supervisor</a></li>
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
 						<li><a href="index.php#TitleDefense">Title Defense</a></li>
 						<li><a href="index.php#Supervisor">Supervisor</a></li>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- RIGHTPART -->
<div class="rightpart">
	<div class="rightpart_inner">
    <div class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-14 m-auto">
            <div class="card text-black bg-light mb-3">
             <div class="card-header text-center">
               <h3>ALL USERS INFO <a href="logout.php" style="float:right" class="btn btn-primary">Logout</a> </h3>
             </div>
              <div class="card-body">
                <table class="table table-bordered">
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>NAME</th>
                  <th class="text-center">EMAIL</th>
                  <th>DEPARTMENT</th>
                  <!-- <th>FACULTY</th> -->
                  <th>PHONE</th>
                  <!-- <th>PHOTO</th> -->
                  <th colspan="2" class="text-center" >ACTION</th>

                </tr>
                <?php foreach ($select_result as $value) { ?>

                <tr>
                  <td> <?php echo $value['id']?> </td>
                  <td> <?php echo $value['vid']?> </td>
                  <td> <?php echo $value['name']?> </td>
                  <td> <?php echo $value['email']?> </td>
                  <td> <?php echo $value['department']?> </td>
                  <!-- <td> <?php echo $value['faculty']?> </td> -->
                  <td> <?php echo $value['phone']?> </td>
                  <!-- <td> <img src="uploads/users/<?php echo $value['photo']?>" alt="" width="50"> </td> -->

                  <td>
                     <a href="single_users.php?id=<?php echo $value['id'] ?>" class="btn btn-info">view</a>
                  </td>
                  <!-- <td>
                     <a href="edit_users.php?id=<?php echo $value['id'] ?>" class="btn btn-primary">Edit</a>
                  </td> -->
                  <td>
                     <a data-toggle="modal" data-target="#exampleModal<?php echo $value['id'] ?>" href="#" class="btn btn-danger text-white">Delete</a>

                     <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-black" id="exampleModalLabel">Are You Sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger "><a href="del_users.php?id=<?php echo $value['id'] ?>" class="text-white">Yes</button>
      </div>
    </div>
  </div>
</div>
                  </td>

                </tr>
              <?php  } ?>
                </table>

             </div>

          </div>
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
