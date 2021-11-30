<?php
  require_once 'header.php';
?>


<div class="col-sm-9">
  <div class="content">
    <h1 class="text-primary"><i class="fas fa-user"></i> My Profile</h1>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a class="text-secondary" href=""><i class="fas fa-users"></i> All Users </a></li>
      </ol>
    </nav>



    <div class="row">
      <?php
        $user_id = mysqli_query($conn,"SELECT * FROM `users` WHERE `id` = '$user'");
        $userData = mysqli_fetch_assoc($user_id);
      ?>
      <div class="col-sm-6">
        <table class="table table-bordered table-hover">
          <tr>
            <th>ID</th>
            <td><?=$userData['id'];?></td>
          </tr>
          <tr>
            <th>Name</th>
            <td><?=$userData['name'];?></td>
          </tr>
          <tr>
            <th>Email</th>
            <td><?=$userData['email'];?></td>
          </tr>
          <tr>
            <th>Joining Date</th>
            <td><?php echo date('d-M-Y',strtotime($userData['date_time']));?></td>
          </tr>
        </table>
        <a href="edituserprofile.php?id=<?=base64_encode($userData['id']);?>" class="btn btn-primary float-right btn-sm">Edit Profile</a>
      </div>
      <div class="col-sm-2">

      </div>
      <div class="col-sm-4">
        <img class="img-thumbnail" height="200px" width="200px" src="../images/users/<?=$userData['photo'];?>" alt="UserImage">
        <!-- to delete photo remove . before ? -->
        <!-- <br><br><a href="deletePhoto.php?photo_name=<.?=$userData['photo'];?>" class="btn btn-primary btn-sm">Delete</a> -->
        <form class="" action="updatePhoto.php" method="POST" enctype="multipart/form-data">
          <label for="">Profile Photo</label>

          <input type="file" name="new_photo" value="">

          <input type="hidden" name="photo" value="<?=$userData['photo'];?>">
          <input type="hidden" name="name" value="<?=$userData['name'];?>">
          <input type="hidden" name="id" value="<?=$userData['id'];?>">

          <br>
          <input type="submit" name="update" value="Upload" class="btn btn-primary btn-sm">
        </form>
      </div>
    </div>
  </div>
</div>


<?php
  require_once 'footer.php';
?>
