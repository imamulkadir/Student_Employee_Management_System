<?php

  session_start();
  require_once '../dbcon.php';

  if(!isset($_SESSION['login_id'])) {
    header('location: ../login.php');
  }

  $user = $_SESSION['login_id'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPGPS</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>

</head>
<body class="">
  <nav class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="admin.php"><i class="fas fa-tachometer-alt"></i> KPGPS</a>
      </div>
      <ul class="nav navbar-nav navbar-right">

        <li><a href=""><i class="fas fa-user"></i>
          <?php
            $userName = mysqli_query($conn,"SELECT * FROM `users` WHERE `id` = '$user'");
            $userData = mysqli_fetch_assoc($userName);
            echo $userData['name'];
          ?>
        </a></li>
        <li><a href="../register.php"><i class="fas fa-user-plus"></i> Add User</a></li>
        <li><a href="userProfile.php"><i class="fas fa-user"></i> My Profile</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        <div class="list-group">
          <a href="admin.php" class="list-group-item active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
          <a href="addStudent.php" class="list-group-item"><i class="fas fa-user-plus"></i> Add Student Information</a>
          <a href="allstudents.php" class="list-group-item"><i class="fas fa-users"></i> All Students Information</a>
          <a href="allusers.php" class="list-group-item"><i class="fas fa-users"></i> All Users Information</a>
        </div>
      </div>
