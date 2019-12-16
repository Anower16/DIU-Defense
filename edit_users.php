<?php
require 'session_check.php';
require 'db.php';
$id = $_GET['id'];

$select= "SELECT * FROM users WHERE id=$id";
$select_result= mysqli_query($db, $select);
$after_assoc= mysqli_fetch_assoc($select_result);
$vid = $after_assoc['vid'];


$select_progress_work= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=1 and phase=1";
$select_progress_result_work= mysqli_fetch_assoc(mysqli_query($db, $select_progress_work));

$select_progress_report= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=2 and phase=1";
$select_progress_result_report= mysqli_fetch_assoc(mysqli_query($db, $select_progress_report));

$select_progress_work2= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=1 and phase=2";
$select_progress_result_work2= mysqli_fetch_assoc(mysqli_query($db, $select_progress_work2));

$select_progress_report2= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=2 and phase=2";
$select_progress_result_report2= mysqli_fetch_assoc(mysqli_query($db, $select_progress_report2));

$select_progress_work3= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=1 and phase=3";
$select_progress_result_work3= mysqli_fetch_assoc(mysqli_query($db, $select_progress_work3));

$select_progress_report3= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=2 and phase=3";
$select_progress_result_report3= mysqli_fetch_assoc(mysqli_query($db, $select_progress_report3));

$select_progress_work4= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=1 and phase=4";
$select_progress_result_work4= mysqli_fetch_assoc(mysqli_query($db, $select_progress_work4));

