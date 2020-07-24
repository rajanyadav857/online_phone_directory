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


  <!-- Start your project here-->
  <div class="container">
    <div class="row">
      <div class="col-3" id="menu">

      </div>


      <div class="col-6">
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
      <th scope="col">Group Name</th>
      <th scope="col">Total members</th>
      <th scope="col">######</th>
    </tr>

    <?php

        $email=$_SESSION['email'];
        $query="SELECT group_name FROM `groups` WHERE `created_by` LIKE '$email' or created_by LIKE 'default'";
        $result = mysqli_query($con,$query);
        //echo "HElo";
        //print_r($result);


        $i=1;
        while($data =mysqli_fetch_assoc($result))
        {
            ?>

                <tr  class="set">
                  <th><?php echo $i; $i++;?></th>
                  <th><?php echo $data['group_name']; ?></th>
                    <?php
                    $group=$data['group_name'];
                      $query2="SELECT * FROM `contact` WHERE `inserted_by` LIKE '$email' AND `group` LIKE '$group';";
                      $result2 = mysqli_query($con,$query2);
                      $total_members=mysqli_num_rows($result2);

                     ?>





                  <th><?php echo $total_members ?></th>

                  <td class="del"><a href="deleteg.php?name=<?php

                  if($group=="school" || $group=="collge" ||$group=="friend" ||$group=="family")
                    echo "";
                  else
                   echo $group;?>

                   ">delete</a></td>
                </tr>


            <?php

        }
     ?>


</table>

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
