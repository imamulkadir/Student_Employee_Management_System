<?php
  require_once 'header.php';
?>


<div class="col-sm-9">
  <div class="content">
    <h1 class="text-primary"><i class="fas fa-users"></i> All Users</h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fas fa-tachometer-alt"></i> Dashboard </li>
      <li class=""><i class="fas fa-users"></i> All Users </li>
    </ol>

    <div class="table-responsive">
      <table class="table table-bordered table-hover">
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
                <td><img width="100px" src="../images/users/<?php echo $row['photo'];?>"</td>
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
