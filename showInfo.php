<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPGPS</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

</head>
<body class="jumbotron">

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center">Kalika Prashad Government Primary School</h2>
        </div>
      </div>
      <div class="row" style="margin:10px; padding:10px;">
        <div class="col-md-2 offset-md-5"><a href="register.php" class="btn btn-primary pull-right">Register</a>&nbsp;<a href="login.php" class="btn btn-primary pull-right">Login</a></div>
      </div>
      <!-- <a href="register.php" class="btn btn-primary pull-right">Register</a>
      <a href="login.php" class="btn btn-primary pull-right">Login</a> -->

      <?php

      require_once'dbcon.php';

      if(isset($_POST['show'])){
        $roll = $_POST['roll'];
        $class = $_POST['class'];

        $result = mysqli_query($conn,"SELECT * FROM `students` WHERE `roll` = '$roll' and `class` = '$class'");

        if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_assoc($result);
          ?>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <tr>
                    <th>Photo</th>
                    <td> <img src="images/students/<?= $row['photo'];?>" width="100px"alt=""> </td>
                  </tr>
                  <tr>
                    <th>Roll</th>
                    <td><?= $row['roll'];?></td>
                  </tr>
                  <tr>
                    <th>Class</th>
                    <td><?= $row['class'];?></td>
                  </tr>
                  <tr>
                    <th>Name</th>
                    <td><?= $row['name'];?></td>
                  </tr>
                  <tr>
                    <th>Father's Name</th>
                    <td><?= $row['fname'];?></td>
                  </tr>
                  <tr>
                    <th>Mother's Name</th>
                    <td><?= $row['mname'];?></td>
                  </tr>
                  <tr>
                    <th>Address</th>
                    <td><?= $row['address'];?></td>
                  </tr>
                  <tr>
                    <th>Phone</th>
                    <td><?= $row['phone'];?></td>
                  </tr>
                </table>
              </div>
              <a href="index.php" class="btn btn-primary btn-sm pull-right">Refresh</a>
            </div>
          </div>
          <?php
        }else {
          ?>
            <script type="text/javascript">
              alert('Invalid Information');
              javascript:history.go(-1);
            </script>
          <?php
        }
      }

      ?>



      <footer class="text-center fixed-bottom" style="background:#ddd; margin: 0; padding:10px;">
        <p>&copy; 2021-
          <?= date('Y') ?> All Rights Reserved. Imamul Kadir
        </p>
      </footer>
    </div>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
