<?php
  require_once 'header.php';
?>


<div class="col-sm-9">
  <div class="content">
    <h1 class="text-primary"><i class="fas fa-users"></i> All Users</h1>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a class="text-secondary" href="allusers.php"><i class="fas fa-pencil-square"></i> All Users Information </a></li>
      </ol>
    </nav>

    <div class="table-responsive">
      <table id="table_idd" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Joining Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $users = mysqli_query($conn,"SELECT * FROM `users`");
            while ($row = mysqli_fetch_assoc($users)) {
              ?>
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><img width="50px" src="../images/users/<?php echo $row['photo'];?>"</td>
                <td><?php echo date('d-M-Y',strtotime($row['date_time']));?></td>
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
