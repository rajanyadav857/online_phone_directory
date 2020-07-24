<?php
session_start();
if(!$_SESSION)
  header("location:login.php");

 ?>


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

  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
<a class="navbar-brand" href="index.php">Welcome :
  <?php
    //session_start();
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
<style>
  #menu{
    float:left;
  }
</style>


  <!-- Start your project here-->
  <div class="container">
    <div class="row">
      <div class="col-3" id="menu">

        <form class="text-center border border-light p-5" action="search.php" method="POST">

            <p class="h4 mb-4">Search</p>

            <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Enter name" name="name">
            <!-- Name -->
            <select class="browser-default custom-select mb-4" name="group">
              <option value="all" selected>All</option>
            <?php
                //session_start();
                //include("dbconnect.php");
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
            <!-- Send button -->
            <button class="btn btn-info btn-block" type="submit" name="submit">Search</button>

          </form>
        <!-- Default form contact -->

      </div>
      <div class="col-2"></div>

      <div class="col-7">
        <style>
        .head{
          background-color: #1565c0;
        }
        .set{
          background-color: #90caf9;
        }

        .set:hover{
          background-color: #42a5f5;
        }

        .del:hover{
          background-color: #f44336;
        }


        </style>
        <table class="table table-bordered">

    <tr class="head">
      <th scope="col">SNo</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Group</th>
      <th scope="col">######</th>
    </tr>

    <?php
    if(isset($_POST['submit']))
    {
        $email=$_SESSION['email'];
        $name=$_POST['name'];
        $group=$_POST['group'];
        //echo $group;
        if($group=='all')
        $query="SELECT * FROM `contact` WHERE `inserted_by` LIKE '$email' and name='$name';";
        else {
          $query="SELECT * FROM `contact` WHERE `inserted_by` LIKE '$email' AND `name` LIKE '$name' AND `group` LIKE '$group';";
        }
        $result = mysqli_query($con,$query);
        //echo "HElo";
        //print_r($result);
        $i=1;
        while($data =mysqli_fetch_assoc($result))
        {
            ?>

                <tr class="set">
                  <th><?php echo $i; $i++;?></th>
                  <th><?php echo $data['name']; ?></th>
                  <th><?php echo $data['mob']; ?></th>
                  <th><?php echo $data['group']; ?></th>
                  <td><a href="delete.php?name=<?php echo $data['name'];?>&mob=<?php echo $data['mob'];?>">delete</a></td>
                </tr>


            <?php

        }
      }
     ?>


</table>

      </div>


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
