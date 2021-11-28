<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPGPS</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

</head>
<body class="jumbotron">

    <div class="container">
      <a href="register.php" class="btn btn-primary pull-right">Register</a>
      <a href="login.php" class="btn btn-primary pull-right">Login</a>
      <h2 class="text-center">Kalika Prashad Government Primary School</h2>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <form class="" action="" method="post">
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
                  <select class="form-control" required>
                    <option value="">Choose</option>
                    <option value="">Class One</option>
                    <option value="">Class Two</option>
                    <option value="">Class Three</option>
                    <option value="">Class Four</option>
                    <option value="">Class Five</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="">Roll No</label>
                </td>
                <td>
                  <input type="text" class="form-control" name="" value="" placeholder="Class Roll" required>
                </td>
              </tr>
              <tr>
                <td colspan="2" class="text-center">
                  <input type="submit" class="btn btn-primary" name="" value="Show Information">
                </td>
              </tr>
            </table>
          </form>
        </div>

      </div>

      <footer>
        <p class="text-center fixed-bottom">&copy; 2021-
          <?= date('Y') ?> All Rights Reserved. Imamul Kadir
        </p>
      </footer>
    </div>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
