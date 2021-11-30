<?php
  require_once 'header.php';

  // $query = mysqli_query($conn,"SELECT * FROM `students`");
  $student_count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `students`"));
  $user_count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `users`"));
?>

      <div class="col-sm-9">
        <div class="content">
          <h1 class="text-primary"><i class="fas fa-tachometer-alt"></i> Dashboard <small class="text-muted"> Statistics Area </small></h1>

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-secondary" href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            </ol>
          </nav>

          <div class="row">
            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fas fa-users fa-5x"></i>
                    </div>

                    <div class="col-xs-4">
                      <div class="float-right" style="font-size: 45px;">
                        <?=$user_count;?>
                      </div>
                      
                      <div class="float-right">
                        Total Users
                      </div>
                    </div>
                  </div>
                </div>

                <a href="allusers.php">
                  <div class="panel-footer">
                    <span class="pull-left">Show All Users</span>
                    <span class="pull-right"><i class="fa fa-arrow-right"></i></span>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fas fa-users fa-5x"></i>
                    </div>

                    <div class="col-xs-4">
                      <div class="float-right" style="font-size: 45px;">
                        <?=$student_count;?>
                      </div>

                      <div class="float-right">
                        Total Students
                      </div>
                    </div>
                  </div>
                </div>

                <a href="allstudents.php">
                  <div class="panel-footer">
                    <span class="pull-left">Show All Students</span>
                    <span class="pull-right"><i class="fa fa-arrow-right"></i></span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
        require_once 'footer.php';
      ?>
