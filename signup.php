
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SignUp page</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <br><br>

  <!-- Start your project here-->
  <div class="container">
    <div class="row">
      <div class="col-3"></div>

      <div class="col-6">
        <!-- Default form register -->
<form class="text-center border border-light p-5" action="dosignup.php" method="POST">

    <p class="h4 mb-4">Sign up</p>

    <!-- Name -->
    <input type="text" name="name" id="defaultRegisterFormName" class="form-control" placeholder="Enter name">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
    </small>


    <!-- E-mail -->
    <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" name="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
    </small>

    <!-- Phone number -->
    <input type="text" name="mob" id="defaultRegisterPhonePassword" class="form-control" placeholder="Mobile number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
      </small>


    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Sign Up</button>

    <!-- Register -->
    <p>Already registered ?
        <a href="login.php">Login</a>
    </p>
</form>
<!-- Default form register -->

      </div>

      <div class="col-3"></div>
    </div>
  </div>

  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
</body>

</html>
