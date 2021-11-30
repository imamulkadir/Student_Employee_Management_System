<?php
  require_once 'header.php';

  $id = base64_decode($_GET['id']);

  $studentInfo = mysqli_query($conn,"SELECT * FROM `students` WHERE `id` = '$id'");

  $row = mysqli_fetch_assoc($studentInfo);



  if(isset($_POST['updateStudent'])){
    $class = $_POST['class'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $dataUpdate = mysqli_query($conn,"UPDATE `students` SET `class`='$class',`name`='$name',`fname`='$fname',`mname`='$mname',`address`='$address',`phone`='$phone' WHERE `id` = '$id'");

    if($dataUpdate){
      header('location: allstudents.php');
    }else {
      $error = 'Data update failed';
    }
  }

?>


<div class="col-sm-9">
  <div class="content">
    <h1 class="text-primary"><i class="fas fa-pencil-square"></i>  Update Student Information </h1>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a class="text-secondary" href="editstudent.php"><i class="fas fa-pencil-square"></i> Update Student Information </a></li>
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
            <label class="control-label col-sm-1">Class</label>
            <div class="col-sm-4">
              <select class="form-control" name="class" required>

                <option <?php echo $row['class'] == 'Class One' ? 'selected=""':'';?> value="Class One">Class One</option>
                <option <?php echo $row['class'] == 'Class Two' ? 'selected=""':'';?> value="Class Two">Class Two</option>
                <option <?php echo $row['class'] == 'Class Three' ? 'selected=""':'';?> value="Class Three">Class Three</option>
                <option <?php echo $row['class'] == 'Class Four' ? 'selected=""':'';?> value="Class Four">Class Four</option>
                <option <?php echo $row['class'] == 'Class Five' ? 'selected=""':'';?> value="Class Five">Class Five</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-1">Name</label>
            <div class="col-sm-4">
              <input type="text" name="name" value="<?= $row['name'];?>" placeholder="Name" class="form-control" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-1">Father's Name</label>
            <div class="col-sm-4">
              <input type="text" name="fname" value="<?= $row['fname'];?>" placeholder="Father's Name" class="form-control" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-1">Mother's Name</label>
            <div class="col-sm-4">
              <input type="text" name="mname" value="<?= $row['mname'];?>" placeholder="Mother's Name" class="form-control" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-1">Address</label>
            <div class="col-sm-4">
              <input type="text" name="address" value="<?= $row['address'];?>" placeholder="Address" class="form-control" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-1">Phone</label>
            <div class="col-sm-4">
              <input type="number" name="phone" value="<?= $row['phone'];?>" placeholder="01*********" class="form-control" pattern="[0-9]{11}" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-4">
              <input type="submit" name="updateStudent" value="Update" class="btn btn-primary pull-right">
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
