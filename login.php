<?php

  session_start();


  require_once 'dbcon.php';

  if(isset($_SESSION['login_id'])) {
    header('location: admin/admin.php');
  }

  if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_check = mysqli_query($conn,"SELECT * FROM `users` WHERE `email` = '$email'");

    if(mysqli_num_rows($email_check)>0) {
      $row = mysqli_fetch_assoc($email_check);
      if($row['password'] == $password) {
        $_SESSION['login_id'] = $row['id'];
        header('location: admin/admin.php');
      }else {
        $password_error = 'Invalid password';
      }
    }else {
      $email_error = 'Invalid email address';
    }
  }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPGPS</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="jumbotron">

    <div class="container">
      <a href="register.php" class="btn btn-primary pull-right">Register</a>
      <a href="index.php" class="btn btn-primary ">Home</a>
      <h2 class="text-center">User Login</h2>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <form class="" action="" method="POST">
            <div class="">
              <input type="email" name="email" value="" placeholder="Email" class="form-control" required>

              <span class="error"> <?php if(isset($email_error)) {echo $email_error;} ?></span>
            </div>
            <div class="">
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required>
              <span class="error"> <?php if(isset($password_error)) {echo $password_error;} ?></span>
            </div>
            <div class="text-center">
              <input type="submit" name="login" value="Login" class="btn btn-primary">
            </div>
          </form>
        </div>

      </div>

      <footer>
        <p class="text-center fixed-bottom">&copy; 2021-
          <?= date('Y') ?> All Rights Reserved. Imamul Kadir
        </p>
      </footer>
    </div>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
