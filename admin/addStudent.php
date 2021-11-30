<?php
  require_once 'header.php';

  if(isset($_POST['addStudent'])){
    $roll = $_POST['roll'];
    $class = $_POST['class'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $photo = explode('.',$_FILES['photo']['name']);
    $photo = end($photo);
    $photo_name = $roll.'.'.$photo;

    $dataInsert = mysqli_query($conn,"INSERT INTO `students`(`roll`, `class`, `name`, `fname`, `mname`, `address`, `phone`, `photo`) VALUES ('$roll','$class','$name','$fname','$mname','$address','$phone','$photo_name')");

    if($dataInsert){
      $success = 'Student added successfully';
      move_uploaded_file($_FILES['photo']['tmp_name'],'../images/students/'.$photo_name);
    }else {
      $error = 'Failed to add student';
    }
  }

?>


<div class="col-sm-9">
  <div class="content">
    <h1 class="text-primary"><i class="fas fa-user-plus"></i> Add Student </h1>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a class="text-secondary" href="addStudent.php"><i class="fas fa-user-plus"></i> Add Student Information </a></li>
      </ol>
    </nav>


    <div class="row">
      <div class="">
        <?php if(isset($success)){ echo '<p class="alert alert-success col-sm-4 col-sm-offset-4">'.$success.'</p>';} ?>
      </div>
      <div class="">
        <?php if(isset($error)){ echo '<p class="alert alert-danger col-sm-4 col-sm-offset-4">'.$error.'</p>';} ?>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12 col-md-offset-3">
        <form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
          <div class="form-group row">
            <label class="control-label col-sm-1">Roll</label>
            <div class="col-sm-3">
              <input type="text" name="roll" value="" placeholder="Roll" class="form-control" pattern="[0-9]{3}">
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-sm-1">Class</label>
            <div class="col-sm-3">
              <select class="form-control" name="class" required>
                <option value="">Select</option>
                <option value="Class One">Class One</option>
                <option value="Class Two">Class Two</option>
                <option value="Class Three">Class Three</option>
                <option value="Class Four">Class Four</option>
                <option value="Class Five">Class Five</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-sm-1">Name</label>
            <div class="col-sm-3">
              <input type="text" name="name" value="" placeholder="Name" class="form-control" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-sm-1">Father's Name</label>
            <div class="col-sm-3">
              <input type="text" name="fname" value="" placeholder="Father's Name" class="form-control" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-sm-1">Mother's Name</label>
            <div class="col-sm-3">
              <input type="text" name="mname" value="" placeholder="Mother's Name" class="form-control" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-sm-1">Address</label>
            <div class="col-sm-3">
              <input type="text" name="address" value="" placeholder="Address" class="form-control" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-sm-1">Phone</label>
            <div class="col-sm-3">
              <input type="number" name="phone" value="" placeholder="01*********" class="form-control" pattern="[0-9]{11}" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="control-label col-sm-1">Photo</label>
            <div class="col-sm-3">
              <input type="file" name="photo" value="" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-4">
              <input type="submit" name="addStudent" value="Add" class="btn btn-primary float-right">
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
