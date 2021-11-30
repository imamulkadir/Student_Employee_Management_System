<?php
  require_once'../dbcon.php';

  if(isset($_POST['update'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $photo = $_POST['photo'];

    unlink('../images/users/'.$photo);

    // $new_photo = $_FILES['new_photo']['name'];
    // $new_photo = explode('.',$_FILES['new_photo']['name']);
    $new_photo = end(explode('.',$_FILES['new_photo']['name']));
    $new_photo_name = $name.'.'.$new_photo;

    $update = mysqli_query($conn,"UPDATE `users` SET `photo` = '$new_photo_name' WHERE `id` = '$id'");

    if($update) {
      move_uploaded_file($_FILES['new_photo']['tmp_name'],'../images/users/'.$new_photo_name);
      header('location: userProfile.php');
    }
  }



?>
