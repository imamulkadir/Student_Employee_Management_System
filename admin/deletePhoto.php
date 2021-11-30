<?php
  require_once'../dbcon.php';

  unlink('../images/users/'.$_GET['photo_name']);

  header('location: userProfile.php');
?>
