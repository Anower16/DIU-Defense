<?php
require 'db.php';
$id=$_POST['id'];

$vid = $_POST['fid'];
$name = $_POST['fname'];
$email = $_POST['email'];
$password = md5($_POST['password']);
// $designation = $_POST['designation'];
$department = $_POST['department'];
$faculty = $_POST['faculty'];
$phone = $_POST['phone'];
$role = $_POST['role'];

if ($_FILES['photo']['name'] != '') {
  $select_photo = "SELECT photo FROM users WHERE id=$id";
  $select_photo_result = mysqli_query($db, $select_photo);
  $after_assoc = mysqli_fetch_assoc($select_photo_result);
  $delete_from = 'uploads/users'.$after_assoc['photo'];
  unlink($delete_from);

  $uploaded_file = $_FILES['photo'];
  $after_explode = explode('.', $uploaded_file['name']);
  $extension = end($after_explode);
  $allowed_extension = array('jpg','png','jpeg','gif');

  if (in_array($extension, $allowed_extension)) {
    // code...
  }
}
else {

}
$update="UPDATE Users SET id='$vid',name='$name', email='$email', password='$password', department='$department', faculty='$faculty', phone='$phone', role='$role' WHERE id='$id'";
$update_result= mysqli_query($db, $update);
header('location:users.php');

 ?>
