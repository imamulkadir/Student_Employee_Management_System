<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPGPS</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body class="jumbotron">

    <div class="container">
      <div class="d-flex flex-row-reverse">
        <div class="p-2"><a href="login.php" class="btn btn-primary pull-right">Login</a></div>
        <div class="p-2"><a href="register.php" class="btn btn-primary pull-right">Register</a></div>
      </div>

      <h2 class="text-center">Kalika Prashad Government Primary School</h2>




      <div class="row">
        <div class="align-self-center">
          <form class="" action="showInfo.php" method="POST">
            <table class="table table-bordered">
              <tr>
                <td colspan="2" class="text-center">
                  <label for="">Student Information Portal</label>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="">Choose Class</label>
                </td>
                <td>
                  <select name="class" class="form-control" required>
                    <option value="">Choose Class</option>
                    <option value="Class One">Class One</option>
                    <option value="Class Two">Class Two</option>
                    <option value="Class Three">Class Three</option>
                    <option value="Class Four">Class Four</option>
                    <option value="Class Five">Class Five</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="">Roll No</label>
                </td>
                <td>
                  <input type="text" class="form-control" name="roll" value="" placeholder="Class Roll" pattern="[0-9]{3}" required>
                </td>
              </tr>
              <tr>
                <td colspan="2" class="text-center">
                  <input type="submit" class="btn btn-primary" name="show" value="Show Information">
                </td>
              </tr>
            </table>
          </form>
        </div>

      </div>

      <footer class="text-center fixed-bottom" style="background:#ddd; margin: 0; padding:10px;">
        <p>&copy; 2021-
          <?= date('Y') ?> All Rights Reserved. Imamul Kadir
        </p>
      </footer>
    </div>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
