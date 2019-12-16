<?php
session_start();
require 'db.php';

$name = $_POST['fname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$employee_ID = $_POST['employee_ID'];
$role = 'Admin';
$select= "SELECT COUNT(*) as diu FROM admin WHERE email='$email'";
$select_result= mysqli_query($db,$select);
$after_assoc= mysqli_fetch_assoc($select_result);
if($after_assoc['diu']==1){
  $_SESSION['exist']='email already exist!';
  header('location:add_admin.php');
}
else{
  //image upload start
$uploaded_file = $_FILES['photo'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg','png','PNG','jpeg','gif');
if (in_array($extension, $allowed_extension)) {
  if ($uploaded_file['size'] < 2000000) {
    $insert= "INSERT INTO admin (name,email,password,employee_ID,role)  VALUES ('$name','$email','$pass','$employee_ID','$role')";
    $result= mysqli_query($db,$insert);
    $last_id= mysqli_insert_id($db);


    $file_name = $last_id . '.' .$extension;
    $new_location = 'uploads/users/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'],$new_location);
    $update = "UPDATE admin SET photo='$file_name' WHERE id=$last_id";
    $update_result= mysqli_query($db,$update);
    $_SESSION['success'] = "Your registration is successfully done!";
    header('location:add_admin.php');
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
