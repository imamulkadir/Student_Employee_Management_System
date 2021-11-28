<?php
  require_once 'dbcon.php';

  if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    $photo = explode('.',$_FILES['photo']['name']);
    $photo = end($photo);
    $photo_name = $name.'.'.$photo;


    // $photo = explode('.',$_POST['photo']);
    // $ext = end($photo);
    // $photo_name = $name.'.'.$ext;

    if(!$name == ""){
      if(!$email == ""){
        if(!$password == ""){
          if(!$c_password == ""){
            if(strlen($password)>7){
              if($password == $c_password){
                $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email'");
                if(mysqli_num_rows($query) == 0) {
                  $result = mysqli_query($conn, "INSERT INTO `users`(`name`, `email`, `password`, `photo`) VALUES ('$name', '$email', '$password', '$photo_name')");
                  if($result){
                    $success = "Data inserted successfully";
                    move_uploaded_file($_FILES['photo']['tmp_name'],'images/users/'.$photo_name);
                  } else {
                    $error = "Data failed to insert";
                  }
                }else {
                  $email_exist = "This email already exist";
                }
              }else {
                $pass_match = "Password must be matched";
              }
            }else {
              $pass_length = "Password must be 8 character";
            }
          }else {
            $c_pass_error = "Enter your password again";
          }
        }else {
          $pass_error = "Password is required";
        }
      }else {
        $email_error = "Please enter your email";
      }
    }else {
      $name_error = "Please enter your name";
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
      <a href="login.php" class="btn btn-primary pull-right">Login</a>
      <a href="index.php" class="btn btn-primary ">Home</a>

      <div class="row">
        <div class="">
          <?php if(isset($success)){ echo '<p class="alert alert-success col-sm-4 col-sm-offset-4">'.$success.'</p>';} ?>
          <?php if(isset($error)){ echo '<p class="alert alert-danger col-sm-4 col-sm-offset-4">'.$error.'</p>';} ?>
        </div>
      </div>

      <h2 class="text-center">User Registration</h2>
      <div class="row">
        <div class="col-md-12 col-md-offset-3">
          <form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-1">Name</label>
              <div class="col-sm-4">
                <input type="text" name="name" value="" placeholder="Name" class="form-control" >
                <span class="error"><?php if(isset($name_error)){ echo $name_error;} ?></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-1">Email</label>
              <div class="col-sm-4">
                <input type="email" name="email" value="" placeholder="Email" class="form-control">
                <span class="error"><?php if(isset($email_error)){ echo $email_error;} ?></span>
                <span class="error"><?php if(isset($email_exist)){ echo $email_exist;} ?></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-1">Password</label>
              <div class="col-sm-4">
                <input type="password" name="password" value="" placeholder="Password" class="form-control">
                <span class="error"><?php if(isset($pass_error)){ echo $pass_error;} ?></span>
                <span class="error"><?php if(isset($pass_length)){ echo $pass_length;} ?></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-1">Confirm Password</label>
              <div class="col-sm-4">
                <input type="password" name="c_password" value="" placeholder="Confirm password" class="form-control" >
                <span class="error"><?php if(isset($c_pass_error)){ echo $c_pass_error;} ?></span>
                <span class="error"><?php if(isset($pass_match)){ echo $pass_match;} ?></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-1">Photo</label>
              <div class="col-sm-4">
                <input type="file" name="photo" value="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-4">
                <input type="submit" name="register" value="Register" class="btn btn-primary pull-right">
              </div>
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
