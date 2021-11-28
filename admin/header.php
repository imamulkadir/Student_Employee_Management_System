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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

</head>
<body class="">
  <nav class="navbar navbar-light bg-light">
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
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        <div class="list-group">
          <a href="" class="list-group-item active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
          <a href="" class="list-group-item"><i class="fas fa-user-plus"></i> Add Student</a>
          <a href="" class="list-group-item"><i class="fas fa-users"></i> All Students</a>
          <a href="allusers.php" class="list-group-item"><i class="fas fa-users"></i> All Users</a>
        </div>
      </div>
