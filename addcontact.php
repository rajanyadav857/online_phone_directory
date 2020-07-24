<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
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


  <!-- Start your project here-->
  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
<a class="navbar-brand" href="index.php">Welcome :
  <?php
    session_start();
    //print_r($_SESSION);
    echo $_SESSION['email'];
    include("dbconnect.php");
  ?>

</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
  aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="logout.php">
        <i class="fas fa-sign-in-alt"></i></i> Logout
        <span class="sr-only">(current)</span>
      </a>
    </li>

  </ul>
</div>
</nav>
<!--/.Navbar -->
<br><br>

  <div class="container">
    <div class="row">
      <div class="col-3">

        
      </div>

      <div class="col-6">
        <!-- Default form contact -->
<form class="text-center border border-light p-5" action="doaddcontact.php" method="POST">

    <p class="h4 mb-4">Add Contact</p>

    <!-- Name -->
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" name="name">

    <!-- Name -->
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Mobile No" name="mob">

    <select class="browser-default custom-select mb-4" name="group">
      <option value="" disabled  selected>Select Group</option>
    <?php
        session_start();
        include("dbconnect.php");
        $email=$_SESSION['email'];
        $query="SELECT * FROM `groups` WHERE `created_by`= '$email' or `created_by`= 'default' ;";
        $result = mysqli_query($con,$query);
        //echo "HElo";
        //print_r($result);
        $i=1;
        echo "HEllo";
        print_r($result);
        while($data =mysqli_fetch_assoc($result))
        {
            ?>

                <option value="<?php echo $data['group_name']; ?>"><?php echo $data['group_name']; ?></option>


            <?php   } ?>
            </select>


<!--

    <select class="browser-default custom-select mb-4" name="group">
        <option value="" disabled  selected>Select Group</option>
        <option value="friend">Friend</option>
        <option value="family">Family</option>
        <option value="school">School</option>
        <option value="college">College</option>
    </select>

-->


    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit" name="submit">Add</button>

</form>
<!-- Default form contact -->

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
