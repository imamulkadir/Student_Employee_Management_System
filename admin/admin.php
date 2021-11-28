<?php
  require_once 'header.php';
?>

      <div class="col-sm-9">
        <div class="content">
          <h1 class="text-primary"><i class="fas fa-tachometer-alt"></i> Dashboard <small class="text-muted"> Statistics Area </small></h1>
          <ol class="breadcrumb">
            <li class="active"><i class="fas fa-tachometer-alt"></i> Dashboard </li>
          </ol>

          <div class="row">
            <div class="col-sm-4">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fas fa-users fa-5x"></i>
                    </div>

                    <div class="col-xs-9">
                      <div class="pull-right" style="font-size: 45px;">
                        20
                      </div>
                      <div class="pull-right">
                        All Users
                      </div>
                    </div>
                  </div>
                </div>

                <a href="">
                  <div class="panel-footer">
                    <span class="pull-left">Show All Users</span>
                    <span class="pull-right"><i class="fa fa-arrow-right"></i></span>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fas fa-users fa-5x"></i>
                    </div>

                    <div class="col-xs-9">
                      <div class="pull-right" style="font-size: 45px;">
                        20
                      </div>
                      <div class="pull-right">
                        All Students
                      </div>
                    </div>
                  </div>
                </div>

                <a href="">
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
