<?php
session_start();
require 'db.php';

$vid = $_POST['fid'];
$name = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$title = $_POST['title'];
$supervisor = $_POST['Supervisor'];
$co_supervisor = $_POST['co_supervisor'];
$department = $_POST['department'];
$faculty = $_POST['faculty'];
$phone = $_POST['phone'];
$select= "SELECT COUNT(*) as diu FROM users WHERE email='$email'";
$select_result= mysqli_query($db,$select);
$after_assoc= mysqli_fetch_assoc($select_result);
if($after_assoc['diu']==1){
  $_SESSION['exist']='email already exist!';
  header('location:register.php');
}
else{
  //image upload start
$uploaded_file = $_FILES['photo'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg','png','PNG','jpeg','gif');
if (in_array($extension, $allowed_extension)) {
  if ($uploaded_file['size'] < 2000000) {
    $insert= "INSERT INTO users (vid,name,email,password,title,Supervisor,co_supervisor,department,faculty,phone,role,dated,progress)  VALUES ('$vid','$name','$email','$password','$title','$supervisor','$co_supervisor','$department','$faculty','$phone','user','$dated','$progress' )";
    $result= mysqli_query($db,$insert);
    $last_id= mysqli_insert_id($db);


    $file_name = $last_id . '.' .$extension;
    $new_location = 'uploads/users/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'],$new_location);
    $update = "UPDATE users SET photo='$file_name' WHERE id=$last_id";
    $update_result= mysqli_query($db,$update);
    $_SESSION['success'] = "Your registration is successfully done!";
    header('location:register.php');
  }
  else {
    echo "file size limit is 2 mb!";
  }
}
else {
  echo "Invalid image format!!! ";
}
}
?>
