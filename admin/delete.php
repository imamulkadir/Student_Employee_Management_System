<?php
  require_once'../dbcon.php';
  $id = base64_decode($_GET['id']);
  $photo = $_GET['photo'];
  mysqli_query($conn,"DELETE FROM `students` WHERE `id` = '$id'");
  unlink('../images/students/'.$photo);
  header('location: allstudents.php');

?>