$select_progress_report4= "SELECT * FROM progress_test WHERE stu_id='$id' and vid='$vid' and status=2 and phase=4";
$select_progress_result_report4= mysqli_fetch_assoc(mysqli_query($db, $select_progress_report4));

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
 					<li><a href="index.php#Pre-Defense">Pre-Defense Defense</a></li>
 					<li><a href="index.php#Final-Defense">Final-Defense</a></li>
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
 						<li><a href="index.php#Pre-Defense">Pre-Defense</a></li>
 						<li><a href="index.php#Final-Defense"> Final-Defense</a></li>
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
          <div class="col-lg-12 m-auto bg-light">
            <div class="text-center bg-secondary text-white py-2">
              <h2>Edit Users</h2>
            </div>
            <div class="text-center text-info">
              <h3>
                <?php
                if(!empty($_GET['success'])){
                echo $_GET['success'];
              }
                 ?>
              </h3>

            </div>

              <table class="table table-bordered">
                <tr>
                  <td><strong>Title: </strong></td>
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
                  <?php
                  $i = 1;
                    foreach ($select_result as  $value) {?>
                      <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $value['vid'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <td><?php echo $value['phone'] ?></td>
                      </tr>
                  <?php  }
                   ?>

                </tbody>
              </table>

            <div class="">
              <br><p style="color:red;"> <strong>Pre-phase I</strong></p>
              <p>> Supervisor will guide and make sure that 5% of progress has been done in project work as well as report writing. (Please provide  the DIU report template to students). </p>
            </div>

              <!-- pre-phase 1 start -->

              <form class="" action="single_update.php?ph1=1" method="post">
                <input type="hidden" name="phase" value="1">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"> <h4> Pre-Phase I<br> Follow-up</h4></th>
                    <th scope="col"><h4>Date</h4></th>
                    <th scope="col"><h4>Work done & progress %</h4></th>
                    <th scope="col"><h4>Comments</h4></th>
                  </tr>
                </thead>
                <tbody>

                    <tr>
                      <th rowspan="2" scope="row">WORK<br>Literature review<br>Background study</th>
                      <td><?php
                      $date = date_create($select_progress_result_work['dated']);
                      echo date_format($date,'d M, Y');
                       ?></td>
                      <td><?php echo $select_progress_result_work['progress'] ?></td>
                      <td><?php echo $select_progress_result_work['comment'] ?></td>
                    </tr>

                  <tr>
                    <td>
                    <input type="hidden" name="work" value="1" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    </td>
                    <td><input type="text" name="work_progress" placeholder="" class="form-control"></td>
                    <td ><input type="text" name="work_comment" placeholder="" class="form-control"></td>
                  </tr>

                  <tr>
                    <th rowspan="2" scope="row">REPORT<br>Literature review<br>Background study</th>
                    <td><?php
                      $date = date_create($select_progress_result_report['dated']);
                      echo date_format($date,'d M, Y');
                     ?></td>
                    <td><?php echo $select_progress_result_report['progress'] ?></td>
                    <td><?php echo $select_progress_result_report['comment'] ?></td>
                  </tr>

                  <tr>
                    <td> <input type="hidden" name="report" value="2" class="form-control"></td>
                    <td><input type="text" name="report_progress" placeholder="" class="form-control"></td>
                    <td ><input type="text" name="report_comment" placeholder="" class="form-control"></td>
                  </tr>
                </tbody>
              </table>
              <!-- pre-phase 1 end -->
                <button type="submit" style="float:right" class="btn btn-info text-white mb-3 px-4">Update</button>
              </form>
              <!-- pre-phase II start -->
              <div class="">
                <br><p style="color:red;"> <strong> Pre-phase II </strong> </p>
                <p>> Supervisor will guide and make sure that 25% of WORK & 20% of Report Writing should be completed.</p>
              </div>

              <form class="" action="single_update.php?ph2=2" method="post">
                <input type="hidden" name="phase" value="1">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"> <h4> Pre-Phase I<br> Follow-up</h4></th>
                    <th scope="col"><h4>Date</h4></th>
                    <th scope="col"><h4>Work done & progress %</h4></th>
                    <th scope="col"><h4>Comments</h4></th>
                  </tr>
                </thead>
                <tbody>

                    <tr>
                      <th rowspan="2" scope="row">WORK<br>Literature review<br>Background study</th>
                      <td><?php
                      $date = date_create($select_progress_result_work2['dated']);
                      echo date_format($date,'d M, Y');
                       ?></td>
                      <td><?php echo $select_progress_result_work2['progress'] ?></td>
                      <td><?php echo $select_progress_result_work2['comment'] ?></td>
                    </tr>

                  <tr>
                    <td>
                    <input type="hidden" name="work" value="1" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    </td>
                    <td><input type="text" name="work_progress" placeholder="" class="form-control"></td>
                    <td ><input type="text" name="work_comment" placeholder="" class="form-control"></td>
                  </tr>

                  <tr>
                    <th rowspan="2" scope="row">REPORT<br>Literature review<br>Background study</th>
                    <td><?php
                      $date = date_create($select_progress_result_report2['dated']);
                      echo date_format($date,'d M, Y');
                     ?></td>
                    <td><?php echo $select_progress_result_report2['progress'] ?></td>
                    <td><?php echo $select_progress_result_report2['comment'] ?></td>
                  </tr>

                  <tr>
                    <td> <input type="hidden" name="report" value="2" class="form-control"></td>
                    <td><input type="text" name="report_progress" placeholder="" class="form-control"></td>
                    <td ><input type="text" name="report_comment" placeholder="" class="form-control"></td>
                  </tr>
                </tbody>
              </table>
              <!-- pre-phase 1 end -->
                <button type="submit" style="float:right" class="btn btn-info text-white mb-3 px-4">Update</button>
              </form>
              <!-- pre-phase II end -->

              <!-- phase I start -->
              <div class="">
                <br><p style="color:red;"> <strong> Phase I </strong> </p>
                <p>> Supervisor will guide and make sure that 60% of WORK & Report Writing should be completed.</p>
              </div>

              <form class="" action="single_update.php?ph3=3" method="post">
                <input type="hidden" name="phase" value="1">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"> <h4> Pre-Phase I<br> Follow-up</h4></th>
                    <th scope="col"><h4>Date</h4></th>
                    <th scope="col"><h4>Work done & progress %</h4></th>
                    <th scope="col"><h4>Comments</h4></th>
                  </tr>
                </thead>
                <tbody>

                    <tr>
                      <th rowspan="2" scope="row">WORK<br>Literature review<br>Background study</th>
                      <td><?php
                        $date = date_create($select_progress_result_work3['dated']);
                        echo date_format($date,'d M, Y');
                       ?></td>
                      <td><?php echo $select_progress_result_work3['progress'] ?></td>
                      <td><?php echo $select_progress_result_work3['comment'] ?></td>
                    </tr>

                  <tr>
                    <td>
                    <input type="hidden" name="work" value="1" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    </td>
                    <td><input type="text" name="work_progress" placeholder="" class="form-control"></td>
                    <td ><input type="text" name="work_comment" placeholder="" class="form-control"></td>
                  </tr>

                  <tr>
                    <th rowspan="2" scope="row">REPORT<br>Literature review<br>Background study</th>
                    <td><?php
                      $date = date_create($select_progress_result_report3['dated']);
                      echo date_format($date,'d M, Y');
                     ?></td>
                    <td><?php echo $select_progress_result_report3['progress'] ?></td>
                    <td><?php echo $select_progress_result_report3['comment'] ?></td>
                  </tr>

                  <tr>
                    <td> <input type="hidden" name="report" value="2" class="form-control"></td>
                    <td><input type="text" name="report_progress" placeholder="" class="form-control"></td>
                    <td ><input type="text" name="report_comment" placeholder="" class="form-control"></td>
                  </tr>
                </tbody>
              </table>
              <!-- pre-phase 1 end -->
                <button type="submit" style="float:right" class="btn btn-info text-white mb-3 px-4">Update</button>
              </form>
              <!-- phase I end -->

              <!-- phase II start -->
              <div class="">
                <br><p style="color:red;"> <strong> Phase I </strong> </p>
                <p>> Supervisor will guide and make sure that 100% of WORK & Report Writing is completed.</p>
              </div>

              <form class="" action="single_update.php?ph4=4" method="post">
                <input type="hidden" name="phase" value="1">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"> <h4> Pre-Phase I<br> Follow-up</h4></th>
                    <th scope="col"><h4>Date</h4></th>
                    <th scope="col"><h4>Work done & progress %</h4></th>
                    <th scope="col"><h4>Comments</h4></th>
                  </tr>
                </thead>
                <tbody>

                    <tr>
                      <th rowspan="2" scope="row"><br> WORK</th>
                      <td><?php
                        $date = date_create($select_progress_result_work4['dated']);
                        echo date_format($date,'d M, Y');
                       ?></td>
                      <td><?php echo $select_progress_result_work4['progress'] ?></td>
                      <td><?php echo $select_progress_result_work4['comment'] ?></td>
                    </tr>

                  <tr>
                    <td>
                    <input type="hidden" name="work" value="1" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    </td>
                    <td><input type="text" name="work_progress" placeholder="" class="form-control"></td>
                    <td ><input type="text" name="work_comment" placeholder="" class="form-control"></td>
                  </tr>

                  <tr>
                    <th rowspan="2" scope="row"><br> REPORT</th>
                    <td><?php
                      $date = date_create($select_progress_result_report4['dated']);
                      echo date_format($date,'d M, Y');
                     ?></td>
                    <td><?php echo $select_progress_result_report4['progress'] ?></td>
                    <td><?php echo $select_progress_result_report4['comment'] ?></td>
                  </tr>

                  <tr>
                    <td> <input type="hidden" name="report" value="2" class="form-control"></td>
                    <td><input type="text" name="report_progress" placeholder="" class="form-control"></td>
                    <td ><input type="text" name="report_comment" placeholder="" class="form-control"></td>
                  </tr>
                </tbody>
              </table>
              <!-- pre-phase 1 end -->
                <button type="submit" style="float:right" class="btn btn-info text-white mb-3 px-4">Update</button>
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
