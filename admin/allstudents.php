<?php
  require_once 'header.php';
?>


<div class="col-sm-9">
  <div class="content">
    <h1 class="text-primary"><i class="fas fa-users"></i> All Students</h1>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a class="text-secondary" href="allstudents.php"><i class="fas fa-users"></i> All Student Information </a></li>
      </ol>
    </nav>


    <div class="table-responsive">
      <table id="table_idd" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Roll</th>
            <th>Class</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Photo</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $student = mysqli_query($conn,"SELECT * FROM `students`");
            while ($row = mysqli_fetch_assoc($student)) {
              ?>
              <tr>
                <td><?php echo $row['roll'];?></td>
                <td><?php echo $row['class'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['mname'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><img width="50px" src="../images/students/<?php echo $row['photo'];?>"</td>
                <td class="text-center">
                  <a class="btn btn-sm btn-warning" href="editstudent.php?id=<?=base64_encode($row['id']); ?>"><i class="fa fa-pencil"></i> Edit </a>
                  <a class="btn btn-sm btn-danger" href="delete.php?id=<?=base64_encode($row['id']); ?>&photo=<?=$row['photo'];?>"><i class="fa fa-trash"></i> Delete </a>
                </td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php
  require_once 'footer.php';
?>
