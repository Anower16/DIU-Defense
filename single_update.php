<?php
require 'db.php';


 $id=$_POST['id'];

 $work_date='';
 $work_progress = $_POST['work_progress'];
 $work_comment = $_POST['work_comment'];
 $work = $_POST['work'];


 $report_comment = $_POST['report_comment'];
 $report_progress = $_POST['report_progress'];
 $report = $_POST['report'];

  $phase1 = $_GET['ph1'];
  $phase2 = $_GET['ph2'];
  $phase3 = $_GET['ph3'];
  $phase4 = $_GET['ph4'];


 $select = "SELECT * FROM users WHERE id='$id'";
 $select_result = mysqli_query($db,$select);
 $after_assoc = mysqli_fetch_assoc($select_result);
 $vid = $after_assoc['vid'];

$select_work = "SELECT COUNT(*) as work FROM progress_test WHERE status=1 and vid='$vid' and stu_id='$id' and phase=$phase1";
$select_result_work = mysqli_fetch_assoc(mysqli_query($db,$select_work));

$select_report = "SELECT COUNT(*) as report FROM progress_test WHERE status=2 and vid='$vid' and stu_id='$id' and phase=$phase2";
$select_result_report = mysqli_fetch_assoc(mysqli_query($db,$select_report));


if ($phase1==1) {
  if ($work==1 && $select_result_work['work'] < 2 && !empty($work_progress)&&!empty($work_comment)) {
    $update = "INSERT INTO progress_test (stu_id,progress,comment,vid,status,phase) VALUES('$id','$work_progress','$work_comment','$vid','$work','$phase1')";
  $insert_result= mysqli_query($db, $update);
  header('location:single_users.php?id='.$id);
  }elseif($report==2 && $select_result_report['report'] < 2 && !empty($report_progress)&&!empty($report_comment)){
    $update = "INSERT INTO progress_test (stu_id,progress,comment,vid,status,phase) VALUES('$id','$report_progress','$report_comment','$vid','$report','$phase1')";
  $insert_result= mysqli_query($db, $update);
  header('location:single_users.php?id='.$id);
}else{
    header('location:single_user.php?id='.$id);
}
}

elseif($phase2==2){
  if ($work==1 && $select_result_work['work'] < 2 && !empty($work_progress)&&!empty($work_comment)) {
    $update = "INSERT INTO progress_test (stu_id,progress,comment,vid,status,phase) VALUES('$id','$work_progress','$work_comment','$vid','$work','$phase2')";
  $insert_result= mysqli_query($db, $update);
  header('location:single_users.php?id='.$id);
  }elseif($report==2 && $select_result_report['report'] < 2 && !empty($report_progress)&&!empty($report_comment)){
    $update = "INSERT INTO progress_test (stu_id,progress,comment,vid,status,phase) VALUES('$id','$report_progress','$report_comment','$vid','$report','$phase2')";
  $insert_result= mysqli_query($db, $update);
  header('location:single_users.php?id='.$id);
}else{
    header('location:single_users.php?id='.$id);
}
}elseif($phase3==3){
    if ($work==1 && $select_result_work['work'] < 2 && !empty($work_progress)&&!empty($work_comment)) {
      $update = "INSERT INTO progress_test (stu_id,progress,comment,vid,status,phase) VALUES('$id','$work_progress','$work_comment','$vid','$work','$phase3')";
    $insert_result= mysqli_query($db, $update);
    header('location:single_users.php?id='.$id);
    }elseif($report==2 && $select_result_report['report'] < 2 && !empty($report_progress)&&!empty($report_comment)){
      $update = "INSERT INTO progress_test (stu_id,progress,comment,vid,status,phase) VALUES('$id','$report_progress','$report_comment','$vid','$report','$phase3')";
    $insert_result= mysqli_query($db, $update);
    header('location:single_users.php?id='.$id);
  }else{
      header('location:single_users.php?id='.$id);
  }
}elseif($phase4==4){
    if ($work==1 && $select_result_work['work'] < 2 && !empty($work_progress)&&!empty($work_comment)) {
      $update = "INSERT INTO progress_test (stu_id,progress,comment,vid,status,phase) VALUES('$id','$work_progress','$work_comment','$vid','$work','$phase4')";
    $insert_result= mysqli_query($db, $update);
    header('location:single_users.php?id='.$id);
    }elseif($report==2 && $select_result_report['report'] < 2 && !empty($report_progress)&&!empty($report_comment)){
      $update = "INSERT INTO progress_test (stu_id,progress,comment,vid,status,phase) VALUES('$id','$report_progress','$report_comment','$vid','$report','$phase4')";
    $insert_result= mysqli_query($db, $update);
    header('location:single_users.php?id='.$id);
  }else{
      header('location:single_users.php?id='.$id);
  }
}

else {
  echo 'bahir';
  // header('location:edit_users.php?id='.$id);
}




 ?>
