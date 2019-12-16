<?php
session_start();
require 'db.php';

$name = $_POST['fname'];
$email = $_POST['email'];
$employee_ID = $_POST['employee_ID'];
$field = $_POST['field'];
$phone = $_POST['phone'];
$role = 'supervisor';
$pass = $_POST['pass'];
$select= "SELECT COUNT(*) as diu FROM single_user WHERE email='$email'";
$select_result= mysqli_query($db,$select);
$after_assoc= mysqli_fetch_assoc($select_result);
if($after_assoc['diu']==1){
  $_SESSION['exist']='email already exist!';
  header('location:add_supervisor.php');
}
else{
  //image upload start
$uploaded_file = $_FILES['photo'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg','png','PNG','jpeg','gif');
if (in_array($extension, $allowed_extension)) {
  if ($uploaded_file['size'] < 2000000) {
    $insert= "INSERT INTO single_user (name,email,employee_ID,field,phone,role,password)  VALUES ('$name','$email','$employee_ID','$field','$phone','$role','$pass')";
    $result= mysqli_query($db,$insert);
    $last_id= mysqli_insert_id($db);


    $file_name = $last_id . '.' .$extension;
    $new_location = 'uploads/users/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'],$new_location);
    $update = "UPDATE single_user SET photo='$file_name' WHERE id=$last_id";
    $update_result= mysqli_query($db,$update);
    $_SESSION['success'] = "Your registration is successfully done!";
    header('location:supervisor_view.php');
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
