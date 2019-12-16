<?php
require 'session_check.php';
require 'db.php';
$id= $_GET['id'];

$delete= "DELETE FROM single_user WHERE id=$id";
$select_result= mysqli_query($db, $delete);
header('location:supervisor_view.php');

 ?>
