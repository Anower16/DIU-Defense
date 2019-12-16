<?php
require 'db.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$user = $_POST['user_type'];
if($user == 'user'){
  $select= "SELECT COUNT(*) as diu, role FROM users WHERE email='$email' and password='$password'";
}else if($user == 'Admin')
{
  $select= "SELECT COUNT(*) as diu, role,employee_ID FROM admin WHERE email='$email' and password='$password'";
}else if($user == 'supervisor')
{
  $select= "SELECT COUNT(*) as diu, role,employee_ID FROM single_user WHERE email='$email' and password='$password'";
}

$select_result= mysqli_query($db,$select);
$after_assoc= mysqli_fetch_assoc($select_result);

if($after_assoc['diu']==1){
  // if (password_verify($password, $after_fetch['password'])) {
  //
  // }
  //$_SESSION['log_supervisor'] = $after_fetch['role'];
  if($user == 'supervisor'){
    $_SESSION['supervisor_id']=$after_assoc['employee_ID'];
  }else if($user == 'Admin'){
    $_SESSION['Admin_id']=$after_assoc['employee_ID'];
  }
  $_SESSION['login']= 'Login Ok';
  $_SESSION['user_type'] = $user;
  setcookie('kan','helal', time()+ 30*60);
  setcookie('helal', time()+ 30*60);
  header('location:index.php') ;

}
else{
$_SESSION['wrong']= 'Email or password wrong!!!';
  header('location:login.php');
}
// $query = "SELECT username, password
//     FROM table_1
//     WHERE username='$username' AND password='$password'
//     UNION
//     SELECT username, password
//     FROM table_2
//     WHERE username='$username' AND password='$password'";
 ?>
