<?php
  require_once 'header.php';

  $id = base64_decode($_GET['id']);

  $userInfo = mysqli_query($conn,"SELECT * FROM `users` WHERE `id` = '$id'");

  $row = mysqli_fetch_assoc($userInfo);



  if(isset($_POST['updateUserInfo'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $dataUpdate = mysqli_query($conn,"UPDATE `users` SET `name`='$name',`email`='$email' WHERE `id` = '$id'");

    if($dataUpdate){
      header('location: userProfile.php');
    }else {
      $error = 'Data update failed';
    }
  }

?>


<div class="col-sm-9">
  <div class="content">
    <h1 class="text-primary"><i class="fas fa-pencil-square"></i>  Update Profile Information </h1>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a class="text-secondary" href="allusers.php"><i class="fas fa-users"></i> All Users </a></li>
        <li class="breadcrumb-item"><a class="text-secondary" href="#"><i class="fas fa-pencil-square"></i> Update Profile Information </a></li>
      </ol>
    </nav>

    <div class="row">
      <div class="">
        <?php if(isset($error)){ echo '<p class="alert alert-danger col-sm-4 col-sm-offset-4">'.$error.'</p>';} ?>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12 col-md-offset-3">
        <form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-1">Name</label>
            <div class="col-sm-4">
              <input type="text" name="name" value="<?= $row['name'];?>" placeholder="Name" class="form-control" required>
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-sm-1">Email</label>
            <div class="col-sm-4">
              <input type="email" name="email" value="<?= $row['email'];?>" placeholder="Email" class="form-control" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-4">
              <input type="submit" name="updateUserInfo" value="Update" class="btn btn-primary float-right">
            </div>
          </div>
        </form>
      </div>

    </div>

  </div>
</div>


<?php
  require_once 'footer.php';
?>
