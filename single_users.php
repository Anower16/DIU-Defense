<?php
require 'session_check.php';
require 'db.php';
$id = $_GET['id'];

$select= "SELECT * FROM users WHERE id='$id'";
$select_result= mysqli_query($db, $select);
$after_assoc= mysqli_fetch_assoc($select_result);
$vid = $after_assoc['vid'];

$select_progress= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=1 and phase=1";
$select_progress_result= mysqli_query($db, $select_progress);

$select_progress_report= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=2 and phase=1";
$select_progress_result_report= mysqli_query($db, $select_progress_report);
// --------------------------------------------------
$select_progress2= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=1 and phase=2";
$select_progress_result2= mysqli_query($db, $select_progress2);

$select_progress_report2= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=2 and phase=2";
$select_progress_result_report2= mysqli_query($db, $select_progress_report2);
//------------------------------------------------------
$select_progress3= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=1 and phase=3";
$select_progress_result3= mysqli_query($db, $select_progress3);

$select_progress_report3= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=2 and phase=3";
$select_progress_result_report3= mysqli_query($db, $select_progress_report3);
//------------------------------------------------------
$select_progress4= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=1 and phase=4";
$select_progress_result4= mysqli_query($db, $select_progress4);

$select_progress_report4= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=2 and phase=4";
$select_progress_result_report4= mysqli_query($db, $select_progress_report4);
 ?>


 <!DOCTYPE html>
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
          <div class="col-lg-12 m-auto">
            <div class="card text-black bg-light mb-3">
             <div class="card-header text-center"> <h3>Individual Information</h3> </div>
              <div class="card-body">

                <table class="table table-bordered">
                  <tr>
                    <td><strong>Title: </strong><?php echo $after_assoc['title'] ?></td>
                  </tr>
                </table>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">SL</th>
                      <th scope="col">Student ID</th>
                      <th scope="col">Student Name</th>
                      <th scope="col">Email ID</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><?php echo $after_assoc['id'] ?></th>
                      <td><?php echo $after_assoc['vid'] ?></td>
                      <td><?php echo $after_assoc['name'] ?></td>
                      <td><?php echo $after_assoc['email'] ?></td>
                      <td><?php echo $after_assoc['phone'] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>

              <div class="">
                <br><h4 style="color:red;"> <strong>Pre-phase I</strong></h4>
                <p>> Supervisor will guide and make sure that 5% of progress has been done in project work as well as report writing. (Please provide  the DIU report template to students). </p>
              </div>

                <!-- pre-phase 1 start -->

                <table class="table table-bordered">
                  <thead>
                    <!-- <h4 style="color:skyblue" > Pre-Phase I</h4></th> -->
                    <tr>
                      <th scope="col"> <h4>Follow-ups</h4></th>
                      <th scope="col"><h4>Date</h4></th>
                      <th scope="col"><h4>Work done & progress %</h4></th>
                      <th scope="col"><h4>Comments</h4></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th rowspan="2"  scope="row">WORK<br>Literature review<br>Background study</th>
                      <?php foreach ($select_progress_result as $value): ?>
                        <td><?php
                        $date = date_create($value['dated']);
                        echo date_format($date,'d M, Y');
                         ?></td>
                        <td><?php echo $value['progress'] ?></td>
                        <td><?php echo $value['comment'] ?></td>
                    </tr>
                  <?php endforeach; ?>

                    <tr>
                      <th rowspan="2" scope="row">REPORT<br>Literature review<br>Background study</th>
                      <?php foreach ($select_progress_result_report as $report): ?>

                        <td><?php
                        $date = date_create($report['dated']);
                        echo date_format($date,'d M, Y');
                         ?></td>
                        <td><?php echo $report['progress'] ?></td>
                        <td><?php echo $report['comment'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
                <div class="">
                  <a href="edit_users.php?id=<?php echo $after_assoc['id']; ?>" style="float:right" class="btn btn-primary">Edit</a>

                </div>
                <!-- pre-phase 1 end -->

                <!-- pre-phase II start -->
                <div class="">
                  <br><h4 style="color:red;"> <strong> Pre-phase II </strong> </h4>
                  <p>> Supervisor will guide and make sure that 25% of WORK & 20% of Report Writing should be completed.</p>
                </div>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col"> <h4>Follow-ups</h4></th>
                      <th scope="col"><h4>Date</h4></th>
                      <th scope="col"><h4>Work done & progress %</h4></th>
                      <th scope="col"><h4>Comments</h4></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th rowspan="2" scope="row">WORK<br>Literature review<br>Background study</th>
                      <?php foreach ($select_progress_result2 as $report): ?>

                        <td><?php
                        $date = date_create($report['dated']);
                        echo date_format($date,'d M, Y');
                         ?></td>
                        <td><?php echo $report['progress'] ?></td>
                        <td><?php echo $report['comment'] ?></td>
                    </tr>
                  <?php endforeach; ?>

                    <tr>
                      <th rowspan="2" scope="row">REPORT<br>Literature review<br>Background study</th>
                      <?php foreach ($select_progress_result_report2 as $report): ?>

                        <td><?php
                        $date = date_create($report['dated']);
                        echo date_format($date,'d M, Y');
                         ?></td>
                        <td><?php echo $report['progress'] ?></td>
                        <td><?php echo $report['comment'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
                <div class="">
                    <a href="edit_users.php?id=<?php echo $after_assoc['id']; ?>" style="float:right" class="btn btn-primary">Edit</a>

                </div>
                <!-- pre-phase II end -->



              <!-- Phase I start -->
              <div class="">
                <br><h4 style="color:red;"> <strong> Phase I </strong> </h4>
                <p>> Supervisor will guide and make sure that 25% of WORK & 20% of Report Writing should be completed.</p>
              </div>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"> <h4>Follow-ups</h4></th>
                    <th scope="col"><h4>Date</h4></th>
                    <th scope="col"><h4>Work done & progress %</h4></th>
                    <th scope="col"><h4>Comments</h4></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th rowspan="2"  scope="row">WORK<br>Literature review<br>Background study</th>
                    <?php foreach ($select_progress_result3 as $report): ?>

                      <td><?php
                      $date = date_create($report['dated']);
                      echo date_format($date,'d M, Y');
                       ?></td>
                      <td><?php echo $report['progress'] ?></td>
                      <td><?php echo $report['comment'] ?></td>
                  </tr>
                <?php endforeach; ?>
                  <tr>
                    <th rowspan="2" scope="row">REPORT<br>Literature review<br>Background study</th>
                    <?php foreach ($select_progress_result_report3 as $report): ?>

                      <td><?php
                      $date = date_create($report['dated']);
                      echo date_format($date,'d M, Y');
                       ?></td>
                      <td><?php echo $report['progress'] ?></td>
                      <td><?php echo $report['comment'] ?></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
              <div class="">
                  <a href="edit_users.php?id=<?php echo $after_assoc['id']; ?>" style="float:right" class="btn btn-primary">Edit</a>

              </div>
                <!-- phase I end -->

                <!-- phase II start -->
                <div class="">
                  <br><h4 style="color:red;"> <strong> Phase II </strong> </h4>
                  <p>> Supervisor will guide and make sure that 100% of WORK & Report Writing is completed.</p>
                </div>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col"> <h4>Follow-ups</h4></th>
                      <th scope="col"><h4>Date</h4></th>
                      <th scope="col"><h4>Work done & progress %</h4></th>
                      <th scope="col"><h4>Comments</h4></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th rowspan="2" scope="row">WORK</th>
                      <?php foreach ($select_progress_result4 as $work): ?>

                        <td><?php
                        $date = date_create($work['dated']);
                        echo date_format($date,'d M, Y');
                         ?></td>
                        <td><?php echo $work['progress'] ?></td>
                        <td><?php echo $work['comment'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                    <tr>
                      <th rowspan="2" scope="row">REPORT</th>
                      <?php foreach ($select_progress_result_report4 as $report): ?>

                        <td><?php
                        $date = date_create($report['dated']);
                        echo date_format($date,'d M, Y');
                         ?></td>
                        <td><?php echo $report['progress'] ?></td>
                        <td><?php echo $report['comment'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                    </tr>
                  </tbody>
                </table>
                <div class="">
                <a href="edit_users.php?id=<?php echo $after_assoc['id']; ?>" style="float:right" class="btn btn-primary">Edit</a>

                </div>

                <!-- phase II end -->

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
